<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ResourceGroupContentItemType
 *
 * A Composite containing details of a Resource which is a ContentItem of a ResourceGroup.
 * XSD Type: ResourceGroupContentItem
 */
class ResourceGroupContentItemType
{
    /**
     * The number indicating the logical order of the ContentItem in its ResourceGroup.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Flag indicating whether a display sequence exists (=true) or not (=false).
     *
     * @var bool $noDisplaySequence
     */
    private $noDisplaySequence = null;

    /**
     * A sequence Identifier used for display purposes, consisting of a string that corresponds to the SequenceNumber, e.g. 'Side B' corresponding to '2'.
     *
     * @var string $displaySequence
     */
    private $displaySequence = null;

    /**
     * A ReleaseResourceReference for the ContentItem (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @var string $releaseResourceReference
     */
    private $releaseResourceReference = null;

    /**
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @var \DedexBundle\Entity\Ern43\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     */
    private $linkedReleaseResourceReference = [
        
    ];

    /**
     * The Flag indicating whether a Resource in a Release is additional to those on the original Release of which this is a Version (=true) or not (=false). If this Element is not provided, it is assumed that this is False.
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * The Flag indicating whether a Resource in a Release may be made available to consumers despite the distribution of the containing Release not having been permitted (=true) or not (=false). If this Element is not provided, it is assumed that this is False. The actual status of a Resource as an InstantGratificationResource is determined in the relevant Deal.
     *
     * @var bool $isInstantGratificationResource
     */
    private $isInstantGratificationResource = null;

    /**
     * A Flag indicating whether a Resource that is only available when the Release is purchased during a pre-order period (delivery is typically at ReleaseDate) (=true) or not (=false). If this Element is not provided, it is assumed that this is False. The actual status of a Resource as an PreOrderIncentiveResource is determined in the relevant Deal.
     *
     * @var bool $isPreOrderIncentiveResource
     */
    private $isPreOrderIncentiveResource = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the logical order of the ContentItem in its ResourceGroup.
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
     * The number indicating the logical order of the ContentItem in its ResourceGroup.
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
     * Gets as noDisplaySequence
     *
     * A Flag indicating whether a display sequence exists (=true) or not (=false).
     *
     * @return bool
     */
    public function getNoDisplaySequence()
    {
        return $this->noDisplaySequence;
    }

    /**
     * Sets a new noDisplaySequence
     *
     * A Flag indicating whether a display sequence exists (=true) or not (=false).
     *
     * @param bool $noDisplaySequence
     * @return self
     */
    public function setNoDisplaySequence($noDisplaySequence)
    {
        $this->noDisplaySequence = $noDisplaySequence;
        return $this;
    }

    /**
     * Gets as displaySequence
     *
     * A sequence Identifier used for display purposes, consisting of a string that corresponds to the SequenceNumber, e.g. 'Side B' corresponding to '2'.
     *
     * @return string
     */
    public function getDisplaySequence()
    {
        return $this->displaySequence;
    }

    /**
     * Sets a new displaySequence
     *
     * A sequence Identifier used for display purposes, consisting of a string that corresponds to the SequenceNumber, e.g. 'Side B' corresponding to '2'.
     *
     * @param string $displaySequence
     * @return self
     */
    public function setDisplaySequence($displaySequence)
    {
        $this->displaySequence = $displaySequence;
        return $this;
    }

    /**
     * Gets as releaseResourceReference
     *
     * A ReleaseResourceReference for the ContentItem (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @return string
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A ReleaseResourceReference for the ContentItem (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @param string $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference($releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }

    /**
     * Adds as linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference
     */
    public function addToLinkedReleaseResourceReference(\DedexBundle\Entity\Ern43\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference)
    {
        $this->linkedReleaseResourceReference[] = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * isset linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
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
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
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
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return \DedexBundle\Entity\Ern43\LinkedReleaseResourceReferenceType[]
     */
    public function getLinkedReleaseResourceReference()
    {
        return $this->linkedReleaseResourceReference;
    }

    /**
     * Sets a new linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this ContentItem. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param \DedexBundle\Entity\Ern43\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     * @return self
     */
    public function setLinkedReleaseResourceReference(array $linkedReleaseResourceReference = null)
    {
        $this->linkedReleaseResourceReference = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * Gets as isBonusResource
     *
     * The Flag indicating whether a Resource in a Release is additional to those on the original Release of which this is a Version (=true) or not (=false). If this Element is not provided, it is assumed that this is False.
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
     * The Flag indicating whether a Resource in a Release is additional to those on the original Release of which this is a Version (=true) or not (=false). If this Element is not provided, it is assumed that this is False.
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
     * The Flag indicating whether a Resource in a Release may be made available to consumers despite the distribution of the containing Release not having been permitted (=true) or not (=false). If this Element is not provided, it is assumed that this is False. The actual status of a Resource as an InstantGratificationResource is determined in the relevant Deal.
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
     * The Flag indicating whether a Resource in a Release may be made available to consumers despite the distribution of the containing Release not having been permitted (=true) or not (=false). If this Element is not provided, it is assumed that this is False. The actual status of a Resource as an InstantGratificationResource is determined in the relevant Deal.
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
     * A Flag indicating whether a Resource that is only available when the Release is purchased during a pre-order period (delivery is typically at ReleaseDate) (=true) or not (=false). If this Element is not provided, it is assumed that this is False. The actual status of a Resource as an PreOrderIncentiveResource is determined in the relevant Deal.
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
     * A Flag indicating whether a Resource that is only available when the Release is purchased during a pre-order period (delivery is typically at ReleaseDate) (=true) or not (=false). If this Element is not provided, it is assumed that this is False. The actual status of a Resource as an PreOrderIncentiveResource is determined in the relevant Deal.
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

