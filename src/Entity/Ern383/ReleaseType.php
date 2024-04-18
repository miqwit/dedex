<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing ReleaseType
 *
 * A Composite containing details of a DDEX
 *  Release.
 * XSD Type: Release
 */
class ReleaseType
{
    /**
     * The Language and script for the Elements of
     *  the Release as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the Release is a
     *  main one as defined in the relevant Profile Standard (=true) or not (=false). This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @var bool $isMainRelease
     */
    private $isMainRelease = null;

    /**
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * The Identifier (specific to the Message)
     *  of the Release. Used to link the Release to one or more Deal(s). This is a
     *  LocalReleaseAnchor starting with the letter R.
     *
     * @var string[] $releaseReference
     */
    private $releaseReference = [
        
    ];

    /**
     * A Composite containing details of
     *  promotional or other material related to the Release.
     *
     * @var \DedexBundle\Entity\Ern383\ExternalResourceLinkType[] $externalResourceLink
     */
    private $externalResourceLink = [
        
    ];

    /**
     * A Composite containing details of the A
     *  Composite containing details of the
     *  SalesReportingProxyReleaseId.
     *
     * @var \DedexBundle\Entity\Ern383\SalesReportingProxyReleaseIdType[] $salesReportingProxyReleaseId
     */
    private $salesReportingProxyReleaseId = [
        
    ];

    /**
     * A Composite containing details of the
     *  ReferenceTitle of the Release.
     *
     * @var \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of one
     *  or more Resources contained in the Release.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     */
    private $releaseResourceReferenceList = null;

    /**
     * A Composite containing details of a
     *  ResourceOmissionReason.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceOmissionReasonType $resourceOmissionReason
     */
    private $resourceOmissionReason = null;

    /**
     * A Composite containing details of one or
     *  more Collections contained in the Release.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     */
    private $releaseCollectionReferenceList = null;

    /**
     * A Composite containing details of the form
     *  in which a ReleaseCreator anticipates offering the Release to Consumers. This may
     *  be overridden by the ReleaseType for specific Territories as specified in the
     *  ReleaseDetailsByTerritory Composite.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A Composite containing details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of release.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     */
    private $releaseDetailsByTerritory = [
        
    ];

    /**
     * The predominant original Language of the
     *  Performance recorded in the Resources (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The predominant Language of dubbing used
     *  in the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @var string[] $languageOfDubbing
     */
    private $languageOfDubbing = [
        
    ];

    /**
     * The predominant Language of SubTitles in
     *  the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @var string[] $subTitleLanguage
     */
    private $subTitleLanguage = [
        
    ];

    /**
     * The sum of the Durations of all Resources
     *  contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where
     *  lower case characters indicate variables, upper case characters are part of the
     *  xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The
     *  seconds section ss may include fractions (e.g. one minute and 30.5 seconds would
     *  be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Release.
     *
     * @var \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of the
     *  PLine for the Release.
     *
     * @var \DedexBundle\Entity\Ern383\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the
     *  CLine for the Release.
     *
     * @var \DedexBundle\Entity\Ern383\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing details of a
     *  WebPage for the Artist.
     *
     * @var \DedexBundle\Entity\Ern383\WebPageType[] $artistProfilePage
     */
    private $artistProfilePage = [
        
    ];

    /**
     * A Composite containing details of the Date
     *  of the Event in which the Release was or will be first made globally available for
     *  Usage in its current form, whether for physical or electronic/online distribution
     *  (in ISO 8601:2004 format: YYYY-MM-DD). This element is deprecated. DDEX advises
     *  that it may be removed at a future date and therefore recommends against using
     *  it.
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $globalReleaseDate
     */
    private $globalReleaseDate = null;

