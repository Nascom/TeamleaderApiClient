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
 * @package Nascom\TeamleaderApiClient\Repository
 */
class CreditNoteRepository extends RepositoryBase
{
    /**
     * @return CreditNoteListView
     * @throws \Http\Client\Exception
     */
    public function listCreditNotes()
    {
        return $this->handleRequest
        (
            new CreditNotesListRequest(),
            CreditNoteListView::class.'[]'
        );
    }

    /**
     * @param string $id
     * @return CreditNote
     * @throws \Http\Client\Exception
     */
    public function getCreditNote($id)
    {
        return $this->handleRequest
        (
            new CreditNotesInfoRequest($id),
            CreditNote::class
        );
    }

    /**
     * @param string $id
     * @param string $format
     * @return DownloadedCreditNote
     * @throws \Http\Client\Exception
     */
    public function downloadCreditNote($id, $format)
    {
        return $this->handleRequest
        (
            new CreditNotesDownloadRequest($id, $format),
            DownloadedCreditNote::class
        );
    }
}
