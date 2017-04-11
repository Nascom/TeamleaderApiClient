<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListInvoicesRelatedToProjectRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class ListInvoicesRelatedToProjectRequest extends AbstractPostRequest
{
    /**
     * ListInvoicesRelatedToProjectRequest constructor.
     *
     * @param $project_id
     * @param array $options
     *   Optional parameters:
     *   - include_draft_invoices
     */
    public function __construct($project_id, array $options = [])
    {
        $this->options = $options;
        $this->setProjectId($project_id);
    }

    /**
     * @param $project_id
     */
    public function setProjectId($project_id)
    {
        $this->options['project_id'] = $project_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getInvoicesByProject.php';
    }
}
