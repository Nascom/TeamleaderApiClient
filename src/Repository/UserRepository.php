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

        return $this->handleRequest(
            $request,
            User::class
        );
    }

    /**
     * @param string $id
     *
     * @return User
     * @throws \Http\Client\Exception
     */
    public function getUser($id)
    {
        $request = new UsersInfoRequest($id);

        return $this->handleRequest(
            $request,
            User::class
        );
    }

    /**
     * @param array $filters
     * @param array $sort
     * @param array $page
     *
     * @return UserListView[]
     * @throws \Http\Client\Exception
     */
    public function listUsers(array $filters = [], array $sort = [], array $page = [])
    {
        $request = new UsersListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            UserListView::class . '[]'
        );
    }
}
