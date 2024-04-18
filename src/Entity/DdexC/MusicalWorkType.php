<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing MusicalWorkType
 *
 * A ddex:Composite containing details of a ddex:MusicalWork.
 * XSD Type: MusicalWork
 */
class MusicalWorkType
{
    /**
     * The ddex:Flag indicating whether the ddexC:MusicalWork ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ddexC:MusicalWork data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:MusicalWork as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of the ddexC:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:MusicalWork within the ddex:Release which contains it. This is a ddex:LocalMusicalWorkAnchor starting with the letter W.
     *
     * @var string $musicalWorkReference
     */
    private $musicalWorkReference = null;

    /**
     * A ddex:Composite containing details of a ddex:ReferenceTitle of the ddexC:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\ReferenceTitleType[] $referenceTitle
     */
    private $referenceTitle = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the ddexC:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddexC:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkContributorType[] $musicalWorkContributor
     */
    private $musicalWorkContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:Type of the ddexC:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkTypeType[] $musicalWorkType
     */
    private $musicalWorkType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:RightShare for the ddexC:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\RightShareType[] $rightShare
     */
    private $rightShare = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddexC:MusicalWork which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     */
    private $musicalWorkDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the ddexC:MusicalWork ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ddexC:MusicalWork data with the now provided data.
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
     * The ddex:Flag indicating whether the ddexC:MusicalWork ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ddexC:MusicalWork data with the now provided data.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:MusicalWork as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:MusicalWork as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of the ddexC:MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DedexBundle\Entity\DdexC\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of the ddexC:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of the ddexC:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $musicalWorkId
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
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:MusicalWork within the ddex:Release which contains it. This is a ddex:LocalMusicalWorkAnchor starting with the letter W.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:MusicalWork within the ddex:Release which contains it. This is a ddex:LocalMusicalWorkAnchor starting with the letter W.
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
     * A ddex:Composite containing details of a ddex:ReferenceTitle of the ddexC:MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle
     */
    public function addToReferenceTitle(\DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle[] = $referenceTitle;
        return $this;
    }

    /**
     * isset referenceTitle
     *
     * A ddex:Composite containing details of a ddex:ReferenceTitle of the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:ReferenceTitle of the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:ReferenceTitle of the ddexC:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\ReferenceTitleType[]
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A ddex:Composite containing details of a ddex:ReferenceTitle of the ddexC:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\ReferenceTitleType[] $referenceTitle
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the ddexC:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the ddexC:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddexC:MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkContributorType $musicalWorkContributor
     */
    public function addToMusicalWorkContributor(\DedexBundle\Entity\DdexC\MusicalWorkContributorType $musicalWorkContributor)
    {
        $this->musicalWorkContributor[] = $musicalWorkContributor;
        return $this;
    }

    /**
     * isset musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddexC:MusicalWork.
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
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddexC:MusicalWork.
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
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddexC:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkContributorType[]
     */
    public function getMusicalWorkContributor()
    {
        return $this->musicalWorkContributor;
    }

    /**
     * Sets a new musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddexC:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkContributorType[] $musicalWorkContributor
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
     * A ddex:Composite containing details of the ddex:Type of the ddexC:MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkTypeType $musicalWorkType
     */
    public function addToMusicalWorkType(\DedexBundle\Entity\DdexC\MusicalWorkTypeType $musicalWorkType)
    {
        $this->musicalWorkType[] = $musicalWorkType;
        return $this;
    }

    /**
     * isset musicalWorkType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of the ddex:Type of the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of the ddex:Type of the ddexC:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkTypeType[]
     */
    public function getMusicalWorkType()
    {
        return $this->musicalWorkType;
    }

    /**
     * Sets a new musicalWorkType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddexC:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkTypeType[] $musicalWorkType
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
     * A ddex:Composite containing details of a ddex:RightShare for the ddexC:MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\RightShareType $rightShare
     */
    public function addToRightShare(\DedexBundle\Entity\DdexC\RightShareType $rightShare)
    {
        $this->rightShare[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShare
     *
     * A ddex:Composite containing details of a ddex:RightShare for the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:RightShare for the ddexC:MusicalWork.
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
     * A ddex:Composite containing details of a ddex:RightShare for the ddexC:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\RightShareType[]
     */
    public function getRightShare()
    {
        return $this->rightShare;
    }

    /**
     * Sets a new rightShare
     *
     * A ddex:Composite containing details of a ddex:RightShare for the ddexC:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\RightShareType[] $rightShare
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddexC:MusicalWork which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory
     */
    public function addToMusicalWorkDetailsByTerritory(\DedexBundle\Entity\DdexC\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory)
    {
        $this->musicalWorkDetailsByTerritory[] = $musicalWorkDetailsByTerritory;
        return $this;
    }

    /**
     * isset musicalWorkDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddexC:MusicalWork which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddexC:MusicalWork which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddexC:MusicalWork which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkDetailsByTerritoryType[]
     */
    public function getMusicalWorkDetailsByTerritory()
    {
        return $this->musicalWorkDetailsByTerritory;
    }

    /**
     * Sets a new musicalWorkDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddexC:MusicalWork which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     * @return self
     */
    public function setMusicalWorkDetailsByTerritory(array $musicalWorkDetailsByTerritory = null)
    {
        $this->musicalWorkDetailsByTerritory = $musicalWorkDetailsByTerritory;
        return $this;
    }
}

