<?php
namespace Nascom\TeamleaderApiClient\Entity;

use Nascom\TeamleaderApiClient\Attributes\Entity;

/**
 * Class PaymentTerm
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class PaymentTerm extends Entity
{

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        parent::__construct($array);
    }
}
