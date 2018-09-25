<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription;

/**
 * Interface FieldDescriptionInterface
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription
 */
interface FieldDescriptionInterface
{
    /**
     * @return Field[]
     */
    public function getFields();

    /**
     * @return string
     */
    public function getTargetClass();
}
