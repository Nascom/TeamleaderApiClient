<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes;

/**
 * Class SortInfo
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes
 */
class SortInfo
{
    /**
     * @var array
     */
    private $sorts = [];

    /**
     * SortInfo constructor.
     *
     * @param string $field
     * @param string $order
     */
    public function __construct($field = '', $order = 'asc')
    {
        if (!empty($field)) {
            $this->addSort($field, $order);
        }
    }

    /**
     * @param string $field
     * @param string $order
     */
    public function addSort($field, $order = 'asc')
    {
        $this->sorts[] = [
            'field' => $field,
            'order' => $order
        ];
    }

    /**
     * @param array $sorts
     */
    public function setSorts(array $sorts)
    {
        $this->sorts = $sorts;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->sorts;
    }
}
