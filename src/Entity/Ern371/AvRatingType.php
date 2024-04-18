<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing AvRatingType
 *
 * A Composite containing details of a rating for
 *  an audio-visual Creation.
 * XSD Type: AvRating
 */
class AvRatingType
{
    /**
     * The text of the
     *  AvRating.
     *
     * @var string $ratingText
     */
    private $ratingText = null;

    /**
     * A Composite containing details of an
     *  Organization that issues the AvRating.
     *
     * @var \DedexBundle\Entity\Ern371\RatingAgencyType $ratingAgency
     */
    private $ratingAgency = null;

    /**
     * A Composite containing details of a
     *  Description of the RatingText.
     *
     * @var \DedexBundle\Entity\Ern371\DescriptionType[] $ratingSchemeDescription
     */
    private $ratingSchemeDescription = [
        
    ];

    /**
     * Gets as ratingText
     *
     * The text of the
     *  AvRating.
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
     * The text of the
     *  AvRating.
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
     * A Composite containing details of an
     *  Organization that issues the AvRating.
     *
     * @return \DedexBundle\Entity\Ern371\RatingAgencyType
     */
    public function getRatingAgency()
    {
        return $this->ratingAgency;
    }

    /**
     * Sets a new ratingAgency
     *
     * A Composite containing details of an
     *  Organization that issues the AvRating.
     *
     * @param \DedexBundle\Entity\Ern371\RatingAgencyType $ratingAgency
     * @return self
     */
    public function setRatingAgency(\DedexBundle\Entity\Ern371\RatingAgencyType $ratingAgency)
    {
        $this->ratingAgency = $ratingAgency;
        return $this;
    }

    /**
     * Adds as ratingSchemeDescription
     *
     * A Composite containing details of a
     *  Description of the RatingText.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\DescriptionType $ratingSchemeDescription
     */
    public function addToRatingSchemeDescription(\DedexBundle\Entity\Ern371\DescriptionType $ratingSchemeDescription)
    {
        $this->ratingSchemeDescription[] = $ratingSchemeDescription;
        return $this;
    }

    /**
     * isset ratingSchemeDescription
     *
     * A Composite containing details of a
     *  Description of the RatingText.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatingSchemeDescription($index)
    {
        return isset($this->ratingSchemeDescription[$index]);
    }

    /**
     * unset ratingSchemeDescription
     *
     * A Composite containing details of a
     *  Description of the RatingText.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatingSchemeDescription($index)
    {
        unset($this->ratingSchemeDescription[$index]);
    }

    /**
     * Gets as ratingSchemeDescription
     *
     * A Composite containing details of a
     *  Description of the RatingText.
     *
     * @return \DedexBundle\Entity\Ern371\DescriptionType[]
     */
    public function getRatingSchemeDescription()
    {
        return $this->ratingSchemeDescription;
    }

    /**
     * Sets a new ratingSchemeDescription
     *
     * A Composite containing details of a
     *  Description of the RatingText.
     *
     * @param \DedexBundle\Entity\Ern371\DescriptionType[] $ratingSchemeDescription
     * @return self
     */
    public function setRatingSchemeDescription(array $ratingSchemeDescription = null)
    {
        $this->ratingSchemeDescription = $ratingSchemeDescription;
        return $this;
    }
}

