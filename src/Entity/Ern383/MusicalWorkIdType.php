<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing MusicalWorkIdType
 *
 * A Composite containing details of a
 *  MusicalWorkId.
 * XSD Type: MusicalWorkId
 */
class MusicalWorkIdType
{
    /**
     * The Flag indicating whether this Identifier
     *  is old and has been replaced by a new one (=true) or not (=false). The Flag may only
     *  be set to True when the new Identifier is also provided. If the Flag is not set, this
     *  Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ISWC (International Standard Musical
     *  Work Code defined in ISO 15707) identifying the MusicalWork. An ISWC comprises
     *  three parts: the letter 'T', followed by nine digits and then one check digit.
     *  DDEX will enforce the syntax [a-zA-Z][0-9]{10} using XML Schema in the
     *  future.
     *
     * @var string $iSWC
     */
    private $iSWC = null;

    /**
     * The MusicalWorkId identifying the
     *  MusicalWork within the catalog of its Composer (typically of classical music) as
     *  an opus number.
     *
     * @var string $opusNumber
     */
    private $opusNumber = null;

    /**
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @var string[] $composerCatalogNumber
     */
    private $composerCatalogNumber = [
        
    ];

    /**
     * A Composite containing details of a
     *  ProprietaryIdentifier of the MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern383\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The Flag indicating whether this Identifier
     *  is old and has been replaced by a new one (=true) or not (=false). The Flag may only
     *  be set to True when the new Identifier is also provided. If the Flag is not set, this
     *  Identifier is deemed to be the current one.
     *
     * @return bool
     */
    public function getIsReplaced()
    {
        return $this->isReplaced;
    }

    /**
     * Sets a new isReplaced
     *
     * The Flag indicating whether this Identifier
     *  is old and has been replaced by a new one (=true) or not (=false). The Flag may only
     *  be set to True when the new Identifier is also provided. If the Flag is not set, this
     *  Identifier is deemed to be the current one.
     *
     * @param bool $isReplaced
     * @return self
     */
    public function setIsReplaced($isReplaced)
    {
        $this->isReplaced = $isReplaced;
        return $this;
    }

    /**
     * Gets as iSWC
     *
     * The ISWC (International Standard Musical
     *  Work Code defined in ISO 15707) identifying the MusicalWork. An ISWC comprises
     *  three parts: the letter 'T', followed by nine digits and then one check digit.
     *  DDEX will enforce the syntax [a-zA-Z][0-9]{10} using XML Schema in the
     *  future.
     *
     * @return string
     */
    public function getISWC()
    {
        return $this->iSWC;
    }

    /**
     * Sets a new iSWC
     *
     * The ISWC (International Standard Musical
     *  Work Code defined in ISO 15707) identifying the MusicalWork. An ISWC comprises
     *  three parts: the letter 'T', followed by nine digits and then one check digit.
     *  DDEX will enforce the syntax [a-zA-Z][0-9]{10} using XML Schema in the
     *  future.
     *
     * @param string $iSWC
     * @return self
     */
    public function setISWC($iSWC)
    {
        $this->iSWC = $iSWC;
        return $this;
    }

    /**
     * Gets as opusNumber
     *
     * The MusicalWorkId identifying the
     *  MusicalWork within the catalog of its Composer (typically of classical music) as
     *  an opus number.
     *
     * @return string
     */
    public function getOpusNumber()
    {
        return $this->opusNumber;
    }

    /**
     * Sets a new opusNumber
     *
     * The MusicalWorkId identifying the
     *  MusicalWork within the catalog of its Composer (typically of classical music) as
     *  an opus number.
     *
     * @param string $opusNumber
     * @return self
     */
    public function setOpusNumber($opusNumber)
    {
        $this->opusNumber = $opusNumber;
        return $this;
    }

    /**
     * Adds as composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @return self
     * @param string $composerCatalogNumber
     */
    public function addToComposerCatalogNumber($composerCatalogNumber)
    {
        $this->composerCatalogNumber[] = $composerCatalogNumber;
        return $this;
    }

    /**
     * isset composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComposerCatalogNumber($index)
    {
        return isset($this->composerCatalogNumber[$index]);
    }

    /**
     * unset composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComposerCatalogNumber($index)
    {
        unset($this->composerCatalogNumber[$index]);
    }

    /**
     * Gets as composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @return string[]
     */
    public function getComposerCatalogNumber()
    {
        return $this->composerCatalogNumber;
    }

    /**
     * Sets a new composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @param string[] $composerCatalogNumber
     * @return self
     */
    public function setComposerCatalogNumber(array $composerCatalogNumber = null)
    {
        $this->composerCatalogNumber = $composerCatalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern383\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern383\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern383\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}

