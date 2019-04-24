<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Lead;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LeadFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LeadFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'customer' => ['target_class' => LinkedCustomer::class],
            'contact_person' => ['target_class' => LinkedContact::class],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Lead::class;
    }
}
