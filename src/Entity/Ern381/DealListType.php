<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing DealListType
 *
 * A Composite containing details of one or more Deals.
 * XSD Type: DealList
 */
class DealListType
{
    /**
     * The Language and script for the Elements of the DealList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @var \DedexBundle\Entity\Ern381\ReleaseDealType[] $releaseDeal
     */
    private $releaseDeal = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the DealList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the DealList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ReleaseDealType $releaseDeal
     */
    public function addToReleaseDeal(\DedexBundle\Entity\Ern381\ReleaseDealType $releaseDeal)
    {
        $this->releaseDeal[] = $releaseDeal;
        return $this;
    }

    /**
     * isset releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
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
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
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
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @return \DedexBundle\Entity\Ern381\ReleaseDealType[]
     */
    public function getReleaseDeal()
    {
        return $this->releaseDeal;
    }

    /**
     * Sets a new releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @param \DedexBundle\Entity\Ern381\ReleaseDealType[] $releaseDeal
     * @return self
     */
    public function setReleaseDeal(array $releaseDeal = null)
    {
        $this->releaseDeal = $releaseDeal;
        return $this;
    }
}

