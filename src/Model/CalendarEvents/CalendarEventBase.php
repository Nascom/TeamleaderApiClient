<?php

namespace Nascom\TeamleaderApiClient\Model\CalendarEvents;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedActivityType;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTodo;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CalendarEventBase
 * @package Nascom\TeamleaderApiClient\Model\CalendarEvents
 */
abstract class CalendarEventBase extends ModelBase
{
    /**
     * @var Account
     */
    private $creator = [];

    /**
     * @var LinkedTodo
     */
    private $todo = [];

    /**
     * @var LinkedActivityType
     */
    private $activityType = [];

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $startsAt;

    /**
     * @var \DateTime
     */
    private $endsAt;

    /**
     * @var string
     */
    private $location;

    /**
     * @var LinkedContact[]
     */
    private $attendees = [];

    /**
     * @var LinkedCustomer[]
     */
    private $links = [];

    /**
     * @return Account
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param Account $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    /**
     * @return LinkedTodo
     */
    public function getTodo()
    {
        return $this->todo;
    }

    /**
     * @param LinkedTodo $todo
     */
    public function setTodo($todo)
    {
        $this->todo = $todo;
    }

    /**
     * @return LinkedActivityType
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * @param LinkedActivityType $activityType
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;
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

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @param \DateTime $startsAt
     */
    public function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @return \DateTime
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * @param \DateTime $endsAt
     */
    public function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;
    }

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
     * @return LinkedContact[]
     */
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * @param LinkedContact[] $attendees
     */
    public function setAttendees($attendees)
    {
        $this->attendees = $attendees;
    }

    /**
     * @return LinkedCustomer[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param LinkedCustomer[] $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }
}
