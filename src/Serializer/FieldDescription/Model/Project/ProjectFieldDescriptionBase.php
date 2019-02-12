<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Model\Aggregate\Source;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ProjectFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project
 */
abstract class ProjectFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'reference',
            'title',
            'description',
            'status',
            'customer' => ['target_class' => LinkedCustomer::class],
            'starts_on',
            'due_on',
            'source' => ['target_class' => Source::class],
        ];
    }
}
