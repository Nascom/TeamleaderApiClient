<?php
namespace Nascom\TeamleaderApiClient\Entity;

use Nascom\TeamleaderApiClient\Attributes\Entity;

/**
 * Class Telephone
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class Telephone extends Entity
{

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        parent::__construct($array);
    }
}
