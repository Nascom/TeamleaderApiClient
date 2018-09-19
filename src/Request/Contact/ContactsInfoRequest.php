<?php
namespace Nascom\TeamleaderApiClient\Request\Contact;

use Http\Discovery\MessageFactoryDiscovery;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Request\AbstractRequest;

/**
 * Class ContactsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
class ContactsInfoRequest extends AbstractRequest
{
    /**
     * ContactsInfoRequest constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        if (!isset($id)) {
            throw new ApiException('Id is required for getting a contact.');
        }
        $this->setUri(ApiClient::BASE_API_URL . 'contacts.info');
        $this->request = MessageFactoryDiscovery::find()->createRequest('POST',  $this->uri);
        $this->setID($id);
    }

    /**
     * @param string $id
     */
    public function setID($id)
    {
        $this->requestBody['id'] = $id;
    }
}
