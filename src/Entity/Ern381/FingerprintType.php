<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing FingerprintType
 *
 * A Composite containing details of a Fingerprint and its governing algorithm.
 * XSD Type: Fingerprint
 */
class FingerprintType
{
    /**
     * The value of the Fingerprint.
     *
     * @var string $fingerprint
     */
    private $fingerprint = null;

    /**
     * A Composite containing details of the Type of FingerprintAlgorithm governing the Fingerprint.
     *
     * @var \DedexBundle\Entity\Ern381\FingerprintAlgorithmTypeType $fingerprintAlgorithmType
     */
    private $fingerprintAlgorithmType = null;

    /**
     * The Identifier of the Version of the FingerprintAlgorithm.
     *
     * @var string $fingerprintAlgorithmVersion
     */
    private $fingerprintAlgorithmVersion = null;

    /**
     * A parameter of the FingerprintAlgorithm.
     *
     * @var string $fingerprintAlgorithmParameter
     */
    private $fingerprintAlgorithmParameter = null;

    /**
     * The datatype of the Fingerprint.
     *
     * @var string $fingerprintDataType
     */
    private $fingerprintDataType = null;

    /**
     * Gets as fingerprint
     *
     * The value of the Fingerprint.
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Sets a new fingerprint
     *
     * The value of the Fingerprint.
     *
     * @param string $fingerprint
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }

    /**
     * Gets as fingerprintAlgorithmType
     *
     * A Composite containing details of the Type of FingerprintAlgorithm governing the Fingerprint.
     *
     * @return \DedexBundle\Entity\Ern381\FingerprintAlgorithmTypeType
     */
    public function getFingerprintAlgorithmType()
    {
        return $this->fingerprintAlgorithmType;
    }

    /**
     * Sets a new fingerprintAlgorithmType
     *
     * A Composite containing details of the Type of FingerprintAlgorithm governing the Fingerprint.
     *
     * @param \DedexBundle\Entity\Ern381\FingerprintAlgorithmTypeType $fingerprintAlgorithmType
     * @return self
     */
    public function setFingerprintAlgorithmType(\DedexBundle\Entity\Ern381\FingerprintAlgorithmTypeType $fingerprintAlgorithmType)
    {
        $this->fingerprintAlgorithmType = $fingerprintAlgorithmType;
        return $this;
    }

    /**
     * Gets as fingerprintAlgorithmVersion
     *
     * The Identifier of the Version of the FingerprintAlgorithm.
     *
     * @return string
     */
    public function getFingerprintAlgorithmVersion()
    {
        return $this->fingerprintAlgorithmVersion;
    }

    /**
     * Sets a new fingerprintAlgorithmVersion
     *
     * The Identifier of the Version of the FingerprintAlgorithm.
     *
     * @param string $fingerprintAlgorithmVersion
     * @return self
     */
    public function setFingerprintAlgorithmVersion($fingerprintAlgorithmVersion)
    {
        $this->fingerprintAlgorithmVersion = $fingerprintAlgorithmVersion;
        return $this;
    }

    /**
     * Gets as fingerprintAlgorithmParameter
     *
     * A parameter of the FingerprintAlgorithm.
     *
     * @return string
     */
    public function getFingerprintAlgorithmParameter()
    {
        return $this->fingerprintAlgorithmParameter;
    }

    /**
     * Sets a new fingerprintAlgorithmParameter
     *
     * A parameter of the FingerprintAlgorithm.
     *
     * @param string $fingerprintAlgorithmParameter
     * @return self
     */
    public function setFingerprintAlgorithmParameter($fingerprintAlgorithmParameter)
    {
        $this->fingerprintAlgorithmParameter = $fingerprintAlgorithmParameter;
        return $this;
    }

    /**
     * Gets as fingerprintDataType
     *
     * The datatype of the Fingerprint.
     *
     * @return string
     */
    public function getFingerprintDataType()
    {
        return $this->fingerprintDataType;
    }

    /**
     * Sets a new fingerprintDataType
     *
     * The datatype of the Fingerprint.
     *
     * @param string $fingerprintDataType
     * @return self
     */
    public function setFingerprintDataType($fingerprintDataType)
    {
        $this->fingerprintDataType = $fingerprintDataType;
        return $this;
    }
}

