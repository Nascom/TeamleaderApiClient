<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Tags;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class TagsListRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Tags
 */
class TagsListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'tags.list';
    }
}
