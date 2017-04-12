<?php

namespace spec\Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClientInterface;
use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;
use Nascom\TeamleaderApiClient\Request\RequestInterface;
use Nascom\TeamleaderApiClient\Response\Response;
use Nascom\TeamleaderApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiClientSpec extends ObjectBehavior
{
    protected $parameters = [
        'api_group' => '12345',
        'api_secret' => 'XXXXXXXX',
    ];

    function let(HttpClientInterface $client)
    {
        $this->beConstructedWith($client, $this->parameters);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ApiClient::class);
    }

    function it_implements_api_client_interface()
    {
        $this->shouldImplement(ApiClientInterface::class);
    }

    function it_can_handle_requests(
        HttpClientInterface $client,
        RequestInterface $request
    ) {
        $this->createRequest($request, 'POST', '/uri');
        $client->request('POST', '/uri', Argument::any())
            ->shouldBeCalled()
            ->willReturn('{list of projects}');

        $this->handle($request)
            ->shouldImplement(ResponseInterface::class);
        $this->handle($request)
            ->shouldBeLike(new Response('{list of projects}'));
    }

    function its_default_options_can_be_overridden(
        HttpClientInterface $client,
        RequestInterface $request
    ) {
        $override = [
            'connect_timeout' => 5.0,
        ];
        $this->beConstructedWith($client, $this->parameters, $override);

        $this->getOptions($request)
            ->shouldHaveKeyWithValue('connect_timeout', 5.0);
    }

    function it_can_be_passed_extra_options(
        HttpClientInterface $client,
        RequestInterface $request
    ) {
        $extraOptions = [
            'some_extra_option' => 'some_value',
        ];

        $this->beConstructedWith($client, $this->parameters, $extraOptions);
        $this->getOptions($request)
            ->shouldHaveKeyWithValue('some_extra_option', 'some_value');
    }

    function it_merges_request_options(RequestInterface $request)
    {
        $this->createRequest(
            $request,
            'POST',
            '/uri',
            [],
            ['some_option' => 'some_value']
        );

        $this->getOptions($request)['form_params']
            ->shouldHaveKeyWithValue('some_option','some_value');
    }

    function it_merges_request_parameters(RequestInterface $request)
    {
        $this->createRequest(
            $request,
            'POST',
            '/uri',
            ['some_parameter' => 'some_value']
        );

        $this->getOptions($request)['query']
            ->shouldHaveKeyWithValue('some_parameter','some_value');
    }

    private function createRequest(
        RequestInterface $request,
        $method,
        $uri,
        $parameters = [],
        $options = []
    ) {
        $request->getMethod()->willReturn($method);
        $request->getUri()->willReturn($uri);
        $request->getParameters()->willReturn($parameters);
        $request->getOptions()->willReturn($options);
    }
}