    /**
     * A Composite containing details of the Date
     *  of the Event in which the collection of tracks for the Release (e.g. the
     *  equivalent physical album on vinyl) was or will be first made globally available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD). This element is deprecated. DDEX advises that it
     *  may be removed at a future date and therefore recommends against using
     *  it.
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $globalOriginalReleaseDate
     */
    private $globalOriginalReleaseDate = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the Release as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Language and script for the Elements of
     *  the Release as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * Gets as isMainRelease
     *
     * The Flag indicating whether the Release is a
     *  main one as defined in the relevant Profile Standard (=true) or not (=false). This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsMainRelease()
    {
        return $this->isMainRelease;
    }

    /**
     * Sets a new isMainRelease
     *
     * The Flag indicating whether the Release is a
     *  main one as defined in the relevant Profile Standard (=true) or not (=false). This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @param bool $isMainRelease
     * @return self
     */
    public function setIsMainRelease($isMainRelease)
    {
        $this->isMainRelease = $isMainRelease;
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
     * @param \DedexBundle\Entity\Ern383\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DedexBundle\Entity\Ern383\ReleaseIdType $releaseId)
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
     * @return \DedexBundle\Entity\Ern383\ReleaseIdType[]
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
     * @param \DedexBundle\Entity\Ern383\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as releaseReference
     *
     * The Identifier (specific to the Message)
     *  of the Release. Used to link the Release to one or more Deal(s). This is a
     *  LocalReleaseAnchor starting with the letter R.
     *
     * @return self
     * @param string $releaseReference
     */
    public function addToReleaseReference($releaseReference)
    {
        $this->releaseReference[] = $releaseReference;
        return $this;
    }

    /**
     * isset releaseReference
     *
     * The Identifier (specific to the Message)
     *  of the Release. Used to link the Release to one or more Deal(s). This is a
     *  LocalReleaseAnchor starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseReference($index)
    {
        return isset($this->releaseReference[$index]);
    }

    /**
     * unset releaseReference
     *
     * The Identifier (specific to the Message)
     *  of the Release. Used to link the Release to one or more Deal(s). This is a
     *  LocalReleaseAnchor starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseReference($index)
    {
        unset($this->releaseReference[$index]);
    }

    /**
     * Gets as releaseReference
     *
     * The Identifier (specific to the Message)
     *  of the Release. Used to link the Release to one or more Deal(s). This is a
     *  LocalReleaseAnchor starting with the letter R.
     *
     * @return string[]
     */
    public function getReleaseReference()
    {
        return $this->releaseReference;
    }

    /**
     * Sets a new releaseReference
     *
     * The Identifier (specific to the Message)
     *  of the Release. Used to link the Release to one or more Deal(s). This is a
     *  LocalReleaseAnchor starting with the letter R.
     *
     * @param string $releaseReference
     * @return self
     */
    public function setReleaseReference(array $releaseReference = null)
    {
        $this->releaseReference = $releaseReference;
        return $this;
    }

    /**
     * Adds as externalResourceLink
     *
     * A Composite containing details of
     *  promotional or other material related to the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ExternalResourceLinkType $externalResourceLink
     */
    public function addToExternalResourceLink(\DedexBundle\Entity\Ern383\ExternalResourceLinkType $externalResourceLink)
    {
        $this->externalResourceLink[] = $externalResourceLink;
        return $this;
    }

    /**
     * isset externalResourceLink
     *
     * A Composite containing details of
     *  promotional or other material related to the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternalResourceLink($index)
    {
        return isset($this->externalResourceLink[$index]);
    }

    /**
     * unset externalResourceLink
     *
     * A Composite containing details of
     *  promotional or other material related to the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternalResourceLink($index)
    {
        unset($this->externalResourceLink[$index]);
    }

    /**
     * Gets as externalResourceLink
     *
     * A Composite containing details of
     *  promotional or other material related to the Release.
     *
     * @return \DedexBundle\Entity\Ern383\ExternalResourceLinkType[]
     */
    public function getExternalResourceLink()
    {
        return $this->externalResourceLink;
    }

