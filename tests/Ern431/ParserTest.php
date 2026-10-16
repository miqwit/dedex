<?php

namespace DedexBundle\Tests\Ern431;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Exception\XsdCompliantException;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase {

  /**
   * ERN 4.3.1 bug (fixed in 4.3.2): Brand/BrandId is typed as the empty
   * ProprietaryIdentifier type, so a BrandId can hold neither text nor a
   * @Namespace. A message that gives BrandId a value and a Namespace is
   * therefore rejected by the 4.3.1 XSD. This is the counterpart of
   * \DedexBundle\Tests\Ern432\ParserTest::testBrandIdHasValueAndNamespace.
   */
  public function testBrandIdWithValueAndNamespaceFailsXsdValidation() {
    $parser = new ErnParserController();
    $parser->setDisplayLog(false);
    $parser->setXsdValidation(true);
    try {
      $parser->parse("tests/Ern431/samples/invalid_brand_id.xml");
      $this->fail("Expected XsdCompliantException: BrandId cannot carry a value or @Namespace in ERN 4.3.1");
    } catch (XsdCompliantException $ex) {
      $this->assertStringContainsString("Element 'BrandId', attribute 'Namespace': The attribute 'Namespace' is not allowed", $ex->getMessage());
    }
  }

  /**
   * ERN 4.3.1: version detection, entity namespace and the 4.3.1-specific
   * elements (DisplayGenre, FormalTitle, GroupingTitle, Role/Value)
   */
  public function testSample030Ern431() {
    $xml_path = "tests/Ern431/samples/ern431_album.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse($xml_path);

    // ERN version is 431. It uses classes with namespace Ern431.
    $this->assertEquals("431", $parser_controller->getVersion());
    $this->assertEquals('DedexBundle\Entity\Ern431\NewReleaseMessage', get_class($ddex));

    $this->assertEquals("Test431", $ddex->getMessageHeader()->getMessageThreadId());
    $this->assertCount(2, $ddex->getResourceList()->getSoundRecording());
    $this->assertCount(1, $ddex->getResourceList()->getImage());
    $this->assertCount(2, $ddex->getReleaseList()->getTrackRelease());

    $release = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("Test Album ERN431", (string) $release->getDisplayTitleText()[0]);

    // Genre is renamed DisplayGenre in 4.3.1
    $this->assertCount(1, $release->getDisplayGenre());
    $this->assertEquals("Pop", (string) $release->getDisplayGenre()[0]->getGenreText());
    $this->assertFalse(method_exists($release, "getGenre"));
    $this->assertFalse(method_exists($release, "getAdditionalTitle"));
    $this->assertEquals("2024", $release->getPLine()[0]->getYear());
    $this->assertEquals("NotExplicit", (string) $release->getParentalWarningType()[0]);
  }

  /**
   * ERN 4.3.1 real-world single: Role is a composite (Role/Value)
   */
  public function testSample031Ern431RealWorldSingle() {
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse("tests/Ern431/samples/ern431_real_world_single.xml");

    $this->assertEquals('DedexBundle\Entity\Ern431\NewReleaseMessage', get_class($ddex));
    $sr = $ddex->getResourceList()->getSoundRecording()[0];
    $role = $sr->getContributor()[0]->getRole()[0];
    $this->assertInstanceOf('DedexBundle\Entity\Ern431\ContributorRoleType', $role);
    $this->assertEquals("Composer", (string) $role->getValue());
  }

  /**
   * ERN 4.3.1 classical: FormalTitle replaces AdditionalTitle[@TitleType=FormalTitle]
   */
  public function testSample032Ern431Classical() {
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse("tests/Ern431/samples/ern431_classical.xml");

    $sr = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertCount(1, $sr->getFormalTitle());
    $this->assertStringContainsString("La Primavera", (string) $sr->getFormalTitle()[0]->getTitleText());
    $this->assertNotEmpty($sr->getContributor());
  }

