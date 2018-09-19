<?php
namespace Nascom\TeamleaderApiClient\Attributes;

use JsonSerializable;

/**
 * Class Email
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class Email implements JsonSerializable
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'type' => $this->type,
            'email' => $this->email,
        ]);
    }
}
