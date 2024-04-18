<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing DealTermsType
 *
 * A ddex:Composite containing details of the terms of a ddex:Deal.
 * XSD Type: DealTerms
 */
class DealTermsType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:DealTerms as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the fundamental business model which applies to the ddex:Deal (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to a ddex:Release to which the ddex:Deal applies.
     *
     * @var \DedexBundle\Entity\DdexC\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * The ddex:Flag indicating whether all ddex:Deals are cancelled for the given Territories (=True) or not (=False). This ddex:Flag can be used in conjunction with a ddex:StartDate of a ddex:ValidityPeriod to indicate the point in time from which all ddex:Deals are cancelled.
     *
     * @var bool $allDealsCancelled
     */
    private $allDealsCancelled = null;

    /**
     * The ddex:Flag indicating whether all ddex:Releases referred to are to be taken down by the ddex:MessageRecipient. This includes that all ddex:Deals referred to in a specific ddex:Composite are cancelled and no information about the ddex:Releases should be displayed to the end user on the DSP's website (=True) or not (=False). This ddex:Flag can be used in conjunction with a ddex:StartDate of a ddex:ValidityPeriod to indicate the point in time from which all ddex:Deals are cancelled.
     *
     * @var bool $takeDown
     */
    private $takeDown = null;

    /**
     * A ddex:Territory in which the ddex:Deal applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory in which the ddex:Deal does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:DSP through whose ddex:DistributionChannel the sales are permitted. If none are provided no limitations on the ddex:DistributionChannels are given.
     *
     * @var \DedexBundle\Entity\DdexC\DSPType[] $distributionChannel
     */
    private $distributionChannel = [
        
    ];

    /**
     * A ddex:Composite containing details of excluded ddex:DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ddex:ReleaseDeal, except those that are listed herein.
     *
     * @var \DedexBundle\Entity\DdexC\DSPType[] $excludedDistributionChannel
     */
    private $excludedDistributionChannel = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Price. Note that this ddex:Price applies to all ddex:UseTypes referenced in this ddex:Composite.
     *
     * @var \DedexBundle\Entity\DdexC\PriceInformationType[] $priceInformation
     */
    private $priceInformation = [
        
    ];

    /**
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
     *
     * @var bool $isPromotional
     */
    private $isPromotional = null;

    /**
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @var \DedexBundle\Entity\DdexC\PromotionalCodeType $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * A ddex:Composite containing details about a ddex:Period of ddex:Time during which the ddex:Deal is valid. No ddex:StartDate in this ddex:Composite means that the ddex:Deal is valid as per contractual relationship between ddex:MessageSender and ddex:MessageRecipient. No ddex:EndDate in this ddex:Composite means that the ddex:Deal is valid until further notice.
     *
     * @var \DedexBundle\Entity\DdexC\PeriodType[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Period the ddex:DSP may rent something to a ddex:Customer.
     *
     * @var \DedexBundle\Entity\DdexC\ConsumerRentalPeriodType $consumerRentalPeriod
     */
    private $consumerRentalPeriod = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the related ddex:Release is made available for pre-ordering.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $preOrderReleaseDate
     */
    private $preOrderReleaseDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the pre-ordered ddex:Release is made first available for previewing.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $preOrderPreviewDate
     */
    private $preOrderPreviewDate = null;

    /**
     * The ddex:Flag indicating whether the ddex:Deal is exclusive (=True) or not (=False) to the ddex:MessageRecipient with respect to the relevant Territory(ies), Time(s) and Release(s). For other Territory(ies), or Time(s), other ddex:DSPs might be able to sell the Release(s). The exclusivity is in accordance with the agreement between the ddex:MessageSender and ddex:MessageRecipient.
     *
     * @var bool $isExclusive
     */
    private $isExclusive = null;

    /**
     * A ddex:Composite containing details of one or more offers related to the ddex:Release.
     *
     * @var \DedexBundle\Entity\Ern341\RelatedReleaseOfferSetType[] $relatedReleaseOfferSet
     */
    private $relatedReleaseOfferSet = [
        
    ];

    /**
     * A ddex:Composite containing details of physical returns.
     *
     * @var \DedexBundle\Entity\Ern341\PhysicalReturnsType $physicalReturns
     */
    private $physicalReturns = null;

    /**
     * A number of ddex:Products per carton. This is the smallest number of ddex:Products that can be ordered.
     *
     * @var int $numberOfProductsPerCarton
     */
    private $numberOfProductsPerCarton = null;

    /**
     * A ddex:Composite containing details of a rights claim policy.
     *
     * @var \DedexBundle\Entity\Ern341\RightsClaimPolicyType[] $rightsClaimPolicy
     */
    private $rightsClaimPolicy = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:UserGeneratedContent permissions.
     *
     * @var \DedexBundle\Entity\Ern341\WebPolicyType[] $webPolicy
     */
    private $webPolicy = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:DealTerms as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:DealTerms as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as commercialModelType
     *
     * A ddex:Composite containing details of the fundamental business model which applies to the ddex:Deal (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model which applies to the ddex:Deal (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model which applies to the ddex:Deal (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model which applies to the ddex:Deal (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model which applies to the ddex:Deal (e.g. ddex:SubscriptionModel and ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * Adds as usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to a ddex:Release to which the ddex:Deal applies.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UsageType $usage
     */
    public function addToUsage(\DedexBundle\Entity\DdexC\UsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to a ddex:Release to which the ddex:Deal applies.
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
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to a ddex:Release to which the ddex:Deal applies.
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
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to a ddex:Release to which the ddex:Deal applies.
     *
     * @return \DedexBundle\Entity\DdexC\UsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to a ddex:Release to which the ddex:Deal applies.
     *
     * @param \DedexBundle\Entity\DdexC\UsageType[] $usage
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
     * The ddex:Flag indicating whether all ddex:Deals are cancelled for the given Territories (=True) or not (=False). This ddex:Flag can be used in conjunction with a ddex:StartDate of a ddex:ValidityPeriod to indicate the point in time from which all ddex:Deals are cancelled.
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
     * The ddex:Flag indicating whether all ddex:Deals are cancelled for the given Territories (=True) or not (=False). This ddex:Flag can be used in conjunction with a ddex:StartDate of a ddex:ValidityPeriod to indicate the point in time from which all ddex:Deals are cancelled.
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
     * The ddex:Flag indicating whether all ddex:Releases referred to are to be taken down by the ddex:MessageRecipient. This includes that all ddex:Deals referred to in a specific ddex:Composite are cancelled and no information about the ddex:Releases should be displayed to the end user on the DSP's website (=True) or not (=False). This ddex:Flag can be used in conjunction with a ddex:StartDate of a ddex:ValidityPeriod to indicate the point in time from which all ddex:Deals are cancelled.
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
     * The ddex:Flag indicating whether all ddex:Releases referred to are to be taken down by the ddex:MessageRecipient. This includes that all ddex:Deals referred to in a specific ddex:Composite are cancelled and no information about the ddex:Releases should be displayed to the end user on the DSP's website (=True) or not (=False). This ddex:Flag can be used in conjunction with a ddex:StartDate of a ddex:ValidityPeriod to indicate the point in time from which all ddex:Deals are cancelled.
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
     * A ddex:Territory in which the ddex:Deal applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory in which the ddex:Deal does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * Adds as distributionChannel
     *
     * A ddex:Composite containing details of the ddex:DSP through whose ddex:DistributionChannel the sales are permitted. If none are provided no limitations on the ddex:DistributionChannels are given.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\DSPType $distributionChannel
     */
    public function addToDistributionChannel(\DedexBundle\Entity\DdexC\DSPType $distributionChannel)
    {
        $this->distributionChannel[] = $distributionChannel;
        return $this;
    }

    /**
     * isset distributionChannel
     *
     * A ddex:Composite containing details of the ddex:DSP through whose ddex:DistributionChannel the sales are permitted. If none are provided no limitations on the ddex:DistributionChannels are given.
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
     * A ddex:Composite containing details of the ddex:DSP through whose ddex:DistributionChannel the sales are permitted. If none are provided no limitations on the ddex:DistributionChannels are given.
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
     * A ddex:Composite containing details of the ddex:DSP through whose ddex:DistributionChannel the sales are permitted. If none are provided no limitations on the ddex:DistributionChannels are given.
     *
     * @return \DedexBundle\Entity\DdexC\DSPType[]
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }

    /**
     * Sets a new distributionChannel
     *
     * A ddex:Composite containing details of the ddex:DSP through whose ddex:DistributionChannel the sales are permitted. If none are provided no limitations on the ddex:DistributionChannels are given.
     *
     * @param \DedexBundle\Entity\DdexC\DSPType[] $distributionChannel
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
     * A ddex:Composite containing details of excluded ddex:DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ddex:ReleaseDeal, except those that are listed herein.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\DSPType $excludedDistributionChannel
     */
    public function addToExcludedDistributionChannel(\DedexBundle\Entity\DdexC\DSPType $excludedDistributionChannel)
    {
        $this->excludedDistributionChannel[] = $excludedDistributionChannel;
        return $this;
    }

    /**
     * isset excludedDistributionChannel
     *
     * A ddex:Composite containing details of excluded ddex:DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ddex:ReleaseDeal, except those that are listed herein.
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
     * A ddex:Composite containing details of excluded ddex:DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ddex:ReleaseDeal, except those that are listed herein.
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
     * A ddex:Composite containing details of excluded ddex:DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ddex:ReleaseDeal, except those that are listed herein.
     *
     * @return \DedexBundle\Entity\DdexC\DSPType[]
     */
    public function getExcludedDistributionChannel()
    {
        return $this->excludedDistributionChannel;
    }

    /**
     * Sets a new excludedDistributionChannel
     *
     * A ddex:Composite containing details of excluded ddex:DSP. This is used in an aggregator model where all agreed partners of the aggregators may use a ddex:ReleaseDeal, except those that are listed herein.
     *
     * @param \DedexBundle\Entity\DdexC\DSPType[] $excludedDistributionChannel
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
     * A ddex:Composite containing details of a ddex:Price. Note that this ddex:Price applies to all ddex:UseTypes referenced in this ddex:Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\PriceInformationType $priceInformation
     */
    public function addToPriceInformation(\DedexBundle\Entity\DdexC\PriceInformationType $priceInformation)
    {
        $this->priceInformation[] = $priceInformation;
        return $this;
    }

    /**
     * isset priceInformation
     *
     * A ddex:Composite containing details of a ddex:Price. Note that this ddex:Price applies to all ddex:UseTypes referenced in this ddex:Composite.
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
     * A ddex:Composite containing details of a ddex:Price. Note that this ddex:Price applies to all ddex:UseTypes referenced in this ddex:Composite.
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
     * A ddex:Composite containing details of a ddex:Price. Note that this ddex:Price applies to all ddex:UseTypes referenced in this ddex:Composite.
     *
     * @return \DedexBundle\Entity\DdexC\PriceInformationType[]
     */
    public function getPriceInformation()
    {
        return $this->priceInformation;
    }

    /**
     * Sets a new priceInformation
     *
     * A ddex:Composite containing details of a ddex:Price. Note that this ddex:Price applies to all ddex:UseTypes referenced in this ddex:Composite.
     *
     * @param \DedexBundle\Entity\DdexC\PriceInformationType[] $priceInformation
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
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
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
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
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
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @return \DedexBundle\Entity\DdexC\PromotionalCodeType
     */
    public function getPromotionalCode()
    {
        return $this->promotionalCode;
    }

    /**
     * Sets a new promotionalCode
     *
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @param \DedexBundle\Entity\DdexC\PromotionalCodeType $promotionalCode
     * @return self
     */
    public function setPromotionalCode(?\DedexBundle\Entity\DdexC\PromotionalCodeType $promotionalCode = null)
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * A ddex:Composite containing details about a ddex:Period of ddex:Time during which the ddex:Deal is valid. No ddex:StartDate in this ddex:Composite means that the ddex:Deal is valid as per contractual relationship between ddex:MessageSender and ddex:MessageRecipient. No ddex:EndDate in this ddex:Composite means that the ddex:Deal is valid until further notice.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\PeriodType $validityPeriod
     */
    public function addToValidityPeriod(\DedexBundle\Entity\DdexC\PeriodType $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * A ddex:Composite containing details about a ddex:Period of ddex:Time during which the ddex:Deal is valid. No ddex:StartDate in this ddex:Composite means that the ddex:Deal is valid as per contractual relationship between ddex:MessageSender and ddex:MessageRecipient. No ddex:EndDate in this ddex:Composite means that the ddex:Deal is valid until further notice.
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
     * A ddex:Composite containing details about a ddex:Period of ddex:Time during which the ddex:Deal is valid. No ddex:StartDate in this ddex:Composite means that the ddex:Deal is valid as per contractual relationship between ddex:MessageSender and ddex:MessageRecipient. No ddex:EndDate in this ddex:Composite means that the ddex:Deal is valid until further notice.
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
     * A ddex:Composite containing details about a ddex:Period of ddex:Time during which the ddex:Deal is valid. No ddex:StartDate in this ddex:Composite means that the ddex:Deal is valid as per contractual relationship between ddex:MessageSender and ddex:MessageRecipient. No ddex:EndDate in this ddex:Composite means that the ddex:Deal is valid until further notice.
     *
     * @return \DedexBundle\Entity\DdexC\PeriodType[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A ddex:Composite containing details about a ddex:Period of ddex:Time during which the ddex:Deal is valid. No ddex:StartDate in this ddex:Composite means that the ddex:Deal is valid as per contractual relationship between ddex:MessageSender and ddex:MessageRecipient. No ddex:EndDate in this ddex:Composite means that the ddex:Deal is valid until further notice.
     *
     * @param \DedexBundle\Entity\DdexC\PeriodType[] $validityPeriod
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
     * A ddex:Composite containing details of a ddex:Period the ddex:DSP may rent something to a ddex:Customer.
     *
     * @return \DedexBundle\Entity\DdexC\ConsumerRentalPeriodType
     */
    public function getConsumerRentalPeriod()
    {
        return $this->consumerRentalPeriod;
    }

    /**
     * Sets a new consumerRentalPeriod
     *
     * A ddex:Composite containing details of a ddex:Period the ddex:DSP may rent something to a ddex:Customer.
     *
     * @param \DedexBundle\Entity\DdexC\ConsumerRentalPeriodType $consumerRentalPeriod
     * @return self
     */
    public function setConsumerRentalPeriod(?\DedexBundle\Entity\DdexC\ConsumerRentalPeriodType $consumerRentalPeriod = null)
    {
        $this->consumerRentalPeriod = $consumerRentalPeriod;
        return $this;
    }

    /**
     * Gets as preOrderReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the related ddex:Release is made available for pre-ordering.
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getPreOrderReleaseDate()
    {
        return $this->preOrderReleaseDate;
    }

    /**
     * Sets a new preOrderReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the related ddex:Release is made available for pre-ordering.
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $preOrderReleaseDate
     * @return self
     */
    public function setPreOrderReleaseDate(?\DedexBundle\Entity\DdexC\EventDateType $preOrderReleaseDate = null)
    {
        $this->preOrderReleaseDate = $preOrderReleaseDate;
        return $this;
    }

    /**
     * Gets as preOrderPreviewDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the pre-ordered ddex:Release is made first available for previewing.
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getPreOrderPreviewDate()
    {
        return $this->preOrderPreviewDate;
    }

    /**
     * Sets a new preOrderPreviewDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the pre-ordered ddex:Release is made first available for previewing.
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $preOrderPreviewDate
     * @return self
     */
    public function setPreOrderPreviewDate(?\DedexBundle\Entity\DdexC\EventDateType $preOrderPreviewDate = null)
    {
        $this->preOrderPreviewDate = $preOrderPreviewDate;
        return $this;
    }

    /**
     * Gets as isExclusive
     *
     * The ddex:Flag indicating whether the ddex:Deal is exclusive (=True) or not (=False) to the ddex:MessageRecipient with respect to the relevant Territory(ies), Time(s) and Release(s). For other Territory(ies), or Time(s), other ddex:DSPs might be able to sell the Release(s). The exclusivity is in accordance with the agreement between the ddex:MessageSender and ddex:MessageRecipient.
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
     * The ddex:Flag indicating whether the ddex:Deal is exclusive (=True) or not (=False) to the ddex:MessageRecipient with respect to the relevant Territory(ies), Time(s) and Release(s). For other Territory(ies), or Time(s), other ddex:DSPs might be able to sell the Release(s). The exclusivity is in accordance with the agreement between the ddex:MessageSender and ddex:MessageRecipient.
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
     * A ddex:Composite containing details of one or more offers related to the ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\RelatedReleaseOfferSetType $relatedReleaseOfferSet
     */
    public function addToRelatedReleaseOfferSet(\DedexBundle\Entity\Ern341\RelatedReleaseOfferSetType $relatedReleaseOfferSet)
    {
        $this->relatedReleaseOfferSet[] = $relatedReleaseOfferSet;
        return $this;
    }

    /**
     * isset relatedReleaseOfferSet
     *
     * A ddex:Composite containing details of one or more offers related to the ddex:Release.
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
     * A ddex:Composite containing details of one or more offers related to the ddex:Release.
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
     * A ddex:Composite containing details of one or more offers related to the ddex:Release.
     *
     * @return \DedexBundle\Entity\Ern341\RelatedReleaseOfferSetType[]
     */
    public function getRelatedReleaseOfferSet()
    {
        return $this->relatedReleaseOfferSet;
    }

    /**
     * Sets a new relatedReleaseOfferSet
     *
     * A ddex:Composite containing details of one or more offers related to the ddex:Release.
     *
     * @param \DedexBundle\Entity\Ern341\RelatedReleaseOfferSetType[] $relatedReleaseOfferSet
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
     * A ddex:Composite containing details of physical returns.
     *
     * @return \DedexBundle\Entity\Ern341\PhysicalReturnsType
     */
    public function getPhysicalReturns()
    {
        return $this->physicalReturns;
    }

    /**
     * Sets a new physicalReturns
     *
     * A ddex:Composite containing details of physical returns.
     *
     * @param \DedexBundle\Entity\Ern341\PhysicalReturnsType $physicalReturns
     * @return self
     */
    public function setPhysicalReturns(?\DedexBundle\Entity\Ern341\PhysicalReturnsType $physicalReturns = null)
    {
        $this->physicalReturns = $physicalReturns;
        return $this;
    }

    /**
     * Gets as numberOfProductsPerCarton
     *
     * A number of ddex:Products per carton. This is the smallest number of ddex:Products that can be ordered.
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
     * A number of ddex:Products per carton. This is the smallest number of ddex:Products that can be ordered.
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
     * A ddex:Composite containing details of a rights claim policy.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\RightsClaimPolicyType $rightsClaimPolicy
     */
    public function addToRightsClaimPolicy(\DedexBundle\Entity\Ern341\RightsClaimPolicyType $rightsClaimPolicy)
    {
        $this->rightsClaimPolicy[] = $rightsClaimPolicy;
        return $this;
    }

    /**
     * isset rightsClaimPolicy
     *
     * A ddex:Composite containing details of a rights claim policy.
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
     * A ddex:Composite containing details of a rights claim policy.
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
     * A ddex:Composite containing details of a rights claim policy.
     *
     * @return \DedexBundle\Entity\Ern341\RightsClaimPolicyType[]
     */
    public function getRightsClaimPolicy()
    {
        return $this->rightsClaimPolicy;
    }

    /**
     * Sets a new rightsClaimPolicy
     *
     * A ddex:Composite containing details of a rights claim policy.
     *
     * @param \DedexBundle\Entity\Ern341\RightsClaimPolicyType[] $rightsClaimPolicy
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
     * A ddex:Composite containing details of ddex:UserGeneratedContent permissions.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\WebPolicyType $webPolicy
     */
    public function addToWebPolicy(\DedexBundle\Entity\Ern341\WebPolicyType $webPolicy)
    {
        $this->webPolicy[] = $webPolicy;
        return $this;
    }

    /**
     * isset webPolicy
     *
     * A ddex:Composite containing details of ddex:UserGeneratedContent permissions.
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
     * A ddex:Composite containing details of ddex:UserGeneratedContent permissions.
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
     * A ddex:Composite containing details of ddex:UserGeneratedContent permissions.
     *
     * @return \DedexBundle\Entity\Ern341\WebPolicyType[]
     */
    public function getWebPolicy()
    {
        return $this->webPolicy;
    }

    /**
     * Sets a new webPolicy
     *
     * A ddex:Composite containing details of ddex:UserGeneratedContent permissions.
     *
     * @param \DedexBundle\Entity\Ern341\WebPolicyType[] $webPolicy
     * @return self
     */
    public function setWebPolicy(array $webPolicy = null)
    {
        $this->webPolicy = $webPolicy;
        return $this;
    }
}

