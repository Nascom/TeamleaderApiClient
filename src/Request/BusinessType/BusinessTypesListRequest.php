<?php
namespace Nascom\TeamleaderApiClient\Request\BusinessType;

use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Nascom\TeamleaderApiClient\Attributes\ContactFilter;
use Nascom\TeamleaderApiClient\Attributes\Page;
use Nascom\TeamleaderApiClient\Attributes\Sort;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Request\AbstractRequest;

/**
 * Class BusinessTypesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
class BusinessTypesListRequest extends AbstractRequest
{
    /**
     * ContactsListRequest constructor.
     */
    public function __construct()
    {
        $this->setUri(ApiClient::BASE_API_URL . 'businessTypes.list');
        $this->request = MessageFactoryDiscovery::find()->createRequest('POST',  $this->uri);
    }

    /**
     * @param $country
     */
    public function setCountry($country)
    {
        $this->requestBody['country'] = $country;
    }

}
