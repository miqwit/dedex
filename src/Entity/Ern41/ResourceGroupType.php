<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ResourceGroupType
 *
 * A Composite containing details of a ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual Carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
 * XSD Type: ResourceGroup
 */
class ResourceGroupType
{

    /**
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern41\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * The number indicating the logical order of the ResourceGroup within all ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ResourceGroup occurring at a particular level.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Flag indicating whether a display sequence exists (=true) or not (=false).
     *
     * @var bool $noDisplaySequence
     */
    private $noDisplaySequence = null;

    /**
     * A sequence Identifier used for display purposes, consisting of a string that corresponds to the SequenceNumber, e.g. 'Side B' corresponding to '2'.
     *
     * @var string $displaySequence
     */
    private $displaySequence = null;

    /**
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DedexBundle\Entity\Ern41\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * The Duration of the ResourceGroup, if it is a SoundRecording or Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Identifier (specific to the Message) of a Release which has the same content as the ResourceGroup. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string $resourceGroupReleaseReference
     */
    private $resourceGroupReleaseReference = null;

    /**
     * A Composite containing details of ReleaseIds of a Release which has the same content as the ResourceGroup. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern41\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual Carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @var \DedexBundle\Entity\Ern41\ResourceSubGroupType[] $resourceGroup
     */
    private $resourceGroup = [
        
    ];

    /**
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @var \DedexBundle\Entity\Ern41\ResourceGroupContentItemType[] $resourceGroupContentItem
     */
    private $resourceGroupContentItem = [
        
    ];

    /**
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example:cover art images associated with the ResourceGroup. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @var \DedexBundle\Entity\Ern41\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     */
    private $linkedReleaseResourceReference = [
        
    ];

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern41\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitleText($index)
    {
        return isset($this->displayTitleText[$index]);
    }

    /**
     * unset displayTitleText
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitleText($index)
    {
        unset($this->displayTitleText[$index]);
    }

    /**
     * Gets as displayTitleText
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return \DedexBundle\Entity\Ern41\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DedexBundle\Entity\Ern41\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(array $displayTitleText)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern41\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitle($index)
    {
        return isset($this->displayTitle[$index]);
    }

    /**
     * unset displayTitle
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitle($index)
    {
        unset($this->displayTitle[$index]);
    }

    /**
     * Gets as displayTitle
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DedexBundle\Entity\Ern41\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the ResourceGroup as the MessageSender suggests it should be shown to the Consumer. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern41\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(array $displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DedexBundle\Entity\Ern41\AdditionalTitleType $additionalTitle)
    {
        $this->additionalTitle[] = $additionalTitle;
        return $this;
    }

    /**
     * isset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTitle($index)
    {
        return isset($this->additionalTitle[$index]);
    }

    /**
     * unset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTitle($index)
    {
        unset($this->additionalTitle[$index]);
    }

    /**
     * Gets as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern41\AdditionalTitleType[]
     */
    public function getAdditionalTitle()
    {
        return $this->additionalTitle;
    }

    /**
     * Sets a new additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern41\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the logical order of the ResourceGroup within all ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ResourceGroup occurring at a particular level.
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
     * The number indicating the logical order of the ResourceGroup within all ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ResourceGroup occurring at a particular level.
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
     * Gets as noDisplaySequence
     *
     * A Flag indicating whether a display sequence exists (=true) or not (=false).
     *
     * @return bool
     */
    public function getNoDisplaySequence()
    {
        return $this->noDisplaySequence;
    }

    /**
     * Sets a new noDisplaySequence
     *
     * A Flag indicating whether a display sequence exists (=true) or not (=false).
     *
     * @param bool $noDisplaySequence
     * @return self
     */
    public function setNoDisplaySequence($noDisplaySequence)
    {
        $this->noDisplaySequence = $noDisplaySequence;
        return $this;
    }

    /**
     * Gets as displaySequence
     *
     * A sequence Identifier used for display purposes, consisting of a string that corresponds to the SequenceNumber, e.g. 'Side B' corresponding to '2'.
     *
     * @return string
     */
    public function getDisplaySequence()
    {
        return $this->displaySequence;
    }

