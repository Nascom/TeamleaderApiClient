<?php

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;

/**
 * Created by PhpStorm.
 * User: yoeri
 * Date: 04.02.19
 * Time: 14:53
 */
class DepartmentFieldDescription extends DepartmentFieldDescriptionBase {


    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'address' => ['target_class' => Address::class . '[]'],
            'emails' => ['target_class' => Email::class . '[]'],
            'telephones' => ['target_class' => Telephone::class . '[]'],
            'website',
            'iban',
            'bic',
            'fiscal_regime',
        ];

        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Department::class;
    }
}