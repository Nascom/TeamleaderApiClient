<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class DownloadedCreditNote
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class DownloadedCreditNote
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var \DateTime
     */
    private $expires;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param \DateTime $expires
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
    }
}
