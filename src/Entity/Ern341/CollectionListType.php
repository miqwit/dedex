<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CollectionListType
 *
 * A ddex:Composite containing details of one or more ddex:Collections.
 * XSD Type: CollectionList
 */
class CollectionListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the CollectionList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:Collection contained in a ddex:Resource.
     *
     * @var \DedexBundle\Entity\Ern341\CollectionType[] $collection
     */
    private $collection = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the CollectionList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the CollectionList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as collection
     *
     * A ddex:Composite containing details of a ddex:Collection contained in a ddex:Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\CollectionType $collection
     */
    public function addToCollection(\DedexBundle\Entity\Ern341\CollectionType $collection)
    {
        $this->collection[] = $collection;
        return $this;
    }

    /**
     * isset collection
     *
     * A ddex:Composite containing details of a ddex:Collection contained in a ddex:Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollection($index)
    {
        return isset($this->collection[$index]);
    }

    /**
     * unset collection
     *
     * A ddex:Composite containing details of a ddex:Collection contained in a ddex:Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollection($index)
    {
        unset($this->collection[$index]);
    }

    /**
     * Gets as collection
     *
     * A ddex:Composite containing details of a ddex:Collection contained in a ddex:Resource.
     *
     * @return \DedexBundle\Entity\Ern341\CollectionType[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sets a new collection
     *
     * A ddex:Composite containing details of a ddex:Collection contained in a ddex:Resource.
     *
     * @param \DedexBundle\Entity\Ern341\CollectionType[] $collection
     * @return self
     */
    public function setCollection(array $collection)
    {
        $this->collection = $collection;
        return $this;
    }
}

