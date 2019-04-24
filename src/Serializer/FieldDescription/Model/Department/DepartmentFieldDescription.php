<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Department;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Model\Department\Department;

/**
 * Class DepartmentFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Department
 */
class DepartmentFieldDescription extends DepartmentFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'address' => ['target_class' => Address::class.'[]'],
            'emails' => ['target_class' => Email::class.'[]'],
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'website',
            'iban',
            'bic',
            'fiscal_regime',
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
        return Department::class;
    }
}
