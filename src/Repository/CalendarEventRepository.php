<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedEvent;
use Nascom\TeamleaderApiClient\Model\CalendarEvents\CalendarEvent;
use Nascom\TeamleaderApiClient\Model\CalendarEvents\CalendarEventListView;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsCancelRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsCreateRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsListRequest;
use Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents\CalendarEventsUpdateRequest;

/**
 * Class CalendarEventRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class CalendarEventRepository extends RepositoryBase
{
    /**
     * @param string $id
     * @return CalendarEvent
     * @throws \Http\Client\Exception
     */
    public function getCalendarEvent($id)
    {
        $request = new CalendarEventsInfoRequest($id);

        return $this->handleRequest(
            $request,
            CalendarEvent::class
        );
    }

    /**
     * @return CalendarEventListView[]
     * @throws \Http\Client\Exception
     */
    public function listCalendarEvents()
    {
        $request = new CalendarEventsListRequest();

        return $this->handleRequest(
            $request,
            CalendarEventListView::class.'[]'
        );
    }

    /**
     * @param CalendarEvent $calendarEvent
     * @return LinkedEvent
     * @throws \Http\Client\Exception
     */
    public function addCalendarEvent(CalendarEvent $calendarEvent)
    {
        $request = new CalendarEventsCreateRequest($this->normalize($calendarEvent));

        return $this->handleRequest(
            $request,
            LinkedEvent::class
        );
    }

    /**
     * @param CalendarEvent $calendarEvent
     * @throws \Http\Client\Exception
     */
    public function updateCalendarEvent(CalendarEvent $calendarEvent)
    {
        $request = new CalendarEventsUpdateRequest($this->normalize($calendarEvent));

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function cancelCalendarEvent($id)
    {
        $request = new CalendarEventsCancelRequest($id);

        $this->apiClient->handle($request);
    }
}
