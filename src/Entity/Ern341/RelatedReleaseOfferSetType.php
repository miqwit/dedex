<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing RelatedReleaseOfferSetType
 *
 * A ddex:Composite containing details of one or more offers related to one or more ddex:Releases.
 * XSD Type: RelatedReleaseOfferSet
 */
class RelatedReleaseOfferSetType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:RelatedReleaseOfferSet as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds of the Release(s) for which the offer(s) are available.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:Description of the Release(s) for which the offer(s) are available.This ddex:Element is designed to be used to describe entire collections or repertoires, and is not to be used to list individual ddex:Releases by xs:ID or ddex:Title.
     *
     * @var \DedexBundle\Entity\DdexC\DescriptionType $releaseDescription
     */
    private $releaseDescription = null;

    /**
     * A ddex:Composite containing details of a ddex:Deal that is available as an offer related to the Release(s). If no ddex:Deal is provided, the parent ddex:Release and the ddex:Releases listed in the ern:RelatedReleaseOfferSet are bundled and offered under the ddex:ReleaseOffer associated with the parent ddex:Release.
     *
     * @var \DedexBundle\Entity\Ern341\DealType[] $deal
     */
    private $deal = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:RelatedReleaseOfferSet as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:RelatedReleaseOfferSet as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of the Release(s) for which the offer(s) are available.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of the Release(s) for which the offer(s) are available.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of the Release(s) for which the offer(s) are available.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of the Release(s) for which the offer(s) are available.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of the Release(s) for which the offer(s) are available.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as releaseDescription
     *
     * A ddex:Composite containing a ddex:Description of the Release(s) for which the offer(s) are available.This ddex:Element is designed to be used to describe entire collections or repertoires, and is not to be used to list individual ddex:Releases by xs:ID or ddex:Title.
     *
     * @return \DedexBundle\Entity\DdexC\DescriptionType
     */
    public function getReleaseDescription()
    {
        return $this->releaseDescription;
    }

    /**
     * Sets a new releaseDescription
     *
     * A ddex:Composite containing a ddex:Description of the Release(s) for which the offer(s) are available.This ddex:Element is designed to be used to describe entire collections or repertoires, and is not to be used to list individual ddex:Releases by xs:ID or ddex:Title.
     *
     * @param \DedexBundle\Entity\DdexC\DescriptionType $releaseDescription
     * @return self
     */
    public function setReleaseDescription(?\DedexBundle\Entity\DdexC\DescriptionType $releaseDescription = null)
    {
        $this->releaseDescription = $releaseDescription;
        return $this;
    }

    /**
     * Adds as deal
     *
     * A ddex:Composite containing details of a ddex:Deal that is available as an offer related to the Release(s). If no ddex:Deal is provided, the parent ddex:Release and the ddex:Releases listed in the ern:RelatedReleaseOfferSet are bundled and offered under the ddex:ReleaseOffer associated with the parent ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\DealType $deal
     */
    public function addToDeal(\DedexBundle\Entity\Ern341\DealType $deal)
    {
        $this->deal[] = $deal;
        return $this;
    }

    /**
     * isset deal
     *
     * A ddex:Composite containing details of a ddex:Deal that is available as an offer related to the Release(s). If no ddex:Deal is provided, the parent ddex:Release and the ddex:Releases listed in the ern:RelatedReleaseOfferSet are bundled and offered under the ddex:ReleaseOffer associated with the parent ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeal($index)
    {
        return isset($this->deal[$index]);
    }

    /**
     * unset deal
     *
     * A ddex:Composite containing details of a ddex:Deal that is available as an offer related to the Release(s). If no ddex:Deal is provided, the parent ddex:Release and the ddex:Releases listed in the ern:RelatedReleaseOfferSet are bundled and offered under the ddex:ReleaseOffer associated with the parent ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeal($index)
    {
        unset($this->deal[$index]);
    }

    /**
     * Gets as deal
     *
     * A ddex:Composite containing details of a ddex:Deal that is available as an offer related to the Release(s). If no ddex:Deal is provided, the parent ddex:Release and the ddex:Releases listed in the ern:RelatedReleaseOfferSet are bundled and offered under the ddex:ReleaseOffer associated with the parent ddex:Release.
     *
     * @return \DedexBundle\Entity\Ern341\DealType[]
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A ddex:Composite containing details of a ddex:Deal that is available as an offer related to the Release(s). If no ddex:Deal is provided, the parent ddex:Release and the ddex:Releases listed in the ern:RelatedReleaseOfferSet are bundled and offered under the ddex:ReleaseOffer associated with the parent ddex:Release.
     *
     * @param \DedexBundle\Entity\Ern341\DealType[] $deal
     * @return self
     */
    public function setDeal(array $deal = null)
    {
        $this->deal = $deal;
        return $this;
    }
}

