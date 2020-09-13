<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing ResourceGroupType
 *
 * A Composite containing details of a
 *  ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources
 *  within a Release. Examples include individual carriers in a multi-carrier Release or
 *  classical Work groupings as well as the default order of Resources within a
 *  Release.
 * XSD Type: ResourceGroup
 */
class ResourceGroupType
{

    /**
     * The Language and script for the Elements of
     *  the ResourceGroup as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a Title
     *  of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a
     *  hierarchy, e.g., different Albums in a Set.
     *
     * @var \DedexBundle\Entity\Ern382\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The number indicating the order of the
     *  ResourceGroup within all ResourceGroups at this level. The default value is 1, and
     *  the value must be incremented by 1 for each ResourceGroup occurring at a
     *  particular level.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of the
     *  DisplayArtist for the ResourceGroup. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern382\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a
     *  DisplayConductor for the ResourceGroup. A DisplayConductor may be described
     *  through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern382\ArtistType[] $displayConductor
     */
    private $displayConductor = [
        
    ];

    /**
     * A Composite containing details of a
     *  DisplayComposer for the ResourceGroup. A DisplayComposer may be described through
     *  Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern382\ArtistType[] $displayComposer
     */
    private $displayComposer = [
        
    ];

    /**
     * A Composite containing details of a
     *  Contributor to this ResourceGroup. This includes roles such as the compiler of the
     *  ResourceGroup, and may summarize details of Contributors to individual
     *  SoundRecordings or other content.
     *
     * @var \DedexBundle\Entity\Ern382\DetailedResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A Composite containing details of an
     *  indirect Contributor to this ResourceGroup.
     *
     * @var \DedexBundle\Entity\Ern382\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A Composite containing details of a
     *  Carrier.
     *
     * @var \DedexBundle\Entity\Ern382\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A ResourceGroup contained within this
     *  ResourceGroup. ResourceGroups are used to signal groupings or sequences of
     *  Resources within a Release. Examples include individual carriers in a
     *  multi-carrier Release or classical Work groupings as well as the default order of
     *  Resources within a Release.
     *
     * @var \DedexBundle\Entity\Ern382\ResourceGroupType[] $resourceGroup
     */
    private $resourceGroup = [
        
    ];

    /**
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @var \DedexBundle\Entity\Ern382\ExtendedResourceGroupContentItemType[] $resourceGroupContentItem
     */
    private $resourceGroupContentItem = [
        
    ];

    /**
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @var string[] $resourceGroupResourceReferenceList
     */
    private $resourceGroupResourceReferenceList = null;

    /**
     * The Identifier (specific to the
     *  Message) of a Release which has the same content as the ResourceGroup. This is
     *  a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string $resourceGroupReleaseReference
     */
    private $resourceGroupReleaseReference = null;

    /**
     * A Composite containing details of
     *  ReleaseIds of a Release which has the same content as the ResourceGroup. If
     *  available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the
     *  Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern382\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ResourceGroup as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ResourceGroup as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title
     *  of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a
     *  hierarchy, e.g., different Albums in a Set.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern382\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title
     *  of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a
     *  hierarchy, e.g., different Albums in a Set.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title
     *  of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a
     *  hierarchy, e.g., different Albums in a Set.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title
     *  of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a
     *  hierarchy, e.g., different Albums in a Set.
     *
     * @return \DedexBundle\Entity\Ern382\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a
     *  hierarchy, e.g., different Albums in a Set.
     *
     * @param \DedexBundle\Entity\Ern382\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  ResourceGroup within all ResourceGroups at this level. The default value is 1, and
     *  the value must be incremented by 1 for each ResourceGroup occurring at a
     *  particular level.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the
     *  ResourceGroup within all ResourceGroups at this level. The default value is 1, and
     *  the value must be incremented by 1 for each ResourceGroup occurring at a
     *  particular level.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the ResourceGroup. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern382\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the ResourceGroup. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the ResourceGroup. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the ResourceGroup. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern382\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the ResourceGroup. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern382\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as displayConductor
     *
     * A Composite containing details of a
     *  DisplayConductor for the ResourceGroup. A DisplayConductor may be described
     *  through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ArtistType $displayConductor
     */
    public function addToDisplayConductor(\DedexBundle\Entity\Ern382\ArtistType $displayConductor)
    {
        $this->displayConductor[] = $displayConductor;
        return $this;
    }

    /**
     * isset displayConductor
     *
     * A Composite containing details of a
     *  DisplayConductor for the ResourceGroup. A DisplayConductor may be described
     *  through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayConductor($index)
    {
        return isset($this->displayConductor[$index]);
    }

    /**
     * unset displayConductor
     *
     * A Composite containing details of a
     *  DisplayConductor for the ResourceGroup. A DisplayConductor may be described
     *  through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayConductor($index)
    {
        unset($this->displayConductor[$index]);
    }

    /**
     * Gets as displayConductor
     *
     * A Composite containing details of a
     *  DisplayConductor for the ResourceGroup. A DisplayConductor may be described
     *  through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern382\ArtistType[]
     */
    public function getDisplayConductor()
    {
        return $this->displayConductor;
    }

