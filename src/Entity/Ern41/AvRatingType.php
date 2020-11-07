<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing AvRatingType
 *
 * A Composite containing details of a rating for an audio-visual Creation.
 * XSD Type: AvRating
 */
class AvRatingType
{

    /**
     * A Territory to which the AvRating applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * The text of the AvRating.
     *
     * @var string $rating
     */
    private $rating = null;

    /**
     * A Composite containing details of an Organization that issues the AvRating.
     *
     * @var \DedexBundle\Entity\Ern41\RatingAgencyType $agency
     */
    private $agency = null;

    /**
     * A Reason for a rating being applied.
     *
     * @var string $reason
     */
    private $reason = null;

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the AvRating applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the AvRating applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as rating
     *
     * The text of the AvRating.
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * The text of the AvRating.
     *
     * @param string $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Gets as agency
     *
     * A Composite containing details of an Organization that issues the AvRating.
     *
     * @return \DedexBundle\Entity\Ern41\RatingAgencyType
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * Sets a new agency
     *
     * A Composite containing details of an Organization that issues the AvRating.
     *
     * @param \DedexBundle\Entity\Ern41\RatingAgencyType $agency
     * @return self
     */
    public function setAgency(\DedexBundle\Entity\Ern41\RatingAgencyType $agency)
    {
        $this->agency = $agency;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A Reason for a rating being applied.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A Reason for a rating being applied.
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

