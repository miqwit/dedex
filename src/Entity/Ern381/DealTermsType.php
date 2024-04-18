<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing DealTermsType
 *
 * A Composite containing details of the terms of a Deal.
 * XSD Type: DealTerms
 */
class DealTermsType
{
    /**
     * The Language and script for the Elements of the DealTerms as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Flag indicating whether the Deal is covering only the period where the Release can be purchased by a consumer but not yet fulfilled (=true) or not (=false).
     *
     * @var bool $isPreOrderDeal
     */
    private $isPreOrderDeal = null;

    /**
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @var \DedexBundle\Entity\Ern381\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A Composite containing the Types and number of Usages applicable to a Release to which the Deal applies.
     *
     * @var \DedexBundle\Entity\Ern381\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * The Flag indicating whether all Deals are cancelled for the given Territories (=true) or not (=false). This Flag can be used in conjunction with a StartDate of a ValidityPeriod to indicate the point in time from which all Deals are cancelled. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $allDealsCancelled
     */
    private $allDealsCancelled = null;

    /**
     * The Flag indicating whether all Releases referred to are to be taken down by the MessageRecipient. This includes that all Deals referred to in a specific Composite are cancelled and no information about the Releases should be displayed to the end user on the DSP's website (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $takeDown
     */
    private $takeDown = null;

    /**
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @var \DedexBundle\Entity\Ern381\DSPType[] $distributionChannel
     */
    private $distributionChannel = [
        
    ];

    /**
     * A Composite containing details of excluded DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ReleaseDeal, except those that are listed herein.
     *
     * @var \DedexBundle\Entity\Ern381\DSPType[] $excludedDistributionChannel
     */
    private $excludedDistributionChannel = [
        
    ];

    /**
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     *
     * @var \DedexBundle\Entity\Ern381\PriceInformationType[] $priceInformation
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
     * @var \DedexBundle\Entity\Ern381\PromotionalCodeType $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
     *
     * @var \DedexBundle\Entity\Ern381\PeriodType[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * A Composite containing details of a Period the DSP may rent something to a Customer.
     *
     * @var \DedexBundle\Entity\Ern381\ConsumerRentalPeriodType $consumerRentalPeriod
     */
    private $consumerRentalPeriod = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the related Release is made available for pre-ordering. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $preOrderReleaseDate
     */
    private $preOrderReleaseDate = null;

    /**
     * A Date on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDate is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDate may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $releaseDisplayStartDate
     */
    private $releaseDisplayStartDate = null;

    /**
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate may not be later than the StartDate for the Deal. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $trackListingPreviewStartDate
     */
    private $trackListingPreviewStartDate = null;

    /**
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate may not be later than the StartDate for the Deal. CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDate is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDate may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DateTime $releaseDisplayStartDateTime
     */
    private $releaseDisplayStartDateTime = null;

    /**
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate may not be later than the StartDate for the Deal. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DateTime $trackListingPreviewStartDateTime
     */
    private $trackListingPreviewStartDateTime = null;

    /**
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate may not be later than the StartDate for the Deal. CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DateTime $coverArtPreviewStartDateTime
     */
    private $coverArtPreviewStartDateTime = null;

    /**
     * A Date on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDate is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDate may not be later than the StartDate for the Deal. The ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DateTime $clipPreviewStartDateTime
     */
    private $clipPreviewStartDateTime = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the pre-ordered Release is made first available for previewing (it overrides the generic ReleaseDisplayStartDate if supplied). If no PreOrderPreviewDate is provided, the StartDate for the Deal is used instead. The PreOrderPreviewDate may not be later than the StartDate for the Deal. This element has been deprecated and may be deleted in a future version of this message. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $preOrderPreviewDate
     */
    private $preOrderPreviewDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the pre-ordered Release is made first available for previewing (it overrides the generic ReleaseDisplayStartDate if supplied). If no PreOrderPreviewDate is provided, the StartDate for the Deal is used instead. The PreOrderPreviewDate may not be later than the StartDate for the Deal. This element has been deprecated and may be deleted in a future version of this message. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DateTime $preOrderPreviewDateTime
     */
    private $preOrderPreviewDateTime = null;