    /**
     * Sets a new displayConductor
     *
     * A Composite containing details of a
     *  DisplayConductor for the ResourceGroup. A DisplayConductor may be described
     *  through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern382\ArtistType[] $displayConductor
     * @return self
     */
    public function setDisplayConductor(array $displayConductor)
    {
        $this->displayConductor = $displayConductor;
        return $this;
    }

    /**
     * Adds as displayComposer
     *
     * A Composite containing details of a
     *  DisplayComposer for the ResourceGroup. A DisplayComposer may be described through
     *  Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ArtistType $displayComposer
     */
    public function addToDisplayComposer(\DedexBundle\Entity\Ern382\ArtistType $displayComposer)
    {
        $this->displayComposer[] = $displayComposer;
        return $this;
    }

    /**
     * isset displayComposer
     *
     * A Composite containing details of a
     *  DisplayComposer for the ResourceGroup. A DisplayComposer may be described through
     *  Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayComposer($index)
    {
        return isset($this->displayComposer[$index]);
    }

    /**
     * unset displayComposer
     *
     * A Composite containing details of a
     *  DisplayComposer for the ResourceGroup. A DisplayComposer may be described through
     *  Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayComposer($index)
    {
        unset($this->displayComposer[$index]);
    }

    /**
     * Gets as displayComposer
     *
     * A Composite containing details of a
     *  DisplayComposer for the ResourceGroup. A DisplayComposer may be described through
     *  Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern382\ArtistType[]
     */
    public function getDisplayComposer()
    {
        return $this->displayComposer;
    }

