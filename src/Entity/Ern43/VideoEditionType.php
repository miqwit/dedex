<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing VideoEditionType
 *
 * A Composite containing details of a VideoEdition that has been created based on the same content as the 'main' Video but specifically for a different encoding for the audio such as immersive audio.
 * XSD Type: VideoEdition
 */
class VideoEditionType
{
    /**
     * A Type of edition with regards to the audio part. The Type has to be provided if two VideoEditions are provided for the same Video.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * A Composite containing details of a VideoId.
     *
     * @var \DedexBundle\Entity\Ern43\VideoIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the VideoEdition (but not all other editions).
     *
     * @var \DedexBundle\Entity\Ern43\EditionContributorType[] $editionContributor
     */
    private $editionContributor = [
        
    ];

    /**
     * A Composite containing details of the PLine for the VideoEdition.
     *
     * @var \DedexBundle\Entity\Ern43\PLineWithDefaultType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the VideoEdition.
     *
     * @var \DedexBundle\Entity\Ern43\CLineWithDefaultType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A mode in which the VideoEdition is made, which includes audio channel configurations (mainly for stereo and surround sound) and audio object configurations (mainly for immersive audio).
     *
     * @var string $recordingMode
     */
    private $recordingMode = null;

    /**
     * A Composite containing technical details of the VideoEdition.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @var \DedexBundle\Entity\Ern43\TechnicalVideoDetailsType[] $technicalDetails
     */
    private $technicalDetails = [
        
    ];

    /**
     * Gets as type
     *
     * A Type of edition with regards to the audio part. The Type has to be provided if two VideoEditions are provided for the same Video.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Type of edition with regards to the audio part. The Type has to be provided if two VideoEditions are provided for the same Video.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as resourceId
     *
     * A Composite containing details of a VideoId.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\VideoIdType $resourceId
     */
    public function addToResourceId(\DedexBundle\Entity\Ern43\VideoIdType $resourceId)
    {
        $this->resourceId[] = $resourceId;
        return $this;
    }

    /**
     * isset resourceId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceId($index)
    {
        return isset($this->resourceId[$index]);
    }

    /**
     * unset resourceId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceId($index)
    {
        unset($this->resourceId[$index]);
    }

    /**
     * Gets as resourceId
     *
     * A Composite containing details of a VideoId.
     *
     * @return \DedexBundle\Entity\Ern43\VideoIdType[]
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of a VideoId.
     *
     * @param \DedexBundle\Entity\Ern43\VideoIdType[] $resourceId
     * @return self
     */
    public function setResourceId(array $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Adds as editionContributor
     *
     * A Composite containing details of a Contributor to the VideoEdition (but not all other editions).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\EditionContributorType $editionContributor
     */
    public function addToEditionContributor(\DedexBundle\Entity\Ern43\EditionContributorType $editionContributor)
    {
        $this->editionContributor[] = $editionContributor;
        return $this;
    }

    /**
     * isset editionContributor
     *
     * A Composite containing details of a Contributor to the VideoEdition (but not all other editions).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEditionContributor($index)
    {
        return isset($this->editionContributor[$index]);
    }

    /**
     * unset editionContributor
     *
     * A Composite containing details of a Contributor to the VideoEdition (but not all other editions).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEditionContributor($index)
    {
        unset($this->editionContributor[$index]);
    }

    /**
     * Gets as editionContributor
     *
     * A Composite containing details of a Contributor to the VideoEdition (but not all other editions).
     *
     * @return \DedexBundle\Entity\Ern43\EditionContributorType[]
     */
    public function getEditionContributor()
    {
        return $this->editionContributor;
    }

    /**
     * Sets a new editionContributor
     *
     * A Composite containing details of a Contributor to the VideoEdition (but not all other editions).
     *
     * @param \DedexBundle\Entity\Ern43\EditionContributorType[] $editionContributor
     * @return self
     */
    public function setEditionContributor(array $editionContributor = null)
    {
        $this->editionContributor = $editionContributor;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the VideoEdition.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PLineWithDefaultType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern43\PLineWithDefaultType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the VideoEdition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the PLine for the VideoEdition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the VideoEdition.
     *
     * @return \DedexBundle\Entity\Ern43\PLineWithDefaultType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the VideoEdition.
     *
     * @param \DedexBundle\Entity\Ern43\PLineWithDefaultType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the VideoEdition.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CLineWithDefaultType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern43\CLineWithDefaultType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the VideoEdition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A Composite containing details of the CLine for the VideoEdition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the VideoEdition.
     *
     * @return \DedexBundle\Entity\Ern43\CLineWithDefaultType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the VideoEdition.
     *
     * @param \DedexBundle\Entity\Ern43\CLineWithDefaultType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as recordingMode
     *
     * A mode in which the VideoEdition is made, which includes audio channel configurations (mainly for stereo and surround sound) and audio object configurations (mainly for immersive audio).
     *
     * @return string
     */
    public function getRecordingMode()
    {
        return $this->recordingMode;
    }

    /**
     * Sets a new recordingMode
     *
     * A mode in which the VideoEdition is made, which includes audio channel configurations (mainly for stereo and surround sound) and audio object configurations (mainly for immersive audio).
     *
     * @param string $recordingMode
     * @return self
     */
    public function setRecordingMode($recordingMode)
    {
        $this->recordingMode = $recordingMode;
        return $this;
    }

    /**
     * Adds as technicalDetails
     *
     * A Composite containing technical details of the VideoEdition.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\TechnicalVideoDetailsType $technicalDetails
     */
    public function addToTechnicalDetails(\DedexBundle\Entity\Ern43\TechnicalVideoDetailsType $technicalDetails)
    {
        $this->technicalDetails[] = $technicalDetails;
        return $this;
    }

    /**
     * isset technicalDetails
     *
     * A Composite containing technical details of the VideoEdition.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalDetails($index)
    {
        return isset($this->technicalDetails[$index]);
    }

    /**
     * unset technicalDetails
     *
     * A Composite containing technical details of the VideoEdition.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalDetails($index)
    {
        unset($this->technicalDetails[$index]);
    }

    /**
     * Gets as technicalDetails
     *
     * A Composite containing technical details of the VideoEdition.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return \DedexBundle\Entity\Ern43\TechnicalVideoDetailsType[]
     */
    public function getTechnicalDetails()
    {
        return $this->technicalDetails;
    }

    /**
     * Sets a new technicalDetails
     *
     * A Composite containing technical details of the VideoEdition.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param \DedexBundle\Entity\Ern43\TechnicalVideoDetailsType[] $technicalDetails
     * @return self
     */
    public function setTechnicalDetails(array $technicalDetails = null)
    {
        $this->technicalDetails = $technicalDetails;
        return $this;
    }
}

