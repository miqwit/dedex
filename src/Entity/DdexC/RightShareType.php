<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing RightShareType
 *
 * A ddex:Composite containing details of a ddex:RightShare.
 * XSD Type: RightShare
 */
class RightShareType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:RightShare as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers for the ddexC:RightShare.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightShareId
     */
    private $rightShareId = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:RightShare within the ddex:Release which contains it. This is a ddex:LocalRightShareAnchor starting with the letter S.
     *
     * @var string $rightShareReference
     */
    private $rightShareReference = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Creations contained in the ddexC:RightShare.
     *
     * @var \DedexBundle\Entity\DdexC\RightShareCreationReferenceListType $rightShareCreationReferenceList
     */
    private $rightShareCreationReferenceList = null;

    /**
     * A ddex:Territory to which the ddexC:RightShare applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddexC:RightShare does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Type of ddex:Right covered by the ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be present. The RightsType is defined according to the jurisdiction of the ddex:Territory indicated in the iso3166a2:TerritoryCode ddex:XmlAttribute.
     *
     * @var \DedexBundle\Entity\DdexC\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of the ddex:Elements RightsType and ddex:UseType must be present.
     *
     * @var \DedexBundle\Entity\DdexC\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @var \DedexBundle\Entity\DdexC\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @var \DedexBundle\Entity\DdexC\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A ddex:Composite containing details of the fundamental business model which applies (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:RightsController of Rights in a ddex:Creation.
     *
     * @var \DedexBundle\Entity\DdexC\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A ddex:Composite containing details about the ddex:Period of ddex:Time for which the ddexC:RightShare is valid.
     *
     * @var \DedexBundle\Entity\DdexC\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The ddex:Flag indicating whether the ddex:RightSharePercentage is unknown (=True) or not (=False).
     *
     * @var bool $percentageUnknown
     */
    private $percentageUnknown = null;

    /**
     * The share of the licensed Rights owned by the ddex:RightsController. ddexC:RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8' represents 12.5%).
     *
     * @var string $percentageRate
     */
    private $percentageRate = null;

    /**
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) that is to be applied to the ddexC:RightShare.
     *
     * @var \DedexBundle\Entity\DdexC\TariffReferenceType $tariffReference
     */
    private $tariffReference = null;

    /**
     * The legal status of a ddex:License for the ddexC:RightShare.
     *
     * @var string $licenseStatus
     */
    private $licenseStatus = null;

    /**
     * The ddex:Flag indicating whether a ddex:RightsController retains the right of refusal regarding the granting of the first licence for creating a ddex:SoundRecording of a Musical ddex:Work (=True) or not (=False).
     *
     * @var bool $hasFirstLicenseRefusal
     */
    private $hasFirstLicenseRefusal = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:RightShare as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:RightShare as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of ddex:Identifiers for the ddexC:RightShare.
     *
     * @return \DedexBundle\Entity\DdexC\RightsAgreementIdType
     */
    public function getRightShareId()
    {
        return $this->rightShareId;
    }

    /**
     * Sets a new rightShareId
     *
     * A ddex:Composite containing details of ddex:Identifiers for the ddexC:RightShare.
     *
     * @param \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightShareId
     * @return self
     */
    public function setRightShareId(?\DedexBundle\Entity\DdexC\RightsAgreementIdType $rightShareId = null)
    {
        $this->rightShareId = $rightShareId;
        return $this;
    }

    /**
     * Gets as rightShareReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:RightShare within the ddex:Release which contains it. This is a ddex:LocalRightShareAnchor starting with the letter S.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:RightShare within the ddex:Release which contains it. This is a ddex:LocalRightShareAnchor starting with the letter S.
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
     * A ddex:Composite containing details of one or more ddex:Creations contained in the ddexC:RightShare.
     *
     * @return \DedexBundle\Entity\DdexC\RightShareCreationReferenceListType
     */
    public function getRightShareCreationReferenceList()
    {
        return $this->rightShareCreationReferenceList;
    }

    /**
     * Sets a new rightShareCreationReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Creations contained in the ddexC:RightShare.
     *
     * @param \DedexBundle\Entity\DdexC\RightShareCreationReferenceListType $rightShareCreationReferenceList
     * @return self
     */
    public function setRightShareCreationReferenceList(?\DedexBundle\Entity\DdexC\RightShareCreationReferenceListType $rightShareCreationReferenceList = null)
    {
        $this->rightShareCreationReferenceList = $rightShareCreationReferenceList;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory to which the ddexC:RightShare applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory to which the ddexC:RightShare applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:RightShare applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:RightShare applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory to which the ddexC:RightShare applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:RightShare does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:RightShare does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:RightShare does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:RightShare does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:RightShare does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A ddex:Type of ddex:Right covered by the ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be present. The RightsType is defined according to the jurisdiction of the ddex:Territory indicated in the iso3166a2:TerritoryCode ddex:XmlAttribute.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\RightsTypeType $rightsType
     */
    public function addToRightsType(\DedexBundle\Entity\DdexC\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A ddex:Type of ddex:Right covered by the ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be present. The RightsType is defined according to the jurisdiction of the ddex:Territory indicated in the iso3166a2:TerritoryCode ddex:XmlAttribute.
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
     * A ddex:Type of ddex:Right covered by the ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be present. The RightsType is defined according to the jurisdiction of the ddex:Territory indicated in the iso3166a2:TerritoryCode ddex:XmlAttribute.
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
     * A ddex:Type of ddex:Right covered by the ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be present. The RightsType is defined according to the jurisdiction of the ddex:Territory indicated in the iso3166a2:TerritoryCode ddex:XmlAttribute.
     *
     * @return \DedexBundle\Entity\DdexC\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A ddex:Type of ddex:Right covered by the ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be present. The RightsType is defined according to the jurisdiction of the ddex:Territory indicated in the iso3166a2:TerritoryCode ddex:XmlAttribute.
     *
     * @param \DedexBundle\Entity\DdexC\RightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType = null)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of the ddex:Elements RightsType and ddex:UseType must be present.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UseTypeType $useType
     */
    public function addToUseType(\DedexBundle\Entity\DdexC\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of the ddex:Elements RightsType and ddex:UseType must be present.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of the ddex:Elements RightsType and ddex:UseType must be present.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of the ddex:Elements RightsType and ddex:UseType must be present.
     *
     * @return \DedexBundle\Entity\DdexC\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of the ddex:Elements RightsType and ddex:UseType must be present.
     *
     * @param \DedexBundle\Entity\DdexC\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DedexBundle\Entity\DdexC\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\UserInterfaceTypeType[] $userInterfaceType
     * @return self
     */
    public function setUserInterfaceType(array $userInterfaceType = null)
    {
        $this->userInterfaceType = $userInterfaceType;
        return $this;
    }

    /**
     * Adds as distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DedexBundle\Entity\DdexC\DistributionChannelTypeType $distributionChannelType)
    {
        $this->distributionChannelType[] = $distributionChannelType;
        return $this;
    }

    /**
     * isset distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
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
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
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
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @return \DedexBundle\Entity\DdexC\DistributionChannelTypeType[]
     */
    public function getDistributionChannelType()
    {
        return $this->distributionChannelType;
    }

    /**
     * Sets a new distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @param \DedexBundle\Entity\DdexC\DistributionChannelTypeType[] $distributionChannelType
     * @return self
     */
    public function setDistributionChannelType(array $distributionChannelType = null)
    {
        $this->distributionChannelType = $distributionChannelType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DedexBundle\Entity\DdexC\CarrierTypeType $carrierType)
    {
        $this->carrierType[] = $carrierType;
        return $this;
    }

    /**
     * isset carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
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
     * A ddex:Composite containing details of a ddex:Carrier.
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
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @return \DedexBundle\Entity\DdexC\CarrierTypeType[]
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @param \DedexBundle\Entity\DdexC\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType = null)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Adds as commercialModelType
     *
     * A ddex:Composite containing details of the fundamental business model which applies (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DedexBundle\Entity\DdexC\CommercialModelTypeType $commercialModelType)
    {
        $this->commercialModelType[] = $commercialModelType;
        return $this;
    }

    /**
     * isset commercialModelType
     *
     * A ddex:Composite containing details of the fundamental business model which applies (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model which applies (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model which applies (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\CommercialModelTypeType[]
     */
    public function getCommercialModelType()
    {
        return $this->commercialModelType;
    }

    /**
     * Sets a new commercialModelType
     *
     * A ddex:Composite containing details of the fundamental business model which applies (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType = null)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Adds as musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
     *
     * @param string $musicalWorkRightsClaimType
     * @return self
     */
    public function setMusicalWorkRightsClaimType(array $musicalWorkRightsClaimType = null)
    {
        $this->musicalWorkRightsClaimType = $musicalWorkRightsClaimType;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A ddex:Composite containing details of a ddex:RightsController of Rights in a ddex:Creation.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\RightsControllerType $rightsController
     */
    public function addToRightsController(\DedexBundle\Entity\DdexC\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A ddex:Composite containing details of a ddex:RightsController of Rights in a ddex:Creation.
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
     * A ddex:Composite containing details of a ddex:RightsController of Rights in a ddex:Creation.
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
     * A ddex:Composite containing details of a ddex:RightsController of Rights in a ddex:Creation.
     *
     * @return \DedexBundle\Entity\DdexC\RightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A ddex:Composite containing details of a ddex:RightsController of Rights in a ddex:Creation.
     *
     * @param \DedexBundle\Entity\DdexC\RightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A ddex:Composite containing details about the ddex:Period of ddex:Time for which the ddexC:RightShare is valid.
     *
     * @return \DedexBundle\Entity\DdexC\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A ddex:Composite containing details about the ddex:Period of ddex:Time for which the ddexC:RightShare is valid.
     *
     * @param \DedexBundle\Entity\DdexC\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\DedexBundle\Entity\DdexC\PeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as percentageUnknown
     *
     * The ddex:Flag indicating whether the ddex:RightSharePercentage is unknown (=True) or not (=False).
     *
     * @return bool
     */
    public function getPercentageUnknown()
    {
        return $this->percentageUnknown;
    }

    /**
     * Sets a new percentageUnknown
     *
     * The ddex:Flag indicating whether the ddex:RightSharePercentage is unknown (=True) or not (=False).
     *
     * @param bool $percentageUnknown
     * @return self
     */
    public function setPercentageUnknown($percentageUnknown)
    {
        $this->percentageUnknown = $percentageUnknown;
        return $this;
    }

    /**
     * Gets as percentageRate
     *
     * The share of the licensed Rights owned by the ddex:RightsController. ddexC:RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8' represents 12.5%).
     *
     * @return string
     */
    public function getPercentageRate()
    {
        return $this->percentageRate;
    }

    /**
     * Sets a new percentageRate
     *
     * The share of the licensed Rights owned by the ddex:RightsController. ddexC:RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8' represents 12.5%).
     *
     * @param string $percentageRate
     * @return self
     */
    public function setPercentageRate($percentageRate)
    {
        $this->percentageRate = $percentageRate;
        return $this;
    }

    /**
     * Gets as tariffReference
     *
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) that is to be applied to the ddexC:RightShare.
     *
     * @return \DedexBundle\Entity\DdexC\TariffReferenceType
     */
    public function getTariffReference()
    {
        return $this->tariffReference;
    }

    /**
     * Sets a new tariffReference
     *
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) that is to be applied to the ddexC:RightShare.
     *
     * @param \DedexBundle\Entity\DdexC\TariffReferenceType $tariffReference
     * @return self
     */
    public function setTariffReference(?\DedexBundle\Entity\DdexC\TariffReferenceType $tariffReference = null)
    {
        $this->tariffReference = $tariffReference;
        return $this;
    }

    /**
     * Gets as licenseStatus
     *
     * The legal status of a ddex:License for the ddexC:RightShare.
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
     * The legal status of a ddex:License for the ddexC:RightShare.
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
     * The ddex:Flag indicating whether a ddex:RightsController retains the right of refusal regarding the granting of the first licence for creating a ddex:SoundRecording of a Musical ddex:Work (=True) or not (=False).
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
     * The ddex:Flag indicating whether a ddex:RightsController retains the right of refusal regarding the granting of the first licence for creating a ddex:SoundRecording of a Musical ddex:Work (=True) or not (=False).
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

