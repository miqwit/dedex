<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CollectionListType
 *
 * A Composite containing details of one or more
 *  Collections.
 * XSD Type: CollectionList
 */
class CollectionListType
{
    /**
     * The Language and script for the Elements of
     *  the CollectionList as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a
     *  Collection contained in a Resource.
     *
     * @var \DedexBundle\Entity\Ern383\CollectionType[] $collection
     */
    private $collection = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the CollectionList as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
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
     *  the CollectionList as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
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
     * Adds as collection
     *
     * A Composite containing details of a
     *  Collection contained in a Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CollectionType $collection
     */
    public function addToCollection(\DedexBundle\Entity\Ern383\CollectionType $collection)
    {
        $this->collection[] = $collection;
        return $this;
    }

    /**
     * isset collection
     *
     * A Composite containing details of a
     *  Collection contained in a Resource.
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
     * A Composite containing details of a
     *  Collection contained in a Resource.
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
     * A Composite containing details of a
     *  Collection contained in a Resource.
     *
     * @return \DedexBundle\Entity\Ern383\CollectionType[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sets a new collection
     *
     * A Composite containing details of a
     *  Collection contained in a Resource.
     *
     * @param \DedexBundle\Entity\Ern383\CollectionType[] $collection
     * @return self
     */
    public function setCollection(array $collection)
    {
        $this->collection = $collection;
        return $this;
    }
}

