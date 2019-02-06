<?php

namespace Nascom\TeamleaderApiClient\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\EstimatedValue;
use Nascom\TeamleaderApiClient\Model\Aggregate\Lead;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\Aggregate\Source;

/**
 * Class DealBase
 * @package Nascom\TeamleaderApiClient\Model\Deal
 */
class DealBase
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $status;

    /**
     * @var Lead
     */
    private $lead = [];

    /**
     * @var Account TODO same properties ??
     */
    private $contactPerson = [];

    /**
     * @var LinkedDepartment
     */
    private $department = [];

    /**
     * @var EstimatedValue
     */
    private $estimatedValue = [];

    /**
     * @var string
     */
    private $estimatedClosingDate;

    /**
     * @var float
     */
    private $estimatedPropability;

    /**
     * @var Account
     */
    private $responsibleUser = [];

    /**
     * @var \DateTime
     */
    private $closedAt;

    /**
     * @var Source
     */
    private $source = [];

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $webUrl;

    // TODO getters & setters
}
