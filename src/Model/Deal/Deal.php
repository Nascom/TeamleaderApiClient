<?php

namespace Nascom\TeamleaderApiClient\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\CustomField;
use Nascom\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use Nascom\TeamleaderApiClient\Model\Aggregate\Quotation;

/**
 * Class Deal
 * @package Nascom\TeamleaderApiClient\Model\Deal
 */
class Deal extends DealBase
{
    /**
     * @var PhaseHistory
     */
    private $phaseHistory = [];

    /**
     * @var Quotation[]
     */
    private $quotations;

    /**
     * @var CustomField
     */
    private $customFields = [];
}
