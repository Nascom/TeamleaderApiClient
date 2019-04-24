<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Contact\ContactListView;

/**
 * Class ContactListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact
 */
class ContactListViewFieldDescription extends ContactFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'primary_address' => ['target_class' => Address::class],
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
        return ContactListView::class;
    }
}
