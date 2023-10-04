<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing DealListType
 *
 * A ddex:Composite containing details of one or more ddex:Deals.
 * XSD Type: DealList
 */
class DealListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:DealList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Deals pertaining to one or more ddex:Releases.
     *
     * @var \DedexBundle\Entity\Ern341\ReleaseDealType[] $releaseDeal
     */
    private $releaseDeal = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:DealList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:DealList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as releaseDeal
     *
     * A ddex:Composite containing details of one or more ddex:Deals pertaining to one or more ddex:Releases.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\ReleaseDealType $releaseDeal
     */
    public function addToReleaseDeal(\DedexBundle\Entity\Ern341\ReleaseDealType $releaseDeal)
    {
        $this->releaseDeal[] = $releaseDeal;
        return $this;
    }

    /**
     * isset releaseDeal
     *
     * A ddex:Composite containing details of one or more ddex:Deals pertaining to one or more ddex:Releases.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseDeal($index)
    {
        return isset($this->releaseDeal[$index]);
    }

    /**
     * unset releaseDeal
     *
     * A ddex:Composite containing details of one or more ddex:Deals pertaining to one or more ddex:Releases.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseDeal($index)
    {
        unset($this->releaseDeal[$index]);
    }

    /**
     * Gets as releaseDeal
     *
     * A ddex:Composite containing details of one or more ddex:Deals pertaining to one or more ddex:Releases.
     *
     * @return \DedexBundle\Entity\Ern341\ReleaseDealType[]
     */
    public function getReleaseDeal()
    {
        return $this->releaseDeal;
    }

    /**
     * Sets a new releaseDeal
     *
     * A ddex:Composite containing details of one or more ddex:Deals pertaining to one or more ddex:Releases.
     *
     * @param \DedexBundle\Entity\Ern341\ReleaseDealType[] $releaseDeal
     * @return self
     */
    public function setReleaseDeal(array $releaseDeal = null)
    {
        $this->releaseDeal = $releaseDeal;
        return $this;
    }
}

