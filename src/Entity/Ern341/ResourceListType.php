<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ResourceListType
 *
 * A ddex:Composite containing details of one or more ddex:Resources. ResourceList provides a simple means of aggregating ddex:Resources without any explicit sequencing or grouping: if that is needed it is provided by the ddex:ResourceGroup ddex:Composite.
 * XSD Type: ResourceList
 */
class ResourceListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern341\SoundRecordingType[] $soundRecording
     */
    private $soundRecording = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MIDI.
     *
     * @var \DedexBundle\Entity\Ern341\MIDIType[] $mIDI
     */
    private $mIDI = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Video.
     *
     * @var \DedexBundle\Entity\Ern341\VideoType[] $video
     */
    private $video = [
        
    ];

    /**
     * A ddex:Composite containing details of an ddex:Image.
     *
     * @var \DedexBundle\Entity\Ern341\ImageType[] $image
     */
    private $image = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @var \DedexBundle\Entity\Ern341\TextType[] $text
     */
    private $text = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @var \DedexBundle\Entity\Ern341\SheetMusicType[] $sheetMusic
     */
    private $sheetMusic = [
        
    ];

    /**
     * A ddex:Composite containing details of an item of ddex:Software.
     *
     * @var \DedexBundle\Entity\Ern341\SoftwareType[] $software
     */
    private $software = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:UserDefinedResource.
     *
     * @var \DedexBundle\Entity\Ern341\UserDefinedResourceType[] $userDefinedResource
     */
    private $userDefinedResource = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as soundRecording
     *
     * A ddex:Composite containing details of a ddex:SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\SoundRecordingType $soundRecording
     */
    public function addToSoundRecording(\DedexBundle\Entity\Ern341\SoundRecordingType $soundRecording)
    {
        $this->soundRecording[] = $soundRecording;
        return $this;
    }

    /**
     * isset soundRecording
     *
     * A ddex:Composite containing details of a ddex:SoundRecording.
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
     * A ddex:Composite containing details of a ddex:SoundRecording.
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
     * A ddex:Composite containing details of a ddex:SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern341\SoundRecordingType[]
     */
    public function getSoundRecording()
    {
        return $this->soundRecording;
    }

    /**
     * Sets a new soundRecording
     *
     * A ddex:Composite containing details of a ddex:SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern341\SoundRecordingType[] $soundRecording
     * @return self
     */
    public function setSoundRecording(array $soundRecording = null)
    {
        $this->soundRecording = $soundRecording;
        return $this;
    }

    /**
     * Adds as mIDI
     *
     * A ddex:Composite containing details of a ddex:MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\MIDIType $mIDI
     */
    public function addToMIDI(\DedexBundle\Entity\Ern341\MIDIType $mIDI)
    {
        $this->mIDI[] = $mIDI;
        return $this;
    }

    /**
     * isset mIDI
     *
     * A ddex:Composite containing details of a ddex:MIDI.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMIDI($index)
    {
        return isset($this->mIDI[$index]);
    }

    /**
     * unset mIDI
     *
     * A ddex:Composite containing details of a ddex:MIDI.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMIDI($index)
    {
        unset($this->mIDI[$index]);
    }

    /**
     * Gets as mIDI
     *
     * A ddex:Composite containing details of a ddex:MIDI.
     *
     * @return \DedexBundle\Entity\Ern341\MIDIType[]
     */
    public function getMIDI()
    {
        return $this->mIDI;
    }

    /**
     * Sets a new mIDI
     *
     * A ddex:Composite containing details of a ddex:MIDI.
     *
     * @param \DedexBundle\Entity\Ern341\MIDIType[] $mIDI
     * @return self
     */
    public function setMIDI(array $mIDI = null)
    {
        $this->mIDI = $mIDI;
        return $this;
    }

    /**
     * Adds as video
     *
     * A ddex:Composite containing details of a ddex:Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\VideoType $video
     */
    public function addToVideo(\DedexBundle\Entity\Ern341\VideoType $video)
    {
        $this->video[] = $video;
        return $this;
    }

    /**
     * isset video
     *
     * A ddex:Composite containing details of a ddex:Video.
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
     * A ddex:Composite containing details of a ddex:Video.
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
     * A ddex:Composite containing details of a ddex:Video.
     *
     * @return \DedexBundle\Entity\Ern341\VideoType[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets a new video
     *
     * A ddex:Composite containing details of a ddex:Video.
     *
     * @param \DedexBundle\Entity\Ern341\VideoType[] $video
     * @return self
     */
    public function setVideo(array $video = null)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * Adds as image
     *
     * A ddex:Composite containing details of an ddex:Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\ImageType $image
     */
    public function addToImage(\DedexBundle\Entity\Ern341\ImageType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * A ddex:Composite containing details of an ddex:Image.
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
     * A ddex:Composite containing details of an ddex:Image.
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
     * A ddex:Composite containing details of an ddex:Image.
     *
     * @return \DedexBundle\Entity\Ern341\ImageType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * A ddex:Composite containing details of an ddex:Image.
     *
     * @param \DedexBundle\Entity\Ern341\ImageType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Adds as text
     *
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\TextType $text
     */
    public function addToText(\DedexBundle\Entity\Ern341\TextType $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * A ddex:Composite containing details of a ddex:Text.
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
     * A ddex:Composite containing details of a ddex:Text.
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
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @return \DedexBundle\Entity\Ern341\TextType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @param \DedexBundle\Entity\Ern341\TextType[] $text
     * @return self
     */
    public function setText(array $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as sheetMusic
     *
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\SheetMusicType $sheetMusic
     */
    public function addToSheetMusic(\DedexBundle\Entity\Ern341\SheetMusicType $sheetMusic)
    {
        $this->sheetMusic[] = $sheetMusic;
        return $this;
    }

    /**
     * isset sheetMusic
     *
     * A ddex:Composite containing details of a ddex:Text.
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
     * A ddex:Composite containing details of a ddex:Text.
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
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @return \DedexBundle\Entity\Ern341\SheetMusicType[]
     */
    public function getSheetMusic()
    {
        return $this->sheetMusic;
    }

    /**
     * Sets a new sheetMusic
     *
     * A ddex:Composite containing details of a ddex:Text.
     *
     * @param \DedexBundle\Entity\Ern341\SheetMusicType[] $sheetMusic
     * @return self
     */
    public function setSheetMusic(array $sheetMusic = null)
    {
        $this->sheetMusic = $sheetMusic;
        return $this;
    }

    /**
     * Adds as software
     *
     * A ddex:Composite containing details of an item of ddex:Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\SoftwareType $software
     */
    public function addToSoftware(\DedexBundle\Entity\Ern341\SoftwareType $software)
    {
        $this->software[] = $software;
        return $this;
    }

    /**
     * isset software
     *
     * A ddex:Composite containing details of an item of ddex:Software.
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
     * A ddex:Composite containing details of an item of ddex:Software.
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
     * A ddex:Composite containing details of an item of ddex:Software.
     *
     * @return \DedexBundle\Entity\Ern341\SoftwareType[]
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Sets a new software
     *
     * A ddex:Composite containing details of an item of ddex:Software.
     *
     * @param \DedexBundle\Entity\Ern341\SoftwareType[] $software
     * @return self
     */
    public function setSoftware(array $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Adds as userDefinedResource
     *
     * A ddex:Composite containing details of a ddex:UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\UserDefinedResourceType $userDefinedResource
     */
    public function addToUserDefinedResource(\DedexBundle\Entity\Ern341\UserDefinedResourceType $userDefinedResource)
    {
        $this->userDefinedResource[] = $userDefinedResource;
        return $this;
    }

    /**
     * isset userDefinedResource
     *
     * A ddex:Composite containing details of a ddex:UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedResource($index)
    {
        return isset($this->userDefinedResource[$index]);
    }

    /**
     * unset userDefinedResource
     *
     * A ddex:Composite containing details of a ddex:UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedResource($index)
    {
        unset($this->userDefinedResource[$index]);
    }

    /**
     * Gets as userDefinedResource
     *
     * A ddex:Composite containing details of a ddex:UserDefinedResource.
     *
     * @return \DedexBundle\Entity\Ern341\UserDefinedResourceType[]
     */
    public function getUserDefinedResource()
    {
        return $this->userDefinedResource;
    }

    /**
     * Sets a new userDefinedResource
     *
     * A ddex:Composite containing details of a ddex:UserDefinedResource.
     *
     * @param \DedexBundle\Entity\Ern341\UserDefinedResourceType[] $userDefinedResource
     * @return self
     */
    public function setUserDefinedResource(array $userDefinedResource = null)
    {
        $this->userDefinedResource = $userDefinedResource;
        return $this;
    }
}

