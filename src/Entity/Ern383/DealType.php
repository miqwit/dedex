<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing DealType
 *
 * A Composite containing details (in full or in
 *  summary) of a Deal made between a DSP (as Licensee) and a Licensor of Works or Releases.
 *  When any new DealTerms are added or removed from an existing Deal (different UseTypes,
 *  Prices, Territories, DistributionChannels) then a new Deal is created, and (if
 *  appropriate) the ValidityPeriod of the existing Deal should be terminated. The only
 *  changes which should be made to the DealTerms of an existing Deal are corrections
 *  required because of an earlier error or omission, or the addition of an EndDate to the
 *  Deal's ValidityPeriod.
 * XSD Type: Deal
 */
class DealType
{
    /**
     * The Language and script for the Elements of
     *  the Deal as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing a Reference to a
     *  TextDocument containing details of the Deal (in the form of an Identifier, Name or
     *  Description).
     *
     * @var \DedexBundle\Entity\Ern383\DealReferenceType[] $dealReference
     */
    private $dealReference = [
        
    ];

    /**
     * A Composite containing details of the
     *  terms of the Deal.
     *
     * @var \DedexBundle\Entity\Ern383\DealTermsType $dealTerms
     */
    private $dealTerms = null;

    /**
     * A Composite containing details of one or
     *  more Usages that govern a Resource in the Deal where the Usage of the Resource
     *  differs from the Usage of the other Resources in the same
     *  Release.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceUsageType $resourceUsage
     */
    private $resourceUsage = null;

    /**
     * A Composite containing a list of
     *  DealTechnicalResourceDetailsReferences for the Deal.
     *
     * @var string[] $dealTechnicalResourceDetailsReferenceList
     */
    private $dealTechnicalResourceDetailsReferenceList = null;

    /**
     * A Composite containing details of a
     *  WebPage for the DistributionChannel.
     *
     * @var \DedexBundle\Entity\Ern383\WebPageType[] $distributionChannelPage
     */
    private $distributionChannelPage = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the Deal as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
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
     *  the Deal as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
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
     * Adds as dealReference
     *
     * A Composite containing a Reference to a
     *  TextDocument containing details of the Deal (in the form of an Identifier, Name or
     *  Description).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\DealReferenceType $dealReference
     */
    public function addToDealReference(\DedexBundle\Entity\Ern383\DealReferenceType $dealReference)
    {
        $this->dealReference[] = $dealReference;
        return $this;
    }

    /**
     * isset dealReference
     *
     * A Composite containing a Reference to a
     *  TextDocument containing details of the Deal (in the form of an Identifier, Name or
     *  Description).
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
     * A Composite containing a Reference to a
     *  TextDocument containing details of the Deal (in the form of an Identifier, Name or
     *  Description).
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
     * A Composite containing a Reference to a
     *  TextDocument containing details of the Deal (in the form of an Identifier, Name or
     *  Description).
     *
     * @return \DedexBundle\Entity\Ern383\DealReferenceType[]
     */
    public function getDealReference()
    {
        return $this->dealReference;
    }

    /**
     * Sets a new dealReference
     *
     * A Composite containing a Reference to a
     *  TextDocument containing details of the Deal (in the form of an Identifier, Name or
     *  Description).
     *
     * @param \DedexBundle\Entity\Ern383\DealReferenceType[] $dealReference
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
     * A Composite containing details of the
     *  terms of the Deal.
     *
     * @return \DedexBundle\Entity\Ern383\DealTermsType
     */
    public function getDealTerms()
    {
        return $this->dealTerms;
    }

    /**
     * Sets a new dealTerms
     *
     * A Composite containing details of the
     *  terms of the Deal.
     *
     * @param \DedexBundle\Entity\Ern383\DealTermsType $dealTerms
     * @return self
     */
    public function setDealTerms(?\DedexBundle\Entity\Ern383\DealTermsType $dealTerms = null)
    {
        $this->dealTerms = $dealTerms;
        return $this;
    }

    /**
     * Gets as resourceUsage
     *
     * A Composite containing details of one or
     *  more Usages that govern a Resource in the Deal where the Usage of the Resource
     *  differs from the Usage of the other Resources in the same
     *  Release.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceUsageType
     */
    public function getResourceUsage()
    {
        return $this->resourceUsage;
    }

    /**
     * Sets a new resourceUsage
     *
     * A Composite containing details of one or
     *  more Usages that govern a Resource in the Deal where the Usage of the Resource
     *  differs from the Usage of the other Resources in the same
     *  Release.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceUsageType $resourceUsage
     * @return self
     */
    public function setResourceUsage(?\DedexBundle\Entity\Ern383\ResourceUsageType $resourceUsage = null)
    {
        $this->resourceUsage = $resourceUsage;
        return $this;
    }

    /**
     * Adds as dealTechnicalResourceDetailsReference
     *
     * A Composite containing a list of
     *  DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of
     *  DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of
     *  DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of
     *  DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of
     *  DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing details of a
     *  WebPage for the DistributionChannel.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\WebPageType $distributionChannelPage
     */
    public function addToDistributionChannelPage(\DedexBundle\Entity\Ern383\WebPageType $distributionChannelPage)
    {
        $this->distributionChannelPage[] = $distributionChannelPage;
        return $this;
    }

    /**
     * isset distributionChannelPage
     *
     * A Composite containing details of a
     *  WebPage for the DistributionChannel.
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
     * A Composite containing details of a
     *  WebPage for the DistributionChannel.
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
     * A Composite containing details of a
     *  WebPage for the DistributionChannel.
     *
     * @return \DedexBundle\Entity\Ern383\WebPageType[]
     */
    public function getDistributionChannelPage()
    {
        return $this->distributionChannelPage;
    }

    /**
     * Sets a new distributionChannelPage
     *
     * A Composite containing details of a
     *  WebPage for the DistributionChannel.
     *
     * @param \DedexBundle\Entity\Ern383\WebPageType[] $distributionChannelPage
     * @return self
     */
    public function setDistributionChannelPage(array $distributionChannelPage = null)
    {
        $this->distributionChannelPage = $distributionChannelPage;
        return $this;
    }
}

