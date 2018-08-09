<?php
namespace Nascom\TeamleaderApiClient\Entity;

/**
 * Class Telephone
 *
 * @package Nascom\TeamleaderApiClient\Entity
 */
class Email extends Entity
{
    /**
     * @return string
     */
    public function getType()
    {
        return $this->getEntityValue('type', '');
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->setEntityValue('type', $type);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getEntityValue('email', '');
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->setEntityValue('email', $email);
    }
}
