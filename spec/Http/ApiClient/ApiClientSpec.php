<?php

namespace spec\Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClientInterface;
use Nascom\TeamleaderApiClient\Http\HttpClient\GuzzleHttpClient;
use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;
use Nascom\TeamleaderApiClient\Request\Project\ListProjectsRequest;
use Nascom\TeamleaderApiClient\Response\Response;
use Nascom\TeamleaderApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Promise\ReturnArgumentPromise;

class ApiClientSpec extends ObjectBehavior
{
    protected $parameters = [
        'api_group' => '12345',
        'api_secret' => 'XXXXXXXX'
    ];

    function let(GuzzleHttpClient $httpClient)
    {
        $this->beConstructedWith($httpClient, $this->parameters);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ApiClient::class);
    }

    function it_implements_api_client_interface()
    {
        $this->shouldImplement(ApiClientInterface::class);
    }

    function it_can_handle_requests($client)
    {
        $projectsRequest = new ListProjectsRequest(1, 0);

        $client->beADoubleOf(HttpClientInterface::class);
        $client->request(
            $projectsRequest->getMethod(),
            $projectsRequest->getUri(),
            Argument::any()
        )->willReturn('{list of projects}');

        $this->beConstructedWith($client, $this->parameters);

        $this->handle($projectsRequest)->shouldImplement(ResponseInterface::class);
        $this->handle($projectsRequest)->shouldBeLike(new Response('{list of projects}'));
    }

    function its_default_options_can_be_overriden(GuzzleHttpClient $client)
    {
        $projectsRequest = new ListProjectsRequest(1, 0);
        $override = [
            'connect_timeout' => 5.0
        ];

        $this->beConstructedWith($client, $this->parameters, $override);
        $this->getOptions($projectsRequest)->shouldHaveKeyWithValue('connect_timeout', 5.0);
    }

    function it_can_be_passed_extra_options(GuzzleHttpClient $client)
    {
        $projectsRequest = new ListProjectsRequest(1, 0);
        $extraOptions = [
            'some_extra_option' => 'some_value'
        ];

        $this->beConstructedWith($client, $this->parameters, $extraOptions);
        $this->getOptions($projectsRequest)->shouldHaveKeyWithValue('some_extra_option', 'some_value');
    }
}