    /**
     * Sets a new externalResourceLink
     *
     * A Composite containing details of
     *  promotional or other material related to the Release.
     *
     * @param \DedexBundle\Entity\Ern383\ExternalResourceLinkType[] $externalResourceLink
     * @return self
     */
    public function setExternalResourceLink(array $externalResourceLink = null)
    {
        $this->externalResourceLink = $externalResourceLink;
        return $this;
    }

    /**
     * Adds as salesReportingProxyReleaseId
     *
     * A Composite containing details of the A
     *  Composite containing details of the
     *  SalesReportingProxyReleaseId.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\SalesReportingProxyReleaseIdType $salesReportingProxyReleaseId
     */
    public function addToSalesReportingProxyReleaseId(\DedexBundle\Entity\Ern383\SalesReportingProxyReleaseIdType $salesReportingProxyReleaseId)
    {
        $this->salesReportingProxyReleaseId[] = $salesReportingProxyReleaseId;
        return $this;
    }

    /**
     * isset salesReportingProxyReleaseId
     *
     * A Composite containing details of the A
     *  Composite containing details of the
     *  SalesReportingProxyReleaseId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesReportingProxyReleaseId($index)
    {
        return isset($this->salesReportingProxyReleaseId[$index]);
    }

    /**
     * unset salesReportingProxyReleaseId
     *
     * A Composite containing details of the A
     *  Composite containing details of the
     *  SalesReportingProxyReleaseId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesReportingProxyReleaseId($index)
    {
        unset($this->salesReportingProxyReleaseId[$index]);
    }

    /**
     * Gets as salesReportingProxyReleaseId
     *
     * A Composite containing details of the A
     *  Composite containing details of the
     *  SalesReportingProxyReleaseId.
     *
     * @return \DedexBundle\Entity\Ern383\SalesReportingProxyReleaseIdType[]
     */
    public function getSalesReportingProxyReleaseId()
    {
        return $this->salesReportingProxyReleaseId;
    }

