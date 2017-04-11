<?php

namespace Nascom\TeamleaderApiClient\Request\Contact;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class DeleteContactRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Contact
 */
class DeleteContactRequest extends AbstractPostRequest
{
    /**
     * DeleteContactRequest constructor.
     *
     * @param $contact_id
     * @param array $options
     */
    public function __construct($contact_id, array $options = [])
    {
        $this->options = $options;
        $this->setContactId($forename);
    }

    /**
     * @param $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->options['contact_id'] = $contact_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'deleteContact.php';
    }
}
