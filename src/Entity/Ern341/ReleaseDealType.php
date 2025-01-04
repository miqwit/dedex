<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ReleaseDealType
 *
 * A ddex:Composite containing details of one or more ddex:Deals pertaining to one or more ddex:Releases.
 * XSD Type: ReleaseDeal
 */
class ReleaseDealType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:ReleaseDeal as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release in the ddex:Deal. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $dealReleaseReference
     */
    private $dealReleaseReference = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Deal governing the Usage of all ddex:Releases identified in the ern:ReleaseDeal ddex:Composite.
     *
     * @var \DedexBundle\Entity\Ern341\DealType[] $deal
     */
    private $deal = [
        
    ];

    /**
     * The Date at which the ddex:MessageRecipient is expected to cancel all ddex:Deals for the ddex:Release and replace them with the ddex:Deals provided within the current ddex:Message. The EffectiveDate is typically the date on which the ern:NewReleaseMessage is being sent.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:ReleaseDeal as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:ReleaseDeal as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as dealReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release in the ddex:Deal. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $dealReleaseReference
     */
    public function addToDealReleaseReference($dealReleaseReference)
    {
        $this->dealReleaseReference[] = $dealReleaseReference;
        return $this;
    }

    /**
     * isset dealReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release in the ddex:Deal. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealReleaseReference($index)
    {
        return isset($this->dealReleaseReference[$index]);
    }

    /**
     * unset dealReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release in the ddex:Deal. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealReleaseReference($index)
    {
        unset($this->dealReleaseReference[$index]);
    }

    /**
     * Gets as dealReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release in the ddex:Deal. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getDealReleaseReference()
    {
        return $this->dealReleaseReference;
    }

    /**
     * Sets a new dealReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release in the ddex:Deal. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $dealReleaseReference
     * @return self
     */
    public function setDealReleaseReference(array $dealReleaseReference)
    {
        $this->dealReleaseReference = $dealReleaseReference;
        return $this;
    }

    /**
     * Adds as deal
     *
     * A ddex:Composite containing details of a ddex:Deal governing the Usage of all ddex:Releases identified in the ern:ReleaseDeal ddex:Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\DealType $deal
     */
    public function addToDeal(\DedexBundle\Entity\Ern341\DealType $deal)
    {
        $this->deal[] = $deal;
        return $this;
    }

    /**
     * isset deal
     *
     * A ddex:Composite containing details of a ddex:Deal governing the Usage of all ddex:Releases identified in the ern:ReleaseDeal ddex:Composite.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeal($index)
    {
        return isset($this->deal[$index]);
    }

    /**
     * unset deal
     *
     * A ddex:Composite containing details of a ddex:Deal governing the Usage of all ddex:Releases identified in the ern:ReleaseDeal ddex:Composite.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeal($index)
    {
        unset($this->deal[$index]);
    }

    /**
     * Gets as deal
     *
     * A ddex:Composite containing details of a ddex:Deal governing the Usage of all ddex:Releases identified in the ern:ReleaseDeal ddex:Composite.
     *
     * @return \DedexBundle\Entity\Ern341\DealType[]
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A ddex:Composite containing details of a ddex:Deal governing the Usage of all ddex:Releases identified in the ern:ReleaseDeal ddex:Composite.
     *
     * @param \DedexBundle\Entity\Ern341\DealType[] $deal
     * @return self
     */
    public function setDeal(array $deal)
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * The Date at which the ddex:MessageRecipient is expected to cancel all ddex:Deals for the ddex:Release and replace them with the ddex:Deals provided within the current ddex:Message. The EffectiveDate is typically the date on which the ern:NewReleaseMessage is being sent.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * The Date at which the ddex:MessageRecipient is expected to cancel all ddex:Deals for the ddex:Release and replace them with the ddex:Deals provided within the current ddex:Message. The EffectiveDate is typically the date on which the ern:NewReleaseMessage is being sent.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(?\DateTime $effectiveDate = null)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }
}

