<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing DisplaySubTitleType
 *
 * A Composite containing details of a SubTitle.
 * XSD Type: DisplaySubTitle
 */
class DisplaySubTitleType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The number indicating the order of the SubTitle in a group of SubTitles. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Flag indicating whether the SubTitle is displayed in the Title (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDisplayedInTitle
     */
    private $isDisplayedInTitle = null;

    /**
     * A Type of the SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $subTitleType
     */
    private $subTitleType = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the SubTitle in a group of SubTitles. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the SubTitle in a group of SubTitles. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isDisplayedInTitle
     *
     * A Flag indicating whether the SubTitle is displayed in the Title (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDisplayedInTitle()
    {
        return $this->isDisplayedInTitle;
    }

    /**
     * Sets a new isDisplayedInTitle
     *
     * A Flag indicating whether the SubTitle is displayed in the Title (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDisplayedInTitle
     * @return self
     */
    public function setIsDisplayedInTitle($isDisplayedInTitle)
    {
        $this->isDisplayedInTitle = $isDisplayedInTitle;
        return $this;
    }

    /**
     * Gets as subTitleType
     *
     * A Type of the SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getSubTitleType()
    {
        return $this->subTitleType;
    }

    /**
     * Sets a new subTitleType
     *
     * A Type of the SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $subTitleType
     * @return self
     */
    public function setSubTitleType($subTitleType)
    {
        $this->subTitleType = $subTitleType;
        return $this;
    }


}

