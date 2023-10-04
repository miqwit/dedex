<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing NumberOfDataMismatchItemsType
 *
 * A ddex:Composite containing a ddex:NumberOfDataMismatchItems.
 * XSD Type: NumberOfDataMismatchItems
 */
class NumberOfDataMismatchItemsType
{
    /**
     * @var int $__value
     */
    private $__value = null;

    /**
     * A status of the DataMismatch(es). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $dataMismatchStatus
     */
    private $dataMismatchStatus = null;

    /**
     * Construct
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param int $value
     * @return int
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
     * Gets as dataMismatchStatus
     *
     * A status of the DataMismatch(es). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getDataMismatchStatus()
    {
        return $this->dataMismatchStatus;
    }

    /**
     * Sets a new dataMismatchStatus
     *
     * A status of the DataMismatch(es). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $dataMismatchStatus
     * @return self
     */
    public function setDataMismatchStatus($dataMismatchStatus)
    {
        $this->dataMismatchStatus = $dataMismatchStatus;
        return $this;
    }
}

