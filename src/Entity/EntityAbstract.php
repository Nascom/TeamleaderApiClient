<?php
namespace Nascom\TeamleaderApiClient\Entity;

use JsonSerializable;

/**
 * Class Email
 *
 * @package Nascom\TeamleaderApiClient\Entity
 */
class EntityAbstract implements JsonSerializable
{
    public function jsonSerialize()
    {
        return [];
    }
}
