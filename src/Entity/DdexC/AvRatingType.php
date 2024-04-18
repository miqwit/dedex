<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing AvRatingType
 *
 * A ddex:Composite containing details of a rating for an audio-visual ddex:Creation.
 * XSD Type: AvRating
 */
class AvRatingType
{
    /**
     * The text of the ddexC:AvRating.
     *
     * @var string $ratingText
     */
    private $ratingText = null;

    /**
     * A Composite containing details of an Organization that issues the ddexC:AvRating.
     *
     * @var \DedexBundle\Entity\DdexC\RatingAgencyType $ratingAgency
     */
    private $ratingAgency = null;

    /**
     * Gets as ratingText
     *
     * The text of the ddexC:AvRating.
     *
     * @return string
     */
    public function getRatingText()
    {
        return $this->ratingText;
    }

    /**
     * Sets a new ratingText
     *
     * The text of the ddexC:AvRating.
     *
     * @param string $ratingText
     * @return self
     */
    public function setRatingText($ratingText)
    {
        $this->ratingText = $ratingText;
        return $this;
    }

    /**
     * Gets as ratingAgency
     *
     * A Composite containing details of an Organization that issues the ddexC:AvRating.
     *
     * @return \DedexBundle\Entity\DdexC\RatingAgencyType
     */
    public function getRatingAgency()
    {
        return $this->ratingAgency;
    }

    /**
     * Sets a new ratingAgency
     *
     * A Composite containing details of an Organization that issues the ddexC:AvRating.
     *
     * @param \DedexBundle\Entity\DdexC\RatingAgencyType $ratingAgency
     * @return self
     */
    public function setRatingAgency(\DedexBundle\Entity\DdexC\RatingAgencyType $ratingAgency)
    {
        $this->ratingAgency = $ratingAgency;
        return $this;
    }
}

