<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing MusicalWorkType
 *
 * A Composite containing details of a MusicalWork.
 * XSD Type: MusicalWork
 */
class MusicalWorkType
{
    /**
     * The Flag indicating whether the MusicalWork Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern381\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @var string $musicalWorkReference
     */
    private $musicalWorkReference = null;

    /**
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern381\ReferenceTitleType[] $referenceTitle
     */
    private $referenceTitle = [
        
    ];

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern381\MusicalWorkContributorType[] $musicalWorkContributor
     */
    private $musicalWorkContributor = [
        
    ];

    /**
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern381\MusicalWorkTypeType[] $musicalWorkType
     */
    private $musicalWorkType = [
        
    ];

    /**
     * A Composite containing details of a RightShare for the MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern381\RightShareType[] $rightShare
     */
    private $rightShare = [
        
    ];

    /**
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @var \DedexBundle\Entity\Ern381\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     */
    private $musicalWorkDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the MusicalWork Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The Flag indicating whether the MusicalWork Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DedexBundle\Entity\Ern381\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkId($index)
    {
        return isset($this->musicalWorkId[$index]);
    }

    /**
     * unset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkId($index)
    {
        unset($this->musicalWorkId[$index]);
    }

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern381\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern381\MusicalWorkIdType[] $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(array $musicalWorkId)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Gets as musicalWorkReference
     *
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @return string
     */
    public function getMusicalWorkReference()
    {
        return $this->musicalWorkReference;
    }

    /**
     * Sets a new musicalWorkReference
     *
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @param string $musicalWorkReference
     * @return self
     */
    public function setMusicalWorkReference($musicalWorkReference)
    {
        $this->musicalWorkReference = $musicalWorkReference;
        return $this;
    }

    /**
     * Adds as referenceTitle
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ReferenceTitleType $referenceTitle
     */
    public function addToReferenceTitle(\DedexBundle\Entity\Ern381\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle[] = $referenceTitle;
        return $this;
    }

    /**
     * isset referenceTitle
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceTitle($index)
    {
        return isset($this->referenceTitle[$index]);
    }

    /**
     * unset referenceTitle
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceTitle($index)
    {
        unset($this->referenceTitle[$index]);
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern381\ReferenceTitleType[]
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern381\ReferenceTitleType[] $referenceTitle
     * @return self
     */
    public function setReferenceTitle(array $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern381\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as musicalWorkContributor
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\MusicalWorkContributorType $musicalWorkContributor
     */
    public function addToMusicalWorkContributor(\DedexBundle\Entity\Ern381\MusicalWorkContributorType $musicalWorkContributor)
    {
        $this->musicalWorkContributor[] = $musicalWorkContributor;
        return $this;
    }

    /**
     * isset musicalWorkContributor
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkContributor($index)
    {
        return isset($this->musicalWorkContributor[$index]);
    }

    /**
     * unset musicalWorkContributor
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkContributor($index)
    {
        unset($this->musicalWorkContributor[$index]);
    }

    /**
     * Gets as musicalWorkContributor
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern381\MusicalWorkContributorType[]
     */
    public function getMusicalWorkContributor()
    {
        return $this->musicalWorkContributor;
    }

    /**
     * Sets a new musicalWorkContributor
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern381\MusicalWorkContributorType[] $musicalWorkContributor
     * @return self
     */
    public function setMusicalWorkContributor(array $musicalWorkContributor)
    {
        $this->musicalWorkContributor = $musicalWorkContributor;
        return $this;
    }

    /**
     * Adds as musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\MusicalWorkTypeType $musicalWorkType
     */
    public function addToMusicalWorkType(\DedexBundle\Entity\Ern381\MusicalWorkTypeType $musicalWorkType)
    {
        $this->musicalWorkType[] = $musicalWorkType;
        return $this;
    }

    /**
     * isset musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkType($index)
    {
        return isset($this->musicalWorkType[$index]);
    }

    /**
     * unset musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkType($index)
    {
        unset($this->musicalWorkType[$index]);
    }

    /**
     * Gets as musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern381\MusicalWorkTypeType[]
     */
    public function getMusicalWorkType()
    {
        return $this->musicalWorkType;
    }

    /**
     * Sets a new musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern381\MusicalWorkTypeType[] $musicalWorkType
     * @return self
     */
    public function setMusicalWorkType(array $musicalWorkType = null)
    {
        $this->musicalWorkType = $musicalWorkType;
        return $this;
    }

    /**
     * Adds as rightShare
     *
     * A Composite containing details of a RightShare for the MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\RightShareType $rightShare
     */
    public function addToRightShare(\DedexBundle\Entity\Ern381\RightShareType $rightShare)
    {
        $this->rightShare[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShare
     *
     * A Composite containing details of a RightShare for the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShare($index)
    {
        return isset($this->rightShare[$index]);
    }

    /**
     * unset rightShare
     *
     * A Composite containing details of a RightShare for the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShare($index)
    {
        unset($this->rightShare[$index]);
    }

    /**
     * Gets as rightShare
     *
     * A Composite containing details of a RightShare for the MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern381\RightShareType[]
     */
    public function getRightShare()
    {
        return $this->rightShare;
    }

    /**
     * Sets a new rightShare
     *
     * A Composite containing details of a RightShare for the MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern381\RightShareType[] $rightShare
     * @return self
     */
    public function setRightShare(array $rightShare = null)
    {
        $this->rightShare = $rightShare;
        return $this;
    }

    /**
     * Adds as musicalWorkDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory
     */
    public function addToMusicalWorkDetailsByTerritory(\DedexBundle\Entity\Ern381\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory)
    {
        $this->musicalWorkDetailsByTerritory[] = $musicalWorkDetailsByTerritory;
        return $this;
    }

    /**
     * isset musicalWorkDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkDetailsByTerritory($index)
    {
        return isset($this->musicalWorkDetailsByTerritory[$index]);
    }

    /**
     * unset musicalWorkDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkDetailsByTerritory($index)
    {
        unset($this->musicalWorkDetailsByTerritory[$index]);
    }

    /**
     * Gets as musicalWorkDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @return \DedexBundle\Entity\Ern381\MusicalWorkDetailsByTerritoryType[]
     */
    public function getMusicalWorkDetailsByTerritory()
    {
        return $this->musicalWorkDetailsByTerritory;
    }

    /**
     * Sets a new musicalWorkDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @param \DedexBundle\Entity\Ern381\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     * @return self
     */
    public function setMusicalWorkDetailsByTerritory(array $musicalWorkDetailsByTerritory = null)
    {
        $this->musicalWorkDetailsByTerritory = $musicalWorkDetailsByTerritory;
        return $this;
    }
}

