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
     * @param $creditnote_id
     * @param array $options
     */
    public function __construct($creditnote_id, array $options = [])
    {
        $this->options = $options;
        $this->setCreditnoteId($creditnote_id);
    }

    /**
     * @param $creditnote_id
     */
    public function setCreditnoteId($creditnote_id)
    {
        $this->options['creditnote_id'] = $creditnote_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCreditnote.php';
    }
}
