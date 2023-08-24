<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ExternalLocationDescriptorType
 *
 * A ddex:Composite containing details of an ddex:ExternalLocationDescriptor.
 * XSD Type: ExternalLocationDescriptor
 */
class ExternalLocationDescriptorType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A ddex:Type of the ddex:Descriptor according to how it is defined syntactically. For example, using a namespace (typically using a DPID) for a proprietary syntax or 'URI' for a uniform resource identifier as defined in RFC 1630). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $descriptorSyntax
     */
    private $descriptorSyntax = null;

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
     * Gets as descriptorSyntax
     *
     * A ddex:Type of the ddex:Descriptor according to how it is defined syntactically. For example, using a namespace (typically using a DPID) for a proprietary syntax or 'URI' for a uniform resource identifier as defined in RFC 1630). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getDescriptorSyntax()
    {
        return $this->descriptorSyntax;
    }

    /**
     * Sets a new descriptorSyntax
     *
     * A ddex:Type of the ddex:Descriptor according to how it is defined syntactically. For example, using a namespace (typically using a DPID) for a proprietary syntax or 'URI' for a uniform resource identifier as defined in RFC 1630). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $descriptorSyntax
     * @return self
     */
    public function setDescriptorSyntax($descriptorSyntax)
    {
        $this->descriptorSyntax = $descriptorSyntax;
        return $this;
    }
}

