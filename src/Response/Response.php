<?php

namespace Nascom\TeamleaderApiClient\Response;

/**
 * Class Response
 *
 * @package Nascom\TeamleaderApiClient\Response
 */
class Response implements ResponseInterface
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * Response constructor.
     *
     * @param mixed $data
     */
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    /**
     * @inheritdoc
     */
    public function getData()
    {
        return $this->data;
    }
}
