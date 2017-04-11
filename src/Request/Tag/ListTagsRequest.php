<?php

namespace Nascom\TeamleaderApiClient\Request\Task;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListTagsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Task
 */
class ListTagsRequest extends AbstractPostRequest
{
    /**
     * ListTagsRequest constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTags.php';
    }
}