  /**
   * ERN 4.3.1 new optional elements: Brand, ContainsAI, AiContribution,
   * SpecialContributor, SpecialDisplayArtist, Role/InstrumentType,
   * FormalTitle, GroupingTitle, optional ParentalWarningType.
   */
  public function testSample033Ern431NewFeatures() {
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse("tests/Ern431/samples/ern431_new_features.xml");

    // MessageHeader: SentAsRequestedBy
    $this->assertEquals("Test Requester", (string) $ddex->getMessageHeader()->getSentAsRequestedBy()->getPartyName()->getFullName());

    // Brand
    $brands = $ddex->getPartyList()->getBrand();
    $this->assertCount(1, $brands);
    $this->assertEquals("PBrand1", $brands[0]->getBrandReference());
    $this->assertEquals("Test Brand", (string) $brands[0]->getBrandName()[0]->getFullName());

    // ChapterList / ChapterId
    $chapters = $ddex->getChapterList()->getChapter();
    $this->assertCount(1, $chapters);
    $this->assertEquals("X1", $chapters[0]->getChapterReference());
    $this->assertEquals("TEST00000001", $chapters[0]->getChapterId()[0]->getISRC());

    // Release titles
    $release = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("Test Album ERN431 (Formal)", (string) $release->getFormalTitle()[0]->getTitleText());
    $this->assertEquals("Test Grouping", (string) $release->getGroupingTitle()[0]->getTitleText());
    // Special display artist
    $this->assertCount(2, $release->getDisplayArtist());
    $this->assertEquals("VariousArtists", (string) $release->getDisplayArtist()[1]->getSpecialDisplayArtist());
    // ParentalWarningType is optional in 4.3.1
    $this->assertEmpty($release->getParentalWarningType());
    // Release-level ContainsAI
    $this->assertEquals("Partly", (string) $release->getContainsAI());
    // AdministratingRecordCompany
    $admin = $release->getAdministratingRecordCompany()[0];
    $this->assertEquals("PLabel1", $admin->getRecordCompanyPartyReference());
    $this->assertEquals("RightsAdministrator", (string) $admin->getRole());
    // PLine/CLine now carry ApplicableTerritoryCode/IsDefault
    $this->assertEquals("Worldwide", (string) $release->getPLine()[0]->getApplicableTerritoryCode());
    $this->assertEquals("true", $release->getCLine()[0]->getIsDefault());
    // SubGenreCategory/Description on DisplayGenre
    $subGenre = $release->getDisplayGenre()[0]->getSubGenreCategory()[0];
    $this->assertEquals("BoogieWoogie", (string) $subGenre->getValue()[0]);
    $this->assertEquals("Test sub-genre description", (string) $subGenre->getDescription()[0]);

    // Deal: RightsClaimPolicy / RightsClaimPolicyReason, PriceInformation
    $dealTerms = $ddex->getDealList()->getReleaseDeal()[0]->getDeal()[0]->getDealTerms();
    $policy = $dealTerms->getRightsClaimPolicy()[0];
    $this->assertEquals("Monetize", (string) $policy->getRightsClaimPolicyType());
    $this->assertEquals("PreReleaseTime", (string) $policy->getRightsClaimPolicyReason());
    $this->assertEquals("9.99", $dealTerms->getPriceInformation()[0]->getSuggestedRetailPrice()->value());

    // Sound recording: AI flag, contributors, parental warning with standard,
    // DisplayCredits, IsInOriginalLanguage, EditionContributor
    $sr = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertEquals("Partly", (string) $sr->getContainsAI());
    $this->assertEquals("RiaaPal", (string) $sr->getParentalWarningType()[0]->getParentalWarningStandard());
    $this->assertEquals("true", $sr->getDisplayArtistName()[0]->getIsInOriginalLanguage());
    $this->assertEquals("Test Artist", $sr->getDisplayArtist()[0]->getDisplayCredits()[0]->getDisplayCreditText());
    $editionContributor = $sr->getSoundRecordingEdition()[0]->getEditionContributor()[0];
    $this->assertEquals("GenerativeAI", (string) $editionContributor->getSpecialContributor());
    $this->assertEquals("All", (string) $editionContributor->getAiContribution());
    $c1 = $sr->getContributor()[0];
    $this->assertEquals("AssociatedPerformer", (string) $c1->getRole()[0]->getValue());
    $this->assertEquals("Guitar", (string) $c1->getRole()[0]->getInstrumentType()[0]);
    $this->assertEquals("None", (string) $c1->getAiContribution());
    $c2 = $sr->getContributor()[1];
    $this->assertEquals("Traditional", (string) $c2->getSpecialContributor());
    $this->assertEmpty($ddex->getResourceList()->getSoundRecording()[1]->getParentalWarningType());

    // Image: FormalTitle/GroupingTitle, ContainsAI, ParentalWarningStandard,
    // FirstPublicationDate (FulfillmentDate composite)
    $image = $ddex->getResourceList()->getImage()[0];
    $this->assertEquals("Test Album ERN431 Cover (Formal)", (string) $image->getFormalTitle()[0]->getTitleText());
    $this->assertEquals("Test Cover Grouping", (string) $image->getGroupingTitle()[0]->getTitleText());
    $this->assertEquals("None", (string) $image->getContainsAI());
    $this->assertEquals("RiaaPal", (string) $image->getParentalWarningType()[0]->getParentalWarningStandard());
    $firstPublication = $image->getFirstPublicationDate()[0];
    $this->assertEquals("2024-01-15", (string) $firstPublication->getFulfillmentDate());
    $this->assertEquals("R0", (string) $firstPublication->getResourceReleaseReference()[0]);
  }

}
