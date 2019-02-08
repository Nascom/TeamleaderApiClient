<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Calendar;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedActivityType;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTodo;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CalendarEventFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CalendarEvent
 */
abstract class CalendarEventFieldDescriptionBase extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'creator' => ['target_class' => Account::class],
            'todo' => ['target_class' => LinkedTodo::class],
            'activity_type' => ['target_class' => LinkedActivityType::class],
            'title',
            'description',
            'starts_at' => ['target_class' => \DateTime::class],
            'ends_at' => ['target_class' => \DateTime::class],
            'location',
            'attendees' => ['target_class' => LinkedContact::class.'[]'],
            'links' => ['target_class' => LinkedCustomer::class.'[]'],
        ];
    }
}
