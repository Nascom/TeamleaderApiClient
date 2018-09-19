<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Model\Contact\Contact;

/**
 * Class ContactDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Contact
 */
class ContactDenormalizer extends ContactDenormalizerBase
{
    /**
     * @inheritdoc
     */
    protected function getTargetClass()
    {
        return Contact::class;
    }

    /**
     * @inheritdoc
     */
    protected function prepareData($data)
    {
        $data = parent::prepareData($data);

        $data['companies'] = ['@todo'];

        $data['addresses'] = $this->denormalizer->denormalize(
            $data['addresses'],
            AddressWithType::class . '[]'
        );

        return $data;
    }
}

