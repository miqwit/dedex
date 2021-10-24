<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing DiscoverableUseTypeType
 *
 * A Composite containing details of a UseType.
 * XSD Type: DiscoverableUseType
 */
class DiscoverableUseTypeType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Namespace of the UseType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A Flag indicating whether the Deal allows the ReleaseDistributor to include the release(s) referenced in the Deal to be indexed and searchable by Consumers on the ReleaseDistributor’s platform (=true) or not (=false). If this Attribute is not provided, it is assumed that this is True.
     *
     * @var bool $isDiscoverable
     */
    private $isDiscoverable = null;

    /**
     * A UserDefined value of the UseType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

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
     * Gets as namespace
     *
     * The Namespace of the UseType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * The Namespace of the UseType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as isDiscoverable
     *
     * A Flag indicating whether the Deal allows the ReleaseDistributor to include the release(s) referenced in the Deal to be indexed and searchable by Consumers on the ReleaseDistributor’s platform (=true) or not (=false). If this Attribute is not provided, it is assumed that this is True.
     *
     * @return bool
     */
    public function getIsDiscoverable()
    {
        return $this->isDiscoverable;
    }

    /**
     * Sets a new isDiscoverable
     *
     * A Flag indicating whether the Deal allows the ReleaseDistributor to include the release(s) referenced in the Deal to be indexed and searchable by Consumers on the ReleaseDistributor’s platform (=true) or not (=false). If this Attribute is not provided, it is assumed that this is True.
     *
     * @param bool $isDiscoverable
     * @return self
     */
    public function setIsDiscoverable($isDiscoverable)
    {
        $this->isDiscoverable = $isDiscoverable;
        return $this;
    }

    /**
     * Gets as userDefinedValue
     *
     * A UserDefined value of the UseType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A UserDefined value of the UseType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }


}

