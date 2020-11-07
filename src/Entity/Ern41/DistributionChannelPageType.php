<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DistributionChannelPageType
 *
 * A Composite containing details of a WebPage for a DistributionChannel.
 * XSD Type: DistributionChannelPage
 */
class DistributionChannelPageType
{

    /**
     * A Composite containing details of the PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern41\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing the Name of the WebPage.
     *
     * @var \DedexBundle\Entity\Ern41\NameType $pageName
     */
    private $pageName = null;

    /**
     * A URL of the WebPage.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * An Identifier of a computer user who is granted maintenance access to the WebPage.
     *
     * @var string $userName
     */
    private $userName = null;

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern41\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern41\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for a Party owning the WebPage. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern41\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as pageName
     *
     * A Composite containing the Name of the WebPage.
     *
     * @return \DedexBundle\Entity\Ern41\NameType
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Sets a new pageName
     *
     * A Composite containing the Name of the WebPage.
     *
     * @param \DedexBundle\Entity\Ern41\NameType $pageName
     * @return self
     */
    public function setPageName(\DedexBundle\Entity\Ern41\NameType $pageName)
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
     * An Identifier of a computer user who is granted maintenance access to the WebPage.
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
     * An Identifier of a computer user who is granted maintenance access to the WebPage.
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }


}

