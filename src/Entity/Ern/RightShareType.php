<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing RightShareType
 *
 * A Composite containing details of a
 *  RightShare.
 * XSD Type: RightShare
 */
class RightShareType
{

    /**
     * The Language and script for the Elements of
     *  the RightShare as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of
     *  Identifiers for the RightShare.
     *
     * @var \DedexBundle\Entity\Ern\RightsAgreementIdType $rightShareId
     */
    private $rightShareId = null;

    /**
     * The Identifier (specific to the Message)
     *  of the RightShare within the Release which contains it. This is a
     *  LocalRightShareAnchor starting with the letter S.
     *
     * @var string $rightShareReference
     */
    private $rightShareReference = null;

    /**
     * A Composite containing details of one or
     *  more Creations contained in the RightShare.
     *
     * @var \DedexBundle\Entity\Ern\RightShareCreationReferenceListType $rightShareCreationReferenceList
     */
    private $rightShareCreationReferenceList = null;

    /**
     * A Territory to which the RightShare
     *  applies. Either this Element or ExcludedTerritory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the RightShare
     *  does not apply. Either this Element or Territory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Type of Right covered by the RightShare.
     *  One of the Elements RightsType and UseType must be present. The RightsType is
     *  defined according to the jurisdiction of the Territory indicated in the
     *  TerritoryCode XmlAttribute.
     *
     * @var \DedexBundle\Entity\Ern\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer. One of the Elements RightsType
     *  and UseType must be present.
     *
     * @var \DedexBundle\Entity\Ern\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @var \DedexBundle\Entity\Ern\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A Composite containing details of a
     *  distribution channel used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @var \DedexBundle\Entity\Ern\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A Composite containing details of a
     *  Carrier.
     *
     * @var \DedexBundle\Entity\Ern\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing details of the
     *  fundamental business model which applies (e.g. SubscriptionModel and
     *  PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the
     *  Service or Release.
     *
     * @var \DedexBundle\Entity\Ern\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A Type of the RightsClaim related to a
     *  MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * A Composite containing details of a
     *  RightsController of Rights in a Creation.
     *
     * @var \DedexBundle\Entity\Ern\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Composite containing details about the
     *  Period of Time for which the RightShare is valid.
     *
     * @var \DedexBundle\Entity\Ern\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The Flag indicating whether the
     *  RightSharePercentage is unknown (=true) or not (=false).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned
     *  by the RightsController. RightShare information is given as a xs:decimal value
     *  with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @var \DedexBundle\Entity\Ern\PercentageType $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of a
     *  Reference to a TextDocument containing details of a Tariff (in the form of an
     *  Identifier, Name or Description) that is to be applied to the
     *  RightShare.
     *
     * @var \DedexBundle\Entity\Ern\TariffReferenceType $tariffReference
     */
    private $tariffReference = null;

    /**
     * The legal status of a License for the
     *  RightShare.
     *
     * @var string $licenseStatus
     */
    private $licenseStatus = null;

    /**
     * The Flag indicating whether a
     *  RightsController retains the right of refusal regarding the granting of the first
     *  licence for creating a SoundRecording of a Musical Work (=true) or not
     *  (=false).
     *
     * @var bool $hasFirstLicenseRefusal
     */
    private $hasFirstLicenseRefusal = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the RightShare as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
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
     *  the RightShare as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
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
     * Gets as rightShareId
     *
     * A Composite containing details of
     *  Identifiers for the RightShare.
     *
     * @return \DedexBundle\Entity\Ern\RightsAgreementIdType
     */
    public function getRightShareId()
    {
        return $this->rightShareId;
    }

    /**
     * Sets a new rightShareId
     *
     * A Composite containing details of
     *  Identifiers for the RightShare.
     *
     * @param \DedexBundle\Entity\Ern\RightsAgreementIdType $rightShareId
     * @return self
     */
    public function setRightShareId(\DedexBundle\Entity\Ern\RightsAgreementIdType $rightShareId)
    {
        $this->rightShareId = $rightShareId;
        return $this;
    }

    /**
     * Gets as rightShareReference
     *
     * The Identifier (specific to the Message)
     *  of the RightShare within the Release which contains it. This is a
     *  LocalRightShareAnchor starting with the letter S.
     *
     * @return string
     */
    public function getRightShareReference()
    {
        return $this->rightShareReference;
    }

