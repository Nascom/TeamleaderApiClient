<?php
namespace Nascom\TeamleaderApiClient\Request\Old_Contact;

use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Nascom\TeamleaderApiClient\Attributes\ContactFilter;
use Nascom\TeamleaderApiClient\Attributes\Page;
use Nascom\TeamleaderApiClient\Attributes\Sort;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Request\AbstractRequest;

/**
 * Class ContactsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
class ContactsListRequest extends AbstractRequest
{
    /**
     * ContactsListRequest constructor.
     */
    public function __construct()
    {
        $this->setUri(ApiClient::BASE_API_URL . 'contacts.list');
        $this->request = MessageFactoryDiscovery::find()->createRequest('POST',  $this->uri);
    }

    /**
     * @param ContactFilter $filter
     */
    public function setFilter(ContactFilter $filter)
    {
        $this->requestBody['filter'] = $filter;
    }

    /**
     * @param Sort[] $sorts
     */
    public function setSort($sorts)
    {
        $this->requestBody['sort'] = $sorts;
    }

    /**
     * @param Page $page
     */
    public function setPage($page)
    {
        $this->requestBody['page'] = $page;
    }



}
