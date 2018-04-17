<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateInvoiceRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class CreateInvoiceRequest extends AbstractPostRequest
{
    /**
     * CreateInvoiceRequest constructor.
     *
     * @param $contact_or_company
     * @param $contact_or_company_id
     * @param $sys_department_id
     * @param array $options
     *   Extra parameters for invoice lines (required):
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
     *   Optional POST parameters
     *   - for_attention_of
     *   - payment_term
     *   - draft_invoice
     *   - layout_id
     *   - date
     *   - po_number
     *   - related_deal_id
     *   - direct_debit
     *   - comments
     *   - force_set_number
     */
    public function __construct($contact_or_company, $contact_or_company_id, $sys_department_id, array $options = [])
    {
        $this->setContactOrCompany($contact_or_company);
        $this->setContactOrCompanyId($contact_or_company_id);
        $this->setSysDepartmentId($sys_department_id);
        $this->options = $options;
    }

    /**
     * @param $type
     */
    public function setContactOrCompany($contact_or_company)
    {
        $this->options['contact_or_company'] = $contact_or_company;
    }

    /**
     * @param $id
     */
    public function setContactOrCompanyId($contact_or_company_id)
    {
        $this->options['contact_or_company_id'] = $contact_or_company_id;
    }

    /**
     * @param $id
     */
    public function setSysDepartmentId($sys_department_id)
    {
        $this->options['sys_department_id'] = $sys_department_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addInvoice.php';
    }
}
