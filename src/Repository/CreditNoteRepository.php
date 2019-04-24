<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedCreditNote;
use Nascom\TeamleaderApiClient\Model\CreditNote\CreditNote;
use Nascom\TeamleaderApiClient\Model\CreditNote\CreditNoteListView;
use Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes\CreditNotesDownloadRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes\CreditNotesInfoRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes\CreditNotesListRequest;

/**
 * Class CreditNoteRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class CreditNoteRepository extends RepositoryBase
{
    /**
     * @param array $filters
     * @param array $page
     * @param array $sort
     *
     * @return CreditNoteListView[]
     * @throws \Http\Client\Exception
     */
    public function listCreditNotes(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new CreditNotesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            CreditNoteListView::class . '[]'
        );
    }

    /**
     * @param string $id
     *
     * @return CreditNote
     * @throws \Http\Client\Exception
     */
    public function getCreditNote($id)
    {
        $request = new CreditNotesInfoRequest($id);

        return $this->handleRequest(
            $request,
            CreditNote::class
        );
    }

    /**
     * @param string $id
     * @param string $format
     *
     * @return DownloadedCreditNote
     * @throws \Http\Client\Exception
     */
    public function downloadCreditNote($id, $format)
    {
        $request = new CreditNotesDownloadRequest($id, $format);

        return $this->handleRequest(
            $request,
            DownloadedCreditNote::class
        );
    }
}
