<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing SupplementalDocumentListType
 *
 * A Composite containing details of one or more supplemental documents.
 * XSD Type: SupplementalDocumentList
 */
class SupplementalDocumentListType
{
    /**
     * A Composite containing details of a supplemental document.
     *
     * @var \DedexBundle\Entity\Ern43\FileType[] $supplementalDocument
     */
    private $supplementalDocument = [
        
    ];

    /**
     * Adds as supplementalDocument
     *
     * A Composite containing details of a supplemental document.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\FileType $supplementalDocument
     */
    public function addToSupplementalDocument(\DedexBundle\Entity\Ern43\FileType $supplementalDocument)
    {
        $this->supplementalDocument[] = $supplementalDocument;
        return $this;
    }

    /**
     * isset supplementalDocument
     *
     * A Composite containing details of a supplemental document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementalDocument($index)
    {
        return isset($this->supplementalDocument[$index]);
    }

    /**
     * unset supplementalDocument
     *
     * A Composite containing details of a supplemental document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementalDocument($index)
    {
        unset($this->supplementalDocument[$index]);
    }

    /**
     * Gets as supplementalDocument
     *
     * A Composite containing details of a supplemental document.
     *
     * @return \DedexBundle\Entity\Ern43\FileType[]
     */
    public function getSupplementalDocument()
    {
        return $this->supplementalDocument;
    }

    /**
     * Sets a new supplementalDocument
     *
     * A Composite containing details of a supplemental document.
     *
     * @param \DedexBundle\Entity\Ern43\FileType[] $supplementalDocument
     * @return self
     */
    public function setSupplementalDocument(array $supplementalDocument)
    {
        $this->supplementalDocument = $supplementalDocument;
        return $this;
    }
}

