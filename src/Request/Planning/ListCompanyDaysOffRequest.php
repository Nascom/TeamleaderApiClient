<?php

namespace Nascom\TeamleaderApiClient\Request\Planning;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListCompanyDaysOffrequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Planning
 */
class ListCompanyDaysOffRequest extends AbstractPostRequest
{
    /**
     * ListCompanyDaysOffrequest constructor.
     *
     * @param $year
     * @param array $options
     */
    public function __construct($year, array $options = [])
    {
        $this->options = $options;
        $this->setYear($year);
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
        return 'getDaysOff.php';
    }
}
