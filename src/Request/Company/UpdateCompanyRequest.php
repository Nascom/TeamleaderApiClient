<?php

namespace Nascom\TeamleaderApiClient\Request\Company;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Company
 */
class UpdateCompanyRequest extends AbstractPostRequest
{
    /**
     * UpdateCompanyRequest constructor.
     *
     * @param $company_id
     * @param $track_changes
     * @param array $options
     *   Optional parameters:
     *   - name
     *   - vat_code
     *   - city
     *   - zipcode
     *   - street
     *   - number
     *   - description
     *   - country
     *   - telephone
     *   - website
     *   - fax
     *   - email
     *   - invoice_email_address
     *   - local_business_number
     *   - business_type
     *   - external_customer_id
     *   - add_tag_by_string
     *   - remove_tag_by_string
     *   - custom_field_ID
     */
    public function __construct($company_id, $track_changes, array $options = [])
    {
        $this->options = $options;
        $this->setCompanyId($company_id);
        $this->setTrackChanges($track_changes);
    }

    /**
     * @param $company_id
     */
    public function setCompanyId($company_id)
    {
        $this->options['company_id'] = $company_id;
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
        return 'updateCompany.php';
    }
}
