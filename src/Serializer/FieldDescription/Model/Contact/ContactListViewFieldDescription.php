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
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'primary_address' => ['target_class' => Address::class],
        ];

        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return ContactListView::class;
    }
}
