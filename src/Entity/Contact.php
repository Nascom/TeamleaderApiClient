<?php
namespace Nascom\TeamleaderApiClient\Entity;

use Nascom\TeamleaderApiClient\Entity\Entity;

/**
 * Class Email
 *
 * @package Nascom\TeamleaderApiClient\Entity
 */
class Contact extends Entity
{

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        parent::__construct($array);
    }


}
