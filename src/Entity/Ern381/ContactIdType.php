<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing ContactIdType
 *
 * A Composite containing details of contact Identifiers of a Party.
 * XSD Type: ContactId
 */
class ContactIdType
{
    /**
     * An EmailAddress of the Party.
     *
     * @var string[] $emailAddress
     */
    private $emailAddress = [
        
    ];

    /**
     * A PhoneNumber of the Party.
     *
     * @var string[] $phoneNumber
     */
    private $phoneNumber = [
        
    ];

    /**
     * A FaxNumber of the Party.
     *
     * @var string[] $faxNumber
     */
    private $faxNumber = [
        
    ];

    /**
     * Adds as emailAddress
     *
     * An EmailAddress of the Party.
     *
     * @return self
     * @param string $emailAddress
     */
    public function addToEmailAddress($emailAddress)
    {
        $this->emailAddress[] = $emailAddress;
        return $this;
    }

    /**
     * isset emailAddress
     *
     * An EmailAddress of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmailAddress($index)
    {
        return isset($this->emailAddress[$index]);
    }

    /**
     * unset emailAddress
     *
     * An EmailAddress of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmailAddress($index)
    {
        unset($this->emailAddress[$index]);
    }

    /**
     * Gets as emailAddress
     *
     * An EmailAddress of the Party.
     *
     * @return string[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * An EmailAddress of the Party.
     *
     * @param string[] $emailAddress
     * @return self
     */
    public function setEmailAddress(array $emailAddress = null)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Adds as phoneNumber
     *
     * A PhoneNumber of the Party.
     *
     * @return self
     * @param string $phoneNumber
     */
    public function addToPhoneNumber($phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }

    /**
     * isset phoneNumber
     *
     * A PhoneNumber of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhoneNumber($index)
    {
        return isset($this->phoneNumber[$index]);
    }

    /**
     * unset phoneNumber
     *
     * A PhoneNumber of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhoneNumber($index)
    {
        unset($this->phoneNumber[$index]);
    }

    /**
     * Gets as phoneNumber
     *
     * A PhoneNumber of the Party.
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * A PhoneNumber of the Party.
     *
     * @param string[] $phoneNumber
     * @return self
     */
    public function setPhoneNumber(array $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adds as faxNumber
     *
     * A FaxNumber of the Party.
     *
     * @return self
     * @param string $faxNumber
     */
    public function addToFaxNumber($faxNumber)
    {
        $this->faxNumber[] = $faxNumber;
        return $this;
    }

    /**
     * isset faxNumber
     *
     * A FaxNumber of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFaxNumber($index)
    {
        return isset($this->faxNumber[$index]);
    }

    /**
     * unset faxNumber
     *
     * A FaxNumber of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFaxNumber($index)
    {
        unset($this->faxNumber[$index]);
    }

    /**
     * Gets as faxNumber
     *
     * A FaxNumber of the Party.
     *
     * @return string[]
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Sets a new faxNumber
     *
     * A FaxNumber of the Party.
     *
     * @param string[] $faxNumber
     * @return self
     */
    public function setFaxNumber(array $faxNumber = null)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }
}

