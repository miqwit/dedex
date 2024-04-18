<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing RelatedReleaseOfferSetType
 *
 * A Composite containing details of one or more
 *  offers related to one or more Releases.
 * XSD Type: RelatedReleaseOfferSet
 */
class RelatedReleaseOfferSetType
{
    /**
     * The Language and script for the Elements of
     *  the RelatedReleaseOfferSet as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of
     *  ReleaseIds of the Release(s) for which the offer(s) are
     *  available.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing a Description of
     *  the Release(s) for which the offer(s) are available.This Element is designed to
     *  be used to describe entire collections or repertoires, and is not to be used to
     *  list individual Releases by xs:ID or Title.
     *
     * @var \DedexBundle\Entity\Ern383\DescriptionType $releaseDescription
     */
    private $releaseDescription = null;

    /**
     * A Composite containing details of a Deal
     *  that is available as an offer related to the Release(s). If no Deal is provided,
     *  the parent Release and the Releases listed in the RelatedReleaseOfferSet are
     *  bundled and offered under the ReleaseOffer associated with the parent
     *  Release.
     *
     * @var \DedexBundle\Entity\Ern383\DealType[] $deal
     */
    private $deal = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the RelatedReleaseOfferSet as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     *  the RelatedReleaseOfferSet as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     * Adds as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of the Release(s) for which the offer(s) are
     *  available.
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
     *  ReleaseIds of the Release(s) for which the offer(s) are
     *  available.
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
     *  ReleaseIds of the Release(s) for which the offer(s) are
     *  available.
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
     *  ReleaseIds of the Release(s) for which the offer(s) are
     *  available.
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
     *  ReleaseIds of the Release(s) for which the offer(s) are
     *  available.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseIdType[] $releaseId
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
     * A Composite containing a Description of
     *  the Release(s) for which the offer(s) are available.This Element is designed to
     *  be used to describe entire collections or repertoires, and is not to be used to
     *  list individual Releases by xs:ID or Title.
     *
     * @return \DedexBundle\Entity\Ern383\DescriptionType
     */
    public function getReleaseDescription()
    {
        return $this->releaseDescription;
    }

    /**
     * Sets a new releaseDescription
     *
     * A Composite containing a Description of
     *  the Release(s) for which the offer(s) are available.This Element is designed to
     *  be used to describe entire collections or repertoires, and is not to be used to
     *  list individual Releases by xs:ID or Title.
     *
     * @param \DedexBundle\Entity\Ern383\DescriptionType $releaseDescription
     * @return self
     */
    public function setReleaseDescription(?\DedexBundle\Entity\Ern383\DescriptionType $releaseDescription = null)
    {
        $this->releaseDescription = $releaseDescription;
        return $this;
    }

    /**
     * Adds as deal
     *
     * A Composite containing details of a Deal
     *  that is available as an offer related to the Release(s). If no Deal is provided,
     *  the parent Release and the Releases listed in the RelatedReleaseOfferSet are
     *  bundled and offered under the ReleaseOffer associated with the parent
     *  Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\DealType $deal
     */
    public function addToDeal(\DedexBundle\Entity\Ern383\DealType $deal)
    {
        $this->deal[] = $deal;
        return $this;
    }

    /**
     * isset deal
     *
     * A Composite containing details of a Deal
     *  that is available as an offer related to the Release(s). If no Deal is provided,
     *  the parent Release and the Releases listed in the RelatedReleaseOfferSet are
     *  bundled and offered under the ReleaseOffer associated with the parent
     *  Release.
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
     * A Composite containing details of a Deal
     *  that is available as an offer related to the Release(s). If no Deal is provided,
     *  the parent Release and the Releases listed in the RelatedReleaseOfferSet are
     *  bundled and offered under the ReleaseOffer associated with the parent
     *  Release.
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
     * A Composite containing details of a Deal
     *  that is available as an offer related to the Release(s). If no Deal is provided,
     *  the parent Release and the Releases listed in the RelatedReleaseOfferSet are
     *  bundled and offered under the ReleaseOffer associated with the parent
     *  Release.
     *
     * @return \DedexBundle\Entity\Ern383\DealType[]
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A Composite containing details of a Deal
     *  that is available as an offer related to the Release(s). If no Deal is provided,
     *  the parent Release and the Releases listed in the RelatedReleaseOfferSet are
     *  bundled and offered under the ReleaseOffer associated with the parent
     *  Release.
     *
     * @param \DedexBundle\Entity\Ern383\DealType[] $deal
     * @return self
     */
    public function setDeal(array $deal = null)
    {
        $this->deal = $deal;
        return $this;
    }
}

