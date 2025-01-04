<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ReleaseListType
 *
 * A ddex:Composite containing details of one or more ddex:Releases.
 * XSD Type: ReleaseList
 */
class ReleaseListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:ReleaseList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
     *
     * @var \DedexBundle\Entity\Ern341\ReleaseType[] $release
     */
    private $release = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:ReleaseList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:ReleaseList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as release
     *
     * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\ReleaseType $release
     */
    public function addToRelease(\DedexBundle\Entity\Ern341\ReleaseType $release)
    {
        $this->release[] = $release;
        return $this;
    }

    /**
     * isset release
     *
     * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelease($index)
    {
        return isset($this->release[$index]);
    }

    /**
     * unset release
     *
     * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelease($index)
    {
        unset($this->release[$index]);
    }

    /**
     * Gets as release
     *
     * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
     *
     * @return \DedexBundle\Entity\Ern341\ReleaseType[]
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Sets a new release
     *
     * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
     *
     * @param \DedexBundle\Entity\Ern341\ReleaseType[] $release
     * @return self
     */
    public function setRelease(array $release = null)
    {
        $this->release = $release;
        return $this;
    }
}

