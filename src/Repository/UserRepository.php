<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\User\User;
use Nascom\TeamleaderApiClient\Model\User\UserListView;
use Nascom\TeamleaderApiClient\Request\General\Users\UsersInfoRequest;
use Nascom\TeamleaderApiClient\Request\General\Users\UsersListRequest;
use Nascom\TeamleaderApiClient\Request\General\Users\UsersMeRequest;

/**
 * Class UserRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class UserRepository extends RepositoryBase
{
    /**
     * @return User
     * @throws \Http\Client\Exception
     */
    public function me()
    {
        $request = new UsersMeRequest();

        return $this->handleRequest($request, User::class);
    }

    /**
     * @param string $id
     * @return User
     * @throws \Http\Client\Exception
     */
    public function info($id)
    {
        $request = new UsersInfoRequest($id);

        return $this->handleRequest($request, User::class);
    }

    /**
     * @return UserListView
     * @throws \Http\Client\Exception
     */
    public function listUsers()
    {
        $request = new UsersListRequest();

        return $this->handleRequest($request, UserListView::class.'[]');
    }
}
