<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ResourceGroupType
 *
 * A ddex:Composite containing details of a ddex:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
 * XSD Type: ResourceGroup
 */
class ResourceGroupType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceGroup as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The number indicating the order of the ern:ResourceGroup within all ddex:ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ern:ResourceGroup occurring at a particular level. The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @var \DedexBundle\Entity\DdexC\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @var \DedexBundle\Entity\Ern341\ResourceGroupType[] $resourceGroup
     */
    private $resourceGroup = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @var \DedexBundle\Entity\Ern341\ResourceGroupContentItemType[] $resourceGroupContentItem
     */
    private $resourceGroupContentItem = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @var string[] $resourceGroupResourceReferenceList
     */
    private $resourceGroupResourceReferenceList = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroup. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string $resourceGroupReleaseReference
     */
    private $resourceGroupReleaseReference = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroup. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceGroup as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceGroup as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\DdexC\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
     *
     * @return \DedexBundle\Entity\DdexC\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
     *
     * @param \DedexBundle\Entity\DdexC\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ern:ResourceGroup within all ddex:ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ern:ResourceGroup occurring at a particular level. The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
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
     * The number indicating the order of the ern:ResourceGroup within all ddex:ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ern:ResourceGroup occurring at a particular level. The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\DdexC\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DedexBundle\Entity\DdexC\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DedexBundle\Entity\DdexC\ResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
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
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
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
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor = null)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DedexBundle\Entity\DdexC\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @return \DedexBundle\Entity\DdexC\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @param \DedexBundle\Entity\DdexC\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor = null)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Adds as resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\ResourceGroupType $resourceGroup
     */
    public function addToResourceGroup(\DedexBundle\Entity\Ern341\ResourceGroupType $resourceGroup)
    {
        $this->resourceGroup[] = $resourceGroup;
        return $this;
    }

    /**
     * isset resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
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
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
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
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @return \DedexBundle\Entity\Ern341\ResourceGroupType[]
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @param \DedexBundle\Entity\Ern341\ResourceGroupType[] $resourceGroup
     * @return self
     */
    public function setResourceGroup(array $resourceGroup = null)
    {
        $this->resourceGroup = $resourceGroup;
        return $this;
    }

    /**
     * Adds as resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\ResourceGroupContentItemType $resourceGroupContentItem
     */
    public function addToResourceGroupContentItem(\DedexBundle\Entity\Ern341\ResourceGroupContentItemType $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem[] = $resourceGroupContentItem;
        return $this;
    }

    /**
     * isset resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
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
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
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
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @return \DedexBundle\Entity\Ern341\ResourceGroupContentItemType[]
     */
    public function getResourceGroupContentItem()
    {
        return $this->resourceGroupContentItem;
    }

    /**
     * Sets a new resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param \DedexBundle\Entity\Ern341\ResourceGroupContentItemType[] $resourceGroupContentItem
     * @return self
     */
    public function setResourceGroupContentItem(array $resourceGroupContentItem = null)
    {
        $this->resourceGroupContentItem = $resourceGroupContentItem;
        return $this;
    }

    /**
     * Adds as resourceGroupResourceReference
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
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
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
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
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
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
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
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
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param string $resourceGroupResourceReferenceList
     * @return self
     */
    public function setResourceGroupResourceReferenceList(array $resourceGroupResourceReferenceList = null)
    {
        $this->resourceGroupResourceReferenceList = $resourceGroupResourceReferenceList;
        return $this;
    }

    /**
     * Gets as resourceGroupReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroup. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
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
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroup. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroup. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroup. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DedexBundle\Entity\DdexC\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }
}

