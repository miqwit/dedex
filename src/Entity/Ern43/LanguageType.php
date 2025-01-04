<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing LanguageType
 *
 * A Composite containing details of a Language value.
 * XSD Type: Language
 */
class LanguageType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Flag indicating whether the Language is the main one (=true) or not (=false).
     *
     * @var bool $isMainLanguage
     */
    private $isMainLanguage = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as isMainLanguage
     *
     * A Flag indicating whether the Language is the main one (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsMainLanguage()
    {
        return $this->isMainLanguage;
    }

    /**
     * Sets a new isMainLanguage
     *
     * A Flag indicating whether the Language is the main one (=true) or not (=false).
     *
     * @param bool $isMainLanguage
     * @return self
     */
    public function setIsMainLanguage($isMainLanguage)
    {
        $this->isMainLanguage = $isMainLanguage;
        return $this;
    }
}

