<?php
namespace Nascom\TeamleaderApiClient\Request\Contact;

use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
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
     * @param $page
     * @param $filter
     * @param $sort
     * @todo Move filters to objects
     */
    public function __construct($page, $filter, $sort)
    {
        parent::__construct();
        $this->setUri(ApiClient::BASE_API_URL . 'contacts.list');
        $this->request = MessageFactoryDiscovery::find()->createRequest('POST',  $this->uri, [], $this->requestBody);
        if ($page !== null) {
            $this->setPage($page);
        }
        if ($filter !== null) {
            $this->setFilter($filter);
        }
        if ($sort !== null) {
            $this->setSort($sort);
        }
    }

    /**
     * @param array $filter
     * @todo Move it into an object?
     */
    public function setFilter($filter)
    {
        $request = json_decode($this->requestBody->getContents());
        $request['filter'] = $filter;
        // Creating a new one, as we can't empty the current one.
        $this->requestBody = StreamFactoryDiscovery::find()->createStream(json_encode($request));
        $this->request->withBody($this->requestBody);
    }

    /**
     * @param array $sort
     * @todo Move it into an object?
     */
    public function setSort($sort)
    {
        $request = json_decode($this->requestBody->getContents());
        $request['sort'] = $sort;
        // Creating a new one, as we can't empty the current one.
        $this->requestBody = StreamFactoryDiscovery::find()->createStream(json_encode($request));
        $this->request->withBody($this->requestBody);
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $request = json_decode($this->requestBody->getContents());
        $request['page'] = $page;
        // Creating a new one, as we can't empty the current one.
        $this->requestBody = StreamFactoryDiscovery::find()->createStream(json_encode($request));
        $this->request->withBody($this->requestBody);
    }

}
