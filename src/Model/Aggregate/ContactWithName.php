<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class ContactWithName
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class ContactWithName
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var LinkedContact
     */
    private $contact;

    /**
     * ContactWithName constructor.
     * @param string|null $name
     * @param LinkedContact|null $linkedContact
     */
    public function __construct
    (
        $name = null,
        LinkedContact $linkedContact = null
    ) {
        $this->name = $name;
        $this->contact = $linkedContact;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return LinkedContact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param LinkedContact $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }
}
