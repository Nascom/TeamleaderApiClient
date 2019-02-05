<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User;

use Nascom\TeamleaderApiClient\Model\User\User;

/**
 * Class UserFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User
 */
class UserFieldDescription extends UserFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'time_zone',
        ];

        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return User::class;
    }
}