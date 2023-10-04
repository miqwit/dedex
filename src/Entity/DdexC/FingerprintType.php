<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing FingerprintType
 *
 * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
 * XSD Type: Fingerprint
 */
class FingerprintType
{
    /**
     * The value of the ddexC:Fingerprint.
     *
     * @var string $fingerprint
     */
    private $fingerprint = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of FingerprintAlgorithm governing the ddexC:Fingerprint.
     *
     * @var \DedexBundle\Entity\DdexC\FingerprintAlgorithmTypeType $fingerprintAlgorithmType
     */
    private $fingerprintAlgorithmType = null;

    /**
     * The ddex:Identifier of the ddex:Version of the FingerprintAlgorithm.
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
     * Gets as fingerprint
     *
     * The value of the ddexC:Fingerprint.
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
     * The value of the ddexC:Fingerprint.
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
     * A ddex:Composite containing details of the ddex:Type of FingerprintAlgorithm governing the ddexC:Fingerprint.
     *
     * @return \DedexBundle\Entity\DdexC\FingerprintAlgorithmTypeType
     */
    public function getFingerprintAlgorithmType()
    {
        return $this->fingerprintAlgorithmType;
    }

    /**
     * Sets a new fingerprintAlgorithmType
     *
     * A ddex:Composite containing details of the ddex:Type of FingerprintAlgorithm governing the ddexC:Fingerprint.
     *
     * @param \DedexBundle\Entity\DdexC\FingerprintAlgorithmTypeType $fingerprintAlgorithmType
     * @return self
     */
    public function setFingerprintAlgorithmType(\DedexBundle\Entity\DdexC\FingerprintAlgorithmTypeType $fingerprintAlgorithmType)
    {
        $this->fingerprintAlgorithmType = $fingerprintAlgorithmType;
        return $this;
    }

    /**
     * Gets as fingerprintAlgorithmVersion
     *
     * The ddex:Identifier of the ddex:Version of the FingerprintAlgorithm.
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
     * The ddex:Identifier of the ddex:Version of the FingerprintAlgorithm.
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
}

