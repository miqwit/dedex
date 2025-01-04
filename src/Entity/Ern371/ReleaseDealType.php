<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing ReleaseDealType
 *
 * A Composite containing details of one or more
 *  Deals pertaining to one or more Releases.
 * XSD Type: ReleaseDeal
 */
class ReleaseDealType
{
    /**
     * The Language and script for the Elements of
     *  the ReleaseDeal as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message)
     *  of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the
     *  letter R.
     *
     * @var string[] $dealReleaseReference
     */
    private $dealReleaseReference = [
        
    ];

    /**
     * A Composite containing details of a Deal
     *  governing the Usage of all Releases identified in the ReleaseDeal
     *  Composite.
     *
     * @var \DedexBundle\Entity\Ern371\DealType[] $deal
     */
    private $deal = [
        
    ];

    /**
     * The Date at which the MessageRecipient is
     *  expected to cancel all Deals for the Release and replace them with the Deals
     *  provided within the current Message. The EffectiveDate is typically the date on
     *  which the NewReleaseMessage is being sent. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @var string $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ReleaseDeal as defined in IETF RfC 5646. The default is the same as indicated for
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
     *  the ReleaseDeal as defined in IETF RfC 5646. The default is the same as indicated for
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
     * Adds as dealReleaseReference
     *
     * The Identifier (specific to the Message)
     *  of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the
     *  letter R.
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
     * The Identifier (specific to the Message)
     *  of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the
     *  letter R.
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
     * The Identifier (specific to the Message)
     *  of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the
     *  letter R.
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
     * The Identifier (specific to the Message)
     *  of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the
     *  letter R.
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
     * The Identifier (specific to the Message)
     *  of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the
     *  letter R.
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
     * A Composite containing details of a Deal
     *  governing the Usage of all Releases identified in the ReleaseDeal
     *  Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\DealType $deal
     */
    public function addToDeal(\DedexBundle\Entity\Ern371\DealType $deal)
    {
        $this->deal[] = $deal;
        return $this;
    }

    /**
     * isset deal
     *
     * A Composite containing details of a Deal
     *  governing the Usage of all Releases identified in the ReleaseDeal
     *  Composite.
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
     * A Composite containing details of a Deal
     *  governing the Usage of all Releases identified in the ReleaseDeal
     *  Composite.
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
     * A Composite containing details of a Deal
     *  governing the Usage of all Releases identified in the ReleaseDeal
     *  Composite.
     *
     * @return \DedexBundle\Entity\Ern371\DealType[]
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A Composite containing details of a Deal
     *  governing the Usage of all Releases identified in the ReleaseDeal
     *  Composite.
     *
     * @param \DedexBundle\Entity\Ern371\DealType[] $deal
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
     * The Date at which the MessageRecipient is
     *  expected to cancel all Deals for the Release and replace them with the Deals
     *  provided within the current Message. The EffectiveDate is typically the date on
     *  which the NewReleaseMessage is being sent. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * The Date at which the MessageRecipient is
     *  expected to cancel all Deals for the Release and replace them with the Deals
     *  provided within the current Message. The EffectiveDate is typically the date on
     *  which the NewReleaseMessage is being sent. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @param string $effectiveDate
     * @return self
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }
}

