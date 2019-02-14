<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Addresses;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class LevelTwoAreasListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Addresses
 */
class LevelTwoAreasListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * LevelTwoAreasListRequest constructor.
     *
     * @param string $country
     * @param string|null $language
     */
    public function __construct($country, $language = null)
    {
        $this->body['country'] = $country;

        if ($language != null) {
            $this->body['language'] = $language;
        }
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'levelTwoAreas.list';
    }
}
