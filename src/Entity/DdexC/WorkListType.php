<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing WorkListType
 *
 * A ddex:Composite containing details of one or more ddex:Works.
 * XSD Type: WorkList
 */
class WorkListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:WorkList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:MusicalWork contained in a ddex:Resource.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkType[] $musicalWork
     */
    private $musicalWork = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:WorkList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:WorkList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as musicalWork
     *
     * A ddex:Composite containing details of a ddex:MusicalWork contained in a ddex:Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkType $musicalWork
     */
    public function addToMusicalWork(\DedexBundle\Entity\DdexC\MusicalWorkType $musicalWork)
    {
        $this->musicalWork[] = $musicalWork;
        return $this;
    }

    /**
     * isset musicalWork
     *
     * A ddex:Composite containing details of a ddex:MusicalWork contained in a ddex:Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWork($index)
    {
        return isset($this->musicalWork[$index]);
    }

    /**
     * unset musicalWork
     *
     * A ddex:Composite containing details of a ddex:MusicalWork contained in a ddex:Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWork($index)
    {
        unset($this->musicalWork[$index]);
    }

    /**
     * Gets as musicalWork
     *
     * A ddex:Composite containing details of a ddex:MusicalWork contained in a ddex:Resource.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkType[]
     */
    public function getMusicalWork()
    {
        return $this->musicalWork;
    }

    /**
     * Sets a new musicalWork
     *
     * A ddex:Composite containing details of a ddex:MusicalWork contained in a ddex:Resource.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkType[] $musicalWork
     * @return self
     */
    public function setMusicalWork(array $musicalWork)
    {
        $this->musicalWork = $musicalWork;
        return $this;
    }
}

