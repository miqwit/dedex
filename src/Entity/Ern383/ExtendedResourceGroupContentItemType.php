<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing ExtendedResourceGroupContentItemType
 *
 * A Composite containing details of a Resource
 *  which is a ContentItem of a ResourceGroup.
 * XSD Type: ExtendedResourceGroupContentItem
 */
class ExtendedResourceGroupContentItemType
{
    /**
     * The number indicating the order of the
     *  ContentItem among all Resources within this ResourceGroup. This is analogous to
     *  the Track number on a SoundCarrier. Not all ResourceGroups necessarily have
     *  SequenceNumbers (it is most applicable to SoundRecordings and
     *  MusicalWorkVideos).
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The SequenceNumber within the
     *  SequenceNumber. Example: if a Track is subdivided into several numbered sections,
     *  these are numbered with a SequenceSubNumber. The SequenceSubNumber is unique
     *  within its SequenceNumber.
     *
     * @var int $sequenceSubNumber
     */
    private $sequenceSubNumber = null;

    /**
     * A Composite containing details of the Type
     *  of the ContentItem.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceTypeType[] $resourceType
     */
    private $resourceType = [
        
    ];

    /**
     * A Composite containing a
     *  ReleaseResourceReference for the ContentItem (specific to this Message). The
     *  LocalAnchorReference in this Composite is a xs:string starting with the letter
     *  A.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseResourceReferenceType $releaseResourceReference
     */
    private $releaseResourceReference = null;

    /**
     * A Composite containing details of a
     *  ReleaseResourceReference (specific to this Message) for a Resource which is linked
     *  to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated
     *  with a SoundRecording. This LocalAnchorReference is a xs:string starting with the
     *  letter A.
     *
     * @var \DedexBundle\Entity\Ern383\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     */
    private $linkedReleaseResourceReference = [
        
    ];

    /**
     * The Identifier (specific to the
     *  Message) of a Release which has the same content as the
     *  ResourceGroupContentItem. This is a LocalReleaseAnchorReference starting with
     *  the letter R.
     *
     * @var string $resourceGroupContentItemReleaseReference
     */
    private $resourceGroupContentItemReleaseReference = null;

    /**
     * A Composite containing details of
     *  ReleaseIds of a Release which has the same content as the
     *  ResourceGroupContentItem. If available, a GRid has to be used. If the Release
     *  contains only one SoundRecording, the ISRC of the SoundRecording may be used
     *  instead. If the Release is an abstraction of a complete PhysicalProduct (such
     *  as a CD Album), the ICPN of the PhysicalProduct may be used
     *  instead.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * The Duration of the ContentItem featured,
     *  if it is a SoundRecording or Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS
     *  format, where lower case characters indicate variables, upper case characters are
     *  part of the xs:string, e.g. one hour, two minutes and three seconds would be
     *  PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5
     *  seconds would be PT1M30.5S). This Duration may be less than the normal Duration of
     *  the ContentItem, if only a part of it is included.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Flag indicating whether a Resource in
     *  a Release is hidden in some way from the Consumer (=true) or not (=false). If this
     *  Element is not provided, it is assumed that this is False.
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The Flag indicating whether a Resource in
     *  a Release is additional to those on the original Release of which this is a
     *  Version (=true) or not (=false). If this Element is not provided, it is assumed
     *  that this is False.
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * The Flag indicating whether a Resource in
     *  a Release may be made available to consumers despite the distribution of the
     *  containing Release not having been permitted (=true) or not (=false). If this
     *  Element is not provided, it is assumed that this is False. The actual status of a
     *  Resource as an InstantGratificationResource is determined in the relevant
     *  Deal.
     *
     * @var bool $isInstantGratificationResource
     */
    private $isInstantGratificationResource = null;

