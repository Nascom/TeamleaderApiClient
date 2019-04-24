<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Page;

/**
 * Trait PageTrait
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes\Page
 */
trait PageTrait
{
    /**
     * @var array
     */
    protected $page;

    /**
     * @param array $page
     */
    public function setPage(array $page = [])
    {
        $this->page = $page;
    }

    /**
     * @return array
     */
    public function getPage()
    {
        return $this->page;
    }
}