    /**
     * Sets a new salesReportingProxyReleaseId
     *
     * A Composite containing details of the A
     *  Composite containing details of the
     *  SalesReportingProxyReleaseId.
     *
     * @param \DedexBundle\Entity\Ern383\SalesReportingProxyReleaseIdType[] $salesReportingProxyReleaseId
     * @return self
     */
    public function setSalesReportingProxyReleaseId(array $salesReportingProxyReleaseId = null)
    {
        $this->salesReportingProxyReleaseId = $salesReportingProxyReleaseId;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the Release.
     *
     * @return \DedexBundle\Entity\Ern383\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the Release.
     *
     * @param \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as releaseResourceReference
     *
     * A Composite containing details of one
     *  or more Resources contained in the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReferenceList(\DedexBundle\Entity\Ern383\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReferenceList[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReferenceList
     *
     * A Composite containing details of one
     *  or more Resources contained in the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseResourceReferenceList($index)
    {
        return isset($this->releaseResourceReferenceList[$index]);
    }

    /**
     * unset releaseResourceReferenceList
     *
     * A Composite containing details of one
     *  or more Resources contained in the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseResourceReferenceList($index)
    {
        unset($this->releaseResourceReferenceList[$index]);
    }

    /**
     * Gets as releaseResourceReferenceList
     *
     * A Composite containing details of one
     *  or more Resources contained in the Release.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseResourceReferenceType[]
     */
    public function getReleaseResourceReferenceList()
    {
        return $this->releaseResourceReferenceList;
    }

    /**
     * Sets a new releaseResourceReferenceList
     *
     * A Composite containing details of one
     *  or more Resources contained in the Release.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     * @return self
     */
    public function setReleaseResourceReferenceList(array $releaseResourceReferenceList = null)
    {
        $this->releaseResourceReferenceList = $releaseResourceReferenceList;
        return $this;
    }

    /**
     * Gets as resourceOmissionReason
     *
     * A Composite containing details of a
     *  ResourceOmissionReason.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceOmissionReasonType
     */
    public function getResourceOmissionReason()
    {
        return $this->resourceOmissionReason;
    }

    /**
     * Sets a new resourceOmissionReason
     *
     * A Composite containing details of a
     *  ResourceOmissionReason.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceOmissionReasonType $resourceOmissionReason
     * @return self
     */
    public function setResourceOmissionReason(?\DedexBundle\Entity\Ern383\ResourceOmissionReasonType $resourceOmissionReason = null)
    {
        $this->resourceOmissionReason = $resourceOmissionReason;
        return $this;
    }

    /**
     * Gets as releaseCollectionReferenceList
     *
     * A Composite containing details of one or
     *  more Collections contained in the Release.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseCollectionReferenceListType
     */
    public function getReleaseCollectionReferenceList()
    {
        return $this->releaseCollectionReferenceList;
    }

    /**
     * Sets a new releaseCollectionReferenceList
     *
     * A Composite containing details of one or
     *  more Collections contained in the Release.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     * @return self
     */
    public function setReleaseCollectionReferenceList(?\DedexBundle\Entity\Ern383\ReleaseCollectionReferenceListType $releaseCollectionReferenceList = null)
    {
        $this->releaseCollectionReferenceList = $releaseCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * A Composite containing details of the form
     *  in which a ReleaseCreator anticipates offering the Release to Consumers. This may
     *  be overridden by the ReleaseType for specific Territories as specified in the
     *  ReleaseDetailsByTerritory Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DedexBundle\Entity\Ern383\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A Composite containing details of the form
     *  in which a ReleaseCreator anticipates offering the Release to Consumers. This may
     *  be overridden by the ReleaseType for specific Territories as specified in the
     *  ReleaseDetailsByTerritory Composite.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A Composite containing details of the form
     *  in which a ReleaseCreator anticipates offering the Release to Consumers. This may
     *  be overridden by the ReleaseType for specific Territories as specified in the
     *  ReleaseDetailsByTerritory Composite.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A Composite containing details of the form
     *  in which a ReleaseCreator anticipates offering the Release to Consumers. This may
     *  be overridden by the ReleaseType for specific Territories as specified in the
     *  ReleaseDetailsByTerritory Composite.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the form
     *  in which a ReleaseCreator anticipates offering the Release to Consumers. This may
     *  be overridden by the ReleaseType for specific Territories as specified in the
     *  ReleaseDetailsByTerritory Composite.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseTypeType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Adds as releaseDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory
     */
    public function addToReleaseDetailsByTerritory(\DedexBundle\Entity\Ern383\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory[] = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * isset releaseDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseDetailsByTerritory($index)
    {
        return isset($this->releaseDetailsByTerritory[$index]);
    }

    /**
     * unset releaseDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseDetailsByTerritory($index)
    {
        unset($this->releaseDetailsByTerritory[$index]);
    }

    /**
     * Gets as releaseDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of release.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseDetailsByTerritoryType[]
     */
    public function getReleaseDetailsByTerritory()
    {
        return $this->releaseDetailsByTerritory;
    }

    /**
     * Sets a new releaseDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of release.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     * @return self
     */
    public function setReleaseDetailsByTerritory(array $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * Adds as languageOfPerformance
     *
     * The predominant original Language of the
     *  Performance recorded in the Resources (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @return self
     * @param string $languageOfPerformance
     */
    public function addToLanguageOfPerformance($languageOfPerformance)
    {
        $this->languageOfPerformance[] = $languageOfPerformance;
        return $this;
    }

    /**
     * isset languageOfPerformance
     *
     * The predominant original Language of the
     *  Performance recorded in the Resources (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageOfPerformance($index)
    {
        return isset($this->languageOfPerformance[$index]);
    }

    /**
     * unset languageOfPerformance
     *
     * The predominant original Language of the
     *  Performance recorded in the Resources (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageOfPerformance($index)
    {
        unset($this->languageOfPerformance[$index]);
    }

    /**
     * Gets as languageOfPerformance
     *
     * The predominant original Language of the
     *  Performance recorded in the Resources (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @return string[]
     */
    public function getLanguageOfPerformance()
    {
        return $this->languageOfPerformance;
    }

    /**
     * Sets a new languageOfPerformance
     *
     * The predominant original Language of the
     *  Performance recorded in the Resources (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @param string $languageOfPerformance
     * @return self
     */
    public function setLanguageOfPerformance(array $languageOfPerformance = null)
    {
        $this->languageOfPerformance = $languageOfPerformance;
        return $this;
    }

    /**
     * Adds as languageOfDubbing
     *
     * The predominant Language of dubbing used
     *  in the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @return self
     * @param string $languageOfDubbing
     */
    public function addToLanguageOfDubbing($languageOfDubbing)
    {
        $this->languageOfDubbing[] = $languageOfDubbing;
        return $this;
    }

    /**
     * isset languageOfDubbing
     *
     * The predominant Language of dubbing used
     *  in the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageOfDubbing($index)
    {
        return isset($this->languageOfDubbing[$index]);
    }

    /**
     * unset languageOfDubbing
     *
     * The predominant Language of dubbing used
     *  in the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageOfDubbing($index)
    {
        unset($this->languageOfDubbing[$index]);
    }

    /**
     * Gets as languageOfDubbing
     *
     * The predominant Language of dubbing used
     *  in the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @return string[]
     */
    public function getLanguageOfDubbing()
    {
        return $this->languageOfDubbing;
    }

    /**
     * Sets a new languageOfDubbing
     *
     * The predominant Language of dubbing used
     *  in the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @param string $languageOfDubbing
     * @return self
     */
    public function setLanguageOfDubbing(array $languageOfDubbing = null)
    {
        $this->languageOfDubbing = $languageOfDubbing;
        return $this;
    }

    /**
     * Adds as subTitleLanguage
     *
     * The predominant Language of SubTitles in
     *  the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @return self
     * @param string $subTitleLanguage
     */
    public function addToSubTitleLanguage($subTitleLanguage)
    {
        $this->subTitleLanguage[] = $subTitleLanguage;
        return $this;
    }

    /**
     * isset subTitleLanguage
     *
     * The predominant Language of SubTitles in
     *  the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTitleLanguage($index)
    {
        return isset($this->subTitleLanguage[$index]);
    }

    /**
     * unset subTitleLanguage
     *
     * The predominant Language of SubTitles in
     *  the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTitleLanguage($index)
    {
        unset($this->subTitleLanguage[$index]);
    }

    /**
     * Gets as subTitleLanguage
     *
     * The predominant Language of SubTitles in
     *  the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @return string[]
     */
    public function getSubTitleLanguage()
    {
        return $this->subTitleLanguage;
    }

    /**
     * Sets a new subTitleLanguage
     *
     * The predominant Language of SubTitles in
     *  the Resources (represented by an ISO 639-2 LanguageCode).
     *
     * @param string $subTitleLanguage
     * @return self
     */
    public function setSubTitleLanguage(array $subTitleLanguage = null)
    {
        $this->subTitleLanguage = $subTitleLanguage;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The sum of the Durations of all Resources
     *  contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where
     *  lower case characters indicate variables, upper case characters are part of the
     *  xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The
     *  seconds section ss may include fractions (e.g. one minute and 30.5 seconds would
     *  be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The sum of the Durations of all Resources
     *  contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where
     *  lower case characters indicate variables, upper case characters are part of the
     *  xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The
     *  seconds section ss may include fractions (e.g. one minute and 30.5 seconds would
     *  be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Release.
     *
     * @return \DedexBundle\Entity\Ern383\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Release.
     *
     * @param \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the
     *  PLine for the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\PLineType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern383\PLineType $pLine)
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
     * @return \DedexBundle\Entity\Ern383\PLineType[]
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
     * @param \DedexBundle\Entity\Ern383\PLineType[] $pLine
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
     * @param \DedexBundle\Entity\Ern383\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern383\CLineType $cLine)
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
     * @return \DedexBundle\Entity\Ern383\CLineType[]
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
     * @param \DedexBundle\Entity\Ern383\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Adds as artistProfilePage
     *
     * A Composite containing details of a
     *  WebPage for the Artist.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\WebPageType $artistProfilePage
     */
    public function addToArtistProfilePage(\DedexBundle\Entity\Ern383\WebPageType $artistProfilePage)
    {
        $this->artistProfilePage[] = $artistProfilePage;
        return $this;
    }

    /**
     * isset artistProfilePage
     *
     * A Composite containing details of a
     *  WebPage for the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtistProfilePage($index)
    {
        return isset($this->artistProfilePage[$index]);
    }

    /**
     * unset artistProfilePage
     *
     * A Composite containing details of a
     *  WebPage for the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtistProfilePage($index)
    {
        unset($this->artistProfilePage[$index]);
    }

    /**
     * Gets as artistProfilePage
     *
     * A Composite containing details of a
     *  WebPage for the Artist.
     *
     * @return \DedexBundle\Entity\Ern383\WebPageType[]
     */
    public function getArtistProfilePage()
    {
        return $this->artistProfilePage;
    }

    /**
     * Sets a new artistProfilePage
     *
     * A Composite containing details of a
     *  WebPage for the Artist.
     *
     * @param \DedexBundle\Entity\Ern383\WebPageType[] $artistProfilePage
     * @return self
     */
    public function setArtistProfilePage(array $artistProfilePage = null)
    {
        $this->artistProfilePage = $artistProfilePage;
        return $this;
    }

    /**
     * Gets as globalReleaseDate
     *
     * A Composite containing details of the Date
     *  of the Event in which the Release was or will be first made globally available for
     *  Usage in its current form, whether for physical or electronic/online distribution
     *  (in ISO 8601:2004 format: YYYY-MM-DD). This element is deprecated. DDEX advises
     *  that it may be removed at a future date and therefore recommends against using
     *  it.
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getGlobalReleaseDate()
    {
        return $this->globalReleaseDate;
    }

    /**
     * Sets a new globalReleaseDate
     *
     * A Composite containing details of the Date
     *  of the Event in which the Release was or will be first made globally available for
     *  Usage in its current form, whether for physical or electronic/online distribution
     *  (in ISO 8601:2004 format: YYYY-MM-DD). This element is deprecated. DDEX advises
     *  that it may be removed at a future date and therefore recommends against using
     *  it.
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $globalReleaseDate
     * @return self
     */
    public function setGlobalReleaseDate(?\DedexBundle\Entity\Ern383\EventDateType $globalReleaseDate = null)
    {
        $this->globalReleaseDate = $globalReleaseDate;
        return $this;
    }

    /**
     * Gets as globalOriginalReleaseDate
     *
     * A Composite containing details of the Date
     *  of the Event in which the collection of tracks for the Release (e.g. the
     *  equivalent physical album on vinyl) was or will be first made globally available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD). This element is deprecated. DDEX advises that it
     *  may be removed at a future date and therefore recommends against using
     *  it.
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getGlobalOriginalReleaseDate()
    {
        return $this->globalOriginalReleaseDate;
    }

    /**
     * Sets a new globalOriginalReleaseDate
     *
     * A Composite containing details of the Date
     *  of the Event in which the collection of tracks for the Release (e.g. the
     *  equivalent physical album on vinyl) was or will be first made globally available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD). This element is deprecated. DDEX advises that it
     *  may be removed at a future date and therefore recommends against using
     *  it.
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $globalOriginalReleaseDate
     * @return self
     */
    public function setGlobalOriginalReleaseDate(?\DedexBundle\Entity\Ern383\EventDateType $globalOriginalReleaseDate = null)
    {
        $this->globalOriginalReleaseDate = $globalOriginalReleaseDate;
        return $this;
    }
}

