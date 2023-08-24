<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing WebPolicyType
 *
 * A ddex:Composite containing details of a Web policy.
 * XSD Type: WebPolicy
 */
class WebPolicyType
{
    /**
     * A ddex:Composite containing details of conditions.
     *
     * @var \DedexBundle\Entity\Ern341\ConditionType $condition
     */
    private $condition = null;

    /**
     * A ddex:Flag indicating whether a ddex:MessageRecipient shall block all access to the ddex:Release (=True) or not (=False).
     *
     * @var bool $accessBlockingRequested
     */
    private $accessBlockingRequested = null;

    /**
     * A ddex:Type of limitation on the access of the ddex:UgcSite. This governs whether the content of ddex:UgcSites is only accessible to members/friends of the site or not.
     *
     * @var string $accessLimitation
     */
    private $accessLimitation = null;

    /**
     * A ddex:Flag indicating whether a user is allowed to embed a ddex:Release on his website outside the ddex:UgcSite (=True) or not (=False).
     *
     * @var bool $embeddingAllowed
     */
    private $embeddingAllowed = null;

    /**
     * A ddex:Flag indicating whether a user is allowed to provide a rating for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @var bool $userRatingAllowed
     */
    private $userRatingAllowed = null;

    /**
     * A ddex:Flag indicating whether a user is allowed to provide a ddex:Comment for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @var bool $userCommentAllowed
     */
    private $userCommentAllowed = null;

    /**
     * A ddex:Flag indicating whether a user is allowed to provide a response to a ddex:Comment for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @var bool $userResponsesAllowed
     */
    private $userResponsesAllowed = null;

    /**
     * A ddex:Flag indicating whether syndication is allowed (=True) or not (=False).
     *
     * @var bool $syndicationAllowed
     */
    private $syndicationAllowed = null;

    /**
     * Gets as condition
     *
     * A ddex:Composite containing details of conditions.
     *
     * @return \DedexBundle\Entity\Ern341\ConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A ddex:Composite containing details of conditions.
     *
     * @param \DedexBundle\Entity\Ern341\ConditionType $condition
     * @return self
     */
    public function setCondition(?\DedexBundle\Entity\Ern341\ConditionType $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as accessBlockingRequested
     *
     * A ddex:Flag indicating whether a ddex:MessageRecipient shall block all access to the ddex:Release (=True) or not (=False).
     *
     * @return bool
     */
    public function getAccessBlockingRequested()
    {
        return $this->accessBlockingRequested;
    }

    /**
     * Sets a new accessBlockingRequested
     *
     * A ddex:Flag indicating whether a ddex:MessageRecipient shall block all access to the ddex:Release (=True) or not (=False).
     *
     * @param bool $accessBlockingRequested
     * @return self
     */
    public function setAccessBlockingRequested($accessBlockingRequested)
    {
        $this->accessBlockingRequested = $accessBlockingRequested;
        return $this;
    }

    /**
     * Gets as accessLimitation
     *
     * A ddex:Type of limitation on the access of the ddex:UgcSite. This governs whether the content of ddex:UgcSites is only accessible to members/friends of the site or not.
     *
     * @return string
     */
    public function getAccessLimitation()
    {
        return $this->accessLimitation;
    }

    /**
     * Sets a new accessLimitation
     *
     * A ddex:Type of limitation on the access of the ddex:UgcSite. This governs whether the content of ddex:UgcSites is only accessible to members/friends of the site or not.
     *
     * @param string $accessLimitation
     * @return self
     */
    public function setAccessLimitation($accessLimitation)
    {
        $this->accessLimitation = $accessLimitation;
        return $this;
    }

    /**
     * Gets as embeddingAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to embed a ddex:Release on his website outside the ddex:UgcSite (=True) or not (=False).
     *
     * @return bool
     */
    public function getEmbeddingAllowed()
    {
        return $this->embeddingAllowed;
    }

    /**
     * Sets a new embeddingAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to embed a ddex:Release on his website outside the ddex:UgcSite (=True) or not (=False).
     *
     * @param bool $embeddingAllowed
     * @return self
     */
    public function setEmbeddingAllowed($embeddingAllowed)
    {
        $this->embeddingAllowed = $embeddingAllowed;
        return $this;
    }

    /**
     * Gets as userRatingAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to provide a rating for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @return bool
     */
    public function getUserRatingAllowed()
    {
        return $this->userRatingAllowed;
    }

    /**
     * Sets a new userRatingAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to provide a rating for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @param bool $userRatingAllowed
     * @return self
     */
    public function setUserRatingAllowed($userRatingAllowed)
    {
        $this->userRatingAllowed = $userRatingAllowed;
        return $this;
    }

    /**
     * Gets as userCommentAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to provide a ddex:Comment for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @return bool
     */
    public function getUserCommentAllowed()
    {
        return $this->userCommentAllowed;
    }

    /**
     * Sets a new userCommentAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to provide a ddex:Comment for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @param bool $userCommentAllowed
     * @return self
     */
    public function setUserCommentAllowed($userCommentAllowed)
    {
        $this->userCommentAllowed = $userCommentAllowed;
        return $this;
    }

    /**
     * Gets as userResponsesAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to provide a response to a ddex:Comment for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @return bool
     */
    public function getUserResponsesAllowed()
    {
        return $this->userResponsesAllowed;
    }

    /**
     * Sets a new userResponsesAllowed
     *
     * A ddex:Flag indicating whether a user is allowed to provide a response to a ddex:Comment for the ddex:Release on the ddex:UgcSite (=True) or not (=False).
     *
     * @param bool $userResponsesAllowed
     * @return self
     */
    public function setUserResponsesAllowed($userResponsesAllowed)
    {
        $this->userResponsesAllowed = $userResponsesAllowed;
        return $this;
    }

    /**
     * Gets as syndicationAllowed
     *
     * A ddex:Flag indicating whether syndication is allowed (=True) or not (=False).
     *
     * @return bool
     */
    public function getSyndicationAllowed()
    {
        return $this->syndicationAllowed;
    }

    /**
     * Sets a new syndicationAllowed
     *
     * A ddex:Flag indicating whether syndication is allowed (=True) or not (=False).
     *
     * @param bool $syndicationAllowed
     * @return self
     */
    public function setSyndicationAllowed($syndicationAllowed)
    {
        $this->syndicationAllowed = $syndicationAllowed;
        return $this;
    }
}

