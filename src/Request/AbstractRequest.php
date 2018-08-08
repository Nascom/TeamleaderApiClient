<?php
namespace Nascom\TeamleaderApiClient\Request;
use Http\Discovery\StreamFactoryDiscovery;
use Psr\Http\Message\RequestInterface;

/**
 * Class ListContactsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class AbstractRequest
{

    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * Body that will be encoded into json upon transmission to the API.
     * @var string|array
     */
    protected $requestBody;

    /**
     * @var string
     */
    protected $uri = '';

    /**
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestInterface $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string|array|null
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }

    /**
     * @param  @return string|array
     */
    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
    }
}
