<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class GroupedLine
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class GroupedLine
{
    /**
     * @var Section
     */
    private $section;

    /**
     * @var LineItem
     */
    private $lineItems = [];

    /**
     * @return Section
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param Section $section
     */
    public function setSection($section)
    {
        $this->section = $section;
    }

    /**
     * @return LineItem
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param LineItem $lineItems
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
    }
}
