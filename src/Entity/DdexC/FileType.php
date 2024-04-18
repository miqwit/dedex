<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing FileType
 *
 * A ddex:Composite containing details of a ddex:File.
 * XSD Type: File
 */
class FileType
{
    /**
     * A ddex:Name of the ddexC:File.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * A location of the ddexC:File.
     *
     * @var string $filePath
     */
    private $filePath = null;

    /**
     * A ddex:URL of the ddex:File.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A ddex:Composite containing a ddex:HashSum of the ddexC:File and information about the algorithm with which it has been generated.
     *
     * @var \DedexBundle\Entity\DdexC\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * Gets as fileName
     *
     * A ddex:Name of the ddexC:File.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * A ddex:Name of the ddexC:File.
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as filePath
     *
     * A location of the ddexC:File.
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Sets a new filePath
     *
     * A location of the ddexC:File.
     *
     * @param string $filePath
     * @return self
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A ddex:URL of the ddex:File.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A ddex:URL of the ddex:File.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A ddex:Composite containing a ddex:HashSum of the ddexC:File and information about the algorithm with which it has been generated.
     *
     * @return \DedexBundle\Entity\DdexC\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A ddex:Composite containing a ddex:HashSum of the ddexC:File and information about the algorithm with which it has been generated.
     *
     * @param \DedexBundle\Entity\DdexC\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DedexBundle\Entity\DdexC\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }
}