    /**
     * A Flag indicating whether a Resource that
     *  is only available when the Release is purchased during a pre-order period
     *  (delivery is typically at ReleaseDate) (=true) or not (=false). If this Element is
     *  not provided, it is assumed that this is False. The actual status of a Resource as
     *  an PreOrderIncentiveResource is determined in the relevant
     *  Deal.
     *
     * @var bool $isPreOrderIncentiveResource
     */
    private $isPreOrderIncentiveResource = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  ContentItem among all Resources within this ResourceGroup. This is analogous to
     *  the Track number on a SoundCarrier. Not all ResourceGroups necessarily have
     *  SequenceNumbers (it is most applicable to SoundRecordings and
     *  MusicalWorkVideos).
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
     * The number indicating the order of the
     *  ContentItem among all Resources within this ResourceGroup. This is analogous to
     *  the Track number on a SoundCarrier. Not all ResourceGroups necessarily have
     *  SequenceNumbers (it is most applicable to SoundRecordings and
     *  MusicalWorkVideos).
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
     * The SequenceNumber within the
     *  SequenceNumber. Example: if a Track is subdivided into several numbered sections,
     *  these are numbered with a SequenceSubNumber. The SequenceSubNumber is unique
     *  within its SequenceNumber.
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
     * The SequenceNumber within the
     *  SequenceNumber. Example: if a Track is subdivided into several numbered sections,
     *  these are numbered with a SequenceSubNumber. The SequenceSubNumber is unique
     *  within its SequenceNumber.
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
     * A Composite containing details of the Type
     *  of the ContentItem.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ResourceTypeType $resourceType
     */
    public function addToResourceType(\DedexBundle\Entity\Ern383\ResourceTypeType $resourceType)
    {
        $this->resourceType[] = $resourceType;
        return $this;
    }

