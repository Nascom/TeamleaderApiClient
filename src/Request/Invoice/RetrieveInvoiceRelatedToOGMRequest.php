<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveInvoiceRelatedToOGMRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class RetrieveInvoiceRelatedToOGMRequest extends AbstractPostRequest
{
    /**
     * RetrieveInvoiceRelatedToOGMRequest constructor.
     *
     * @param $ogm
     * @param array $options
     */
    public function __construct($ogm, array $options = [])
    {
        $this->options = $options;
        $this->setOgm($ogm);
    }

    /**
     * @param $ogm
     */
    public function setOgm($ogm)
    {
        $this->options['ogm'] = $ogm;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getInvoiceByOGM.php';
    }
}
