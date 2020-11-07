<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ResourceListType
 *
 * A Composite containing details of one or more Resources. ResourceList provides a simple means of aggregating Resources without any explicit sequencing or grouping: if that is needed it is provided by the ResourceGroup Composite.
 * XSD Type: ResourceList
 */
class ResourceListType
{

    /**
     * A Composite containing details of a SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern41\SoundRecordingType[] $soundRecording
     */
    private $soundRecording = [
        
    ];

    /**
     * A Composite containing details of a Video.
     *
     * @var \DedexBundle\Entity\Ern41\VideoType[] $video
     */
    private $video = [
        
    ];

    /**
     * A Composite containing details of an Image.
     *
     * @var \DedexBundle\Entity\Ern41\ImageType[] $image
     */
    private $image = [
        
    ];

    /**
     * A Composite containing details of a Text.
     *
     * @var \DedexBundle\Entity\Ern41\TextType[] $text
     */
    private $text = [
        
    ];

    /**
     * A Composite containing details of a SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern41\SheetMusicType[] $sheetMusic
     */
    private $sheetMusic = [
        
    ];

    /**
     * A Composite containing details of an item of Software.
     *
     * @var \DedexBundle\Entity\Ern41\SoftwareType[] $software
     */
    private $software = [
        
    ];

    /**
     * Adds as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\SoundRecordingType $soundRecording
     */
    public function addToSoundRecording(\DedexBundle\Entity\Ern41\SoundRecordingType $soundRecording)
    {
        $this->soundRecording[] = $soundRecording;
        return $this;
    }

    /**
     * isset soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecording($index)
    {
        return isset($this->soundRecording[$index]);
    }

    /**
     * unset soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecording($index)
    {
        unset($this->soundRecording[$index]);
    }

    /**
     * Gets as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern41\SoundRecordingType[]
     */
    public function getSoundRecording()
    {
        return $this->soundRecording;
    }

    /**
     * Sets a new soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern41\SoundRecordingType[] $soundRecording
     * @return self
     */
    public function setSoundRecording(array $soundRecording)
    {
        $this->soundRecording = $soundRecording;
        return $this;
    }

    /**
     * Adds as video
     *
     * A Composite containing details of a Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\VideoType $video
     */
    public function addToVideo(\DedexBundle\Entity\Ern41\VideoType $video)
    {
        $this->video[] = $video;
        return $this;
    }

    /**
     * isset video
     *
     * A Composite containing details of a Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideo($index)
    {
        return isset($this->video[$index]);
    }

    /**
     * unset video
     *
     * A Composite containing details of a Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideo($index)
    {
        unset($this->video[$index]);
    }

    /**
     * Gets as video
     *
     * A Composite containing details of a Video.
     *
     * @return \DedexBundle\Entity\Ern41\VideoType[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets a new video
     *
     * A Composite containing details of a Video.
     *
     * @param \DedexBundle\Entity\Ern41\VideoType[] $video
     * @return self
     */
    public function setVideo(array $video)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * Adds as image
     *
     * A Composite containing details of an Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ImageType $image
     */
    public function addToImage(\DedexBundle\Entity\Ern41\ImageType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * A Composite containing details of an Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * A Composite containing details of an Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * A Composite containing details of an Image.
     *
     * @return \DedexBundle\Entity\Ern41\ImageType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * A Composite containing details of an Image.
     *
     * @param \DedexBundle\Entity\Ern41\ImageType[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Adds as text
     *
     * A Composite containing details of a Text.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\TextType $text
     */
    public function addToText(\DedexBundle\Entity\Ern41\TextType $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * A Composite containing details of a Text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * A Composite containing details of a Text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * A Composite containing details of a Text.
     *
     * @return \DedexBundle\Entity\Ern41\TextType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A Composite containing details of a Text.
     *
     * @param \DedexBundle\Entity\Ern41\TextType[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as sheetMusic
     *
     * A Composite containing details of a SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\SheetMusicType $sheetMusic
     */
    public function addToSheetMusic(\DedexBundle\Entity\Ern41\SheetMusicType $sheetMusic)
    {
        $this->sheetMusic[] = $sheetMusic;
        return $this;
    }

    /**
     * isset sheetMusic
     *
     * A Composite containing details of a SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSheetMusic($index)
    {
        return isset($this->sheetMusic[$index]);
    }

    /**
     * unset sheetMusic
     *
     * A Composite containing details of a SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSheetMusic($index)
    {
        unset($this->sheetMusic[$index]);
    }

    /**
     * Gets as sheetMusic
     *
     * A Composite containing details of a SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern41\SheetMusicType[]
     */
    public function getSheetMusic()
    {
        return $this->sheetMusic;
    }

    /**
     * Sets a new sheetMusic
     *
     * A Composite containing details of a SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern41\SheetMusicType[] $sheetMusic
     * @return self
     */
    public function setSheetMusic(array $sheetMusic)
    {
        $this->sheetMusic = $sheetMusic;
        return $this;
    }

    /**
     * Adds as software
     *
     * A Composite containing details of an item of Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\SoftwareType $software
     */
    public function addToSoftware(\DedexBundle\Entity\Ern41\SoftwareType $software)
    {
        $this->software[] = $software;
        return $this;
    }

    /**
     * isset software
     *
     * A Composite containing details of an item of Software.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoftware($index)
    {
        return isset($this->software[$index]);
    }

    /**
     * unset software
     *
     * A Composite containing details of an item of Software.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoftware($index)
    {
        unset($this->software[$index]);
    }

    /**
     * Gets as software
     *
     * A Composite containing details of an item of Software.
     *
     * @return \DedexBundle\Entity\Ern41\SoftwareType[]
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Sets a new software
     *
     * A Composite containing details of an item of Software.
     *
     * @param \DedexBundle\Entity\Ern41\SoftwareType[] $software
     * @return self
     */
    public function setSoftware(array $software)
    {
        $this->software = $software;
        return $this;
    }


}

