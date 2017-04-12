<?php

namespace spec\Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Http\HttpClient\GuzzleHttpClient;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiClientSpec extends ObjectBehavior
{
    function let(GuzzleHttpClient $httpClient)
    {
        $this->beConstructedWith($httpClient, []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ApiClient::class);
    }
}
