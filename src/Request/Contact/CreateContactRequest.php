<?php

namespace Nascom\TeamleaderApiClient\Request\Contact;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateContactRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Contact
 */
class CreateContactRequest extends AbstractPostRequest
{
    /**
     * CreateContactRequest constructor.
     *
     * @param $forename
     * @param $surname
     * @param $email
     * @param array $options
     *   Optional parameters:
     *   - salutation
     *   - telephone
     *   - gsm
     *   - website
     *   - country
     *   - zipcode
     *   - city
     *   - street
     *   - number
     *   - language
     *   - gender
     *   - dob
     *   - description
     *   - newsletter
     *   - add_tag_by_string
     *   - automerge_by_name
     *   - automerge_by_email
     *   - custom_field_ID
     *   - tracking string
     *   - tracking_long string
     *
     *   Optional delivery address:
     *   - address_name_delivery
     *   - zipcode_delivery
     *   - city_delivery
     *   - street_delivery
     *   - number_delivery
     *
     *   Optional visiting address:
     *   - address_name_visiting
     *   - zipcode_visiting
     *   - city_visiting
     *   - street_visiting
     *   - number_visiting
     *
     *   Optional invoicing address:
     *   - address_name_invoicing
     *   - zipcode_invoicing
     *   - city_invoicing
     *   - street_invoicing
     *   - number_invoicing
     *   - invoice_email_address
     */
    public function __construct($forename, $surname, $email, array $options = [])
    {
        $this->options = $options;
        $this->setForename($forename);
        $this->setSurname($surname);
        $this->setEmail($email);
    }

    /**
     * @param $forename
     */
    public function setForename($forename)
    {
        $this->options['forename'] = $forename;
    }

    /**
     * @param $surname
     */
    public function setSurname($surname)
    {
        $this->options['surname'] = $surname;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->options['email'] = $email;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addContact.php';
    }
}
