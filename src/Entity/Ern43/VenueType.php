<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing VenueType
 *
 * A Composite containing details of a venue.
 * XSD Type: Venue
 */
class VenueType
{
    /**
     * The Name of the venue.
     *
     * @var string $venueName
     */
    private $venueName = null;

    /**
     * The Address of the venue. The level of description may be more or less granular, possibly including only the name of the city.
     *
     * @var string $venueAddress
     */
    private $venueAddress = null;

    /**
     * A Territory of the VenueAddress. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern43\AllTerritoryCodeType $territoryCode
     */
    private $territoryCode = null;

    /**
     * An UN/Locode of the venue.
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * A specific studio of the venue where a Session took place.
     *
     * @var string $venueRoom
     */
    private $venueRoom = null;

    /**
     * Gets as venueName
     *
     * The Name of the venue.
     *
     * @return string
     */
    public function getVenueName()
    {
        return $this->venueName;
    }

    /**
     * Sets a new venueName
     *
     * The Name of the venue.
     *
     * @param string $venueName
     * @return self
     */
    public function setVenueName($venueName)
    {
        $this->venueName = $venueName;
        return $this;
    }

    /**
     * Gets as venueAddress
     *
     * The Address of the venue. The level of description may be more or less granular, possibly including only the name of the city.
     *
     * @return string
     */
    public function getVenueAddress()
    {
        return $this->venueAddress;
    }

    /**
     * Sets a new venueAddress
     *
     * The Address of the venue. The level of description may be more or less granular, possibly including only the name of the city.
     *
     * @param string $venueAddress
     * @return self
     */
    public function setVenueAddress($venueAddress)
    {
        $this->venueAddress = $venueAddress;
        return $this;
    }

    /**
     * Gets as territoryCode
     *
     * A Territory of the VenueAddress. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern43\AllTerritoryCodeType
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory of the VenueAddress. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern43\AllTerritoryCodeType $territoryCode
     * @return self
     */
    public function setTerritoryCode(?\DedexBundle\Entity\Ern43\AllTerritoryCodeType $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Gets as locationCode
     *
     * An UN/Locode of the venue.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * An UN/Locode of the venue.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Gets as venueRoom
     *
     * A specific studio of the venue where a Session took place.
     *
     * @return string
     */
    public function getVenueRoom()
    {
        return $this->venueRoom;
    }

    /**
     * Sets a new venueRoom
     *
     * A specific studio of the venue where a Session took place.
     *
     * @param string $venueRoom
     * @return self
     */
    public function setVenueRoom($venueRoom)
    {
        $this->venueRoom = $venueRoom;
        return $this;
    }
}

