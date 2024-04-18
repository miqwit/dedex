<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing HashSumType
 *
 * A ddex:Composite containing details of a ddex:HashSum and its governing algorithm.
 * XSD Type: HashSum
 */
class HashSumType
{
    /**
     * The value of the ddexC:HashSum.
     *
     * @var string $hashSum
     */
    private $hashSum = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of ddex:HashSumAlgorithm governing the ddexC:HashSum.
     *
     * @var \DedexBundle\Entity\DdexC\HashSumAlgorithmTypeType $hashSumAlgorithmType
     */
    private $hashSumAlgorithmType = null;

    /**
     * Gets as hashSum
     *
     * The value of the ddexC:HashSum.
     *
     * @return string
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * The value of the ddexC:HashSum.
     *
     * @param string $hashSum
     * @return self
     */
    public function setHashSum($hashSum)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as hashSumAlgorithmType
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:HashSumAlgorithm governing the ddexC:HashSum.
     *
     * @return \DedexBundle\Entity\DdexC\HashSumAlgorithmTypeType
     */
    public function getHashSumAlgorithmType()
    {
        return $this->hashSumAlgorithmType;
    }

    /**
     * Sets a new hashSumAlgorithmType
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:HashSumAlgorithm governing the ddexC:HashSum.
     *
     * @param \DedexBundle\Entity\DdexC\HashSumAlgorithmTypeType $hashSumAlgorithmType
     * @return self
     */
    public function setHashSumAlgorithmType(\DedexBundle\Entity\DdexC\HashSumAlgorithmTypeType $hashSumAlgorithmType)
    {
        $this->hashSumAlgorithmType = $hashSumAlgorithmType;
        return $this;
    }
}

