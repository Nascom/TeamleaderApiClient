<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote;

use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\CreditNote\CreditNote;

/**
 * Class CreditNoteFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote
 */
class CreditNoteFieldDescription extends CreditNoteFieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return array_merge(
            parent::getFieldMapping(),
            [
                'grouped_lines' => ['target_class' => GroupedLine::class.'[]'],
            ]
        );
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return CreditNote::class;
    }
}