    /**
     * A Composite containing details of one or more Resources that are only available when the Release is purchased during a pre-order period (delivery is typically at ReleaseDate).
     *
     * @var \DedexBundle\Entity\Ern381\DealResourceReferenceListType $preOrderIncentiveResourceList
     */
    private $preOrderIncentiveResourceList = null;

    /**
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @var \DedexBundle\Entity\Ern381\DealResourceReferenceListType $instantGratificationResourceList
     */
    private $instantGratificationResourceList = null;

    /**
     * The Flag indicating whether the Deal is exclusive (=true) or not (=false) to the MessageRecipient with respect to the relevant Territory(ies), Time(s) and Release(s). For other Territory(ies), or Time(s), other DSPs might be able to sell the Release(s). The exclusivity is in accordance with the agreement between the MessageSender and MessageRecipient.
     *
     * @var bool $isExclusive
     */
    private $isExclusive = null;

    /**
     * A Composite containing details of one or more offers related to the Release.
     *
     * @var \DedexBundle\Entity\Ern381\RelatedReleaseOfferSetType[] $relatedReleaseOfferSet
     */
    private $relatedReleaseOfferSet = [
        
    ];

    /**
     * A Composite containing details of physical returns.
     *
     * @var \DedexBundle\Entity\Ern381\PhysicalReturnsType $physicalReturns
     */
    private $physicalReturns = null;

    /**
     * A number of Products per carton. This is the smallest number of Products that can be ordered.
     *
     * @var int $numberOfProductsPerCarton
     */
    private $numberOfProductsPerCarton = null;

    /**
     * A Composite containing details of a rights claim policy.
     *
     * @var \DedexBundle\Entity\Ern381\RightsClaimPolicyType[] $rightsClaimPolicy
     */
    private $rightsClaimPolicy = [
        
    ];

