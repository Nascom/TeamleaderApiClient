<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateDealRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class CreateDealRequest extends AbstractPostRequest
{
    /**
     * CreateDealRequest constructor.
     *
     * @param $contact_or_company
     * @param $contact_or_company_id
     * @param $title
     * @param $source
     * @param array $options
     *   Extra parameters for item lines (required):
     *   - description_1
     *   - price_1
     *   - amount_1
     *   - vat_1
     *   - product_id_1
     *   - account_1
     *   - subtitle_1
     *
     *   - description_2
     *   - price_2
     *   - ...
     *   - custom_field_ID
     *
     *   Optional parameters:
     *   - sys_department_id
     *   - responsible_sys_client_id
     *   - phase_id
     *   - description
     *   - budget_estimation
     *   - optional_contact_id
     *   - filter_double_sales
     */
    public function __construct($contact_or_company, $contact_or_company_id, $title, $source, array $options = [])
    {
        $this->options = $options;
        $this->setContactOrCompany($contact_or_company);
        $this->setContactOrCompanyId($contact_or_company_id);
        $this->setTitle($title);
        $this->setSource($source);
    }

    /**
     * @param $contact_or_company
     */
    public function setContactOrCompany($contact_or_company)
    {
        $this->options['contact_or_company'] = $contact_or_company;
    }

    /**
     * @param $contact_or_company_id
     */
    public function setContactOrCompanyId($contact_or_company_id)
    {
        $this->options['contact_or_company_id'] = $contact_or_company_id;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->options['title'] = $title;
    }

    /**
     * @param $source
     */
    public function setSource($source)
    {
        $this->options['source'] = $source;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addDeal.php';
    }
}
