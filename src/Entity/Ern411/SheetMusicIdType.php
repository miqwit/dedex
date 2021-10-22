<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing SheetMusicIdType
 *
 * A Composite containing details of Identifiers of a SheetMusic.
 * XSD Type: SheetMusicId
 */
class SheetMusicIdType
{

    /**
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ISMN (International Standard Music Number defined in ISO 10957) for the SheetMusic. An ISMN is a thirteen-digit number. Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax 979[0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @var string $iSMN
     */
    private $iSMN = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern41\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
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
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
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
     * Gets as iSMN
     *
     * The ISMN (International Standard Music Number defined in ISO 10957) for the SheetMusic. An ISMN is a thirteen-digit number. Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax 979[0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISMN()
    {
        return $this->iSMN;
    }

    /**
     * Sets a new iSMN
     *
     * The ISMN (International Standard Music Number defined in ISO 10957) for the SheetMusic. An ISMN is a thirteen-digit number. Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax 979[0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @param string $iSMN
     * @return self
     */
    public function setISMN($iSMN)
    {
        $this->iSMN = $iSMN;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern41\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SheetMusic.
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
     * A Composite containing details of a ProprietaryIdentifier of the SheetMusic.
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
     * A Composite containing details of a ProprietaryIdentifier of the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern41\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern41\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }


}

