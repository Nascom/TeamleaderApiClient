<?php

namespace spec\Nascom\TeamleaderApiClient\Http\HttpClient;

use GuzzleHttp\ClientInterface;
use Nascom\TeamleaderApiClient\Http\HttpClient\GuzzleHttpClient;
use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;
use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class GuzzleHttpClientSpec extends ObjectBehavior
{
    function let(ClientInterface $guzzleClient)
    {
        $guzzleClient->getConfig('base_uri')->willReturn(
            'https://www.teamleader.be/api/'
        );
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

    function it_should_execute_requests_with_the_guzzle_client(
        ClientInterface $guzzleClient,
        ResponseInterface $response,
        StreamInterface $message
    ) {
        $message->getContents()->shouldBeCalled()->willReturn('API RESULT');
        $response->getBody()->shouldBeCalled()->willReturn($message);
        $guzzleClient->request('POST', '/', ['id' => 1])
            ->shouldBeCalled()
            ->willReturn($response);

        $this->request('POST', '/', ['id' => 1])->shouldReturn('API RESULT');
    }
}
