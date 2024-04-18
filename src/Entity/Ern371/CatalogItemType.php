<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing CatalogItemType
 *
 * A Composite containing details of a Release
 *  which is an item of a catalog.
 * XSD Type: CatalogItem
 */
class CatalogItemType
{
    /**
     * A Territory for the Release. The use of
     *  ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS
     *  TerritoryCodes should only be used if both MessageSender and MessageRecipient are
     *  familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern371\AllTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern371\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing details of a Title
     *  of the Release.
     *
     * @var \DedexBundle\Entity\Ern371\TitleType $title
     */
    private $title = null;

    /**
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
     *
     * @var \DedexBundle\Entity\Ern371\NameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing details of a
     *  Contributor to the catalog, i.e. to at least one of the included
     *  Releases.
     *
     * @var \DedexBundle\Entity\Ern371\NameType[] $contributorName
     */
    private $contributorName = [
        
    ];

    /**
     * A Composite containing details of a
     *  DisplayTitle of the Release.
     *
     * @var \DedexBundle\Entity\Ern371\ReferenceTitleType $displayTitle
     */
    private $displayTitle = null;

    /**
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @var \DedexBundle\Entity\Ern371\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of a Genre
     *  to which the Release belongs.
     *
     * @var \DedexBundle\Entity\Ern371\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the
     *  PLine for the Release.
     *
     * @var \DedexBundle\Entity\Ern371\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the
     *  CLine for the Release.
     *
     * @var \DedexBundle\Entity\Ern371\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Release was or will be first made available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\Ern371\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * Adds as territoryCode
     *
     * A Territory for the Release. The use of
     *  ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS
     *  TerritoryCodes should only be used if both MessageSender and MessageRecipient are
     *  familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\AllTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern371\AllTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory for the Release. The use of
     *  ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS
     *  TerritoryCodes should only be used if both MessageSender and MessageRecipient are
     *  familiar with this standard.
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
     * A Territory for the Release. The use of
     *  ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS
     *  TerritoryCodes should only be used if both MessageSender and MessageRecipient are
     *  familiar with this standard.
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
     * A Territory for the Release. The use of
     *  ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS
     *  TerritoryCodes should only be used if both MessageSender and MessageRecipient are
     *  familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern371\AllTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory for the Release. The use of
     *  ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS
     *  TerritoryCodes should only be used if both MessageSender and MessageRecipient are
     *  familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern371\AllTerritoryCodeType[] $territoryCode
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
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DedexBundle\Entity\Ern371\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
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
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
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
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern371\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern371\ReleaseIdType[] $releaseId
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
     * A Composite containing details of a Title
     *  of the Release.
     *
     * @return \DedexBundle\Entity\Ern371\TitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the Release.
     *
     * @param \DedexBundle\Entity\Ern371\TitleType $title
     * @return self
     */
    public function setTitle(\DedexBundle\Entity\Ern371\TitleType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
     *
     * @return \DedexBundle\Entity\Ern371\NameType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
     *
     * @param \DedexBundle\Entity\Ern371\NameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(\DedexBundle\Entity\Ern371\NameType $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as contributorName
     *
     * A Composite containing details of a
     *  Contributor to the catalog, i.e. to at least one of the included
     *  Releases.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\NameType $contributorName
     */
    public function addToContributorName(\DedexBundle\Entity\Ern371\NameType $contributorName)
    {
        $this->contributorName[] = $contributorName;
        return $this;
    }

    /**
     * isset contributorName
     *
     * A Composite containing details of a
     *  Contributor to the catalog, i.e. to at least one of the included
     *  Releases.
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
     * A Composite containing details of a
     *  Contributor to the catalog, i.e. to at least one of the included
     *  Releases.
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
     * A Composite containing details of a
     *  Contributor to the catalog, i.e. to at least one of the included
     *  Releases.
     *
     * @return \DedexBundle\Entity\Ern371\NameType[]
     */
    public function getContributorName()
    {
        return $this->contributorName;
    }

    /**
     * Sets a new contributorName
     *
     * A Composite containing details of a
     *  Contributor to the catalog, i.e. to at least one of the included
     *  Releases.
     *
     * @param \DedexBundle\Entity\Ern371\NameType[] $contributorName
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
     * A Composite containing details of a
     *  DisplayTitle of the Release.
     *
     * @return \DedexBundle\Entity\Ern371\ReferenceTitleType
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a
     *  DisplayTitle of the Release.
     *
     * @param \DedexBundle\Entity\Ern371\ReferenceTitleType $displayTitle
     * @return self
     */
    public function setDisplayTitle(\DedexBundle\Entity\Ern371\ReferenceTitleType $displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\LabelNameType $labelName
     */
    public function addToLabelName(\DedexBundle\Entity\Ern371\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
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
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
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
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @return \DedexBundle\Entity\Ern371\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @param \DedexBundle\Entity\Ern371\LabelNameType[] $labelName
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
     * A Composite containing details of a Genre
     *  to which the Release belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\GenreType $genre
     */
    public function addToGenre(\DedexBundle\Entity\Ern371\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre
     *  to which the Release belongs.
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
     * A Composite containing details of a Genre
     *  to which the Release belongs.
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
     * A Composite containing details of a Genre
     *  to which the Release belongs.
     *
     * @return \DedexBundle\Entity\Ern371\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre
     *  to which the Release belongs.
     *
     * @param \DedexBundle\Entity\Ern371\GenreType[] $genre
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
     * A Composite containing details of the
     *  PLine for the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\PLineType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern371\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the
     *  PLine for the Release.
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
     * A Composite containing details of the
     *  PLine for the Release.
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
     * A Composite containing details of the
     *  PLine for the Release.
     *
     * @return \DedexBundle\Entity\Ern371\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the
     *  PLine for the Release.
     *
     * @param \DedexBundle\Entity\Ern371\PLineType[] $pLine
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
     * A Composite containing details of the
     *  CLine for the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern371\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the
     *  CLine for the Release.
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
     * A Composite containing details of the
     *  CLine for the Release.
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
     * A Composite containing details of the
     *  CLine for the Release.
     *
     * @return \DedexBundle\Entity\Ern371\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the
     *  CLine for the Release.
     *
     * @param \DedexBundle\Entity\Ern371\CLineType[] $cLine
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
     * A Composite containing details of the Date
     *  and Place of the Event in which the Release was or will be first made available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD).
     *
     * @return \DedexBundle\Entity\Ern371\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Release was or will be first made available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\Ern371\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(\DedexBundle\Entity\Ern371\EventDateType $releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }
}

