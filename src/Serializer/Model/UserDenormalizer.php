<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Model\User;
use Nascom\TeamleaderApiClient\Serializer\DenormalizerBase;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;

/**
 * Class UserDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model
 */
class UserDenormalizer extends DenormalizerBase implements
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    protected function prepareData($data) {
        $data['account'] = $this->denormalizer->denormalize(
            $data['account'],
            Account::class
        );
        $data['telephones'] = $this->denormalizer->denormalize(
            $data['telephones'],
            Telephone::class . '[]'
        );

        return $data;
    }

    /**
     * @inheritdoc
     */
    protected function getTargetClass()
    {
        return User::class;
    }
}
