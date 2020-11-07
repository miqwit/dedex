<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DealType
 *
 * A Composite containing details (in full or in summary) of a Deal made between a DSP (as Licensee) and a Licensor of Works or Releases. When any new DealTerms are added or removed from an existing Deal (different UseTypes, Prices, Territories, DistributionChannels) then a new Deal is created, and (if appropriate) the ValidityPeriod of the existing Deal should be terminated. The only changes which should be made to the DealTerms of an existing Deal are corrections required because of an earlier error or omission, or the addition of an EndDate to the Deal's ValidityPeriod.
 * XSD Type: Deal
 */
class DealType
{

    /**
     * A Reference to a TextDocument containing details of the Deal (in the form of an Identifier, Name or Description).
     *
     * @var string[] $dealReference
     */
    private $dealReference = [
        
    ];

    /**
     * A Flag indicating whether the Deal is communicated outside the usual ERN delivery and identified by an Identifier in the DealReference element (=true) or not (=false). It would be up to the MessageSender and MessageRecipient to ensure that this Deal Identifier is unique.
     *
     * @var bool $isCommunicatedOutOfBand
     */
    private $isCommunicatedOutOfBand = null;

    /**
     * A Composite containing details of the terms of the Deal.
     *
     * @var \DedexBundle\Entity\Ern41\DealTermsType $dealTerms
     */
    private $dealTerms = null;

    /**
     * A Composite containing a list of DealTechnicalResourceDetailsReferences for the Deal.
     *
     * @var string[] $dealTechnicalResourceDetailsReferenceList
     */
    private $dealTechnicalResourceDetailsReferenceList = null;

    /**
     * A Composite containing details of a WebPage for the DistributionChannel.
     *
     * @var \DedexBundle\Entity\Ern41\DistributionChannelPageType[] $distributionChannelPage
     */
    private $distributionChannelPage = [
        
    ];

    /**
     * Adds as dealReference
     *
     * A Reference to a TextDocument containing details of the Deal (in the form of an Identifier, Name or Description).
     *
     * @return self
     * @param string $dealReference
     */
    public function addToDealReference($dealReference)
    {
        $this->dealReference[] = $dealReference;
        return $this;
    }

    /**
     * isset dealReference
     *
     * A Reference to a TextDocument containing details of the Deal (in the form of an Identifier, Name or Description).
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
     * A Reference to a TextDocument containing details of the Deal (in the form of an Identifier, Name or Description).
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
     * A Reference to a TextDocument containing details of the Deal (in the form of an Identifier, Name or Description).
     *
     * @return string[]
     */
    public function getDealReference()
    {
        return $this->dealReference;
    }

    /**
     * Sets a new dealReference
     *
     * A Reference to a TextDocument containing details of the Deal (in the form of an Identifier, Name or Description).
     *
     * @param string[] $dealReference
     * @return self
     */
    public function setDealReference(array $dealReference)
    {
        $this->dealReference = $dealReference;
        return $this;
    }

    /**
     * Gets as isCommunicatedOutOfBand
     *
     * A Flag indicating whether the Deal is communicated outside the usual ERN delivery and identified by an Identifier in the DealReference element (=true) or not (=false). It would be up to the MessageSender and MessageRecipient to ensure that this Deal Identifier is unique.
     *
     * @return bool
     */
    public function getIsCommunicatedOutOfBand()
    {
        return $this->isCommunicatedOutOfBand;
    }

    /**
     * Sets a new isCommunicatedOutOfBand
     *
     * A Flag indicating whether the Deal is communicated outside the usual ERN delivery and identified by an Identifier in the DealReference element (=true) or not (=false). It would be up to the MessageSender and MessageRecipient to ensure that this Deal Identifier is unique.
     *
     * @param bool $isCommunicatedOutOfBand
     * @return self
     */
    public function setIsCommunicatedOutOfBand($isCommunicatedOutOfBand)
    {
        $this->isCommunicatedOutOfBand = $isCommunicatedOutOfBand;
        return $this;
    }

    /**
     * Gets as dealTerms
     *
     * A Composite containing details of the terms of the Deal.
     *
     * @return \DedexBundle\Entity\Ern41\DealTermsType
     */
    public function getDealTerms()
    {
        return $this->dealTerms;
    }

    /**
     * Sets a new dealTerms
     *
     * A Composite containing details of the terms of the Deal.
     *
     * @param \DedexBundle\Entity\Ern41\DealTermsType $dealTerms
     * @return self
     */
    public function setDealTerms(\DedexBundle\Entity\Ern41\DealTermsType $dealTerms)
    {
        $this->dealTerms = $dealTerms;
        return $this;
    }

    /**
     * Adds as dealTechnicalResourceDetailsReference
     *
     * A Composite containing a list of DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of DealTechnicalResourceDetailsReferences for the Deal.
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
     * A Composite containing a list of DealTechnicalResourceDetailsReferences for the Deal.
     *
     * @param string $dealTechnicalResourceDetailsReferenceList
     * @return self
     */
    public function setDealTechnicalResourceDetailsReferenceList(array $dealTechnicalResourceDetailsReferenceList)
    {
        $this->dealTechnicalResourceDetailsReferenceList = $dealTechnicalResourceDetailsReferenceList;
        return $this;
    }

    /**
     * Adds as distributionChannelPage
     *
     * A Composite containing details of a WebPage for the DistributionChannel.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DistributionChannelPageType $distributionChannelPage
     */
    public function addToDistributionChannelPage(\DedexBundle\Entity\Ern41\DistributionChannelPageType $distributionChannelPage)
    {
        $this->distributionChannelPage[] = $distributionChannelPage;
        return $this;
    }

    /**
     * isset distributionChannelPage
     *
     * A Composite containing details of a WebPage for the DistributionChannel.
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
     * A Composite containing details of a WebPage for the DistributionChannel.
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
     * A Composite containing details of a WebPage for the DistributionChannel.
     *
     * @return \DedexBundle\Entity\Ern41\DistributionChannelPageType[]
     */
    public function getDistributionChannelPage()
    {
        return $this->distributionChannelPage;
    }

    /**
     * Sets a new distributionChannelPage
     *
     * A Composite containing details of a WebPage for the DistributionChannel.
     *
     * @param \DedexBundle\Entity\Ern41\DistributionChannelPageType[] $distributionChannelPage
     * @return self
     */
    public function setDistributionChannelPage(array $distributionChannelPage)
    {
        $this->distributionChannelPage = $distributionChannelPage;
        return $this;
    }


}

