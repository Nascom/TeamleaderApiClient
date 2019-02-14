<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Timer;

use Nascom\TeamleaderApiClient\Model\Timer\Timer;

/**
 * Class TimerFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Timer
 */
class TimerFieldDescription extends TimerFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Timer::class;
    }
}
