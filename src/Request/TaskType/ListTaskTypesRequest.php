<?php

namespace Nascom\TeamleaderApiClient\Request\TaskType;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListTaskTypesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\TaskType
 */
class ListTaskTypesRequest extends AbstractPostRequest
{
    /**
     * ListTaskTypesRequest constructor.
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
        return 'getTaskTypes.php';
    }
}
