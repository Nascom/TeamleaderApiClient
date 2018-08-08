<?php
namespace Nascom\TeamleaderApiClient\Request;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use http\Env\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

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
     * @var \Psr\Http\Message\StreamInterface
     */
    protected $requestBody;

    /**
     * @var string
     */
    protected $uri = '';

    /**
     * abstractRequest constructor.
     */
    public function __construct()
    {
        $this->requestBody = StreamFactoryDiscovery::find()->createStream();
    }

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

}
