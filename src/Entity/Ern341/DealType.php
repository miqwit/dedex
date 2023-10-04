<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing DealType
 *
 * A ddex:Composite containing details (in full or in summary) of a ddex:Deal made between a ddex:DSP (as ddex:Licensee) and a ddex:Licensor of ddex:Works or ddex:Releases. When any new DealTerms are added or removed from an existing ddex:Deal (different ddex:UseTypes, ddex:Prices, Territories, ddex:DistributionChannels) then a new ddex:Deal is created, and (if appropriate) the ddex:ValidityPeriod of the existing ddex:Deal should be terminated. The only changes which should be made to the DealTerms of an existing ddex:Deal are corrections required because of an earlier error or omission, or the addition of an ddex:EndDate to the Deal's ddex:ValidityPeriod.
 * XSD Type: Deal
 */
class DealType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:Deal as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing a ddex:Reference to a ddex:TextDocument containing details of the ern:Deal (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @var \DedexBundle\Entity\DdexC\DealReferenceType[] $dealReference
     */
    private $dealReference = [
        
    ];

    /**
     * A ddex:Composite containing details of the terms of the ern:Deal.
     *
     * @var \DedexBundle\Entity\Ern341\DealTermsType $dealTerms
     */
    private $dealTerms = null;

    /**
     * A ddex:Composite containing details of one or more Usages that govern a ddex:Resource in the ern:Deal where the Usage of the ddex:Resource differs from the Usage of the other ddex:Resources in the same ddex:Release.
     *
     * @var \DedexBundle\Entity\Ern341\ResourceUsageType $resourceUsage
     */
    private $resourceUsage = null;

    /**
     * A ddex:Composite containing a list of ddex:DealTechnicalResourceDetailsReferences for the ern:Deal.
     *
     * @var string[] $dealTechnicalResourceDetailsReferenceList
     */
    private $dealTechnicalResourceDetailsReferenceList = null;

    /**
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:DistributionChannel.
     *
     * @var \DedexBundle\Entity\DdexC\WebPageType[] $distributionChannelPage
     */
    private $distributionChannelPage = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:Deal as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Deal as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as dealReference
     *
     * A ddex:Composite containing a ddex:Reference to a ddex:TextDocument containing details of the ern:Deal (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\DealReferenceType $dealReference
     */
    public function addToDealReference(\DedexBundle\Entity\DdexC\DealReferenceType $dealReference)
    {
        $this->dealReference[] = $dealReference;
        return $this;
    }

    /**
     * isset dealReference
     *
     * A ddex:Composite containing a ddex:Reference to a ddex:TextDocument containing details of the ern:Deal (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealReference($index)
    {
        return isset($this->dealReference[$index]);
    }

    /**
     * unset dealReference
     *
     * A ddex:Composite containing a ddex:Reference to a ddex:TextDocument containing details of the ern:Deal (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealReference($index)
    {
        unset($this->dealReference[$index]);
    }

    /**
     * Gets as dealReference
     *
     * A ddex:Composite containing a ddex:Reference to a ddex:TextDocument containing details of the ern:Deal (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @return \DedexBundle\Entity\DdexC\DealReferenceType[]
     */
    public function getDealReference()
    {
        return $this->dealReference;
    }

    /**
     * Sets a new dealReference
     *
     * A ddex:Composite containing a ddex:Reference to a ddex:TextDocument containing details of the ern:Deal (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @param \DedexBundle\Entity\DdexC\DealReferenceType[] $dealReference
     * @return self
     */
    public function setDealReference(array $dealReference = null)
    {
        $this->dealReference = $dealReference;
        return $this;
    }

    /**
     * Gets as dealTerms
     *
     * A ddex:Composite containing details of the terms of the ern:Deal.
     *
     * @return \DedexBundle\Entity\Ern341\DealTermsType
     */
    public function getDealTerms()
    {
        return $this->dealTerms;
    }

    /**
     * Sets a new dealTerms
     *
     * A ddex:Composite containing details of the terms of the ern:Deal.
     *
     * @param \DedexBundle\Entity\Ern341\DealTermsType $dealTerms
     * @return self
     */
    public function setDealTerms(?\DedexBundle\Entity\Ern341\DealTermsType $dealTerms = null)
    {
        $this->dealTerms = $dealTerms;
        return $this;
    }

    /**
     * Gets as resourceUsage
     *
     * A ddex:Composite containing details of one or more Usages that govern a ddex:Resource in the ern:Deal where the Usage of the ddex:Resource differs from the Usage of the other ddex:Resources in the same ddex:Release.
     *
     * @return \DedexBundle\Entity\Ern341\ResourceUsageType
     */
    public function getResourceUsage()
    {
        return $this->resourceUsage;
    }

    /**
     * Sets a new resourceUsage
     *
     * A ddex:Composite containing details of one or more Usages that govern a ddex:Resource in the ern:Deal where the Usage of the ddex:Resource differs from the Usage of the other ddex:Resources in the same ddex:Release.
     *
     * @param \DedexBundle\Entity\Ern341\ResourceUsageType $resourceUsage
     * @return self
     */
    public function setResourceUsage(?\DedexBundle\Entity\Ern341\ResourceUsageType $resourceUsage = null)
    {
        $this->resourceUsage = $resourceUsage;
        return $this;
    }

    /**
     * Adds as dealTechnicalResourceDetailsReference
     *
     * A ddex:Composite containing a list of ddex:DealTechnicalResourceDetailsReferences for the ern:Deal.
     *
     * @return self
     * @param string $dealTechnicalResourceDetailsReference
     */
    public function addToDealTechnicalResourceDetailsReferenceList($dealTechnicalResourceDetailsReference)
    {
        $this->dealTechnicalResourceDetailsReferenceList[] = $dealTechnicalResourceDetailsReference;
        return $this;
    }

    /**
     * isset dealTechnicalResourceDetailsReferenceList
     *
     * A ddex:Composite containing a list of ddex:DealTechnicalResourceDetailsReferences for the ern:Deal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealTechnicalResourceDetailsReferenceList($index)
    {
        return isset($this->dealTechnicalResourceDetailsReferenceList[$index]);
    }

    /**
     * unset dealTechnicalResourceDetailsReferenceList
     *
     * A ddex:Composite containing a list of ddex:DealTechnicalResourceDetailsReferences for the ern:Deal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealTechnicalResourceDetailsReferenceList($index)
    {
        unset($this->dealTechnicalResourceDetailsReferenceList[$index]);
    }

    /**
     * Gets as dealTechnicalResourceDetailsReferenceList
     *
     * A ddex:Composite containing a list of ddex:DealTechnicalResourceDetailsReferences for the ern:Deal.
     *
     * @return string[]
     */
    public function getDealTechnicalResourceDetailsReferenceList()
    {
        return $this->dealTechnicalResourceDetailsReferenceList;
    }

    /**
     * Sets a new dealTechnicalResourceDetailsReferenceList
     *
     * A ddex:Composite containing a list of ddex:DealTechnicalResourceDetailsReferences for the ern:Deal.
     *
     * @param string $dealTechnicalResourceDetailsReferenceList
     * @return self
     */
    public function setDealTechnicalResourceDetailsReferenceList(array $dealTechnicalResourceDetailsReferenceList = null)
    {
        $this->dealTechnicalResourceDetailsReferenceList = $dealTechnicalResourceDetailsReferenceList;
        return $this;
    }

    /**
     * Adds as distributionChannelPage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:DistributionChannel.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\WebPageType $distributionChannelPage
     */
    public function addToDistributionChannelPage(\DedexBundle\Entity\DdexC\WebPageType $distributionChannelPage)
    {
        $this->distributionChannelPage[] = $distributionChannelPage;
        return $this;
    }

    /**
     * isset distributionChannelPage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:DistributionChannel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributionChannelPage($index)
    {
        return isset($this->distributionChannelPage[$index]);
    }

    /**
     * unset distributionChannelPage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:DistributionChannel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributionChannelPage($index)
    {
        unset($this->distributionChannelPage[$index]);
    }

    /**
     * Gets as distributionChannelPage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:DistributionChannel.
     *
     * @return \DedexBundle\Entity\DdexC\WebPageType[]
     */
    public function getDistributionChannelPage()
    {
        return $this->distributionChannelPage;
    }

    /**
     * Sets a new distributionChannelPage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:DistributionChannel.
     *
     * @param \DedexBundle\Entity\DdexC\WebPageType[] $distributionChannelPage
     * @return self
     */
    public function setDistributionChannelPage(array $distributionChannelPage = null)
    {
        $this->distributionChannelPage = $distributionChannelPage;
        return $this;
    }
}

