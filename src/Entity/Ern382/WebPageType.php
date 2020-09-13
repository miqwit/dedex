<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing WebPageType
 *
 * A Composite containing details of a
 *  WebPage.
 * XSD Type: WebPage
 */
class WebPageType
{

    /**
     * A Composite containing details of the
     *  PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier
     *  is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern382\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @var \DedexBundle\Entity\Ern382\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing the Name of the
     *  WebPage.
     *
     * @var \DedexBundle\Entity\Ern382\NameType $pageName
     */
    private $pageName = null;

    /**
     * A URL of the WebPage.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * An Identifier of a computer user who is
     *  granted maintenance access to the WebPage.
     *
     * @var string $userName
     */
    private $userName = null;

    /**
     * A Password needed to grant a user
     *  maintenance access to the WebPage in combination with the
     *  UserName.
     *
     * @var string $password
     */
    private $password = null;

    /**
     * Adds as partyId
     *
     * A Composite containing details of the
     *  PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier
     *  is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\PartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern382\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the
     *  PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier
     *  is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the
     *  PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier
     *  is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the
     *  PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier
     *  is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern382\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the
     *  PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier
     *  is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern382\PartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DedexBundle\Entity\Ern382\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
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
     *  ReleaseIds. If available, a GRid should always be used.
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
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @return \DedexBundle\Entity\Ern382\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @param \DedexBundle\Entity\Ern382\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as pageName
     *
     * A Composite containing the Name of the
     *  WebPage.
     *
     * @return \DedexBundle\Entity\Ern382\NameType
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Sets a new pageName
     *
     * A Composite containing the Name of the
     *  WebPage.
     *
     * @param \DedexBundle\Entity\Ern382\NameType $pageName
     * @return self
     */
    public function setPageName(\DedexBundle\Entity\Ern382\NameType $pageName)
    {
        $this->pageName = $pageName;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A URL of the WebPage.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL of the WebPage.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as userName
     *
     * An Identifier of a computer user who is
     *  granted maintenance access to the WebPage.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * An Identifier of a computer user who is
     *  granted maintenance access to the WebPage.
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Gets as password
     *
     * A Password needed to grant a user
     *  maintenance access to the WebPage in combination with the
     *  UserName.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * A Password needed to grant a user
     *  maintenance access to the WebPage in combination with the
     *  UserName.
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

