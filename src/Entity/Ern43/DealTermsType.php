<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing DealTermsType
 *
 * A Composite containing details of the terms of a Deal.
 * XSD Type: DealTerms
 */
class DealTermsType
{
    /**
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details about a Period of Time during which the Deal is valid. To indicate a Deal that is valid at the time of sending of a NewReleaseMessage, the MessageSender should use a StartDate or StartDateTime set in the past. No EndDate in this Composite means that the Deal is valid until further notice. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates%2C-end-dates%2C-start-datetimes-and-end-datetimes
     *
     * @var \DedexBundle\Entity\Ern43\PeriodWithStartDateType[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @var \DedexBundle\Entity\Ern43\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. The UseType is mandatory unless the terms of the Deal were communicated beforehand (possibly out of band) and then referenced using a DealReference.
     *
     * @var \DedexBundle\Entity\Ern43\DiscoverableUseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @var \DedexBundle\Entity\Ern43\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DedexBundle\Entity\Ern43\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing technical details of the Release.
     *
     * @var \DedexBundle\Entity\Ern43\DealTermsTechnicalInstantiationType $technicalInstantiation
     */
    private $technicalInstantiation = null;

    /**
     * The number of times a Release can be used under the terms of the Deal.
     *
     * @var int $numberOfUsages
     */
    private $numberOfUsages = null;

    /**
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @var \DedexBundle\Entity\Ern43\DSPType[] $distributionChannel
     */
    private $distributionChannel = [
        
    ];

    /**
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @var \DedexBundle\Entity\Ern43\DSPType[] $excludedDistributionChannel
     */
    private $excludedDistributionChannel = [
        
    ];

    /**
     * A Composite containing details of a rights claim policy.
     *
     * @var \DedexBundle\Entity\Ern43\RightsClaimPolicyType[] $rightsClaimPolicy
     */
    private $rightsClaimPolicy = [
        
    ];

    /**
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @var \DedexBundle\Entity\Ern43\PriceInformationWithTypeType[] $priceInformation
     */
    private $priceInformation = [
        
    ];

    /**
     * The Flag indicating whether a special Deal is made between the Licensor and the Licensee (=true) or not (=false) regarding the royalties or payments due to be paid for Releases distributed under this Deal.
     *
     * @var bool $isPromotional
     */
    private $isPromotional = null;

    /**
     * A Composite containing details of a PromotionalCode.
     *
     * @var \DedexBundle\Entity\Ern43\PromotionalCodeType $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * A Flag indicating whether the Deal is covering only the period where the Release can be purchased by a consumer but not yet fulfilled (=true) or not (=false).
     *
     * @var bool $isPreOrderDeal
     */
    private $isPreOrderDeal = null;

    /**
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @var string[] $instantGratificationResourceList
     */
    private $instantGratificationResourceList = null;

    /**
     * A Composite containing details of physical returns.
     *
     * @var \DedexBundle\Entity\Ern43\PhysicalReturnsType $physicalReturns
     */
    private $physicalReturns = null;

    /**
     * A number of Products per carton. This is the smallest number of Products that can be ordered.
     *
     * @var int $numberOfProductsPerCarton
     */
    private $numberOfProductsPerCarton = null;

