<?php

namespace Nascom\TeamleaderApiClient\Request\Creditnote;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveCreditnoteRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Creditnote
 */
class RetrieveCreditnoteRequest extends AbstractPostRequest
{
    /**
     * RetrieveCreditnoteRequest constructor.
     *
     * @param $credit_id
     * @param array $options
     */
    public function __construct($credit_id, array $options = [])
    {
        $this->options = $options;
        $this->setCreditnoteId($credit_id);
    }

    /**
     * @param $credit_id
     */
    public function setCreditnoteId($credit_id)
    {
        $this->options['credit_id'] = $credit_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCreditnote.php';
    }
}
