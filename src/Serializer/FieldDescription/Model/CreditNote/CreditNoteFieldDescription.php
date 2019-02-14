<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote;

use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\CreditNote\CreditNote;

/**
 * Class CreditNoteFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote
 */
class CreditNoteFieldDescription extends CreditNoteFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'grouped_lines' => ['target_class' => GroupedLine::class.'[]'],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return CreditNote::class;
    }
}
