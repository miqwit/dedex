<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing MusicalWorkIdType
 *
 * A ddex:Composite containing details of a ddex:MusicalWorkId.
 * XSD Type: MusicalWorkId
 */
class MusicalWorkIdType
{
    /**
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ddex:ISWC (International Standard Musical ddex:Work Code defined in ISO 15707) identifying the ddex:MusicalWork. An ddex:ISWC comprises three parts: the letter 'T', followed by nine digits and then one check digit.
     *
     * @var string $iSWC
     */
    private $iSWC = null;

    /**
     * The ddexC:MusicalWorkId identifying the ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) as an opus number.
     *
     * @var string $opusNumber
     */
    private $opusNumber = null;

    /**
     * A ddexC:MusicalWorkId identifying a ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) according to a standardized numbering (e.g. 'K' numbers for Koechel's catalog of Mozart).
     *
     * @var string[] $composerCatalogNumber
     */
    private $composerCatalogNumber = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
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
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
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
     * The ddex:ISWC (International Standard Musical ddex:Work Code defined in ISO 15707) identifying the ddex:MusicalWork. An ddex:ISWC comprises three parts: the letter 'T', followed by nine digits and then one check digit.
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
     * The ddex:ISWC (International Standard Musical ddex:Work Code defined in ISO 15707) identifying the ddex:MusicalWork. An ddex:ISWC comprises three parts: the letter 'T', followed by nine digits and then one check digit.
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
     * The ddexC:MusicalWorkId identifying the ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) as an opus number.
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
     * The ddexC:MusicalWorkId identifying the ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) as an opus number.
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
     * A ddexC:MusicalWorkId identifying a ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) according to a standardized numbering (e.g. 'K' numbers for Koechel's catalog of Mozart).
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
     * A ddexC:MusicalWorkId identifying a ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) according to a standardized numbering (e.g. 'K' numbers for Koechel's catalog of Mozart).
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
     * A ddexC:MusicalWorkId identifying a ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) according to a standardized numbering (e.g. 'K' numbers for Koechel's catalog of Mozart).
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
     * A ddexC:MusicalWorkId identifying a ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) according to a standardized numbering (e.g. 'K' numbers for Koechel's catalog of Mozart).
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
     * A ddexC:MusicalWorkId identifying a ddex:MusicalWork within the catalog of its ddex:Composer (typically of classical music) according to a standardized numbering (e.g. 'K' numbers for Koechel's catalog of Mozart).
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\DdexC\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}

