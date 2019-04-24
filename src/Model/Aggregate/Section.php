<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Section
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Section
{
    /**
     * @var string
     */
    private $title;

    /**
     * Section constructor.
     * @param string|null $title
     */
    public function __construct($title = null)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
