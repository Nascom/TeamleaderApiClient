<?php

namespace Nascom\TeamleaderApiClient\Request\User;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListUsersRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\User
 */
class ListUsersRequest extends AbstractPostRequest
{
    /**
     * ListUsersRequest constructor.
     *
     * @param array $options
     *   Optional parameters:
     *   - show_inactive_users
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getUsers.php';
    }
}
