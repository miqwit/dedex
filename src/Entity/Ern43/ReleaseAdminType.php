<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ReleaseAdminType
 *
 * A Composite containing details of Release administration.
 * XSD Type: ReleaseAdmin
 */
class ReleaseAdminType
{
    /**
     * An Identifier specified by the MessageSender that identifies a group of record company personnel to be granted access to the MessageRecipient’s systems to administer the Release. Note that the communication of user access credentials is out of scope for the NewReleaseMessage.
     *
     * @var string $releaseAdminId
     */
    private $releaseAdminId = null;

    /**
     * A textual Description of the group of people that are to be given access to the DSP’s system. This information is auxiliary to the ReleaseAdminId element, which is the authoritative source of information for the DSP.
     *
     * @var string $personnelDescription
     */
    private $personnelDescription = null;

    /**
     * A textual Description indicating which system a person in the group identified by the Release is allowed to access.
     *
     * @var string[] $systemDescription
     */
    private $systemDescription = [
        
    ];

    /**
     * Gets as releaseAdminId
     *
     * An Identifier specified by the MessageSender that identifies a group of record company personnel to be granted access to the MessageRecipient’s systems to administer the Release. Note that the communication of user access credentials is out of scope for the NewReleaseMessage.
     *
     * @return string
     */
    public function getReleaseAdminId()
    {
        return $this->releaseAdminId;
    }

    /**
     * Sets a new releaseAdminId
     *
     * An Identifier specified by the MessageSender that identifies a group of record company personnel to be granted access to the MessageRecipient’s systems to administer the Release. Note that the communication of user access credentials is out of scope for the NewReleaseMessage.
     *
     * @param string $releaseAdminId
     * @return self
     */
    public function setReleaseAdminId($releaseAdminId)
    {
        $this->releaseAdminId = $releaseAdminId;
        return $this;
    }

    /**
     * Gets as personnelDescription
     *
     * A textual Description of the group of people that are to be given access to the DSP’s system. This information is auxiliary to the ReleaseAdminId element, which is the authoritative source of information for the DSP.
     *
     * @return string
     */
    public function getPersonnelDescription()
    {
        return $this->personnelDescription;
    }

    /**
     * Sets a new personnelDescription
     *
     * A textual Description of the group of people that are to be given access to the DSP’s system. This information is auxiliary to the ReleaseAdminId element, which is the authoritative source of information for the DSP.
     *
     * @param string $personnelDescription
     * @return self
     */
    public function setPersonnelDescription($personnelDescription)
    {
        $this->personnelDescription = $personnelDescription;
        return $this;
    }

    /**
     * Adds as systemDescription
     *
     * A textual Description indicating which system a person in the group identified by the Release is allowed to access.
     *
     * @return self
     * @param string $systemDescription
     */
    public function addToSystemDescription($systemDescription)
    {
        $this->systemDescription[] = $systemDescription;
        return $this;
    }

    /**
     * isset systemDescription
     *
     * A textual Description indicating which system a person in the group identified by the Release is allowed to access.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSystemDescription($index)
    {
        return isset($this->systemDescription[$index]);
    }

    /**
     * unset systemDescription
     *
     * A textual Description indicating which system a person in the group identified by the Release is allowed to access.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSystemDescription($index)
    {
        unset($this->systemDescription[$index]);
    }

    /**
     * Gets as systemDescription
     *
     * A textual Description indicating which system a person in the group identified by the Release is allowed to access.
     *
     * @return string[]
     */
    public function getSystemDescription()
    {
        return $this->systemDescription;
    }

    /**
     * Sets a new systemDescription
     *
     * A textual Description indicating which system a person in the group identified by the Release is allowed to access.
     *
     * @param string[] $systemDescription
     * @return self
     */
    public function setSystemDescription(array $systemDescription = null)
    {
        $this->systemDescription = $systemDescription;
        return $this;
    }
}

