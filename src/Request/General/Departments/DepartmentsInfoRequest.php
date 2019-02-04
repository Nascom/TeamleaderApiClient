<?php
/**
 * Created by PhpStorm.
 * User: yoeri
 * Date: 04.02.19
 * Time: 16:22
 */

namespace Nascom\TeamleaderApiClient\Request\General\Departments;


use Nascom\TeamleaderApiClient\Request\GetRequest;

class DepartmentsInfoRequest extends GetRequest
{
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'departments.info';
    }
}