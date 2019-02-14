<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class UserFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User
 */
abstract class UserFieldDescriptionBase extends FieldDescriptionBase
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
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'function',
        ];
    }
}