    /**
     * Sets a new rightShareReference
     *
     * The Identifier (specific to the Message)
     *  of the RightShare within the Release which contains it. This is a
     *  LocalRightShareAnchor starting with the letter S.
     *
     * @param string $rightShareReference
     * @return self
     */
    public function setRightShareReference($rightShareReference)
    {
        $this->rightShareReference = $rightShareReference;
        return $this;
    }

    /**
     * Gets as rightShareCreationReferenceList
     *
     * A Composite containing details of one or
     *  more Creations contained in the RightShare.
     *
     * @return \DedexBundle\Entity\Ern\RightShareCreationReferenceListType
     */
    public function getRightShareCreationReferenceList()
    {
        return $this->rightShareCreationReferenceList;
    }

    /**
     * Sets a new rightShareCreationReferenceList
     *
     * A Composite containing details of one or
     *  more Creations contained in the RightShare.
     *
     * @param \DedexBundle\Entity\Ern\RightShareCreationReferenceListType $rightShareCreationReferenceList
     * @return self
     */
    public function setRightShareCreationReferenceList(\DedexBundle\Entity\Ern\RightShareCreationReferenceListType $rightShareCreationReferenceList)
    {
        $this->rightShareCreationReferenceList = $rightShareCreationReferenceList;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory to which the RightShare
     *  applies. Either this Element or ExcludedTerritory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the RightShare
     *  applies. Either this Element or ExcludedTerritory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory to which the RightShare
     *  applies. Either this Element or ExcludedTerritory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory to which the RightShare
     *  applies. Either this Element or ExcludedTerritory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the RightShare
     *  applies. Either this Element or ExcludedTerritory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory to which the RightShare
     *  does not apply. Either this Element or Territory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the RightShare
     *  does not apply. Either this Element or Territory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A Territory to which the RightShare
     *  does not apply. Either this Element or Territory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A Territory to which the RightShare
     *  does not apply. Either this Element or Territory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the RightShare
     *  does not apply. Either this Element or Territory shall be present, but not
     *  both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Type of Right covered by the RightShare.
     *  One of the Elements RightsType and UseType must be present. The RightsType is
     *  defined according to the jurisdiction of the Territory indicated in the
     *  TerritoryCode XmlAttribute.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\RightsTypeType $rightsType
     */
    public function addToRightsType(\DedexBundle\Entity\Ern\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Type of Right covered by the RightShare.
     *  One of the Elements RightsType and UseType must be present. The RightsType is
     *  defined according to the jurisdiction of the Territory indicated in the
     *  TerritoryCode XmlAttribute.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsType($index)
    {
        return isset($this->rightsType[$index]);
    }

    /**
     * unset rightsType
     *
     * A Type of Right covered by the RightShare.
     *  One of the Elements RightsType and UseType must be present. The RightsType is
     *  defined according to the jurisdiction of the Territory indicated in the
     *  TerritoryCode XmlAttribute.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsType($index)
    {
        unset($this->rightsType[$index]);
    }

    /**
     * Gets as rightsType
     *
     * A Type of Right covered by the RightShare.
     *  One of the Elements RightsType and UseType must be present. The RightsType is
     *  defined according to the jurisdiction of the Territory indicated in the
     *  TerritoryCode XmlAttribute.
     *
     * @return \DedexBundle\Entity\Ern\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Type of Right covered by the RightShare.
     *  One of the Elements RightsType and UseType must be present. The RightsType is
     *  defined according to the jurisdiction of the Territory indicated in the
     *  TerritoryCode XmlAttribute.
     *
     * @param \DedexBundle\Entity\Ern\RightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer. One of the Elements RightsType
     *  and UseType must be present.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\UseTypeType $useType
     */
    public function addToUseType(\DedexBundle\Entity\Ern\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer. One of the Elements RightsType
     *  and UseType must be present.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseType($index)
    {
        return isset($this->useType[$index]);
    }

    /**
     * unset useType
     *
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer. One of the Elements RightsType
     *  and UseType must be present.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseType($index)
    {
        unset($this->useType[$index]);
    }

    /**
     * Gets as useType
     *
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer. One of the Elements RightsType
     *  and UseType must be present.
     *
     * @return \DedexBundle\Entity\Ern\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer. One of the Elements RightsType
     *  and UseType must be present.
     *
     * @param \DedexBundle\Entity\Ern\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DedexBundle\Entity\Ern\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserInterfaceType($index)
    {
        return isset($this->userInterfaceType[$index]);
    }

    /**
     * unset userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserInterfaceType($index)
    {
        unset($this->userInterfaceType[$index]);
    }

    /**
     * Gets as userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @return \DedexBundle\Entity\Ern\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @param \DedexBundle\Entity\Ern\UserInterfaceTypeType[] $userInterfaceType
     * @return self
     */
    public function setUserInterfaceType(array $userInterfaceType)
    {
        $this->userInterfaceType = $userInterfaceType;
        return $this;
    }

    /**
     * Adds as distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DedexBundle\Entity\Ern\DistributionChannelTypeType $distributionChannelType)
    {
        $this->distributionChannelType[] = $distributionChannelType;
        return $this;
    }

    /**
     * isset distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributionChannelType($index)
    {
        return isset($this->distributionChannelType[$index]);
    }

    /**
     * unset distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributionChannelType($index)
    {
        unset($this->distributionChannelType[$index]);
    }

    /**
     * Gets as distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @return \DedexBundle\Entity\Ern\DistributionChannelTypeType[]
     */
    public function getDistributionChannelType()
    {
        return $this->distributionChannelType;
    }

    /**
     * Sets a new distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @param \DedexBundle\Entity\Ern\DistributionChannelTypeType[] $distributionChannelType
     * @return self
     */
    public function setDistributionChannelType(array $distributionChannelType)
    {
        $this->distributionChannelType = $distributionChannelType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DedexBundle\Entity\Ern\CarrierTypeType $carrierType)
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
     * @return \DedexBundle\Entity\Ern\CarrierTypeType[]
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
     * @param \DedexBundle\Entity\Ern\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Adds as commercialModelType
     *
     * A Composite containing details of the
     *  fundamental business model which applies (e.g. SubscriptionModel and
     *  PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the
     *  Service or Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DedexBundle\Entity\Ern\CommercialModelTypeType $commercialModelType)
    {
        $this->commercialModelType[] = $commercialModelType;
        return $this;
    }

    /**
     * isset commercialModelType
     *
     * A Composite containing details of the
     *  fundamental business model which applies (e.g. SubscriptionModel and
     *  PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the
     *  Service or Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommercialModelType($index)
    {
        return isset($this->commercialModelType[$index]);
    }

    /**
     * unset commercialModelType
     *
     * A Composite containing details of the
     *  fundamental business model which applies (e.g. SubscriptionModel and
     *  PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the
     *  Service or Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommercialModelType($index)
    {
        unset($this->commercialModelType[$index]);
    }

    /**
     * Gets as commercialModelType
     *
     * A Composite containing details of the
     *  fundamental business model which applies (e.g. SubscriptionModel and
     *  PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the
     *  Service or Release.
     *
     * @return \DedexBundle\Entity\Ern\CommercialModelTypeType[]
     */
    public function getCommercialModelType()
    {
        return $this->commercialModelType;
    }

    /**
     * Sets a new commercialModelType
     *
     * A Composite containing details of the
     *  fundamental business model which applies (e.g. SubscriptionModel and
     *  PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the
     *  Service or Release.
     *
     * @param \DedexBundle\Entity\Ern\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Adds as musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a
     *  MusicalWork.
     *
     * @return self
     * @param string $musicalWorkRightsClaimType
     */
    public function addToMusicalWorkRightsClaimType($musicalWorkRightsClaimType)
    {
        $this->musicalWorkRightsClaimType[] = $musicalWorkRightsClaimType;
        return $this;
    }

    /**
     * isset musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a
     *  MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkRightsClaimType($index)
    {
        return isset($this->musicalWorkRightsClaimType[$index]);
    }

    /**
     * unset musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a
     *  MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkRightsClaimType($index)
    {
        unset($this->musicalWorkRightsClaimType[$index]);
    }

    /**
     * Gets as musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a
     *  MusicalWork.
     *
     * @return string[]
     */
    public function getMusicalWorkRightsClaimType()
    {
        return $this->musicalWorkRightsClaimType;
    }

    /**
     * Sets a new musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a
     *  MusicalWork.
     *
     * @param string $musicalWorkRightsClaimType
     * @return self
     */
    public function setMusicalWorkRightsClaimType(array $musicalWorkRightsClaimType)
    {
        $this->musicalWorkRightsClaimType = $musicalWorkRightsClaimType;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of a
     *  RightsController of Rights in a Creation.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\RightsControllerType $rightsController
     */
    public function addToRightsController(\DedexBundle\Entity\Ern\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of a
     *  RightsController of Rights in a Creation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsController($index)
    {
        return isset($this->rightsController[$index]);
    }

    /**
     * unset rightsController
     *
     * A Composite containing details of a
     *  RightsController of Rights in a Creation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsController($index)
    {
        unset($this->rightsController[$index]);
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of a
     *  RightsController of Rights in a Creation.
     *
     * @return \DedexBundle\Entity\Ern\RightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of a
     *  RightsController of Rights in a Creation.
     *
     * @param \DedexBundle\Entity\Ern\RightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the
     *  Period of Time for which the RightShare is valid.
     *
     * @return \DedexBundle\Entity\Ern\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the
     *  Period of Time for which the RightShare is valid.
     *
     * @param \DedexBundle\Entity\Ern\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\DedexBundle\Entity\Ern\PeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the
     *  RightSharePercentage is unknown (=true) or not (=false).
     *
     * @return bool
     */
    public function getRightShareUnknown()
    {
        return $this->rightShareUnknown;
    }

    /**
     * Sets a new rightShareUnknown
     *
     * The Flag indicating whether the
     *  RightSharePercentage is unknown (=true) or not (=false).
     *
     * @param bool $rightShareUnknown
     * @return self
     */
    public function setRightShareUnknown($rightShareUnknown)
    {
        $this->rightShareUnknown = $rightShareUnknown;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * The share of the licensed Rights owned
     *  by the RightsController. RightShare information is given as a xs:decimal value
     *  with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @return \DedexBundle\Entity\Ern\PercentageType
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned
     *  by the RightsController. RightShare information is given as a xs:decimal value
     *  with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @param \DedexBundle\Entity\Ern\PercentageType $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage(\DedexBundle\Entity\Ern\PercentageType $rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Gets as tariffReference
     *
     * A Composite containing details of a
     *  Reference to a TextDocument containing details of a Tariff (in the form of an
     *  Identifier, Name or Description) that is to be applied to the
     *  RightShare.
     *
     * @return \DedexBundle\Entity\Ern\TariffReferenceType
     */
    public function getTariffReference()
    {
        return $this->tariffReference;
    }

    /**
     * Sets a new tariffReference
     *
     * A Composite containing details of a
     *  Reference to a TextDocument containing details of a Tariff (in the form of an
     *  Identifier, Name or Description) that is to be applied to the
     *  RightShare.
     *
     * @param \DedexBundle\Entity\Ern\TariffReferenceType $tariffReference
     * @return self
     */
    public function setTariffReference(\DedexBundle\Entity\Ern\TariffReferenceType $tariffReference)
    {
        $this->tariffReference = $tariffReference;
        return $this;
    }

    /**
     * Gets as licenseStatus
     *
     * The legal status of a License for the
     *  RightShare.
     *
     * @return string
     */
    public function getLicenseStatus()
    {
        return $this->licenseStatus;
    }

    /**
     * Sets a new licenseStatus
     *
     * The legal status of a License for the
     *  RightShare.
     *
     * @param string $licenseStatus
     * @return self
     */
    public function setLicenseStatus($licenseStatus)
    {
        $this->licenseStatus = $licenseStatus;
        return $this;
    }

    /**
     * Gets as hasFirstLicenseRefusal
     *
     * The Flag indicating whether a
     *  RightsController retains the right of refusal regarding the granting of the first
     *  licence for creating a SoundRecording of a Musical Work (=true) or not
     *  (=false).
     *
     * @return bool
     */
    public function getHasFirstLicenseRefusal()
    {
        return $this->hasFirstLicenseRefusal;
    }

    /**
     * Sets a new hasFirstLicenseRefusal
     *
     * The Flag indicating whether a
     *  RightsController retains the right of refusal regarding the granting of the first
     *  licence for creating a SoundRecording of a Musical Work (=true) or not
     *  (=false).
     *
     * @param bool $hasFirstLicenseRefusal
     * @return self
     */
    public function setHasFirstLicenseRefusal($hasFirstLicenseRefusal)
    {
        $this->hasFirstLicenseRefusal = $hasFirstLicenseRefusal;
        return $this;
    }


}

