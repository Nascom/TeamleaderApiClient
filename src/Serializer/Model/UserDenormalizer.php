<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Model\User;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class UserDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model
 */
class UserDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {
        $data = $data['data'];

        $user = new User();
        $user->setId($data['id']);
        $user->setFirstName($data['first_name']);
        $user->setLastName($data['last_name']);
        $user->setTimezone($data['time_zone']);
        $user->setFunction($data['function']);
        $user->setLanguage($data['language']);
        $user->setEmail($data['email']);

        $account = $this->denormalizer->denormalize(
            $data['account'],
            Account::class
        );
        $user->setAccount($account);

        $telephones = $this->denormalizer->denormalize(
            $data['telephones'],
            Telephone::class . '[]'
        );
        $user->setTelephones($telephones);

        return $user;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === User::class;
    }
}
