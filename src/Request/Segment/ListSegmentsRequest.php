<?php

namespace Nascom\TeamleaderApiClient\Request\Segment;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListSegmentsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Segment
 */
class ListSegmentsRequest extends AbstractPostRequest
{
    /**
     * ListSegmentsRequest constructor.
     *
     * @param $object_type
     * @param array $options
     */
    public function __construct($object_type, array $options = [])
    {
        $this->options = $options;
        $this->setObjectType($object_type);
    }

    /**
     * @param $object_type
     */
    public function setObjectType($object_type)
    {
        $this->options['object_type'] = $object_type;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getSegments.php';
    }
}
