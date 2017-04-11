<?php

namespace Nascom\TeamleaderApiClient\Request\Planning;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListUserDaysOffRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Planning
 */
class ListUserDaysOffRequest extends AbstractPostRequest
{
    /**
     * ListUserDaysOffRequest constructor.
     *
     * @param $user_id
     * @param $year
     * @param array $options
     */
    public function __construct($user_id, $year, array $options = [])
    {
        $this->options = $options;
        $this->setUserId($user_id);
        $this->setYear($year);
    }

    /**
     * @param $user_id
     */
    public function setUserId($user_id)
    {
        $this->options['user_id'] = $user_id;
    }

    /**
     * @param $year
     */
    public function setYear($year)
    {
        $this->options['year'] = $year;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getDaysOffByUser.php';
    }
}
