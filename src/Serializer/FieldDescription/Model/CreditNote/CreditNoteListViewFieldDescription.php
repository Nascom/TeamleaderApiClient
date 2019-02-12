<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote;

use Nascom\TeamleaderApiClient\Model\CreditNote\CreditNoteListView;

/**
 * Class CreditNoteListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote
 */
class CreditNoteListViewFieldDescription extends CreditNoteFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return CreditNoteListView::class;
    }
}
