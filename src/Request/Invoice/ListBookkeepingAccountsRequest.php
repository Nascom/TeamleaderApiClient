<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListBookkeepingAccountsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class ListBookkeepingAccountsRequest extends AbstractPostRequest
{
    /**
     * ListBookkeepingAccountsRequest constructor.
     *
     * @param $sys_department_id
     * @param array $options
     */
    public function __construct($sys_department_id, array $options = [])
    {
        $this->options = $options;
        $this->setSysDepartmentId($sys_department_id);
    }

    /**
     * @param $sys_department_id
     */
    public function setSysDepartmentId($sys_department_id)
    {
        $this->options['$sys_department_id'] = $sys_department_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getBookkeepingAccounts.php';
    }
}
