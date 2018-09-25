<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Model\User\User;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class UserFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User
 */
class UserFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'account' => ['target_class' => Account::class],
            'first_name',
            'last_name',
            'email',
            'language',
            'telephones' => ['target_class' => Telephone::class . '[]'],
            'function',
            'time_zone'
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return User::class;
    }
}
