<?php

namespace Nascom\TeamleaderApiClient\Request\Contact;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateContactRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Contact
 */
class UpdateContactRequest extends AbstractPostRequest
{
    /**
     * UpdateContactRequest constructor.
     *
     * @param $contact_id
     * @param $track_changes
     * @param array $options
     *   Optional parameters:
     *   - forename
     *   - surname
     *   - city
     *   - zipcode
     *   - street
     *   - number
     *   - language
     *   - gender
     *   - dob
     *   - description
     *   - country
     *   - gsm
     *   - telephone
     *   - fax
     *   - website
     *   - email
     *   - linked_company_ids
     *   - add_tag_by_string
     *   - remove_tag_by_string
     *   - custom_field_ID
     */
    public function __construct($contact_id, $track_changes, array $options = [])
    {
        $this->options = $options;
        $this->setContactId($contact_id);
        $this->setTrackChanges($track_changes);
    }

    /**
     * @param $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->options['contact_id'] = $contact_id;
    }

    /**
     * @param $track_changes
     */
    public function setTrackChanges($track_changes)
    {
        $this->options['track_changes'] = $track_changes;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'updateContact.php';
    }
}
