<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\ContactWithName;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ContactWithNameFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class ContactWithNameFieldDescription extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'name',
            'contact' => ['target_class' => LinkedContact::class],
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return ContactWithName::class;
    }
}
