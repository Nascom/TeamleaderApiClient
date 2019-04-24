<?php

namespace Nascom\TeamleaderApiClient\Request\General\Users;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class UsersListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Users
 */
class UsersListRequest extends GetRequest implements FilterInterface, SortInterface, PageInterface
{
    use MultipleMethodsTrait, FilterTrait, SortTrait, PageTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'users.list';
    }
}
