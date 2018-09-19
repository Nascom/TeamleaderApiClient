<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Serializer\DenormalizerBase;

/**
 * Class AddressDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Aggregate
 */
class AddressDenormalizer extends DenormalizerBase
{
    /**
     * @inheritdoc
     */
    protected function getTargetClass()
    {
        return Address::class;
    }
}
