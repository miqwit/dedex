<?php

namespace DedexBundle\Entity\Ern41;

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
     * @var \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
     *
     * @var \DedexBundle\Entity\Ern\PeriodWithoutFlagsType[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @var \DedexBundle\Entity\Ern\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. The UseType is mandatory unless the terms of the Deal were communicated beforehand (possibly out of band) and then referenced using a DealReference.
     *
     * @var \DedexBundle\Entity\Ern\DiscoverableUseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DedexBundle\Entity\Ern\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing technical details of the Release.
     *
     * @var \DedexBundle\Entity\Ern\DealTermsTechnicalInstantiationType $technicalInstantiation
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
     * @var \DedexBundle\Entity\Ern\DSPType[] $distributionChannel
     */
    private $distributionChannel = [
        
    ];

    /**
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @var \DedexBundle\Entity\Ern\DSPType[] $excludedDistributionChannel
     */
    private $excludedDistributionChannel = [
        
    ];

    /**
     * A Composite containing details of a rights claim policy.
     *
     * @var \DedexBundle\Entity\Ern\RightsClaimPolicyType[] $rightsClaimPolicy
     */
    private $rightsClaimPolicy = [
        
    ];

    /**
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     *
     * @var \DedexBundle\Entity\Ern\PriceInformationWithTypeType[] $priceInformation
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
     * @var \DedexBundle\Entity\Ern\PromotionalCodeType $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * A Flag indicating whether the Deal is covering only the period where the Release can be purchased by a consumer but not yet fulfilled (=true) or not (=false).
     *
     * @var bool $isPreOrderDeal
     */
    private $isPreOrderDeal = null;

    /**
     * A Date on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDate is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDate may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $releaseDisplayStartDate
     */
    private $releaseDisplayStartDate = null;

    /**
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $trackListingPreviewStartDate
     */
    private $trackListingPreviewStartDate = null;

    /**
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $coverArtPreviewStartDate
     */
    private $coverArtPreviewStartDate = null;

    /**
     * A Date on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDate is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDate may not be later than the StartDate for the Deal. The ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $clipPreviewStartDate
     */
    private $clipPreviewStartDate = null;

    /**
     * A DateTime on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @var \DateTime $releaseDisplayStartDateTime
     */
    private $releaseDisplayStartDateTime = null;

    /**
     * A DateTime on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @var \DateTime $trackListingPreviewStartDateTime
     */
    private $trackListingPreviewStartDateTime = null;

    /**
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @var \DateTime $coverArtPreviewStartDateTime
     */
    private $coverArtPreviewStartDateTime = null;

    /**
     * A DateTime on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @var \DateTime $clipPreviewStartDateTime
     */
    private $clipPreviewStartDateTime = null;

    /**
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @var string[] $instantGratificationResourceList
     */
    private $instantGratificationResourceList = null;

    /**
     * A Composite containing details of physical returns.
     *
     * @var \DedexBundle\Entity\Ern\PhysicalReturnsType $physicalReturns
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
     * @return \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[]
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
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * @return \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[]
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
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\PeriodWithoutFlagsType $validityPeriod
     */
    public function addToValidityPeriod(\DedexBundle\Entity\Ern\PeriodWithoutFlagsType $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
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
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
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
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
     *
     * @return \DedexBundle\Entity\Ern\PeriodWithoutFlagsType[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
     *
     * @param \DedexBundle\Entity\Ern\PeriodWithoutFlagsType[] $validityPeriod
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
     * @return \DedexBundle\Entity\Ern\CommercialModelTypeType[]
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
     * @param \DedexBundle\Entity\Ern\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType)
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
     * @param \DedexBundle\Entity\Ern\DiscoverableUseTypeType $useType
     */
    public function addToUseType(\DedexBundle\Entity\Ern\DiscoverableUseTypeType $useType)
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
     * @return \DedexBundle\Entity\Ern\DiscoverableUseTypeType[]
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
     * @param \DedexBundle\Entity\Ern\DiscoverableUseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a Carrier.
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
     * @return \DedexBundle\Entity\Ern\CarrierTypeType[]
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
     * @param \DedexBundle\Entity\Ern\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Gets as technicalInstantiation
     *
     * A Composite containing technical details of the Release.
     *
     * @return \DedexBundle\Entity\Ern\DealTermsTechnicalInstantiationType
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
     * @param \DedexBundle\Entity\Ern\DealTermsTechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(\DedexBundle\Entity\Ern\DealTermsTechnicalInstantiationType $technicalInstantiation)
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
     * @param \DedexBundle\Entity\Ern\DSPType $distributionChannel
     */
    public function addToDistributionChannel(\DedexBundle\Entity\Ern\DSPType $distributionChannel)
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
     * @return \DedexBundle\Entity\Ern\DSPType[]
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
     * @param \DedexBundle\Entity\Ern\DSPType[] $distributionChannel
     * @return self
     */
    public function setDistributionChannel(array $distributionChannel)
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
     * @param \DedexBundle\Entity\Ern\DSPType $excludedDistributionChannel
     */
    public function addToExcludedDistributionChannel(\DedexBundle\Entity\Ern\DSPType $excludedDistributionChannel)
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
     * @return \DedexBundle\Entity\Ern\DSPType[]
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
     * @param \DedexBundle\Entity\Ern\DSPType[] $excludedDistributionChannel
     * @return self
     */
    public function setExcludedDistributionChannel(array $excludedDistributionChannel)
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
     * @param \DedexBundle\Entity\Ern\RightsClaimPolicyType $rightsClaimPolicy
     */
    public function addToRightsClaimPolicy(\DedexBundle\Entity\Ern\RightsClaimPolicyType $rightsClaimPolicy)
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
     * @return \DedexBundle\Entity\Ern\RightsClaimPolicyType[]
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
     * @param \DedexBundle\Entity\Ern\RightsClaimPolicyType[] $rightsClaimPolicy
     * @return self
     */
    public function setRightsClaimPolicy(array $rightsClaimPolicy)
    {
        $this->rightsClaimPolicy = $rightsClaimPolicy;
        return $this;
    }

    /**
     * Adds as priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\PriceInformationWithTypeType $priceInformation
     */
    public function addToPriceInformation(\DedexBundle\Entity\Ern\PriceInformationWithTypeType $priceInformation)
    {
        $this->priceInformation[] = $priceInformation;
        return $this;
    }

    /**
     * isset priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
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
     *
     * @return \DedexBundle\Entity\Ern\PriceInformationWithTypeType[]
     */
    public function getPriceInformation()
    {
        return $this->priceInformation;
    }

    /**
     * Sets a new priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     *
     * @param \DedexBundle\Entity\Ern\PriceInformationWithTypeType[] $priceInformation
     * @return self
     */
    public function setPriceInformation(array $priceInformation)
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
     * @return \DedexBundle\Entity\Ern\PromotionalCodeType
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
     * @param \DedexBundle\Entity\Ern\PromotionalCodeType $promotionalCode
     * @return self
     */
    public function setPromotionalCode(\DedexBundle\Entity\Ern\PromotionalCodeType $promotionalCode)
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
     * Gets as releaseDisplayStartDate
     *
     * A Date on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDate is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDate may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getReleaseDisplayStartDate()
    {
        return $this->releaseDisplayStartDate;
    }

    /**
     * Sets a new releaseDisplayStartDate
     *
     * A Date on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDate is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDate may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $releaseDisplayStartDate
     * @return self
     */
    public function setReleaseDisplayStartDate($releaseDisplayStartDate)
    {
        $this->releaseDisplayStartDate = $releaseDisplayStartDate;
        return $this;
    }

    /**
     * Gets as trackListingPreviewStartDate
     *
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getTrackListingPreviewStartDate()
    {
        return $this->trackListingPreviewStartDate;
    }

    /**
     * Sets a new trackListingPreviewStartDate
     *
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $trackListingPreviewStartDate
     * @return self
     */
    public function setTrackListingPreviewStartDate($trackListingPreviewStartDate)
    {
        $this->trackListingPreviewStartDate = $trackListingPreviewStartDate;
        return $this;
    }

    /**
     * Gets as coverArtPreviewStartDate
     *
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getCoverArtPreviewStartDate()
    {
        return $this->coverArtPreviewStartDate;
    }

    /**
     * Sets a new coverArtPreviewStartDate
     *
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $coverArtPreviewStartDate
     * @return self
     */
    public function setCoverArtPreviewStartDate($coverArtPreviewStartDate)
    {
        $this->coverArtPreviewStartDate = $coverArtPreviewStartDate;
        return $this;
    }

    /**
     * Gets as clipPreviewStartDate
     *
     * A Date on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDate is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDate may not be later than the StartDate for the Deal. The ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getClipPreviewStartDate()
    {
        return $this->clipPreviewStartDate;
    }

    /**
     * Sets a new clipPreviewStartDate
     *
     * A Date on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDate is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDate may not be later than the StartDate for the Deal. The ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $clipPreviewStartDate
     * @return self
     */
    public function setClipPreviewStartDate($clipPreviewStartDate)
    {
        $this->clipPreviewStartDate = $clipPreviewStartDate;
        return $this;
    }

    /**
     * Gets as releaseDisplayStartDateTime
     *
     * A DateTime on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getReleaseDisplayStartDateTime()
    {
        return $this->releaseDisplayStartDateTime;
    }

    /**
     * Sets a new releaseDisplayStartDateTime
     *
     * A DateTime on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @param \DateTime $releaseDisplayStartDateTime
     * @return self
     */
    public function setReleaseDisplayStartDateTime(\DateTime $releaseDisplayStartDateTime)
    {
        $this->releaseDisplayStartDateTime = $releaseDisplayStartDateTime;
        return $this;
    }

    /**
     * Gets as trackListingPreviewStartDateTime
     *
     * A DateTime on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getTrackListingPreviewStartDateTime()
    {
        return $this->trackListingPreviewStartDateTime;
    }

    /**
     * Sets a new trackListingPreviewStartDateTime
     *
     * A DateTime on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @param \DateTime $trackListingPreviewStartDateTime
     * @return self
     */
    public function setTrackListingPreviewStartDateTime(\DateTime $trackListingPreviewStartDateTime)
    {
        $this->trackListingPreviewStartDateTime = $trackListingPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as coverArtPreviewStartDateTime
     *
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getCoverArtPreviewStartDateTime()
    {
        return $this->coverArtPreviewStartDateTime;
    }

    /**
     * Sets a new coverArtPreviewStartDateTime
     *
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @param \DateTime $coverArtPreviewStartDateTime
     * @return self
     */
    public function setCoverArtPreviewStartDateTime(\DateTime $coverArtPreviewStartDateTime)
    {
        $this->coverArtPreviewStartDateTime = $coverArtPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as clipPreviewStartDateTime
     *
     * A DateTime on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getClipPreviewStartDateTime()
    {
        return $this->clipPreviewStartDateTime;
    }

    /**
     * Sets a new clipPreviewStartDateTime
     *
     * A DateTime on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss.
     *
     * @param \DateTime $clipPreviewStartDateTime
     * @return self
     */
    public function setClipPreviewStartDateTime(\DateTime $clipPreviewStartDateTime)
    {
        $this->clipPreviewStartDateTime = $clipPreviewStartDateTime;
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
    public function setInstantGratificationResourceList(array $instantGratificationResourceList)
    {
        $this->instantGratificationResourceList = $instantGratificationResourceList;
        return $this;
    }

    /**
     * Gets as physicalReturns
     *
     * A Composite containing details of physical returns.
     *
     * @return \DedexBundle\Entity\Ern\PhysicalReturnsType
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
     * @param \DedexBundle\Entity\Ern\PhysicalReturnsType $physicalReturns
     * @return self
     */
    public function setPhysicalReturns(\DedexBundle\Entity\Ern\PhysicalReturnsType $physicalReturns)
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

