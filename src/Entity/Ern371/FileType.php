<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing FileType
 *
 * A Composite containing details of a
 *  File.
 * XSD Type: File
 */
class FileType
{
    /**
     * The Name of the File representing
     *  the Resource. The FileName may not contain any path information and the
     *  concatenation of FilePath and FileName shall be the a complete valid path to
     *  the Resource File.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * The location of the File
     *  representing the Resource relative to the XML file containing the
     *  NewReleaseMessage. The FilePath may not contain any FileName information and
     *  the concatenation of FilePath and FileName shall be a complete valid path to
     *  the Resource File.
     *
     * @var string $filePath
     */
    private $filePath = null;

    /**
     * A URL of the File.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A Composite containing a HashSum of the
     *  File and information about the algorithm with which it has been
     *  generated.
     *
     * @var \DedexBundle\Entity\Ern371\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * Gets as fileName
     *
     * The Name of the File representing
     *  the Resource. The FileName may not contain any path information and the
     *  concatenation of FilePath and FileName shall be the a complete valid path to
     *  the Resource File.
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
     * The Name of the File representing
     *  the Resource. The FileName may not contain any path information and the
     *  concatenation of FilePath and FileName shall be the a complete valid path to
     *  the Resource File.
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
     * The location of the File
     *  representing the Resource relative to the XML file containing the
     *  NewReleaseMessage. The FilePath may not contain any FileName information and
     *  the concatenation of FilePath and FileName shall be a complete valid path to
     *  the Resource File.
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
     * The location of the File
     *  representing the Resource relative to the XML file containing the
     *  NewReleaseMessage. The FilePath may not contain any FileName information and
     *  the concatenation of FilePath and FileName shall be a complete valid path to
     *  the Resource File.
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
     * A URL of the File.
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
     * A URL of the File.
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
     * A Composite containing a HashSum of the
     *  File and information about the algorithm with which it has been
     *  generated.
     *
     * @return \DedexBundle\Entity\Ern371\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a HashSum of the
     *  File and information about the algorithm with which it has been
     *  generated.
     *
     * @param \DedexBundle\Entity\Ern371\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DedexBundle\Entity\Ern371\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }
}

