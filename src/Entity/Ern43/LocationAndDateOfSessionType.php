<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing LocationAndDateOfSessionType
 *
 * A Composite containing details of a Session.
 * XSD Type: LocationAndDateOfSession
 */
class LocationAndDateOfSessionType
{
    /**
     * The Type of Session.
     *
     * @var \DedexBundle\Entity\Ern43\SessionTypeType[] $sessionType
     */
    private $sessionType = [
        
    ];

    /**
     * A Composite containing details about a Period of the Session. Periods are typically described by at least a StartDate or EndDate.
     *
     * @var \DedexBundle\Entity\Ern43\PeriodType $period
     */
    private $period = null;

    /**
     * A Composite containing details of the venue where the Session took place.
     *
     * @var \DedexBundle\Entity\Ern43\VenueType[] $venue
     */
    private $venue = [
        
    ];

    /**
     * A Composite containing a human-readable Comment about the Session.
     *
     * @var \DedexBundle\Entity\Ern43\TextWithFormatType $comment
     */
    private $comment = null;

    /**
     * A Composite containing details of a Contributor.
     *
     * @var \DedexBundle\Entity\Ern43\PartyWithRoleType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * Adds as sessionType
     *
     * The Type of Session.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\SessionTypeType $sessionType
     */
    public function addToSessionType(\DedexBundle\Entity\Ern43\SessionTypeType $sessionType)
    {
        $this->sessionType[] = $sessionType;
        return $this;
    }

    /**
     * isset sessionType
     *
     * The Type of Session.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionType($index)
    {
        return isset($this->sessionType[$index]);
    }

    /**
     * unset sessionType
     *
     * The Type of Session.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionType($index)
    {
        unset($this->sessionType[$index]);
    }

    /**
     * Gets as sessionType
     *
     * The Type of Session.
     *
     * @return \DedexBundle\Entity\Ern43\SessionTypeType[]
     */
    public function getSessionType()
    {
        return $this->sessionType;
    }

    /**
     * Sets a new sessionType
     *
     * The Type of Session.
     *
     * @param \DedexBundle\Entity\Ern43\SessionTypeType[] $sessionType
     * @return self
     */
    public function setSessionType(array $sessionType = null)
    {
        $this->sessionType = $sessionType;
        return $this;
    }

    /**
     * Gets as period
     *
     * A Composite containing details about a Period of the Session. Periods are typically described by at least a StartDate or EndDate.
     *
     * @return \DedexBundle\Entity\Ern43\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * A Composite containing details about a Period of the Session. Periods are typically described by at least a StartDate or EndDate.
     *
     * @param \DedexBundle\Entity\Ern43\PeriodType $period
     * @return self
     */
    public function setPeriod(?\DedexBundle\Entity\Ern43\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\VenueType $venue
     */
    public function addToVenue(\DedexBundle\Entity\Ern43\VenueType $venue)
    {
        $this->venue[] = $venue;
        return $this;
    }

    /**
     * isset venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVenue($index)
    {
        return isset($this->venue[$index]);
    }

    /**
     * unset venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVenue($index)
    {
        unset($this->venue[$index]);
    }

    /**
     * Gets as venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @return \DedexBundle\Entity\Ern43\VenueType[]
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Sets a new venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param \DedexBundle\Entity\Ern43\VenueType[] $venue
     * @return self
     */
    public function setVenue(array $venue = null)
    {
        $this->venue = $venue;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Session.
     *
     * @return \DedexBundle\Entity\Ern43\TextWithFormatType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Session.
     *
     * @param \DedexBundle\Entity\Ern43\TextWithFormatType $comment
     * @return self
     */
    public function setComment(?\DedexBundle\Entity\Ern43\TextWithFormatType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PartyWithRoleType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern43\PartyWithRoleType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A Composite containing details of a Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A Composite containing details of a Contributor.
     *
     * @return \DedexBundle\Entity\Ern43\PartyWithRoleType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor.
     *
     * @param \DedexBundle\Entity\Ern43\PartyWithRoleType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }
}