    /**
     * Sets a new displaySequence
     *
     * A sequence Identifier used for display purposes, consisting of a string that corresponds to the SequenceNumber, e.g. 'Side B' corresponding to '2'.
     *
     * @param string $displaySequence
     * @return self
     */
    public function setDisplaySequence($displaySequence)
    {
        $this->displaySequence = $displaySequence;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern41\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern41\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern41\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DedexBundle\Entity\Ern41\CarrierTypeType $carrierType)
    {
        $this->carrierType[] = $carrierType;
        return $this;
    }

    /**
     * isset carrierType
     *
     * A Composite containing details of a Carrier.
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
     * A Composite containing details of a Carrier.
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
     * A Composite containing details of a Carrier.
     *
     * @return \DedexBundle\Entity\Ern41\CarrierTypeType[]
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @param \DedexBundle\Entity\Ern41\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the ResourceGroup, if it is a SoundRecording or Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the ResourceGroup, if it is a SoundRecording or Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as resourceGroupReleaseReference
     *
     * The Identifier (specific to the Message) of a Release which has the same content as the ResourceGroup. This is a LocalReleaseAnchorReference starting with the letter R.
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
     * The Identifier (specific to the Message) of a Release which has the same content as the ResourceGroup. This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Composite containing details of ReleaseIds of a Release which has the same content as the ResourceGroup. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern41\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds of a Release which has the same content as the ResourceGroup. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern41\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern41\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as resourceGroup
     *
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual Carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ResourceSubGroupType $resourceGroup
     */
    public function addToResourceGroup(\DedexBundle\Entity\Ern41\ResourceSubGroupType $resourceGroup)
    {
        $this->resourceGroup[] = $resourceGroup;
        return $this;
    }

    /**
     * isset resourceGroup
     *
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual Carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
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
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual Carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
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
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual Carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @return \DedexBundle\Entity\Ern41\ResourceSubGroupType[]
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual Carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @param \DedexBundle\Entity\Ern41\ResourceSubGroupType[] $resourceGroup
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
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ResourceGroupContentItemType $resourceGroupContentItem
     */
    public function addToResourceGroupContentItem(\DedexBundle\Entity\Ern41\ResourceGroupContentItemType $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem[] = $resourceGroupContentItem;
        return $this;
    }

    /**
     * isset resourceGroupContentItem
     *
     * A Composite containing details of a Resource contained in the ResourceGroup.
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
     * A Composite containing details of a Resource contained in the ResourceGroup.
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
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @return \DedexBundle\Entity\Ern41\ResourceGroupContentItemType[]
     */
    public function getResourceGroupContentItem()
    {
        return $this->resourceGroupContentItem;
    }

    /**
     * Sets a new resourceGroupContentItem
     *
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @param \DedexBundle\Entity\Ern41\ResourceGroupContentItemType[] $resourceGroupContentItem
     * @return self
     */
    public function setResourceGroupContentItem(array $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem = $resourceGroupContentItem;
        return $this;
    }

    /**
     * Adds as linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example:cover art images associated with the ResourceGroup. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference
     */
    public function addToLinkedReleaseResourceReference(\DedexBundle\Entity\Ern41\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference)
    {
        $this->linkedReleaseResourceReference[] = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * isset linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example:cover art images associated with the ResourceGroup. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedReleaseResourceReference($index)
    {
        return isset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * unset linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example:cover art images associated with the ResourceGroup. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedReleaseResourceReference($index)
    {
        unset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * Gets as linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example:cover art images associated with the ResourceGroup. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return \DedexBundle\Entity\Ern41\LinkedReleaseResourceReferenceType[]
     */
    public function getLinkedReleaseResourceReference()
    {
        return $this->linkedReleaseResourceReference;
    }

    /**
     * Sets a new linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example:cover art images associated with the ResourceGroup. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param \DedexBundle\Entity\Ern41\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     * @return self
     */
    public function setLinkedReleaseResourceReference(array $linkedReleaseResourceReference)
    {
        $this->linkedReleaseResourceReference = $linkedReleaseResourceReference;
        return $this;
    }


}

