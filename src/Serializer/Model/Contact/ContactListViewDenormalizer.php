<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Contact\ContactListView;

/**
 * Class ContactListViewDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Contact
 */
class ContactListViewDenormalizer extends ContactDenormalizerBase
{
    /**
     * @inheritdoc
     */
    protected function getTargetClass()
    {
        return ContactListView::class;
    }

    /**
     * @inheritdoc
     */
    protected function prepareData($data)
    {
        $data = parent::prepareData($data);
        $data['address'] = $this->denormalizer->denormalize(
            $data['address'],
            Address::class
        );
        $data['primary_address'] = $this->denormalizer->denormalize(
            $data['primary_address'],
            Address::class
        );

        return $data;
    }
}
