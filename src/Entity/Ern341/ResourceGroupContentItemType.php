<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ResourceGroupContentItemType
 *
 * A ddex:Composite containing details of a ddex:Resource which is a ddex:ContentItem of a ddex:ResourceGroup.
 * XSD Type: ResourceGroupContentItem
 */
class ResourceGroupContentItemType
{
    /**
     * The number indicating the order of the ddex:ContentItem among all ddex:Resources within this ddex:ResourceGroup. This is analogous to the ddex:Track number on a ddex:SoundCarrier. Not all ddex:ResourceGroups necessarily have ddex:SequenceNumbers (it is most applicable to ddex:SoundRecordings and ddex:MusicalWorkVideos). The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The ddex:SequenceNumber within the ddex:SequenceNumber. Example: if a ddex:Track is subdivided into several numbered sections, these are numbered with a ddex:SequenceSubNumber. The ddex:SequenceSubNumber is unique within its ddex:SequenceNumber.
     *
     * @var int $sequenceSubNumber
     */
    private $sequenceSubNumber = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ddex:ContentItem.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceTypeType[] $resourceType
     */
    private $resourceType = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:ReleaseResourceReference for the ddex:ContentItem (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType $releaseResourceReference
     */
    private $releaseResourceReference = null;

    /**
     * A ddex:Composite containing details of a ddex:ReleaseResourceReference (specific to this ddex:Message) for a ddex:Resource which is linked to this ddex:ContentItem. Example: an ddex:Image, ddex:Text or ddex:NonMusicalWorkVideo associated with a ddex:SoundRecording. This ddex:LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @var \DedexBundle\Entity\DdexC\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     */
    private $linkedReleaseResourceReference = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroupContentItem. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string $resourceGroupContentItemReleaseReference
     */
    private $resourceGroupContentItemReleaseReference = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroupContentItem. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * The ddex:Duration of the ddex:ContentItem featured, if it is a ddex:SoundRecording or ddex:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This ddex:Duration may be less than the normal ddex:Duration of the ddex:ContentItem, if only a part of it is included.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ddex:Flag indicating whether a ddex:Resource in a ddex:Release is hidden in some way from the ddex:Consumer (=True) or not (=False).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The ddex:Flag indicating whether a ddex:Resource in a ddex:Release is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddex:ContentItem among all ddex:Resources within this ddex:ResourceGroup. This is analogous to the ddex:Track number on a ddex:SoundCarrier. Not all ddex:ResourceGroups necessarily have ddex:SequenceNumbers (it is most applicable to ddex:SoundRecordings and ddex:MusicalWorkVideos). The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the ddex:ContentItem among all ddex:Resources within this ddex:ResourceGroup. This is analogous to the ddex:Track number on a ddex:SoundCarrier. Not all ddex:ResourceGroups necessarily have ddex:SequenceNumbers (it is most applicable to ddex:SoundRecordings and ddex:MusicalWorkVideos). The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as sequenceSubNumber
     *
     * The ddex:SequenceNumber within the ddex:SequenceNumber. Example: if a ddex:Track is subdivided into several numbered sections, these are numbered with a ddex:SequenceSubNumber. The ddex:SequenceSubNumber is unique within its ddex:SequenceNumber.
     *
     * @return int
     */
    public function getSequenceSubNumber()
    {
        return $this->sequenceSubNumber;
    }

    /**
     * Sets a new sequenceSubNumber
     *
     * The ddex:SequenceNumber within the ddex:SequenceNumber. Example: if a ddex:Track is subdivided into several numbered sections, these are numbered with a ddex:SequenceSubNumber. The ddex:SequenceSubNumber is unique within its ddex:SequenceNumber.
     *
     * @param int $sequenceSubNumber
     * @return self
     */
    public function setSequenceSubNumber($sequenceSubNumber)
    {
        $this->sequenceSubNumber = $sequenceSubNumber;
        return $this;
    }

    /**
     * Adds as resourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:ContentItem.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceTypeType $resourceType
     */
    public function addToResourceType(\DedexBundle\Entity\DdexC\ResourceTypeType $resourceType)
    {
        $this->resourceType[] = $resourceType;
        return $this;
    }

    /**
     * isset resourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:ContentItem.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceType($index)
    {
        return isset($this->resourceType[$index]);
    }

    /**
     * unset resourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:ContentItem.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceType($index)
    {
        unset($this->resourceType[$index]);
    }

    /**
     * Gets as resourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:ContentItem.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceTypeType[]
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:ContentItem.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceTypeType[] $resourceType
     * @return self
     */
    public function setResourceType(array $resourceType = null)
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * Gets as releaseResourceReference
     *
     * A ddex:Composite containing a ddex:ReleaseResourceReference for the ddex:ContentItem (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A ddex:Composite containing a ddex:ReleaseResourceReference for the ddex:ContentItem (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference(\DedexBundle\Entity\DdexC\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }

    /**
     * Adds as linkedReleaseResourceReference
     *
     * A ddex:Composite containing details of a ddex:ReleaseResourceReference (specific to this ddex:Message) for a ddex:Resource which is linked to this ddex:ContentItem. Example: an ddex:Image, ddex:Text or ddex:NonMusicalWorkVideo associated with a ddex:SoundRecording. This ddex:LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference
     */
    public function addToLinkedReleaseResourceReference(\DedexBundle\Entity\DdexC\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference)
    {
        $this->linkedReleaseResourceReference[] = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * isset linkedReleaseResourceReference
     *
     * A ddex:Composite containing details of a ddex:ReleaseResourceReference (specific to this ddex:Message) for a ddex:Resource which is linked to this ddex:ContentItem. Example: an ddex:Image, ddex:Text or ddex:NonMusicalWorkVideo associated with a ddex:SoundRecording. This ddex:LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedReleaseResourceReference($index)
    {
        return isset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * unset linkedReleaseResourceReference
     *
     * A ddex:Composite containing details of a ddex:ReleaseResourceReference (specific to this ddex:Message) for a ddex:Resource which is linked to this ddex:ContentItem. Example: an ddex:Image, ddex:Text or ddex:NonMusicalWorkVideo associated with a ddex:SoundRecording. This ddex:LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedReleaseResourceReference($index)
    {
        unset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * Gets as linkedReleaseResourceReference
     *
     * A ddex:Composite containing details of a ddex:ReleaseResourceReference (specific to this ddex:Message) for a ddex:Resource which is linked to this ddex:ContentItem. Example: an ddex:Image, ddex:Text or ddex:NonMusicalWorkVideo associated with a ddex:SoundRecording. This ddex:LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return \DedexBundle\Entity\DdexC\LinkedReleaseResourceReferenceType[]
     */
    public function getLinkedReleaseResourceReference()
    {
        return $this->linkedReleaseResourceReference;
    }

    /**
     * Sets a new linkedReleaseResourceReference
     *
     * A ddex:Composite containing details of a ddex:ReleaseResourceReference (specific to this ddex:Message) for a ddex:Resource which is linked to this ddex:ContentItem. Example: an ddex:Image, ddex:Text or ddex:NonMusicalWorkVideo associated with a ddex:SoundRecording. This ddex:LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param \DedexBundle\Entity\DdexC\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     * @return self
     */
    public function setLinkedReleaseResourceReference(array $linkedReleaseResourceReference = null)
    {
        $this->linkedReleaseResourceReference = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * Gets as resourceGroupContentItemReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroupContentItem. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string
     */
    public function getResourceGroupContentItemReleaseReference()
    {
        return $this->resourceGroupContentItemReleaseReference;
    }

    /**
     * Sets a new resourceGroupContentItemReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroupContentItem. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $resourceGroupContentItemReleaseReference
     * @return self
     */
    public function setResourceGroupContentItemReleaseReference($resourceGroupContentItemReleaseReference)
    {
        $this->resourceGroupContentItemReleaseReference = $resourceGroupContentItemReleaseReference;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroupContentItem. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroupContentItem. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DedexBundle\Entity\DdexC\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The ddex:Duration of the ddex:ContentItem featured, if it is a ddex:SoundRecording or ddex:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This ddex:Duration may be less than the normal ddex:Duration of the ddex:ContentItem, if only a part of it is included.
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
     * The ddex:Duration of the ddex:ContentItem featured, if it is a ddex:SoundRecording or ddex:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This ddex:Duration may be less than the normal ddex:Duration of the ddex:ContentItem, if only a part of it is included.
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
     * Gets as isHiddenResource
     *
     * The ddex:Flag indicating whether a ddex:Resource in a ddex:Release is hidden in some way from the ddex:Consumer (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsHiddenResource()
    {
        return $this->isHiddenResource;
    }

    /**
     * Sets a new isHiddenResource
     *
     * The ddex:Flag indicating whether a ddex:Resource in a ddex:Release is hidden in some way from the ddex:Consumer (=True) or not (=False).
     *
     * @param bool $isHiddenResource
     * @return self
     */
    public function setIsHiddenResource($isHiddenResource)
    {
        $this->isHiddenResource = $isHiddenResource;
        return $this;
    }

    /**
     * Gets as isBonusResource
     *
     * The ddex:Flag indicating whether a ddex:Resource in a ddex:Release is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsBonusResource()
    {
        return $this->isBonusResource;
    }

    /**
     * Sets a new isBonusResource
     *
     * The ddex:Flag indicating whether a ddex:Resource in a ddex:Release is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
     *
     * @param bool $isBonusResource
     * @return self
     */
    public function setIsBonusResource($isBonusResource)
    {
        $this->isBonusResource = $isBonusResource;
        return $this;
    }
}

