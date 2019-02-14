<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Page;

/**
 * Interface PageInterface
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes\Page
 */
interface PageInterface
{
    /**
     * @param array $page
     */
    public function setPage(array $page = []);

    /**
     * @return array
     */
    public function getPage();
}
