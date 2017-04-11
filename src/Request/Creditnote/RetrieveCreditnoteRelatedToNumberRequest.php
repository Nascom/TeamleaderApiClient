<?php

namespace Nascom\TeamleaderApiClient\Request\Creditnote;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveCreditnoteRelatedToNumberRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Creditnote
 */
class RetrieveCreditnoteRelatedToNumberRequest extends AbstractPostRequest
{
    /**
     * RetrieveCreditnoteRelatedToNumberRequest constructor.
     *
     * @param $invoice_nr
     * @param $sys_department_id
     * @param $fiscal_year_label
     * @param array $options
     */
    public function __construct($invoice_nr, $sys_department_id, $fiscal_year_label, array $options = [])
    {
        $this->options = $options;
        $this->setInvoiceNr($invoice_nr);
        $this->setSysDepartmentId($sys_department_id);
        $this->setFiscalYearLabel($fiscal_year_label);
    }

    /**
     * @param $invoice_nr
     */
    public function setInvoiceNr($invoice_nr)
    {
        $this->options['invoice_nr'] = $invoice_nr;
    }

    /**
     * @param $sys_department_id
     */
    public function setSysDepartmentId($sys_department_id)
    {
        $this->options['sys_department_id'] = $sys_department_id;
    }

    /**
     * @param $fiscal_year_label
     */
    public function setFiscalYearLabel($fiscal_year_label)
    {
        $this->options['fiscal_year_label'] = $fiscal_year_label;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCreditnoteByNr.php';
    }
}
