<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ConditionForRightsClaimPolicyType
 *
 * A Composite containing details of a Condition.
 * Explanatory Note: This Composite is named ConditionForRightsClaimPolicy to disambiguate it from the basic mwnl:Condition Composite.
 * XSD Type: ConditionForRightsClaimPolicy
 */
class ConditionForRightsClaimPolicyType
{
    /**
     * The numeric value of the Condition.
     *
     * @var float $value
     */
    private $value = null;

    /**
     * A UnitOfMeasure for the condition value.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * A Creation that is used as a reference when the unit is Percent, so it can be expressed whether the value is a percentage of the reference Resource for which rights are claimed or of a consumer's UserGeneratedContent.
     *
     * @var string $referenceCreation
     */
    private $referenceCreation = null;

    /**
     * A Relator expressing the accuracy of the condition value.
     *
     * @var string $relationalRelator
     */
    private $relationalRelator = null;

    /**
     * A Type to signal whether the Measurement should be made on the audio, the video, either or both. The absence of this element means that the terms of the contract between MessageSender and MessageRecipient rule.
     *
     * @var string $measurementType
     */
    private $measurementType = null;

    /**
     * A Composite containing details of a segment of the Resource to which the Condition is applicable. If no segment is specified, the whole Resource is subject the RightsClaim Policy.
     *
     * @var \DedexBundle\Entity\Ern43\SegmentType[] $segment
     */
    private $segment = [
        
    ];

    /**
     * A Composite containing details of a Service that is an exception to the Condition. For these exceptions, usage does not need to be reported for fingerprinting and web monitoring services.
     *
     * @var \DedexBundle\Entity\Ern43\ServiceExceptionType[] $serviceException
     */
    private $serviceException = [
        
    ];

    /**
     * Gets as value
     *
     * The numeric value of the Condition.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The numeric value of the Condition.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as unit
     *
     * A UnitOfMeasure for the condition value.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * A UnitOfMeasure for the condition value.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as referenceCreation
     *
     * A Creation that is used as a reference when the unit is Percent, so it can be expressed whether the value is a percentage of the reference Resource for which rights are claimed or of a consumer's UserGeneratedContent.
     *
     * @return string
     */
    public function getReferenceCreation()
    {
        return $this->referenceCreation;
    }

    /**
     * Sets a new referenceCreation
     *
     * A Creation that is used as a reference when the unit is Percent, so it can be expressed whether the value is a percentage of the reference Resource for which rights are claimed or of a consumer's UserGeneratedContent.
     *
     * @param string $referenceCreation
     * @return self
     */
    public function setReferenceCreation($referenceCreation)
    {
        $this->referenceCreation = $referenceCreation;
        return $this;
    }

    /**
     * Gets as relationalRelator
     *
     * A Relator expressing the accuracy of the condition value.
     *
     * @return string
     */
    public function getRelationalRelator()
    {
        return $this->relationalRelator;
    }

    /**
     * Sets a new relationalRelator
     *
     * A Relator expressing the accuracy of the condition value.
     *
     * @param string $relationalRelator
     * @return self
     */
    public function setRelationalRelator($relationalRelator)
    {
        $this->relationalRelator = $relationalRelator;
        return $this;
    }

    /**
     * Gets as measurementType
     *
     * A Type to signal whether the Measurement should be made on the audio, the video, either or both. The absence of this element means that the terms of the contract between MessageSender and MessageRecipient rule.
     *
     * @return string
     */
    public function getMeasurementType()
    {
        return $this->measurementType;
    }

    /**
     * Sets a new measurementType
     *
     * A Type to signal whether the Measurement should be made on the audio, the video, either or both. The absence of this element means that the terms of the contract between MessageSender and MessageRecipient rule.
     *
     * @param string $measurementType
     * @return self
     */
    public function setMeasurementType($measurementType)
    {
        $this->measurementType = $measurementType;
        return $this;
    }

    /**
     * Adds as segment
     *
     * A Composite containing details of a segment of the Resource to which the Condition is applicable. If no segment is specified, the whole Resource is subject the RightsClaim Policy.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\SegmentType $segment
     */
    public function addToSegment(\DedexBundle\Entity\Ern43\SegmentType $segment)
    {
        $this->segment[] = $segment;
        return $this;
    }

    /**
     * isset segment
     *
     * A Composite containing details of a segment of the Resource to which the Condition is applicable. If no segment is specified, the whole Resource is subject the RightsClaim Policy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSegment($index)
    {
        return isset($this->segment[$index]);
    }

    /**
     * unset segment
     *
     * A Composite containing details of a segment of the Resource to which the Condition is applicable. If no segment is specified, the whole Resource is subject the RightsClaim Policy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSegment($index)
    {
        unset($this->segment[$index]);
    }

    /**
     * Gets as segment
     *
     * A Composite containing details of a segment of the Resource to which the Condition is applicable. If no segment is specified, the whole Resource is subject the RightsClaim Policy.
     *
     * @return \DedexBundle\Entity\Ern43\SegmentType[]
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Sets a new segment
     *
     * A Composite containing details of a segment of the Resource to which the Condition is applicable. If no segment is specified, the whole Resource is subject the RightsClaim Policy.
     *
     * @param \DedexBundle\Entity\Ern43\SegmentType[] $segment
     * @return self
     */
    public function setSegment(array $segment = null)
    {
        $this->segment = $segment;
        return $this;
    }

    /**
     * Adds as serviceException
     *
     * A Composite containing details of a Service that is an exception to the Condition. For these exceptions, usage does not need to be reported for fingerprinting and web monitoring services.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ServiceExceptionType $serviceException
     */
    public function addToServiceException(\DedexBundle\Entity\Ern43\ServiceExceptionType $serviceException)
    {
        $this->serviceException[] = $serviceException;
        return $this;
    }

    /**
     * isset serviceException
     *
     * A Composite containing details of a Service that is an exception to the Condition. For these exceptions, usage does not need to be reported for fingerprinting and web monitoring services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceException($index)
    {
        return isset($this->serviceException[$index]);
    }

    /**
     * unset serviceException
     *
     * A Composite containing details of a Service that is an exception to the Condition. For these exceptions, usage does not need to be reported for fingerprinting and web monitoring services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceException($index)
    {
        unset($this->serviceException[$index]);
    }

    /**
     * Gets as serviceException
     *
     * A Composite containing details of a Service that is an exception to the Condition. For these exceptions, usage does not need to be reported for fingerprinting and web monitoring services.
     *
     * @return \DedexBundle\Entity\Ern43\ServiceExceptionType[]
     */
    public function getServiceException()
    {
        return $this->serviceException;
    }

    /**
     * Sets a new serviceException
     *
     * A Composite containing details of a Service that is an exception to the Condition. For these exceptions, usage does not need to be reported for fingerprinting and web monitoring services.
     *
     * @param \DedexBundle\Entity\Ern43\ServiceExceptionType[] $serviceException
     * @return self
     */
    public function setServiceException(array $serviceException = null)
    {
        $this->serviceException = $serviceException;
        return $this;
    }
}

