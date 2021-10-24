<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing DetailedHashSumType
 *
 * A Composite containing details of a HashSum and its governing algorithm.
 * XSD Type: DetailedHashSum
 */
class DetailedHashSumType
{

    /**
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @var \DedexBundle\Entity\Ern411\HashSumAlgorithmTypeType $algorithm
     */
    private $algorithm = null;

    /**
     * The Identifier of the Version of the HashSumAlgorithm.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * A parameter of the HashSumAlgorithm.
     *
     * @var string $parameter
     */
    private $parameter = null;

    /**
     * The datatype of the HashSum.
     *
     * @var string $dataType
     */
    private $dataType = null;

    /**
     * The value of the HashSum.
     *
     * @var string $hashSumValue
     */
    private $hashSumValue = null;

    /**
     * Gets as algorithm
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @return \DedexBundle\Entity\Ern411\HashSumAlgorithmTypeType
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @param \DedexBundle\Entity\Ern411\HashSumAlgorithmTypeType $algorithm
     * @return self
     */
    public function setAlgorithm(\DedexBundle\Entity\Ern411\HashSumAlgorithmTypeType $algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as version
     *
     * The Identifier of the Version of the HashSumAlgorithm.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The Identifier of the Version of the HashSumAlgorithm.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as parameter
     *
     * A parameter of the HashSumAlgorithm.
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * A parameter of the HashSumAlgorithm.
     *
     * @param string $parameter
     * @return self
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as dataType
     *
     * The datatype of the HashSum.
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets a new dataType
     *
     * The datatype of the HashSum.
     *
     * @param string $dataType
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * Gets as hashSumValue
     *
     * The value of the HashSum.
     *
     * @return string
     */
    public function getHashSumValue()
    {
        return $this->hashSumValue;
    }

    /**
     * Sets a new hashSumValue
     *
     * The value of the HashSum.
     *
     * @param string $hashSumValue
     * @return self
     */
    public function setHashSumValue($hashSumValue)
    {
        $this->hashSumValue = $hashSumValue;
        return $this;
    }


}

