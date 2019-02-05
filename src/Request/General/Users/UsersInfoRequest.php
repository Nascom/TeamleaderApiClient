<?php
/**
 * Created by PhpStorm.
 * User: yoeri
 * Date: 05.02.19
 * Time: 09:04
 */

namespace Nascom\TeamleaderApiClient\Request\General\Users;


use Nascom\TeamleaderApiClient\Request\GetRequest;

class UsersInfoRequest extends GetRequest
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
        return 'users.info';
    }
}