    /**
     * A Composite containing details of UserGeneratedContent permissions.
     *
     * @var \DedexBundle\Entity\Ern381\WebPolicyType[] $webPolicy
     */
    private $webPolicy = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the DealTerms as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the DealTerms as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies to the Deal (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DedexBundle\Entity\Ern381\CommercialModelTypeType $commercialModelType)
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
     * @return \DedexBundle\Entity\Ern381\CommercialModelTypeType[]
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
     * @param \DedexBundle\Entity\Ern381\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType = null)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Adds as usage
     *
     * A Composite containing the Types and number of Usages applicable to a Release to which the Deal applies.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\UsageType $usage
     */
    public function addToUsage(\DedexBundle\Entity\Ern381\UsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * A Composite containing the Types and number of Usages applicable to a Release to which the Deal applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * A Composite containing the Types and number of Usages applicable to a Release to which the Deal applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * A Composite containing the Types and number of Usages applicable to a Release to which the Deal applies.
     *
     * @return \DedexBundle\Entity\Ern381\UsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A Composite containing the Types and number of Usages applicable to a Release to which the Deal applies.
     *
     * @param \DedexBundle\Entity\Ern381\UsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as allDealsCancelled
     *
     * The Flag indicating whether all Deals are cancelled for the given Territories (=true) or not (=false). This Flag can be used in conjunction with a StartDate of a ValidityPeriod to indicate the point in time from which all Deals are cancelled. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @return bool
     */
    public function getAllDealsCancelled()
    {
        return $this->allDealsCancelled;
    }

    /**
     * Sets a new allDealsCancelled
     *
     * The Flag indicating whether all Deals are cancelled for the given Territories (=true) or not (=false). This Flag can be used in conjunction with a StartDate of a ValidityPeriod to indicate the point in time from which all Deals are cancelled. This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @param bool $allDealsCancelled
     * @return self
     */
    public function setAllDealsCancelled($allDealsCancelled)
    {
        $this->allDealsCancelled = $allDealsCancelled;
        return $this;
    }

    /**
     * Gets as takeDown
     *
     * The Flag indicating whether all Releases referred to are to be taken down by the MessageRecipient. This includes that all Deals referred to in a specific Composite are cancelled and no information about the Releases should be displayed to the end user on the DSP's website (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @return bool
     */
    public function getTakeDown()
    {
        return $this->takeDown;
    }

    /**
     * Sets a new takeDown
     *
     * The Flag indicating whether all Releases referred to are to be taken down by the MessageRecipient. This includes that all Deals referred to in a specific Composite are cancelled and no information about the Releases should be displayed to the end user on the DSP's website (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @param bool $takeDown
     * @return self
     */
    public function setTakeDown($takeDown)
    {
        $this->takeDown = $takeDown;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory in which the Deal applies. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory in which the Deal does not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as distributionChannel
     *
     * A Composite containing details of the DSP through whose DistributionChannel the sales are permitted. If none are provided no limitations on the DistributionChannels are given.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\DSPType $distributionChannel
     */
    public function addToDistributionChannel(\DedexBundle\Entity\Ern381\DSPType $distributionChannel)
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
     * @return \DedexBundle\Entity\Ern381\DSPType[]
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
     * @param \DedexBundle\Entity\Ern381\DSPType[] $distributionChannel
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
     * @param \DedexBundle\Entity\Ern381\DSPType $excludedDistributionChannel
     */
    public function addToExcludedDistributionChannel(\DedexBundle\Entity\Ern381\DSPType $excludedDistributionChannel)
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
     * @return \DedexBundle\Entity\Ern381\DSPType[]
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
     * @param \DedexBundle\Entity\Ern381\DSPType[] $excludedDistributionChannel
     * @return self
     */
    public function setExcludedDistributionChannel(array $excludedDistributionChannel = null)
    {
        $this->excludedDistributionChannel = $excludedDistributionChannel;
        return $this;
    }

    /**
     * Adds as priceInformation
     *
     * A Composite containing details of a Price. Note that this Price applies to all UseTypes referenced in this Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\PriceInformationType $priceInformation
     */
    public function addToPriceInformation(\DedexBundle\Entity\Ern381\PriceInformationType $priceInformation)
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
     * @return \DedexBundle\Entity\Ern381\PriceInformationType[]
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
     * @param \DedexBundle\Entity\Ern381\PriceInformationType[] $priceInformation
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
     * @return \DedexBundle\Entity\Ern381\PromotionalCodeType
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
     * @param \DedexBundle\Entity\Ern381\PromotionalCodeType $promotionalCode
     * @return self
     */
    public function setPromotionalCode(?\DedexBundle\Entity\Ern381\PromotionalCodeType $promotionalCode = null)
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * A Composite containing details about a Period of Time during which the Deal is valid. No StartDate in this Composite means that the Deal is valid as per contractual relationship between MessageSender and MessageRecipient. No EndDate in this Composite means that the Deal is valid until further notice.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\PeriodType $validityPeriod
     */
    public function addToValidityPeriod(\DedexBundle\Entity\Ern381\PeriodType $validityPeriod)
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
     * @return \DedexBundle\Entity\Ern381\PeriodType[]
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
     * @param \DedexBundle\Entity\Ern381\PeriodType[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as consumerRentalPeriod
     *
     * A Composite containing details of a Period the DSP may rent something to a Customer.
     *
     * @return \DedexBundle\Entity\Ern381\ConsumerRentalPeriodType
     */
    public function getConsumerRentalPeriod()
    {
        return $this->consumerRentalPeriod;
    }

    /**
     * Sets a new consumerRentalPeriod
     *
     * A Composite containing details of a Period the DSP may rent something to a Customer.
     *
     * @param \DedexBundle\Entity\Ern381\ConsumerRentalPeriodType $consumerRentalPeriod
     * @return self
     */
    public function setConsumerRentalPeriod(?\DedexBundle\Entity\Ern381\ConsumerRentalPeriodType $consumerRentalPeriod = null)
    {
        $this->consumerRentalPeriod = $consumerRentalPeriod;
        return $this;
    }

    /**
     * Gets as preOrderReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the related Release is made available for pre-ordering. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getPreOrderReleaseDate()
    {
        return $this->preOrderReleaseDate;
    }

    /**
     * Sets a new preOrderReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the related Release is made available for pre-ordering. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $preOrderReleaseDate
     * @return self
     */
    public function setPreOrderReleaseDate(?\DedexBundle\Entity\Ern381\EventDateType $preOrderReleaseDate = null)
    {
        $this->preOrderReleaseDate = $preOrderReleaseDate;
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
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate may not be later than the StartDate for the Deal. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate may not be later than the StartDate for the Deal. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate may not be later than the StartDate for the Deal. CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate may not be later than the StartDate for the Deal. CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDate is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDate may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the Release is made first available for display. If other Track list, cover art and clip preview dates are not provided, then this date covers them as well (assuming clips are available). If no ReleaseDisplayStartDate is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDate may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DateTime $releaseDisplayStartDateTime
     * @return self
     */
    public function setReleaseDisplayStartDateTime(?\DateTime $releaseDisplayStartDateTime = null)
    {
        $this->releaseDisplayStartDateTime = $releaseDisplayStartDateTime;
        return $this;
    }

    /**
     * Gets as trackListingPreviewStartDateTime
     *
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate may not be later than the StartDate for the Deal. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDate is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDate may not be later than the StartDate for the Deal. The TrackListingPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DateTime $trackListingPreviewStartDateTime
     * @return self
     */
    public function setTrackListingPreviewStartDateTime(?\DateTime $trackListingPreviewStartDateTime = null)
    {
        $this->trackListingPreviewStartDateTime = $trackListingPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as coverArtPreviewStartDateTime
     *
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate may not be later than the StartDate for the Deal. CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDate is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDate may not be later than the StartDate for the Deal. CoverArtPreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DateTime $coverArtPreviewStartDateTime
     * @return self
     */
    public function setCoverArtPreviewStartDateTime(?\DateTime $coverArtPreviewStartDateTime = null)
    {
        $this->coverArtPreviewStartDateTime = $coverArtPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as clipPreviewStartDateTime
     *
     * A Date on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDate is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDate may not be later than the StartDate for the Deal. The ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Date on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDate is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDate may not be later than the StartDate for the Deal. The ClipPrevicePreviewStartDate shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DateTime $clipPreviewStartDateTime
     * @return self
     */
    public function setClipPreviewStartDateTime(?\DateTime $clipPreviewStartDateTime = null)
    {
        $this->clipPreviewStartDateTime = $clipPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as preOrderPreviewDate
     *
     * A Composite containing details of the Date and Place of the Event in which the pre-ordered Release is made first available for previewing (it overrides the generic ReleaseDisplayStartDate if supplied). If no PreOrderPreviewDate is provided, the StartDate for the Deal is used instead. The PreOrderPreviewDate may not be later than the StartDate for the Deal. This element has been deprecated and may be deleted in a future version of this message. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getPreOrderPreviewDate()
    {
        return $this->preOrderPreviewDate;
    }

    /**
     * Sets a new preOrderPreviewDate
     *
     * A Composite containing details of the Date and Place of the Event in which the pre-ordered Release is made first available for previewing (it overrides the generic ReleaseDisplayStartDate if supplied). If no PreOrderPreviewDate is provided, the StartDate for the Deal is used instead. The PreOrderPreviewDate may not be later than the StartDate for the Deal. This element has been deprecated and may be deleted in a future version of this message. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $preOrderPreviewDate
     * @return self
     */
    public function setPreOrderPreviewDate(?\DedexBundle\Entity\Ern381\EventDateType $preOrderPreviewDate = null)
    {
        $this->preOrderPreviewDate = $preOrderPreviewDate;
        return $this;
    }

    /**
     * Gets as preOrderPreviewDateTime
     *
     * A Composite containing details of the Date and Place of the Event in which the pre-ordered Release is made first available for previewing (it overrides the generic ReleaseDisplayStartDate if supplied). If no PreOrderPreviewDate is provided, the StartDate for the Deal is used instead. The PreOrderPreviewDate may not be later than the StartDate for the Deal. This element has been deprecated and may be deleted in a future version of this message. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DateTime
     */
    public function getPreOrderPreviewDateTime()
    {
        return $this->preOrderPreviewDateTime;
    }

    /**
     * Sets a new preOrderPreviewDateTime
     *
     * A Composite containing details of the Date and Place of the Event in which the pre-ordered Release is made first available for previewing (it overrides the generic ReleaseDisplayStartDate if supplied). If no PreOrderPreviewDate is provided, the StartDate for the Deal is used instead. The PreOrderPreviewDate may not be later than the StartDate for the Deal. This element has been deprecated and may be deleted in a future version of this message. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DateTime $preOrderPreviewDateTime
     * @return self
     */
    public function setPreOrderPreviewDateTime(?\DateTime $preOrderPreviewDateTime = null)
    {
        $this->preOrderPreviewDateTime = $preOrderPreviewDateTime;
        return $this;
    }

    /**
     * Gets as preOrderIncentiveResourceList
     *
     * A Composite containing details of one or more Resources that are only available when the Release is purchased during a pre-order period (delivery is typically at ReleaseDate).
     *
     * @return \DedexBundle\Entity\Ern381\DealResourceReferenceListType
     */
    public function getPreOrderIncentiveResourceList()
    {
        return $this->preOrderIncentiveResourceList;
    }

    /**
     * Sets a new preOrderIncentiveResourceList
     *
     * A Composite containing details of one or more Resources that are only available when the Release is purchased during a pre-order period (delivery is typically at ReleaseDate).
     *
     * @param \DedexBundle\Entity\Ern381\DealResourceReferenceListType $preOrderIncentiveResourceList
     * @return self
     */
    public function setPreOrderIncentiveResourceList(?\DedexBundle\Entity\Ern381\DealResourceReferenceListType $preOrderIncentiveResourceList = null)
    {
        $this->preOrderIncentiveResourceList = $preOrderIncentiveResourceList;
        return $this;
    }

    /**
     * Gets as instantGratificationResourceList
     *
     * A Composite containing details of one or more Resources that are only available for download as soon as the Release is purchased (i.e. before the ReleaseDate).
     *
     * @return \DedexBundle\Entity\Ern381\DealResourceReferenceListType
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
     * @param \DedexBundle\Entity\Ern381\DealResourceReferenceListType $instantGratificationResourceList
     * @return self
     */
    public function setInstantGratificationResourceList(?\DedexBundle\Entity\Ern381\DealResourceReferenceListType $instantGratificationResourceList = null)
    {
        $this->instantGratificationResourceList = $instantGratificationResourceList;
        return $this;
    }

    /**
     * Gets as isExclusive
     *
     * The Flag indicating whether the Deal is exclusive (=true) or not (=false) to the MessageRecipient with respect to the relevant Territory(ies), Time(s) and Release(s). For other Territory(ies), or Time(s), other DSPs might be able to sell the Release(s). The exclusivity is in accordance with the agreement between the MessageSender and MessageRecipient.
     *
     * @return bool
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * Sets a new isExclusive
     *
     * The Flag indicating whether the Deal is exclusive (=true) or not (=false) to the MessageRecipient with respect to the relevant Territory(ies), Time(s) and Release(s). For other Territory(ies), or Time(s), other DSPs might be able to sell the Release(s). The exclusivity is in accordance with the agreement between the MessageSender and MessageRecipient.
     *
     * @param bool $isExclusive
     * @return self
     */
    public function setIsExclusive($isExclusive)
    {
        $this->isExclusive = $isExclusive;
        return $this;
    }

    /**
     * Adds as relatedReleaseOfferSet
     *
     * A Composite containing details of one or more offers related to the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\RelatedReleaseOfferSetType $relatedReleaseOfferSet
     */
    public function addToRelatedReleaseOfferSet(\DedexBundle\Entity\Ern381\RelatedReleaseOfferSetType $relatedReleaseOfferSet)
    {
        $this->relatedReleaseOfferSet[] = $relatedReleaseOfferSet;
        return $this;
    }

    /**
     * isset relatedReleaseOfferSet
     *
     * A Composite containing details of one or more offers related to the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedReleaseOfferSet($index)
    {
        return isset($this->relatedReleaseOfferSet[$index]);
    }

    /**
     * unset relatedReleaseOfferSet
     *
     * A Composite containing details of one or more offers related to the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedReleaseOfferSet($index)
    {
        unset($this->relatedReleaseOfferSet[$index]);
    }

    /**
     * Gets as relatedReleaseOfferSet
     *
     * A Composite containing details of one or more offers related to the Release.
     *
     * @return \DedexBundle\Entity\Ern381\RelatedReleaseOfferSetType[]
     */
    public function getRelatedReleaseOfferSet()
    {
        return $this->relatedReleaseOfferSet;
    }

    /**
     * Sets a new relatedReleaseOfferSet
     *
     * A Composite containing details of one or more offers related to the Release.
     *
     * @param \DedexBundle\Entity\Ern381\RelatedReleaseOfferSetType[] $relatedReleaseOfferSet
     * @return self
     */
    public function setRelatedReleaseOfferSet(array $relatedReleaseOfferSet = null)
    {
        $this->relatedReleaseOfferSet = $relatedReleaseOfferSet;
        return $this;
    }

    /**
     * Gets as physicalReturns
     *
     * A Composite containing details of physical returns.
     *
     * @return \DedexBundle\Entity\Ern381\PhysicalReturnsType
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
     * @param \DedexBundle\Entity\Ern381\PhysicalReturnsType $physicalReturns
     * @return self
     */
    public function setPhysicalReturns(?\DedexBundle\Entity\Ern381\PhysicalReturnsType $physicalReturns = null)
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

    /**
     * Adds as rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\RightsClaimPolicyType $rightsClaimPolicy
     */
    public function addToRightsClaimPolicy(\DedexBundle\Entity\Ern381\RightsClaimPolicyType $rightsClaimPolicy)
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
     * @return \DedexBundle\Entity\Ern381\RightsClaimPolicyType[]
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
     * @param \DedexBundle\Entity\Ern381\RightsClaimPolicyType[] $rightsClaimPolicy
     * @return self
     */
    public function setRightsClaimPolicy(array $rightsClaimPolicy = null)
    {
        $this->rightsClaimPolicy = $rightsClaimPolicy;
        return $this;
    }

    /**
     * Adds as webPolicy
     *
     * A Composite containing details of UserGeneratedContent permissions.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\WebPolicyType $webPolicy
     */
    public function addToWebPolicy(\DedexBundle\Entity\Ern381\WebPolicyType $webPolicy)
    {
        $this->webPolicy[] = $webPolicy;
        return $this;
    }

    /**
     * isset webPolicy
     *
     * A Composite containing details of UserGeneratedContent permissions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWebPolicy($index)
    {
        return isset($this->webPolicy[$index]);
    }

    /**
     * unset webPolicy
     *
     * A Composite containing details of UserGeneratedContent permissions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWebPolicy($index)
    {
        unset($this->webPolicy[$index]);
    }

    /**
     * Gets as webPolicy
     *
     * A Composite containing details of UserGeneratedContent permissions.
     *
     * @return \DedexBundle\Entity\Ern381\WebPolicyType[]
     */
    public function getWebPolicy()
    {
        return $this->webPolicy;
    }

    /**
     * Sets a new webPolicy
     *
     * A Composite containing details of UserGeneratedContent permissions.
     *
     * @param \DedexBundle\Entity\Ern381\WebPolicyType[] $webPolicy
     * @return self
     */
    public function setWebPolicy(array $webPolicy = null)
    {
        $this->webPolicy = $webPolicy;
        return $this;
    }
}

