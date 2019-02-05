<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Addresses;
use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithAddressee;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class AddressesFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class AddressesFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'type',
            'address' => ['target_class' => AddressWithAddressee::class]
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Addresses::class;
    }
}
