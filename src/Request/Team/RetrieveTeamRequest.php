<?php

namespace Nascom\TeamleaderApiClient\Request\Team;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveTeamRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Team
 */
class RetrieveTeamRequest extends AbstractPostRequest
{
    /**
     * RetrieveTeamRequest constructor.
     *
     * @param $team_id
     * @param array $options
     */
    public function __construct($team_id, array $options = [])
    {
        $this->options = $options;
        $this->setTeamId($team_id);
    }

    /**
     * @param $team_id
     */
    public function setTeamId($team_id)
    {
        $this->options['team_id'] = $team_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTeam.php';
    }
}
