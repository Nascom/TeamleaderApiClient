<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CustomField
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class CustomField extends ModelBase
{
    /**
     * @var
     */
    private $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
