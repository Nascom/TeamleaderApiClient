<?php

namespace Nascom\TeamleaderApiClient\Model\CreditNote;

use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;

/**
 * Class CreditNote
 *
 * @package Nascom\TeamleaderApiClient\Model\CreditNote
 */
class CreditNote extends CreditNoteBase
{
    /**
     * @var GroupedLine[]
     */
    private $groupedLines;

    /**
     * @return GroupedLine[]
     */
    public function getGroupedLines()
    {
        return $this->groupedLines;
    }

    /**
     * @param GroupedLine[] $groupedLines
     */
    public function setGroupedLines($groupedLines)
    {
        $this->groupedLines = $groupedLines;
    }
}
