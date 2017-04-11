<?php

namespace Nascom\TeamleaderApiClient\Request\Team;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListTeamsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Team
 */
class ListTeamsRequest extends AbstractPostRequest
{
    /**
     * ListTeamsRequest constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTeams.php';
    }
}
