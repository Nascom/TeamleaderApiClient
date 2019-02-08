<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Quotations;


use Nascom\TeamleaderApiClient\Request\PostRequest;

class QuotationsDownloadRequest extends PostRequest
{

    /**
     * QuotationsDownloadRequest constructor.
     * @param string $id
     * @param string $format
     */
    public function __construct($id, $format)
    {
        $this->body['id'] = $id;
        $this->body['format'] = $format;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'quotations.download';
    }
}
