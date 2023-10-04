<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ReleaseType
 *
 * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
 * XSD Type: Release
 */
class ReleaseType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:Release as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Release. Used to link the ern:Release to one or more Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter R.
     *
     * @var string[] $releaseReference
     */
    private $releaseReference = [
        
    ];

    /**
     * A ddex:Composite containing details of promotional or other material related to the ern:Release.
     *
     * @var \DedexBundle\Entity\DdexC\ExternalResourceLinkType[] $externalResourceLink
     */
    private $externalResourceLink = [
        
    ];

    /**
     * A ddex:Composite containing details of the A ddex:Composite containing details of the ddex:SalesReportingProxyReleaseId.
     *
     * @var \DedexBundle\Entity\DdexC\SalesReportingProxyReleaseIdType[] $salesReportingProxyReleaseId
     */
    private $salesReportingProxyReleaseId = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:Release.
     *
     * @var \DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Resources contained in the ern:Release.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     */
    private $releaseResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of a ddex:ResourceOmissionReason.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceOmissionReasonType $resourceOmissionReason
     */
    private $resourceOmissionReason = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections contained in the ern:Release.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     */
    private $releaseCollectionReferenceList = null;

    /**
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ern:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Release which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\Ern341\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     */
    private $releaseDetailsByTerritory = [
        
    ];

    /**
     * The sum of the ddex:Durations of all ddex:Resources contained in the ern:Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ern:Release.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

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
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:Artist.
     *
     * @var \DedexBundle\Entity\DdexC\WebPageType[] $artistProfilePage
     */
    private $artistProfilePage = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:Release as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Release as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as releaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Release. Used to link the ern:Release to one or more Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter R.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Release. Used to link the ern:Release to one or more Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter R.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Release. Used to link the ern:Release to one or more Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter R.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Release. Used to link the ern:Release to one or more Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter R.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Release. Used to link the ern:Release to one or more Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter R.
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
     * A ddex:Composite containing details of promotional or other material related to the ern:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ExternalResourceLinkType $externalResourceLink
     */
    public function addToExternalResourceLink(\DedexBundle\Entity\DdexC\ExternalResourceLinkType $externalResourceLink)
    {
        $this->externalResourceLink[] = $externalResourceLink;
        return $this;
    }

    /**
     * isset externalResourceLink
     *
     * A ddex:Composite containing details of promotional or other material related to the ern:Release.
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
     * A ddex:Composite containing details of promotional or other material related to the ern:Release.
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
     * A ddex:Composite containing details of promotional or other material related to the ern:Release.
     *
     * @return \DedexBundle\Entity\DdexC\ExternalResourceLinkType[]
     */
    public function getExternalResourceLink()
    {
        return $this->externalResourceLink;
    }

    /**
     * Sets a new externalResourceLink
     *
     * A ddex:Composite containing details of promotional or other material related to the ern:Release.
     *
     * @param \DedexBundle\Entity\DdexC\ExternalResourceLinkType[] $externalResourceLink
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
     * A ddex:Composite containing details of the A ddex:Composite containing details of the ddex:SalesReportingProxyReleaseId.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\SalesReportingProxyReleaseIdType $salesReportingProxyReleaseId
     */
    public function addToSalesReportingProxyReleaseId(\DedexBundle\Entity\DdexC\SalesReportingProxyReleaseIdType $salesReportingProxyReleaseId)
    {
        $this->salesReportingProxyReleaseId[] = $salesReportingProxyReleaseId;
        return $this;
    }

    /**
     * isset salesReportingProxyReleaseId
     *
     * A ddex:Composite containing details of the A ddex:Composite containing details of the ddex:SalesReportingProxyReleaseId.
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
     * A ddex:Composite containing details of the A ddex:Composite containing details of the ddex:SalesReportingProxyReleaseId.
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
     * A ddex:Composite containing details of the A ddex:Composite containing details of the ddex:SalesReportingProxyReleaseId.
     *
     * @return \DedexBundle\Entity\DdexC\SalesReportingProxyReleaseIdType[]
     */
    public function getSalesReportingProxyReleaseId()
    {
        return $this->salesReportingProxyReleaseId;
    }

    /**
     * Sets a new salesReportingProxyReleaseId
     *
     * A ddex:Composite containing details of the A ddex:Composite containing details of the ddex:SalesReportingProxyReleaseId.
     *
     * @param \DedexBundle\Entity\DdexC\SalesReportingProxyReleaseIdType[] $salesReportingProxyReleaseId
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
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:Release.
     *
     * @return \DedexBundle\Entity\DdexC\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:Release.
     *
     * @param \DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as releaseResourceReference
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the ern:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReferenceList(\DedexBundle\Entity\DdexC\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReferenceList[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the ern:Release.
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
     * A ddex:Composite containing details of one or more ddex:Resources contained in the ern:Release.
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
     * A ddex:Composite containing details of one or more ddex:Resources contained in the ern:Release.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType[]
     */
    public function getReleaseResourceReferenceList()
    {
        return $this->releaseResourceReferenceList;
    }

    /**
     * Sets a new releaseResourceReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the ern:Release.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType[] $releaseResourceReferenceList
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
     * A ddex:Composite containing details of a ddex:ResourceOmissionReason.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceOmissionReasonType
     */
    public function getResourceOmissionReason()
    {
        return $this->resourceOmissionReason;
    }

    /**
     * Sets a new resourceOmissionReason
     *
     * A ddex:Composite containing details of a ddex:ResourceOmissionReason.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceOmissionReasonType $resourceOmissionReason
     * @return self
     */
    public function setResourceOmissionReason(?\DedexBundle\Entity\DdexC\ResourceOmissionReasonType $resourceOmissionReason = null)
    {
        $this->resourceOmissionReason = $resourceOmissionReason;
        return $this;
    }

    /**
     * Gets as releaseCollectionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in the ern:Release.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseCollectionReferenceListType
     */
    public function getReleaseCollectionReferenceList()
    {
        return $this->releaseCollectionReferenceList;
    }

    /**
     * Sets a new releaseCollectionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in the ern:Release.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     * @return self
     */
    public function setReleaseCollectionReferenceList(?\DedexBundle\Entity\DdexC\ReleaseCollectionReferenceListType $releaseCollectionReferenceList = null)
    {
        $this->releaseCollectionReferenceList = $releaseCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ern:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DedexBundle\Entity\DdexC\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ern:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
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
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ern:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
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
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ern:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ern:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseTypeType[] $releaseType
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Release which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory
     */
    public function addToReleaseDetailsByTerritory(\DedexBundle\Entity\Ern341\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory[] = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * isset releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Release which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Release which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Release which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\Ern341\ReleaseDetailsByTerritoryType[]
     */
    public function getReleaseDetailsByTerritory()
    {
        return $this->releaseDetailsByTerritory;
    }

    /**
     * Sets a new releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Release which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\Ern341\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     * @return self
     */
    public function setReleaseDetailsByTerritory(array $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The sum of the ddex:Durations of all ddex:Resources contained in the ern:Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The sum of the ddex:Durations of all ddex:Resources contained in the ern:Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ern:Release.
     *
     * @return \DedexBundle\Entity\DdexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ern:Release.
     *
     * @param \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
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
     * Adds as artistProfilePage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:Artist.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\WebPageType $artistProfilePage
     */
    public function addToArtistProfilePage(\DedexBundle\Entity\DdexC\WebPageType $artistProfilePage)
    {
        $this->artistProfilePage[] = $artistProfilePage;
        return $this;
    }

    /**
     * isset artistProfilePage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:Artist.
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
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:Artist.
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
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:Artist.
     *
     * @return \DedexBundle\Entity\DdexC\WebPageType[]
     */
    public function getArtistProfilePage()
    {
        return $this->artistProfilePage;
    }

    /**
     * Sets a new artistProfilePage
     *
     * A ddex:Composite containing details of a ddex:WebPage for the ddex:Artist.
     *
     * @param \DedexBundle\Entity\DdexC\WebPageType[] $artistProfilePage
     * @return self
     */
    public function setArtistProfilePage(array $artistProfilePage = null)
    {
        $this->artistProfilePage = $artistProfilePage;
        return $this;
    }
}

