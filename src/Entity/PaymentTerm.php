<?php
namespace Nascom\TeamleaderApiClient\Entity;

/**
 * Class PaymentTerm
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class PaymentTerm extends Entity
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
}
