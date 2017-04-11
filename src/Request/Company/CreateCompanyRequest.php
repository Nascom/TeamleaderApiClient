<?php

namespace Nascom\TeamleaderApiClient\Request\Company;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Company
 */
class CreateCompanyRequest extends AbstractPostRequest
{
    /**
     * CreateCompanyRequest constructor.
     *
     * @param $name
     * @param array $options
     *   Optional parameters:
     *   - email
     *   - vat_code
     *   - telephone
     *   - country
     *   - zipcode
     *   - city
     *   - street
     *   - number
     *   - website
     *   - description
     *   - account_manager_id
     *   - local_business_number
     *   - business_type
     *   - language
     *   - add_tag_by_string
     *   - payment_term
     *   - automerge_by_name
     *   - automerge_by_email
     *   - automerge_by_vat_code
     *   - custom_field_ID
     */
    public function __construct($name, array $options = [])
    {
        $this->options = $options;
        $this->setName($name);
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->options['name'] = $name;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addCompany.php';
    }
}
