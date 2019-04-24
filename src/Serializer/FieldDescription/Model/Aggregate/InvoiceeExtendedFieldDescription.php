<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceeExtended;

/**
 * Class InvoiceeExtendedFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class InvoiceeExtendedFieldDescription extends InvoiceeFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return array_merge(
            parent::getFieldMapping(),
            [
                'email',
                'national_identification_number',
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return InvoiceeExtended::class;
    }
}
