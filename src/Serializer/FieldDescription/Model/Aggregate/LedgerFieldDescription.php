<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Ledger;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LedgerFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LedgerFieldDescription extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'department' => ['target_class' => LinkedDepartment::class],
            'ledger_account_number',
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Ledger::class;
    }
}
