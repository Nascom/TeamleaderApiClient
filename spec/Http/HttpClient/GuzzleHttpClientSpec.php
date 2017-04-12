<?php

namespace spec\Nascom\TeamleaderApiClient\Http\HttpClient;

use GuzzleHttp\Client;
use Nascom\TeamleaderApiClient\Http\HttpClient\GuzzleHttpClient;
use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GuzzleHttpClientSpec extends ObjectBehavior
{
    function let()
    {
        $guzzleClient = new Client(['base_uri' => 'https://www.teamleader.be/api/']);
        $this->beConstructedWith($guzzleClient);
    }

    function it_implements_http_client_interface()
    {
        $this->shouldImplement(HttpClientInterface::class);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(GuzzleHttpClient::class);
    }
}
