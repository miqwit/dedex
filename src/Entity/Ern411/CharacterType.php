<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing CharacterType
 *
 * A Composite containing details of a Character. A Character may be described through Name, Identifier and Roles.
 * XSD Type: Character
 */
class CharacterType
{

    /**
     * The number indicating the order of the Character in a group of Characters. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $characterPartyReference
     */
    private $characterPartyReference = null;

    /**
     * A Composite containing details of the Name, Identifier and Role(s) of a Performer.
     *
     * @var \DedexBundle\Entity\Ern411\ContributorType $performer
     */
    private $performer = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Character in a group of Characters. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the Character in a group of Characters. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as characterPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getCharacterPartyReference()
    {
        return $this->characterPartyReference;
    }

    /**
     * Sets a new characterPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $characterPartyReference
     * @return self
     */
    public function setCharacterPartyReference($characterPartyReference)
    {
        $this->characterPartyReference = $characterPartyReference;
        return $this;
    }

    /**
     * Gets as performer
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a Performer.
     *
     * @return \DedexBundle\Entity\Ern411\ContributorType
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a Performer.
     *
     * @param \DedexBundle\Entity\Ern411\ContributorType $performer
     * @return self
     */
    public function setPerformer(\DedexBundle\Entity\Ern411\ContributorType $performer)
    {
        $this->performer = $performer;
        return $this;
    }


}