    /**
     * Adds as territoryCode
     *
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. To indicate a Deal that is valid at the time of sending of a NewReleaseMessage, the MessageSender should use a StartDate or StartDateTime set in the past. No EndDate in this Composite means that the Deal is valid until further notice. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates%2C-end-dates%2C-start-datetimes-and-end-datetimes
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PeriodWithStartDateType $validityPeriod
     */
    public function addToValidityPeriod(\DedexBundle\Entity\Ern43\PeriodWithStartDateType $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. To indicate a Deal that is valid at the time of sending of a NewReleaseMessage, the MessageSender should use a StartDate or StartDateTime set in the past. No EndDate in this Composite means that the Deal is valid until further notice. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates%2C-end-dates%2C-start-datetimes-and-end-datetimes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. To indicate a Deal that is valid at the time of sending of a NewReleaseMessage, the MessageSender should use a StartDate or StartDateTime set in the past. No EndDate in this Composite means that the Deal is valid until further notice. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates%2C-end-dates%2C-start-datetimes-and-end-datetimes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. To indicate a Deal that is valid at the time of sending of a NewReleaseMessage, the MessageSender should use a StartDate or StartDateTime set in the past. No EndDate in this Composite means that the Deal is valid until further notice. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates%2C-end-dates%2C-start-datetimes-and-end-datetimes
     *
     * @return \DedexBundle\Entity\Ern43\PeriodWithStartDateType[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. To indicate a Deal that is valid at the time of sending of a NewReleaseMessage, the MessageSender should use a StartDate or StartDateTime set in the past. No EndDate in this Composite means that the Deal is valid until further notice. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates%2C-end-dates%2C-start-datetimes-and-end-datetimes
     *
     * @param \DedexBundle\Entity\Ern43\PeriodWithStartDateType[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DedexBundle\Entity\Ern43\CommercialModelTypeType $commercialModelType)
    {
        $this->commercialModelType[] = $commercialModelType;
        return $this;
    }

    /**
     * isset commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
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
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
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
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @return \DedexBundle\Entity\Ern43\CommercialModelTypeType[]
     */
    public function getCommercialModelType()
    {
        return $this->commercialModelType;
    }

    /**
     * Sets a new commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @param \DedexBundle\Entity\Ern43\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType = null)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. The UseType is mandatory unless the terms of the Deal were communicated beforehand (possibly out of band) and then referenced using a DealReference.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DiscoverableUseTypeType $useType
     */
    public function addToUseType(\DedexBundle\Entity\Ern43\DiscoverableUseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. The UseType is mandatory unless the terms of the Deal were communicated beforehand (possibly out of band) and then referenced using a DealReference.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. The UseType is mandatory unless the terms of the Deal were communicated beforehand (possibly out of band) and then referenced using a DealReference.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. The UseType is mandatory unless the terms of the Deal were communicated beforehand (possibly out of band) and then referenced using a DealReference.
     *
     * @return \DedexBundle\Entity\Ern43\DiscoverableUseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. The UseType is mandatory unless the terms of the Deal were communicated beforehand (possibly out of band) and then referenced using a DealReference.
     *
     * @param \DedexBundle\Entity\Ern43\DiscoverableUseTypeType[] $useType
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
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DedexBundle\Entity\Ern43\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
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
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
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
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @return \DedexBundle\Entity\Ern43\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @param \DedexBundle\Entity\Ern43\UserInterfaceTypeType[] $userInterfaceType
     * @return self
     */
    public function setUserInterfaceType(array $userInterfaceType = null)
    {
        $this->userInterfaceType = $userInterfaceType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DedexBundle\Entity\Ern43\CarrierTypeType $carrierType)
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
     * @return \DedexBundle\Entity\Ern43\CarrierTypeType[]
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
     * @param \DedexBundle\Entity\Ern43\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType = null)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Gets as technicalInstantiation
     *
     * A Composite containing technical details of the Release.
     *
     * @return \DedexBundle\Entity\Ern43\DealTermsTechnicalInstantiationType
     */
    public function getTechnicalInstantiation()
    {
        return $this->technicalInstantiation;
    }

    /**
     * Sets a new technicalInstantiation
     *
     * A Composite containing technical details of the Release.
     *
     * @param \DedexBundle\Entity\Ern43\DealTermsTechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(?\DedexBundle\Entity\Ern43\DealTermsTechnicalInstantiationType $technicalInstantiation = null)
    {
        $this->technicalInstantiation = $technicalInstantiation;
        return $this;
    }

    /**
     * Gets as numberOfUsages
     *
     * The number of times a Release can be used under the terms of the Deal.
     *
     * @return int
     */
    public function getNumberOfUsages()
    {
        return $this->numberOfUsages;
    }

    /**
     * Sets a new numberOfUsages
     *
     * The number of times a Release can be used under the terms of the Deal.
     *
     * @param int $numberOfUsages
     * @return self
     */
    public function setNumberOfUsages($numberOfUsages)
    {
        $this->numberOfUsages = $numberOfUsages;
        return $this;
    }

    /**
     * Adds as distributionChannel
     *
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DSPType $distributionChannel
     */
    public function addToDistributionChannel(\DedexBundle\Entity\Ern43\DSPType $distributionChannel)
    {
        $this->distributionChannel[] = $distributionChannel;
        return $this;
    }

    /**
     * isset distributionChannel
     *
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributionChannel($index)
    {
        return isset($this->distributionChannel[$index]);
    }

    /**
     * unset distributionChannel
     *
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributionChannel($index)
    {
        unset($this->distributionChannel[$index]);
    }

    /**
     * Gets as distributionChannel
     *
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @return \DedexBundle\Entity\Ern43\DSPType[]
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }

    /**
     * Sets a new distributionChannel
     *
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @param \DedexBundle\Entity\Ern43\DSPType[] $distributionChannel
     * @return self
     */
    public function setDistributionChannel(array $distributionChannel = null)
    {
        $this->distributionChannel = $distributionChannel;
        return $this;
    }

    /**
     * Adds as excludedDistributionChannel
     *
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DSPType $excludedDistributionChannel
     */
    public function addToExcludedDistributionChannel(\DedexBundle\Entity\Ern43\DSPType $excludedDistributionChannel)
    {
        $this->excludedDistributionChannel[] = $excludedDistributionChannel;
        return $this;
    }

    /**
     * isset excludedDistributionChannel
     *
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedDistributionChannel($index)
    {
        return isset($this->excludedDistributionChannel[$index]);
    }

    /**
     * unset excludedDistributionChannel
     *
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedDistributionChannel($index)
    {
        unset($this->excludedDistributionChannel[$index]);
    }

    /**
     * Gets as excludedDistributionChannel
     *
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @return \DedexBundle\Entity\Ern43\DSPType[]
     */
    public function getExcludedDistributionChannel()
    {
        return $this->excludedDistributionChannel;
    }

    /**
     * Sets a new excludedDistributionChannel
     *
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @param \DedexBundle\Entity\Ern43\DSPType[] $excludedDistributionChannel
     * @return self
     */
    public function setExcludedDistributionChannel(array $excludedDistributionChannel = null)
    {
        $this->excludedDistributionChannel = $excludedDistributionChannel;
        return $this;
    }

    /**
     * Adds as rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\RightsClaimPolicyType $rightsClaimPolicy
     */
    public function addToRightsClaimPolicy(\DedexBundle\Entity\Ern43\RightsClaimPolicyType $rightsClaimPolicy)
    {
        $this->rightsClaimPolicy[] = $rightsClaimPolicy;
        return $this;
    }

    /**
     * isset rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsClaimPolicy($index)
    {
        return isset($this->rightsClaimPolicy[$index]);
    }

    /**
     * unset rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsClaimPolicy($index)
    {
        unset($this->rightsClaimPolicy[$index]);
    }

    /**
     * Gets as rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @return \DedexBundle\Entity\Ern43\RightsClaimPolicyType[]
     */
    public function getRightsClaimPolicy()
    {
        return $this->rightsClaimPolicy;
    }

    /**
     * Sets a new rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @param \DedexBundle\Entity\Ern43\RightsClaimPolicyType[] $rightsClaimPolicy
     * @return self
     */
    public function setRightsClaimPolicy(array $rightsClaimPolicy = null)
    {
        $this->rightsClaimPolicy = $rightsClaimPolicy;
        return $this;
    }

    /**
     * Adds as priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PriceInformationWithTypeType $priceInformation
     */
    public function addToPriceInformation(\DedexBundle\Entity\Ern43\PriceInformationWithTypeType $priceInformation)
    {
        $this->priceInformation[] = $priceInformation;
        return $this;
    }

    /**
     * isset priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceInformation($index)
    {
        return isset($this->priceInformation[$index]);
    }

    /**
     * unset priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceInformation($index)
    {
        unset($this->priceInformation[$index]);
    }

    /**
     * Gets as priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @return \DedexBundle\Entity\Ern43\PriceInformationWithTypeType[]
     */
    public function getPriceInformation()
    {
        return $this->priceInformation;
    }

    /**
     * Sets a new priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @param \DedexBundle\Entity\Ern43\PriceInformationWithTypeType[] $priceInformation
     * @return self
     */
    public function setPriceInformation(array $priceInformation = null)
    {
        $this->priceInformation = $priceInformation;
        return $this;
    }

    /**
     * Gets as isPromotional
     *
     * The Flag indicating whether a special Deal is made between the Licensor and the Licensee (=true) or not (=false) regarding the royalties or payments due to be paid for Releases distributed under this Deal.
     *
     * @return bool
     */
    public function getIsPromotional()
    {
        return $this->isPromotional;
    }

    /**
     * Sets a new isPromotional
     *
     * The Flag indicating whether a special Deal is made between the Licensor and the Licensee (=true) or not (=false) regarding the royalties or payments due to be paid for Releases distributed under this Deal.
     *
     * @param bool $isPromotional
     * @return self
     */
    public function setIsPromotional($isPromotional)
    {
        $this->isPromotional = $isPromotional;
        return $this;
    }

    /**
     * Gets as promotionalCode
     *
     * A Composite containing details of a PromotionalCode.
     *
     * @return \DedexBundle\Entity\Ern43\PromotionalCodeType
     */
    public function getPromotionalCode()
    {
        return $this->promotionalCode;
    }

    /**
     * Sets a new promotionalCode
     *
     * A Composite containing details of a PromotionalCode.
     *
     * @param \DedexBundle\Entity\Ern43\PromotionalCodeType $promotionalCode
     * @return self
     */
    public function setPromotionalCode(?\DedexBundle\Entity\Ern43\PromotionalCodeType $promotionalCode = null)
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    /**
     * Gets as isPreOrderDeal
     *
     * A Flag indicating whether the Deal is covering only the period where the Release can be purchased by a consumer but not yet fulfilled (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPreOrderDeal()
    {
        return $this->isPreOrderDeal;
    }

    /**
     * Sets a new isPreOrderDeal
     *
     * A Flag indicating whether the Deal is covering only the period where the Release can be purchased by a consumer but not yet fulfilled (=true) or not (=false).
     *
     * @param bool $isPreOrderDeal
     * @return self
     */
    public function setIsPreOrderDeal($isPreOrderDeal)
    {
        $this->isPreOrderDeal = $isPreOrderDeal;
        return $this;
    }

    /**
     * Adds as dealResourceReference
     *
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @return self
     * @param string $dealResourceReference
     */
    public function addToInstantGratificationResourceList($dealResourceReference)
    {
        $this->instantGratificationResourceList[] = $dealResourceReference;
        return $this;
    }

    /**
     * isset instantGratificationResourceList
     *
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantGratificationResourceList($index)
    {
        return isset($this->instantGratificationResourceList[$index]);
    }

    /**
     * unset instantGratificationResourceList
     *
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantGratificationResourceList($index)
    {
        unset($this->instantGratificationResourceList[$index]);
    }

    /**
     * Gets as instantGratificationResourceList
     *
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @return string[]
     */
    public function getInstantGratificationResourceList()
    {
        return $this->instantGratificationResourceList;
    }

    /**
     * Sets a new instantGratificationResourceList
     *
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @param string $instantGratificationResourceList
     * @return self
     */
    public function setInstantGratificationResourceList(array $instantGratificationResourceList = null)
    {
        $this->instantGratificationResourceList = $instantGratificationResourceList;
        return $this;
    }

    /**
     * Gets as physicalReturns
     *
     * A Composite containing details of physical returns.
     *
     * @return \DedexBundle\Entity\Ern43\PhysicalReturnsType
     */
    public function getPhysicalReturns()
    {
        return $this->physicalReturns;
    }

    /**
     * Sets a new physicalReturns
     *
     * A Composite containing details of physical returns.
     *
     * @param \DedexBundle\Entity\Ern43\PhysicalReturnsType $physicalReturns
     * @return self
     */
    public function setPhysicalReturns(?\DedexBundle\Entity\Ern43\PhysicalReturnsType $physicalReturns = null)
    {
        $this->physicalReturns = $physicalReturns;
        return $this;
    }

    /**
     * Gets as numberOfProductsPerCarton
     *
     * A number of Products per carton. This is the smallest number of Products that can be ordered.
     *
     * @return int
     */
    public function getNumberOfProductsPerCarton()
    {
        return $this->numberOfProductsPerCarton;
    }

    /**
     * Sets a new numberOfProductsPerCarton
     *
     * A number of Products per carton. This is the smallest number of Products that can be ordered.
     *
     * @param int $numberOfProductsPerCarton
     * @return self
     */
    public function setNumberOfProductsPerCarton($numberOfProductsPerCarton)
    {
        $this->numberOfProductsPerCarton = $numberOfProductsPerCarton;
        return $this;
    }
}

