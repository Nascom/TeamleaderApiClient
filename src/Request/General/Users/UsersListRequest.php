<?php
/**
 * Created by PhpStorm.
 * User: yoeri
 * Date: 05.02.19
 * Time: 09:04
 */

namespace Nascom\TeamleaderApiClient\Request\General\Users;


use Nascom\TeamleaderApiClient\Request\GetRequest;

class UsersListRequest extends GetRequest
{

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'users.list';
    }
}
