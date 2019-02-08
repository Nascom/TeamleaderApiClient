<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use Nascom\TeamleaderApiClient\Model\CalendarEvents\CalendarEvent;
use Nascom\TeamleaderApiClient\Model\CalendarEvents\CalendarEventListView;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsCancelRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsCreateRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsListRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsUpdateRequest;

/**
 * Class CalendarRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class CalendarRepository extends RepositoryBase
{
    /**
     * @param string $id
     * @return CalendarEvent
     * @throws \Http\Client\Exception
     */
    public function getCalendarEvent($id)
    {
        $request = new CalendarEventsInfoRequest($id);

        return $this->handleRequest($request, CalendarEvent::class);
    }

    /**
     * @return CalendarEventListView
     * @throws \Http\Client\Exception
     */
    public function listCalendarEvents()
    {
        $request = new CalendarEventsListRequest();

        return $this->handleRequest($request, CalendarEventListView::class.'[]');
    }

    /**
     * @param CalendarEvent $calendarEvent
     * @throws \Http\Client\Exception
     */
    public function addCalendarEvent(CalendarEvent $calendarEvent) {
        $calendarEventArray = $this->normalize($calendarEvent);

        $this->apiClient->handle(new CalendarEventsCreateRequest($calendarEventArray));
    }

    /**
     * @param CalendarEvent $calendarEvent
     * @throws \Http\Client\Exception
     */
    public function updateCalendarEvent(CalendarEvent $calendarEvent)
    {
        $calendarEventArray = $this->normalize($calendarEvent);

        $this->apiClient->handle(new CalendarEventsUpdateRequest($calendarEventArray));
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function cancelCalendarEvent($id)
    {
        $this->apiClient->handle(new CalendarEventsCancelRequest($id));
    }
}
