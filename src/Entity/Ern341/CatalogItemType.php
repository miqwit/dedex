<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CatalogItemType
 *
 * A ddex:Composite containing details of a ddex:Release which is an item of a catalog.
 * XSD Type: CatalogItem
 */
class CatalogItemType
{
    /**
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType $title
     */
    private $title = null;

    /**
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @var \DedexBundle\Entity\DdexC\NameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @var \DedexBundle\Entity\DdexC\NameType[] $contributorName
     */
    private $contributorName = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:DisplayTitle of the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\ReferenceTitleType $displayTitle
     */
    private $displayTitle = null;

    /**
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @var \DedexBundle\Entity\DdexC\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @var \DedexBundle\Entity\DdexC\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @var \DedexBundle\Entity\DdexC\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DedexBundle\Entity\DdexC\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseId($index)
    {
        return isset($this->releaseId[$index]);
    }

    /**
     * unset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseId($index)
    {
        unset($this->releaseId[$index]);
    }

    /**
     * Gets as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\TitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\TitleType $title
     * @return self
     */
    public function setTitle(\DedexBundle\Entity\DdexC\TitleType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @param \DedexBundle\Entity\DdexC\NameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(\DedexBundle\Entity\DdexC\NameType $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\NameType $contributorName
     */
    public function addToContributorName(\DedexBundle\Entity\DdexC\NameType $contributorName)
    {
        $this->contributorName[] = $contributorName;
        return $this;
    }

    /**
     * isset contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributorName($index)
    {
        return isset($this->contributorName[$index]);
    }

    /**
     * unset contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributorName($index)
    {
        unset($this->contributorName[$index]);
    }

    /**
     * Gets as contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @return \DedexBundle\Entity\DdexC\NameType[]
     */
    public function getContributorName()
    {
        return $this->contributorName;
    }

    /**
     * Sets a new contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @param \DedexBundle\Entity\DdexC\NameType[] $contributorName
     * @return self
     */
    public function setContributorName(array $contributorName)
    {
        $this->contributorName = $contributorName;
        return $this;
    }

    /**
     * Gets as displayTitle
     *
     * A ddex:Composite containing details of a ddex:DisplayTitle of the ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\ReferenceTitleType
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A ddex:Composite containing details of a ddex:DisplayTitle of the ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\ReferenceTitleType $displayTitle
     * @return self
     */
    public function setDisplayTitle(\DedexBundle\Entity\DdexC\ReferenceTitleType $displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\LabelNameType $labelName
     */
    public function addToLabelName(\DedexBundle\Entity\DdexC\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelName($index)
    {
        return isset($this->labelName[$index]);
    }

    /**
     * unset labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelName($index)
    {
        unset($this->labelName[$index]);
    }

    /**
     * Gets as labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\GenreType $genre
     */
    public function addToGenre(\DedexBundle\Entity\DdexC\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @return \DedexBundle\Entity\DdexC\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @param \DedexBundle\Entity\DdexC\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\PLineType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\DdexC\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @return \DedexBundle\Entity\DdexC\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @param \DedexBundle\Entity\DdexC\PLineType[] $pLine
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
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\DdexC\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @return \DedexBundle\Entity\DdexC\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @param \DedexBundle\Entity\DdexC\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(\DedexBundle\Entity\DdexC\EventDateType $releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }
}