    /**
     * Sets a new displayComposer
     *
     * A Composite containing details of a
     *  DisplayComposer for the ResourceGroup. A DisplayComposer may be described through
     *  Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern382\ArtistType[] $displayComposer
     * @return self
     */
    public function setDisplayComposer(array $displayComposer)
    {
        $this->displayComposer = $displayComposer;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to this ResourceGroup. This includes roles such as the compiler of the
     *  ResourceGroup, and may summarize details of Contributors to individual
     *  SoundRecordings or other content.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\DetailedResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DedexBundle\Entity\Ern382\DetailedResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to this ResourceGroup. This includes roles such as the compiler of the
     *  ResourceGroup, and may summarize details of Contributors to individual
     *  SoundRecordings or other content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributor($index)
    {
        return isset($this->resourceContributor[$index]);
    }

    /**
     * unset resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to this ResourceGroup. This includes roles such as the compiler of the
     *  ResourceGroup, and may summarize details of Contributors to individual
     *  SoundRecordings or other content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributor($index)
    {
        unset($this->resourceContributor[$index]);
    }

    /**
     * Gets as resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to this ResourceGroup. This includes roles such as the compiler of the
     *  ResourceGroup, and may summarize details of Contributors to individual
     *  SoundRecordings or other content.
     *
     * @return \DedexBundle\Entity\Ern382\DetailedResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to this ResourceGroup. This includes roles such as the compiler of the
     *  ResourceGroup, and may summarize details of Contributors to individual
     *  SoundRecordings or other content.
     *
     * @param \DedexBundle\Entity\Ern382\DetailedResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to this ResourceGroup.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DedexBundle\Entity\Ern382\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to this ResourceGroup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectResourceContributor($index)
    {
        return isset($this->indirectResourceContributor[$index]);
    }

    /**
     * unset indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to this ResourceGroup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectResourceContributor($index)
    {
        unset($this->indirectResourceContributor[$index]);
    }

    /**
     * Gets as indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to this ResourceGroup.
     *
     * @return \DedexBundle\Entity\Ern382\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to this ResourceGroup.
     *
     * @param \DedexBundle\Entity\Ern382\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DedexBundle\Entity\Ern382\CarrierTypeType $carrierType)
    {
        $this->carrierType[] = $carrierType;
        return $this;
    }

    /**
     * isset carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierType($index)
    {
        return isset($this->carrierType[$index]);
    }

    /**
     * unset carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierType($index)
    {
        unset($this->carrierType[$index]);
    }

    /**
     * Gets as carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @return \DedexBundle\Entity\Ern382\CarrierTypeType[]
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @param \DedexBundle\Entity\Ern382\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Adds as resourceGroup
     *
     * A ResourceGroup contained within this
     *  ResourceGroup. ResourceGroups are used to signal groupings or sequences of
     *  Resources within a Release. Examples include individual carriers in a
     *  multi-carrier Release or classical Work groupings as well as the default order of
     *  Resources within a Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ResourceGroupType $resourceGroup
     */
    public function addToResourceGroup(\DedexBundle\Entity\Ern382\ResourceGroupType $resourceGroup)
    {
        $this->resourceGroup[] = $resourceGroup;
        return $this;
    }

    /**
     * isset resourceGroup
     *
     * A ResourceGroup contained within this
     *  ResourceGroup. ResourceGroups are used to signal groupings or sequences of
     *  Resources within a Release. Examples include individual carriers in a
     *  multi-carrier Release or classical Work groupings as well as the default order of
     *  Resources within a Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroup($index)
    {
        return isset($this->resourceGroup[$index]);
    }

    /**
     * unset resourceGroup
     *
     * A ResourceGroup contained within this
     *  ResourceGroup. ResourceGroups are used to signal groupings or sequences of
     *  Resources within a Release. Examples include individual carriers in a
     *  multi-carrier Release or classical Work groupings as well as the default order of
     *  Resources within a Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroup($index)
    {
        unset($this->resourceGroup[$index]);
    }

    /**
     * Gets as resourceGroup
     *
     * A ResourceGroup contained within this
     *  ResourceGroup. ResourceGroups are used to signal groupings or sequences of
     *  Resources within a Release. Examples include individual carriers in a
     *  multi-carrier Release or classical Work groupings as well as the default order of
     *  Resources within a Release.
     *
     * @return \DedexBundle\Entity\Ern382\ResourceGroupType[]
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A ResourceGroup contained within this
     *  ResourceGroup. ResourceGroups are used to signal groupings or sequences of
     *  Resources within a Release. Examples include individual carriers in a
     *  multi-carrier Release or classical Work groupings as well as the default order of
     *  Resources within a Release.
     *
     * @param \DedexBundle\Entity\Ern382\ResourceGroupType[] $resourceGroup
     * @return self
     */
    public function setResourceGroup(array $resourceGroup)
    {
        $this->resourceGroup = $resourceGroup;
        return $this;
    }

    /**
     * Adds as resourceGroupContentItem
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ExtendedResourceGroupContentItemType $resourceGroupContentItem
     */
    public function addToResourceGroupContentItem(\DedexBundle\Entity\Ern382\ExtendedResourceGroupContentItemType $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem[] = $resourceGroupContentItem;
        return $this;
    }

    /**
     * isset resourceGroupContentItem
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroupContentItem($index)
    {
        return isset($this->resourceGroupContentItem[$index]);
    }

    /**
     * unset resourceGroupContentItem
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroupContentItem($index)
    {
        unset($this->resourceGroupContentItem[$index]);
    }

    /**
     * Gets as resourceGroupContentItem
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @return \DedexBundle\Entity\Ern382\ExtendedResourceGroupContentItemType[]
     */
    public function getResourceGroupContentItem()
    {
        return $this->resourceGroupContentItem;
    }

    /**
     * Sets a new resourceGroupContentItem
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @param \DedexBundle\Entity\Ern382\ExtendedResourceGroupContentItemType[] $resourceGroupContentItem
     * @return self
     */
    public function setResourceGroupContentItem(array $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem = $resourceGroupContentItem;
        return $this;
    }

    /**
     * Adds as resourceGroupResourceReference
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @return self
     * @param string $resourceGroupResourceReference
     */
    public function addToResourceGroupResourceReferenceList($resourceGroupResourceReference)
    {
        $this->resourceGroupResourceReferenceList[] = $resourceGroupResourceReference;
        return $this;
    }

    /**
     * isset resourceGroupResourceReferenceList
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroupResourceReferenceList($index)
    {
        return isset($this->resourceGroupResourceReferenceList[$index]);
    }

    /**
     * unset resourceGroupResourceReferenceList
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroupResourceReferenceList($index)
    {
        unset($this->resourceGroupResourceReferenceList[$index]);
    }

    /**
     * Gets as resourceGroupResourceReferenceList
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @return string[]
     */
    public function getResourceGroupResourceReferenceList()
    {
        return $this->resourceGroupResourceReferenceList;
    }

    /**
     * Sets a new resourceGroupResourceReferenceList
     *
     * A Composite containing details of a
     *  Resource contained in the ResourceGroup.
     *
     * @param string $resourceGroupResourceReferenceList
     * @return self
     */
    public function setResourceGroupResourceReferenceList(array $resourceGroupResourceReferenceList)
    {
        $this->resourceGroupResourceReferenceList = $resourceGroupResourceReferenceList;
        return $this;
    }

    /**
     * Gets as resourceGroupReleaseReference
     *
     * The Identifier (specific to the
     *  Message) of a Release which has the same content as the ResourceGroup. This is
     *  a LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string
     */
    public function getResourceGroupReleaseReference()
    {
        return $this->resourceGroupReleaseReference;
    }

    /**
     * Sets a new resourceGroupReleaseReference
     *
     * The Identifier (specific to the
     *  Message) of a Release which has the same content as the ResourceGroup. This is
     *  a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $resourceGroupReleaseReference
     * @return self
     */
    public function setResourceGroupReleaseReference($resourceGroupReleaseReference)
    {
        $this->resourceGroupReleaseReference = $resourceGroupReleaseReference;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of a Release which has the same content as the ResourceGroup. If
     *  available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the
     *  Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern382\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of a Release which has the same content as the ResourceGroup. If
     *  available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the
     *  Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern382\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern382\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }


}

