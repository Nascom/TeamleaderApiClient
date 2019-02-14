<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Tags;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TagsListRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Tags
 */
class TagsListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'tags.list';
    }
}
