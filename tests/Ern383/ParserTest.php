<?php

namespace DedexBundle\Tests\Ern383;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Exception\XsdCompliantException;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase {

  /**
   * Parse a sample with XSD validation and return the message.
   *
   * @param string $file sample file name in tests/Ern383/samples
   * @return \DedexBundle\Entity\Ern383\NewReleaseMessage|\DedexBundle\Entity\Ern383\PurgeReleaseMessage
   */
  private function parse(string $file) {
    $parser = new ErnParserController();
    $parser->setDisplayLog(false);
    $parser->setXsdValidation(true);
    $ddex = $parser->parse("tests/Ern383/samples/$file");
    $this->assertEquals("383", $parser->getVersion());
    return $ddex;
  }

  /**
   * ERN 3.8.3: version detection and entity namespace.
   */
  public function testVersionDetection() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $this->assertEquals('DedexBundle\Entity\Ern383\NewReleaseMessage', get_class($ddex));
    $this->assertEquals("ern/383", $ddex->getMessageSchemaVersionId());
    $this->assertEquals("R383-0001", $ddex->getMessageHeader()->getMessageThreadId());
    $this->assertEquals("2017-03-01T10:15:00+01:00", $ddex->getMessageHeader()->getMessageCreatedDateTime()->format(DATE_ATOM));
  }

  /**
   * The full message is parsed in the Ern383 entities: resources, releases
   * and deals.
   */
  public function testAudioAlbum() {
    $ddex = $this->parse("ern383_audio_album.xml");

    // Resources
    $srs = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(3, $srs);
    $this->assertInstanceOf('DedexBundle\Entity\Ern383\SoundRecordingType', $srs[0]);
    $this->assertEquals("FRX811700001", $srs[0]->getSoundRecordingId()[0]->getISRC());
    $this->assertEquals("Aurora", $srs[0]->getReferenceTitle()->getTitleText());
    $this->assertEquals("PT4M12S", $srs[0]->getDuration()->format("PT%iM%sS"));

    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(1, $images);
    $this->assertEquals("FrontCoverImage", $images[0]->getImageType()->value());

    // Releases: the album and 3 track releases
    $releases = $ddex->getReleaseList()->getRelease();
    $this->assertCount(4, $releases);
    $this->assertEquals("true", $releases[0]->getIsMainRelease());
    $this->assertEquals("3610159000010", $releases[0]->getReleaseId()[0]->getICPN()->value());
    $this->assertEquals("Album", $releases[0]->getReleaseType()[0]->value());
    $this->assertEquals("TrackRelease", $releases[1]->getReleaseType()[0]->value());

    // Deals: one per release
    $this->assertCount(4, $ddex->getDealList()->getReleaseDeal());
  }

  /**
   * ERN 3.8.3 widens Artist/Nationality to AllTerritoryCode, which adds the
   * historical ISO 3166-3 codes (here YUCS, Yugoslavia). In 3.8.2 a
   * nationality is a plain string; in 3.8.3 it is an AllTerritoryCodeType.
   */
  public function testArtistHistoricalNationality() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $artist = $ddex->getReleaseList()->getRelease()[0]->getReleaseDetailsByTerritory()[0]->getDisplayArtist()[0];
    $nationalities = $artist->getNationality();
    $this->assertCount(1, $nationalities);
    $this->assertInstanceOf('DedexBundle\Entity\Ern383\AllTerritoryCodeType', $nationalities[0]);
    $this->assertEquals("YUCS", $nationalities[0]->value());
  }

  /**
   * DetailedResourceContributor/Nationality and /Citizenship are widened to
   * AllTerritoryCode too (here SUHH, USSR, and DDDE, East Germany).
   */
  public function testContributorHistoricalNationalityAndCitizenship() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $contributor = $ddex->getResourceList()->getSoundRecording()[0]->getSoundRecordingDetailsByTerritory()[0]->getResourceContributor()[0];
    $this->assertEquals("Lena Varga", $contributor->getPartyName()[0]->getFullName());
    $this->assertInstanceOf('DedexBundle\Entity\Ern383\AllTerritoryCodeType', $contributor->getNationality()[0]);
    $this->assertEquals("SUHH", $contributor->getNationality()[0]->value());
    $this->assertInstanceOf('DedexBundle\Entity\Ern383\AllTerritoryCodeType', $contributor->getCitizenship());
    $this->assertEquals("DDDE", $contributor->getCitizenship()->value());
  }

  /**
   * ERN 3.8.3 types EventDate/@TerritoryCode as an AllTerritoryCode (it is
   * untyped in 3.8.2).
   */
  public function testDateTerritoryCode() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $date = $ddex->getReleaseList()->getRelease()[0]->getReleaseDetailsByTerritory()[0]->getOriginalReleaseDate();
    $this->assertEquals("2017-03-10", $date->value());
    $this->assertEquals("DE", $date->getTerritoryCode());
  }

  /**
   * Two-letter codes like YU are not territory codes, even for historical
   * territories: the 3.8.3 XSD rejects them on a date.
   */
  public function testDateTerritoryCodeNotInAvsIsRejectedByXsd() {
    $this->expectException(XsdCompliantException::class);
    $this->expectExceptionMessage("Element 'OriginalReleaseDate', attribute 'TerritoryCode': [facet 'enumeration'] The value 'YU' is not an element of the set");

    $this->parse("ern383_date_territory_not_in_avs.xml");
  }

  /**
   * DealTerms/TerritoryCode is not widened: it stays a CurrentTerritoryCode.
   */
  public function testDealTerritoryCodeStaysCurrent() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $territories = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[0]->getDealTerms()->getTerritoryCode();
    $this->assertInstanceOf('DedexBundle\Entity\Ern383\CurrentTerritoryCodeType', $territories[0]);
    $this->assertEquals("FR", $territories[0]->value());
  }

  /**
   * A validity period with date-times creates Ern383 EventDateTimeType
   * objects, whose constructor requires a DateTime (see #60).
   */
  public function testValidityPeriodWithDateTimes() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $period = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[1]->getDealTerms()->getValidityPeriod()[0];
    $this->assertInstanceOf('DedexBundle\Entity\Ern383\EventDateTimeType', $period->getStartDateTime());
    $this->assertEquals("2017-02-01T00:00:00+01:00", $period->getStartDateTime()->value()->format(DATE_ATOM));
    $this->assertEquals("2017-03-09T23:59:59+01:00", $period->getEndDateTime()->value()->format(DATE_ATOM));
    $this->assertNull($period->getStartDate());
  }

  /**
   * The 3.8.1 deal date-times are still there in 3.8.3.
   */
  public function testDealDisplayAndPreviewStartDateTimes() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $terms = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[0]->getDealTerms();
    $this->assertEquals("2017-03-10T00:00:00+01:00", $terms->getReleaseDisplayStartDateTime()->format(DATE_ATOM));
    $this->assertEquals("2017-03-06T18:30:00-05:00", $terms->getClipPreviewStartDateTime()->format(DATE_ATOM));
  }

  /**
   * The 3.8.2 RightsClaimPolicy changes are still there in 3.8.3: several
   * Conditions, with a ReferenceCreation.
   */
  public function testRightsClaimPolicyConditionsWithReferenceCreation() {
    $ddex = $this->parse("ern383_audio_album.xml");

    $policies = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[0]->getDealTerms()->getRightsClaimPolicy();
    $this->assertCount(1, $policies);
    $conditions = $policies[0]->getCondition();
    $this->assertCount(2, $conditions);
    $this->assertEquals("30", $conditions[0]->getValue());
    $this->assertEquals("ReferenceResource", $conditions[0]->getReferenceCreation());
    $this->assertEquals("50", $conditions[1]->getValue());
    $this->assertEquals("ConsumerResource", $conditions[1]->getReferenceCreation());
  }

  /**
   * avs_20200108 adds the AudioDramaRelease release type.
   */
  public function testAudioDramaReleaseType() {
    $ddex = $this->parse("ern383_audio_drama_release.xml");

    $this->assertEquals("AudioDramaRelease", $ddex->getReleaseList()->getRelease()[0]->getReleaseType()[0]->value());
  }

  /**
   * PurgeReleaseMessage exists in 3.8.3 too.
   */
  public function testPurgeReleaseMessage() {
    $ddex = $this->parse("ern383_purged_release.xml");

    $this->assertEquals('DedexBundle\Entity\Ern383\PurgeReleaseMessage', get_class($ddex));
    $this->assertEquals("3610159000010", $ddex->getPurgedRelease()->getReleaseId()->getICPN()->value());
    $this->assertEquals("Northern Lights", $ddex->getPurgedRelease()->getTitle()[0]->getTitleText());
  }

}
