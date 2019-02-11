<?php

namespace Nascom\TeamleaderApiClient\Model\User;

/**
 * Class User
 *
 * @package Nascom\TeamleaderApiClient\Model\User
 */
class User extends UserBase
{
    /**
     * @var string
     */
    private $timezone;

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

}
