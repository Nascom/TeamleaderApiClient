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
        $fields = [
            'time_zone',
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return User::class;
    }
}
