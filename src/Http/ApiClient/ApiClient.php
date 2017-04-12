<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;
use Nascom\TeamleaderApiClient\Request\RequestInterface;
use Nascom\TeamleaderApiClient\Response\Response;

/**
 * Class ApiClient
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
class ApiClient implements ApiClientInterface
{
    /**
     * @var HttpClientInterface
     */
    protected $client;

    /**
     * @var array
     */
    protected $teamleaderApiParameters;

    /**
     * @var array
     */
    protected $defaultOptions = [
        'connect_timeout' => 3.0,
        'headers' => [
            'Accept' => 'application/json',
        ]
    ];

    /**
     * ApiClient constructor.
     *
     * @param HttpClientInterface $client
     * @param $teamleaderApiParameters
     * @param array $defaultOptions
     */
    public function __construct
    (
        HttpClientInterface $client,
        $teamleaderApiParameters,
        array $defaultOptions = []
    )
    {
        $this->client = $client;
        $this->teamleaderApiParameters = $teamleaderApiParameters;
        $this->defaultOptions = array_merge($this->defaultOptions, $defaultOptions);
    }

    /**
     * @inheritdoc
     */
    public function handle(RequestInterface $request)
    {
        $response = $this->client->request(
            $request->getMethod(),
            $request->getUri(),
            $this->getOptions($request)
        );

        return new Response($response);
    }

    /**
     * @param RequestInterface $request
     * @return array
     */
    public function getOptions(RequestInterface $request)
    {
        return $this->mergeOptions($this->getDefaultOptions(), $request);
    }

    /**
     * Merges the default options with the request options.
     *
     * @param array $options
     * @param RequestInterface $request
     * @return array
     */
    protected function mergeOptions(array $options, RequestInterface $request)
    {
        $options['form_params']['api_group'] = $this->teamleaderApiParameters['api_group'];
        $options['form_params']['api_secret'] = $this->teamleaderApiParameters['api_secret'];

        if (!empty($request->getParameters())) {
            $options['query'] = array_merge(
                isset($options['query']) ? $options['query'] : [],
                $request->getParameters()
            );
        }

        if (!empty($request->getOptions())) {
            $options['form_params'] = array_merge(
                $options['form_params'],
                $request->getOptions()
            );
        }

        return $options;
    }

    /**
     * Combines some sensible default options with optional provided options.
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        return $this->defaultOptions;
    }
}
