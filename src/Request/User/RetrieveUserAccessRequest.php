<?php

namespace Nascom\TeamleaderApiClient\Request\User;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveUserAccessRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\User
 */
class RetrieveUserAccessRequest extends AbstractPostRequest
{
    /**
     * RetrieveUserAccessRequest constructor.
     *
     * @param $user_id
     * @param array $options
     */
    public function __construct($user_id, array $options = [])
    {
        $this->options = $options;
        $this->setUserId($user_id);
    }

    /**
     * @param $user_id
     */
    public function setUserId($user_id)
    {
        $this->options['user_id'] = $user_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getUserAccess.php';
    }
}
