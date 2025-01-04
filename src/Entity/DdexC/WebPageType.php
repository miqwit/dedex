<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing WebPageType
 *
 * A ddex:Composite containing details of a ddex:WebPage.
 * XSD Type: WebPage
 */
class WebPageType
{
    /**
     * A ddex:Composite containing details of the ddex:PartyId for a ddex:Party owning the ddexC:WebPage. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @var \DedexBundle\Entity\DdexC\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing the ddex:Name of the ddex:WebPage.
     *
     * @var \DedexBundle\Entity\DdexC\NameType $pageName
     */
    private $pageName = null;

    /**
     * A ddex:URL of the ddex:WebPage.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * An ddex:Identifier of a computer user who is granted maintenance access to the ddex:WebPage.
     *
     * @var string $userName
     */
    private $userName = null;

    /**
     * A ddex:Password needed to grant a user maintenance access to the ddex:WebPage in combination with the ddex:UserName.
     *
     * @var string $password
     */
    private $password = null;

    /**
     * Adds as partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for a ddex:Party owning the ddexC:WebPage. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\PartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\DdexC\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for a ddex:Party owning the ddexC:WebPage. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
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
     * A ddex:Composite containing details of the ddex:PartyId for a ddex:Party owning the ddexC:WebPage. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
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
     * A ddex:Composite containing details of the ddex:PartyId for a ddex:Party owning the ddexC:WebPage. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @return \DedexBundle\Entity\DdexC\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for a ddex:Party owning the ddexC:WebPage. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @param \DedexBundle\Entity\DdexC\PartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
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
     * Gets as pageName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:WebPage.
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Sets a new pageName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:WebPage.
     *
     * @param \DedexBundle\Entity\DdexC\NameType $pageName
     * @return self
     */
    public function setPageName(?\DedexBundle\Entity\DdexC\NameType $pageName = null)
    {
        $this->pageName = $pageName;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A ddex:URL of the ddex:WebPage.
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
     * A ddex:URL of the ddex:WebPage.
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
     * An ddex:Identifier of a computer user who is granted maintenance access to the ddex:WebPage.
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
     * An ddex:Identifier of a computer user who is granted maintenance access to the ddex:WebPage.
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
     * A ddex:Password needed to grant a user maintenance access to the ddex:WebPage in combination with the ddex:UserName.
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
     * A ddex:Password needed to grant a user maintenance access to the ddex:WebPage in combination with the ddex:UserName.
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

