<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ContactsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsListRequest extends GetRequest implements FilterInterface, PageInterface, SortInterface
{
    use MultipleMethodsTrait, FilterTrait, SortTrait, PageTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.list';
    }
}
