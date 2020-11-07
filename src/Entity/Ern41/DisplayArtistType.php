<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DisplayArtistType
 *
 * A Composite containing details of the Name, Identifier and Role(s) of a DisplayArtist of a Resource.
 * XSD Type: DisplayArtist
 */
class DisplayArtistType
{

    /**
     * The number indicating the order of the Resource DisplayArtist in a group of Artists that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $artistPartyReference
     */
    private $artistPartyReference = null;

    /**
     * A Composite containing details of a Role played by the DisplayArtist.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayArtistRoleType $displayArtistRole
     */
    private $displayArtistRole = null;

    /**
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @var \DedexBundle\Entity\Ern41\ContributorRoleType[] $artisticRole
     */
    private $artisticRole = [
        
    ];

    /**
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @var \DedexBundle\Entity\Ern41\TitleDisplayInformationType[] $titleDisplayInformation
     */
    private $titleDisplayInformation = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Resource DisplayArtist in a group of Artists that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the Resource DisplayArtist in a group of Artists that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * Gets as artistPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getArtistPartyReference()
    {
        return $this->artistPartyReference;
    }

    /**
     * Sets a new artistPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $artistPartyReference
     * @return self
     */
    public function setArtistPartyReference($artistPartyReference)
    {
        $this->artistPartyReference = $artistPartyReference;
        return $this;
    }

    /**
     * Gets as displayArtistRole
     *
     * A Composite containing details of a Role played by the DisplayArtist.
     *
     * @return \DedexBundle\Entity\Ern41\DisplayArtistRoleType
     */
    public function getDisplayArtistRole()
    {
        return $this->displayArtistRole;
    }

    /**
     * Sets a new displayArtistRole
     *
     * A Composite containing details of a Role played by the DisplayArtist.
     *
     * @param \DedexBundle\Entity\Ern41\DisplayArtistRoleType $displayArtistRole
     * @return self
     */
    public function setDisplayArtistRole(\DedexBundle\Entity\Ern41\DisplayArtistRoleType $displayArtistRole)
    {
        $this->displayArtistRole = $displayArtistRole;
        return $this;
    }

    /**
     * Adds as artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ContributorRoleType $artisticRole
     */
    public function addToArtisticRole(\DedexBundle\Entity\Ern41\ContributorRoleType $artisticRole)
    {
        $this->artisticRole[] = $artisticRole;
        return $this;
    }

    /**
     * isset artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtisticRole($index)
    {
        return isset($this->artisticRole[$index]);
    }

    /**
     * unset artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtisticRole($index)
    {
        unset($this->artisticRole[$index]);
    }

    /**
     * Gets as artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @return \DedexBundle\Entity\Ern41\ContributorRoleType[]
     */
    public function getArtisticRole()
    {
        return $this->artisticRole;
    }

    /**
     * Sets a new artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param \DedexBundle\Entity\Ern41\ContributorRoleType[] $artisticRole
     * @return self
     */
    public function setArtisticRole(array $artisticRole)
    {
        $this->artisticRole = $artisticRole;
        return $this;
    }

    /**
     * Adds as titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\TitleDisplayInformationType $titleDisplayInformation
     */
    public function addToTitleDisplayInformation(\DedexBundle\Entity\Ern41\TitleDisplayInformationType $titleDisplayInformation)
    {
        $this->titleDisplayInformation[] = $titleDisplayInformation;
        return $this;
    }

    /**
     * isset titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitleDisplayInformation($index)
    {
        return isset($this->titleDisplayInformation[$index]);
    }

    /**
     * unset titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitleDisplayInformation($index)
    {
        unset($this->titleDisplayInformation[$index]);
    }

    /**
     * Gets as titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @return \DedexBundle\Entity\Ern41\TitleDisplayInformationType[]
     */
    public function getTitleDisplayInformation()
    {
        return $this->titleDisplayInformation;
    }

    /**
     * Sets a new titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @param \DedexBundle\Entity\Ern41\TitleDisplayInformationType[] $titleDisplayInformation
     * @return self
     */
    public function setTitleDisplayInformation(array $titleDisplayInformation)
    {
        $this->titleDisplayInformation = $titleDisplayInformation;
        return $this;
    }


}

