<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateSubscriptionRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class CreateSubscriptionRequest extends AbstractPostRequest
{
    /**
     * CreateSubscriptionRequest constructor.
     *
     * @param $contact_or_company
     * @param $contact_or_company_id
     * @param $sys_department_id
     * @param $date_start
     * @param $repeat_after
     * @param $title
     * @param array $options
     *   Extra parameters for items in the subscription:
     *   - description_1
     *   - price_1
     *   - amount_1
     *   - vat_1
     *   - product_id_1
     *   - account_1
     *   - subtitle_1
     *   - description_2
     *   - price_2
     *   - ...
     *
     *   Optional parameters:
     *   - date_end
     *   - related_deal_id
     *   - permanent_invoicing
     *   - autosend_invoice
     *   - autosend_bpost
     *   - comments
     *   - days_in_advance
     *   - payment_term
     *   - custom_field_ID
     */
    public function __construct($contact_or_company, $contact_or_company_id, $sys_department_id, $date_start, $repeat_after, $title, array $options = [])
    {
        $this->options = $options;
        $this->setContactOrComapny($contact_or_company);
        $this->setContactOrComapnyId($contact_or_company_id);
        $this->setSysDepartmentId($sys_department_id);
        $this->setDateStart($date_start);
        $this->setRepeatAfter($repeat_after);
        $this->setTitle($title);
    }

    /**
     * @param $contact_or_company
     */
    public function setContactOrComapny($contact_or_company)
    {
        $this->options['contact_or_company'] = $contact_or_company;
    }

    /**
     * @param $contact_or_company_id
     */
    public function setContactOrComapnyId($contact_or_company_id)
    {
        $this->options['contact_or_company_id'] = $contact_or_company_id;
    }

    /**
     * @param $sys_department_id
     */
    public function setSysDepartmentId($sys_department_id)
    {
        $this->options['sys_department_id'] = $sys_department_id;
    }

    /**
     * @param $date_start
     */
    public function setDateStart($date_start)
    {
        $this->options['date_start'] = $date_start;
    }

    /**
     * @param $repeat_after
     */
    public function setRepeatAfter($repeat_after)
    {
        $this->options['repeat_after'] = $repeat_after;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->options['title'] = $title;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addSubscription.php';
    }
}
