<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing WebPolicyType
 *
 * A Composite containing details of a Web policy.
 * XSD Type: WebPolicy
 */
class WebPolicyType
{
    /**
     * A Composite containing details of conditions.
     *
     * @var \DedexBundle\Entity\Ern381\ConditionType $condition
     */
    private $condition = null;

    /**
     * A Flag indicating whether a MessageRecipient shall block all access to the Release (=true) or not (=false).
     *
     * @var bool $accessBlockingRequested
     */
    private $accessBlockingRequested = null;

    /**
     * A Type of limitation on the access of the UgcSite. This governs whether the content of UgcSites is only accessible to members/friends of the site or not.
     *
     * @var string $accessLimitation
     */
    private $accessLimitation = null;

    /**
     * A Flag indicating whether a user is allowed to embed a Release on his website outside the UgcSite (=true) or not (=false).
     *
     * @var bool $embeddingAllowed
     */
    private $embeddingAllowed = null;

    /**
     * A Flag indicating whether a user is allowed to provide a rating for the Release on the UgcSite (=true) or not (=false).
     *
     * @var bool $userRatingAllowed
     */
    private $userRatingAllowed = null;

    /**
     * A Flag indicating whether a user is allowed to provide a Comment for the Release on the UgcSite (=true) or not (=false).
     *
     * @var bool $userCommentAllowed
     */
    private $userCommentAllowed = null;

    /**
     * A Flag indicating whether a user is allowed to provide a response to a Comment for the Release on the UgcSite (=true) or not (=false).
     *
     * @var bool $userResponsesAllowed
     */
    private $userResponsesAllowed = null;

    /**
     * A Flag indicating whether syndication is allowed (=true) or not (=false).
     *
     * @var bool $syndicationAllowed
     */
    private $syndicationAllowed = null;

    /**
     * Gets as condition
     *
     * A Composite containing details of conditions.
     *
     * @return \DedexBundle\Entity\Ern381\ConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A Composite containing details of conditions.
     *
     * @param \DedexBundle\Entity\Ern381\ConditionType $condition
     * @return self
     */
    public function setCondition(\DedexBundle\Entity\Ern381\ConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as accessBlockingRequested
     *
     * A Flag indicating whether a MessageRecipient shall block all access to the Release (=true) or not (=false).
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
     * A Flag indicating whether a MessageRecipient shall block all access to the Release (=true) or not (=false).
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
     * A Type of limitation on the access of the UgcSite. This governs whether the content of UgcSites is only accessible to members/friends of the site or not.
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
     * A Type of limitation on the access of the UgcSite. This governs whether the content of UgcSites is only accessible to members/friends of the site or not.
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
     * A Flag indicating whether a user is allowed to embed a Release on his website outside the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether a user is allowed to embed a Release on his website outside the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether a user is allowed to provide a rating for the Release on the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether a user is allowed to provide a rating for the Release on the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether a user is allowed to provide a Comment for the Release on the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether a user is allowed to provide a Comment for the Release on the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether a user is allowed to provide a response to a Comment for the Release on the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether a user is allowed to provide a response to a Comment for the Release on the UgcSite (=true) or not (=false).
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
     * A Flag indicating whether syndication is allowed (=true) or not (=false).
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
     * A Flag indicating whether syndication is allowed (=true) or not (=false).
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