    /**
     * isset resourceType
     *
     * A Composite containing details of the Type
     *  of the ContentItem.
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
     * A Composite containing details of the Type
     *  of the ContentItem.
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
     * A Composite containing details of the Type
     *  of the ContentItem.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceTypeType[]
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * A Composite containing details of the Type
     *  of the ContentItem.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceTypeType[] $resourceType
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
     * A Composite containing a
     *  ReleaseResourceReference for the ContentItem (specific to this Message). The
     *  LocalAnchorReference in this Composite is a xs:string starting with the letter
     *  A.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseResourceReferenceType
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A Composite containing a
     *  ReleaseResourceReference for the ContentItem (specific to this Message). The
     *  LocalAnchorReference in this Composite is a xs:string starting with the letter
     *  A.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseResourceReferenceType $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference(\DedexBundle\Entity\Ern383\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }

    /**
     * Adds as linkedReleaseResourceReference
     *
     * A Composite containing details of a
     *  ReleaseResourceReference (specific to this Message) for a Resource which is linked
     *  to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated
     *  with a SoundRecording. This LocalAnchorReference is a xs:string starting with the
     *  letter A.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference
     */
    public function addToLinkedReleaseResourceReference(\DedexBundle\Entity\Ern383\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference)
    {
        $this->linkedReleaseResourceReference[] = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * isset linkedReleaseResourceReference
     *
     * A Composite containing details of a
     *  ReleaseResourceReference (specific to this Message) for a Resource which is linked
     *  to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated
     *  with a SoundRecording. This LocalAnchorReference is a xs:string starting with the
     *  letter A.
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
     * A Composite containing details of a
     *  ReleaseResourceReference (specific to this Message) for a Resource which is linked
     *  to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated
     *  with a SoundRecording. This LocalAnchorReference is a xs:string starting with the
     *  letter A.
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
     * A Composite containing details of a
     *  ReleaseResourceReference (specific to this Message) for a Resource which is linked
     *  to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated
     *  with a SoundRecording. This LocalAnchorReference is a xs:string starting with the
     *  letter A.
     *
     * @return \DedexBundle\Entity\Ern383\LinkedReleaseResourceReferenceType[]
     */
    public function getLinkedReleaseResourceReference()
    {
        return $this->linkedReleaseResourceReference;
    }

    /**
     * Sets a new linkedReleaseResourceReference
     *
     * A Composite containing details of a
     *  ReleaseResourceReference (specific to this Message) for a Resource which is linked
     *  to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated
     *  with a SoundRecording. This LocalAnchorReference is a xs:string starting with the
     *  letter A.
     *
     * @param \DedexBundle\Entity\Ern383\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
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
     * The Identifier (specific to the
     *  Message) of a Release which has the same content as the
     *  ResourceGroupContentItem. This is a LocalReleaseAnchorReference starting with
     *  the letter R.
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
     * The Identifier (specific to the
     *  Message) of a Release which has the same content as the
     *  ResourceGroupContentItem. This is a LocalReleaseAnchorReference starting with
     *  the letter R.
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
     * A Composite containing details of
     *  ReleaseIds of a Release which has the same content as the
     *  ResourceGroupContentItem. If available, a GRid has to be used. If the Release
     *  contains only one SoundRecording, the ISRC of the SoundRecording may be used
     *  instead. If the Release is an abstraction of a complete PhysicalProduct (such
     *  as a CD Album), the ICPN of the PhysicalProduct may be used
     *  instead.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of a Release which has the same content as the
     *  ResourceGroupContentItem. If available, a GRid has to be used. If the Release
     *  contains only one SoundRecording, the ISRC of the SoundRecording may be used
     *  instead. If the Release is an abstraction of a complete PhysicalProduct (such
     *  as a CD Album), the ICPN of the PhysicalProduct may be used
     *  instead.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DedexBundle\Entity\Ern383\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the ContentItem featured,
     *  if it is a SoundRecording or Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS
     *  format, where lower case characters indicate variables, upper case characters are
     *  part of the xs:string, e.g. one hour, two minutes and three seconds would be
     *  PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5
     *  seconds would be PT1M30.5S). This Duration may be less than the normal Duration of
     *  the ContentItem, if only a part of it is included.
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
     * The Duration of the ContentItem featured,
     *  if it is a SoundRecording or Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS
     *  format, where lower case characters indicate variables, upper case characters are
     *  part of the xs:string, e.g. one hour, two minutes and three seconds would be
     *  PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5
     *  seconds would be PT1M30.5S). This Duration may be less than the normal Duration of
     *  the ContentItem, if only a part of it is included.
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
     * The Flag indicating whether a Resource in
     *  a Release is hidden in some way from the Consumer (=true) or not (=false). If this
     *  Element is not provided, it is assumed that this is False.
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
     * The Flag indicating whether a Resource in
     *  a Release is hidden in some way from the Consumer (=true) or not (=false). If this
     *  Element is not provided, it is assumed that this is False.
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
     * The Flag indicating whether a Resource in
     *  a Release is additional to those on the original Release of which this is a
     *  Version (=true) or not (=false). If this Element is not provided, it is assumed
     *  that this is False.
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
     * The Flag indicating whether a Resource in
     *  a Release is additional to those on the original Release of which this is a
     *  Version (=true) or not (=false). If this Element is not provided, it is assumed
     *  that this is False.
     *
     * @param bool $isBonusResource
     * @return self
     */
    public function setIsBonusResource($isBonusResource)
    {
        $this->isBonusResource = $isBonusResource;
        return $this;
    }

    /**
     * Gets as isInstantGratificationResource
     *
     * The Flag indicating whether a Resource in
     *  a Release may be made available to consumers despite the distribution of the
     *  containing Release not having been permitted (=true) or not (=false). If this
     *  Element is not provided, it is assumed that this is False. The actual status of a
     *  Resource as an InstantGratificationResource is determined in the relevant
     *  Deal.
     *
     * @return bool
     */
    public function getIsInstantGratificationResource()
    {
        return $this->isInstantGratificationResource;
    }

    /**
     * Sets a new isInstantGratificationResource
     *
     * The Flag indicating whether a Resource in
     *  a Release may be made available to consumers despite the distribution of the
     *  containing Release not having been permitted (=true) or not (=false). If this
     *  Element is not provided, it is assumed that this is False. The actual status of a
     *  Resource as an InstantGratificationResource is determined in the relevant
     *  Deal.
     *
     * @param bool $isInstantGratificationResource
     * @return self
     */
    public function setIsInstantGratificationResource($isInstantGratificationResource)
    {
        $this->isInstantGratificationResource = $isInstantGratificationResource;
        return $this;
    }

    /**
     * Gets as isPreOrderIncentiveResource
     *
     * A Flag indicating whether a Resource that
     *  is only available when the Release is purchased during a pre-order period
     *  (delivery is typically at ReleaseDate) (=true) or not (=false). If this Element is
     *  not provided, it is assumed that this is False. The actual status of a Resource as
     *  an PreOrderIncentiveResource is determined in the relevant
     *  Deal.
     *
     * @return bool
     */
    public function getIsPreOrderIncentiveResource()
    {
        return $this->isPreOrderIncentiveResource;
    }

    /**
     * Sets a new isPreOrderIncentiveResource
     *
     * A Flag indicating whether a Resource that
     *  is only available when the Release is purchased during a pre-order period
     *  (delivery is typically at ReleaseDate) (=true) or not (=false). If this Element is
     *  not provided, it is assumed that this is False. The actual status of a Resource as
     *  an PreOrderIncentiveResource is determined in the relevant
     *  Deal.
     *
     * @param bool $isPreOrderIncentiveResource
     * @return self
     */
    public function setIsPreOrderIncentiveResource($isPreOrderIncentiveResource)
    {
        $this->isPreOrderIncentiveResource = $isPreOrderIncentiveResource;
        return $this;
    }
}

