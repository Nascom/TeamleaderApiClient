<?php

namespace Nascom\TeamleaderApiClient\Request\Call;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveCallRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Call
 */
class RetrieveCallRequest extends AbstractPostRequest
{
    /**
     * RetrieveCallRequest constructor.
     *
     * @param $call_id
     * @param array $options
     */
    public function __construct($call_id, array $options = [])
    {
        $this->options = $options;
        $this->setCallId($call_id);
    }

    /**
     * @param $call_id
     */
    public function setCallId($call_id)
    {
        $this->options['call_id'] = $call_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCall.php';
    }
}
