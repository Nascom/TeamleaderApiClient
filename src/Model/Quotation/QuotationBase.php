<?php

namespace Nascom\TeamleaderApiClient\Model\Quotation;

use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDeal;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class QuotationBase
 * @package Nascom\TeamleaderApiClient\Model\Quotation
 */
abstract class QuotationBase extends  ModelBase
{
    /**
     * @var LinkedDeal
     */
    private $deal;

    /**
     * @var GroupedLine
     */
    private $groupedLines = [];

    /**
     * @return LinkedDeal
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * @param LinkedDeal $deal
     */
    public function setDeal($deal)
    {
        $this->deal = $deal;
    }

    /**
     * @return GroupedLine
     */
    public function getGroupedLines()
    {
        return $this->groupedLines;
    }

    /**
     * @param GroupedLine $groupedLines
     */
    public function setGroupedLines($groupedLines)
    {
        $this->groupedLines = $groupedLines;
    }
}
