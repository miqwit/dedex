<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing ReleaseListType
 *
 * A Composite containing details of one or more
 *  Releases.
 * XSD Type: ReleaseList
 */
class ReleaseListType
{
    /**
     * The Language and script for the Elements of
     *  the ReleaseList as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a DDEX
     *  Release.
     *
     * @var \DedexBundle\Entity\Ern371\ReleaseType[] $release
     */
    private $release = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ReleaseList as defined in IETF RfC 5646. The default is the same as indicated for
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
     *  the ReleaseList as defined in IETF RfC 5646. The default is the same as indicated for
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
     * Adds as release
     *
     * A Composite containing details of a DDEX
     *  Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\ReleaseType $release
     */
    public function addToRelease(\DedexBundle\Entity\Ern371\ReleaseType $release)
    {
        $this->release[] = $release;
        return $this;
    }

    /**
     * isset release
     *
     * A Composite containing details of a DDEX
     *  Release.
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
     * A Composite containing details of a DDEX
     *  Release.
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
     * A Composite containing details of a DDEX
     *  Release.
     *
     * @return \DedexBundle\Entity\Ern371\ReleaseType[]
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Sets a new release
     *
     * A Composite containing details of a DDEX
     *  Release.
     *
     * @param \DedexBundle\Entity\Ern371\ReleaseType[] $release
     * @return self
     */
    public function setRelease(array $release = null)
    {
        $this->release = $release;
        return $this;
    }
}

