<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User;

use Nascom\TeamleaderApiClient\Model\User\UserListView;

/**
 * Class UserListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\User
 */
class UserListViewFieldDescription extends UserFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return UserListView::class;
    }
}
