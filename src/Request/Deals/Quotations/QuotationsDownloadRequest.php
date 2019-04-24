<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Quotations;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class QuotationsDownloadRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\Quotations
 */
class QuotationsDownloadRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * QuotationsDownloadRequest constructor.
     *
     * @param string $id
     * @param string $format
     */
    public function __construct($id, $format)
    {
        $this->body['id'] = $id;
        $this->body['format'] = $format;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'quotations.download';
    }
}
