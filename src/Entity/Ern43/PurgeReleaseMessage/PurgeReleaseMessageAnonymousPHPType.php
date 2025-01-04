<?php

namespace DedexBundle\Entity\Ern43\PurgeReleaseMessage;

/**
 * Class representing PurgeReleaseMessageAnonymousPHPType
 */
class PurgeReleaseMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern43\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @var \DedexBundle\Entity\Ern43\PurgedReleaseType $purgedRelease
     */
    private $purgedRelease = null;

    /**
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as messageHeader
     *
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern43\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern43\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DedexBundle\Entity\Ern43\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as purgedRelease
     *
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @return \DedexBundle\Entity\Ern43\PurgedReleaseType
     */
    public function getPurgedRelease()
    {
        return $this->purgedRelease;
    }

    /**
     * Sets a new purgedRelease
     *
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @param \DedexBundle\Entity\Ern43\PurgedReleaseType $purgedRelease
     * @return self
     */
    public function setPurgedRelease(\DedexBundle\Entity\Ern43\PurgedReleaseType $purgedRelease)
    {
        $this->purgedRelease = $purgedRelease;
        return $this;
    }
}

