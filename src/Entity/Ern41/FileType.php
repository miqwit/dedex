<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing FileType
 *
 * A Composite containing details of a File.
 * XSD Type: File
 */
class FileType
{

    /**
     * A URI of the File (this can be a URL or another type of Identifier using a scheme identifier, e.g. http or ftp, as defined in RFC 3986).
     *
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @var \DedexBundle\Entity\Ern41\DetailedHashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * The size of the File in kilobytes.
     *
     * @var float $fileSize
     */
    private $fileSize = null;

    /**
     * Gets as uRI
     *
     * A URI of the File (this can be a URL or another type of Identifier using a scheme identifier, e.g. http or ftp, as defined in RFC 3986).
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * A URI of the File (this can be a URL or another type of Identifier using a scheme identifier, e.g. http or ftp, as defined in RFC 3986).
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @return \DedexBundle\Entity\Ern41\DetailedHashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @param \DedexBundle\Entity\Ern41\DetailedHashSumType $hashSum
     * @return self
     */
    public function setHashSum(\DedexBundle\Entity\Ern41\DetailedHashSumType $hashSum)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as fileSize
     *
     * The size of the File in kilobytes.
     *
     * @return float
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Sets a new fileSize
     *
     * The size of the File in kilobytes.
     *
     * @param float $fileSize
     * @return self
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }


}

