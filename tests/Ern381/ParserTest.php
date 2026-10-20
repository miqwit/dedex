<?php

namespace DedexBundle\Tests\Ern381;

use DateTime;
use DedexBundle\Controller\ErnParserController;
use DedexBundle\Exception\XsdCompliantException;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase {

  /**
   * Parse a sample with XSD validation and return the message.
   *
   * @param string $file sample file name in tests/Ern381/samples
   * @return \DedexBundle\Entity\Ern381\NewReleaseMessage|\DedexBundle\Entity\Ern381\PurgeReleaseMessage
   */
  private function parse(string $file) {
    $parser = new ErnParserController();
    $parser->setDisplayLog(false);
    $parser->setXsdValidation(true);
    $ddex = $parser->parse("tests/Ern381/samples/$file");
    $this->assertEquals("381", $parser->getVersion());
    return $ddex;
  }

  /**
   * ERN 3.8.1: version detection and entity namespace.
   */
  public function testVersionDetection() {
    $ddex = $this->parse("ern381_audio_album.xml");

    $this->assertEquals('DedexBundle\Entity\Ern381\NewReleaseMessage', get_class($ddex));
    $this->assertEquals("ern/381", $ddex->getMessageSchemaVersionId());
    $this->assertEquals("R381-0001", $ddex->getMessageHeader()->getMessageThreadId());
    $this->assertEquals("2017-03-01T10:15:00+01:00", $ddex->getMessageHeader()->getMessageCreatedDateTime()->format(DATE_ATOM));
  }

  /**
   * The full message is parsed in the Ern381 entities: resources, releases
   * and deals.
   */
  public function testAudioAlbum() {
    $ddex = $this->parse("ern381_audio_album.xml");

    // Resources
    $srs = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(3, $srs);
    $this->assertInstanceOf('DedexBundle\Entity\Ern381\SoundRecordingType', $srs[0]);
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
   * ERN 3.8.1 adds date-times (with a time of day and a timezone) for the
   * display and preview start dates of a deal, as an alternative to the
   * plain ReleaseDisplayStartDate, TrackListingPreviewStartDate,
   * CoverArtPreviewStartDate and ClipPreviewStartDate.
   */
  public function testDealDisplayAndPreviewStartDateTimes() {
    $ddex = $this->parse("ern381_audio_album.xml");

    $terms = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[0]->getDealTerms();

    $this->assertInstanceOf(DateTime::class, $terms->getReleaseDisplayStartDateTime());
    $this->assertEquals("2017-03-10T00:00:00+01:00", $terms->getReleaseDisplayStartDateTime()->format(DATE_ATOM));
    $this->assertEquals("2017-03-03T09:00:00+00:00", $terms->getTrackListingPreviewStartDateTime()->format(DATE_ATOM));
    $this->assertEquals("2017-03-03T09:00:00+00:00", $terms->getCoverArtPreviewStartDateTime()->format(DATE_ATOM));
    $this->assertEquals("2017-03-06T18:30:00-05:00", $terms->getClipPreviewStartDateTime()->format(DATE_ATOM));

    // The plain dates are the other branch of the XSD choice: not set
    $this->assertNull($terms->getReleaseDisplayStartDate());
    $this->assertNull($terms->getTrackListingPreviewStartDate());
  }

  /**
   * ERN 3.8.1 adds PreOrderPreviewDateTime, as an alternative to the plain
   * PreOrderPreviewDate.
   */
  public function testPreOrderPreviewDateTime() {
    $ddex = $this->parse("ern381_audio_album.xml");

    $preOrderTerms = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[1]->getDealTerms();

    $this->assertEquals("true", $preOrderTerms->getIsPreOrderDeal());
    $this->assertEquals("2017-03-10", $preOrderTerms->getPreOrderReleaseDate()->value());
    $this->assertInstanceOf(DateTime::class, $preOrderTerms->getPreOrderPreviewDateTime());
    $this->assertEquals("2017-02-01T00:00:00+00:00", $preOrderTerms->getPreOrderPreviewDateTime()->format(DATE_ATOM));
    $this->assertNull($preOrderTerms->getPreOrderPreviewDate());
  }

  /**
   * In ERN 3.8.1 a RightsClaimPolicy has exactly one Condition (an object,
   * not a list as in 3.8.2), and a Condition has no ReferenceCreation.
   */
  public function testRightsClaimPolicyHasOneConditionWithoutReferenceCreation() {
    $ddex = $this->parse("ern381_audio_album.xml");

    $policies = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[0]->getDealTerms()->getRightsClaimPolicy();
    $this->assertCount(1, $policies);
    $this->assertEquals("Monetize", $policies[0]->getRightsClaimPolicyType());

    $condition = $policies[0]->getCondition();
    $this->assertInstanceOf('DedexBundle\Entity\Ern381\ConditionType', $condition);
    $this->assertEquals("30", $condition->getValue());
    $this->assertEquals("Second", $condition->getUnit());
    $this->assertEquals("MoreThanOrEqualTo", $condition->getRelationalRelator());

    $this->assertFalse(method_exists($condition, 'getReferenceCreation'), "ReferenceCreation was added in 3.8.2");
  }

  /**
   * Condition/ReferenceCreation does not exist in ERN 3.8.1 (added in
   * 3.8.2): the 3.8.1 XSD rejects it.
   */
  public function testReferenceCreationIsRejectedByXsd() {
    $this->expectException(XsdCompliantException::class);
    $this->expectExceptionMessage("Element 'ReferenceCreation': This element is not expected");

    $this->parse("ern381_reference_creation.xml");
  }

  /**
   * Without XSD validation, the parser can't place ReferenceCreation in the
   * 3.8.1 entities either.
   */
  public function testReferenceCreationCantBeParsed() {
    $parser = new ErnParserController();

    $this->expectExceptionMessage("No functions found for this tag: ReferenceCreation");

    $parser->parse("tests/Ern381/samples/ern381_reference_creation.xml");
  }

  /**
   * ERN 3.8.1 allows exactly one Condition per RightsClaimPolicy (several
   * are allowed since 3.8.2): the 3.8.1 XSD rejects a second one.
   */
  public function testTwoConditionsAreRejectedByXsd() {
    $this->expectException(XsdCompliantException::class);
    $this->expectExceptionMessage("Element 'Condition': This element is not expected");

    $this->parse("ern381_two_conditions.xml");
  }

  /**
   * Without XSD validation, the 3.8.1 entity can only hold one Condition:
   * the last one is kept.
   */
  public function testTwoConditionsWithoutXsdValidationKeepTheLast() {
    $parser = new ErnParserController();
    $ddex = $parser->parse("tests/Ern381/samples/ern381_two_conditions.xml");

    $condition = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[0]->getDealTerms()->getRightsClaimPolicy()[0]->getCondition();
    $this->assertInstanceOf('DedexBundle\Entity\Ern381\ConditionType', $condition);
    $this->assertEquals("50", $condition->getValue());
    $this->assertEquals("Percent", $condition->getUnit());
  }

  /**
   * PurgeReleaseMessage exists in 3.8.1 too.
   */
  public function testPurgeReleaseMessage() {
    $ddex = $this->parse("ern381_purged_release.xml");

    $this->assertEquals('DedexBundle\Entity\Ern381\PurgeReleaseMessage', get_class($ddex));
    $this->assertEquals("3610159000010", $ddex->getPurgedRelease()->getReleaseId()->getICPN()->value());
    $this->assertEquals("Northern Lights", $ddex->getPurgedRelease()->getTitle()[0]->getTitleText());
  }

}
