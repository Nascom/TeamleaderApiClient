<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedQuotation;
use Nascom\TeamleaderApiClient\Model\Quotation\Quotation;
use Nascom\TeamleaderApiClient\Request\Deals\Quotations\QuotationsDownloadRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Quotations\QuotationsInfoRequest;

/**
 * Class QuotationRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class QuotationRepository extends RepositoryBase
{
    /**
     * @param string $id
     * @return Quotation
     * @throws \Http\Client\Exception
     */
    public function getQuotation($id) {
        return $this->handleRequest(
            new QuotationsInfoRequest($id),
            Quotation::class
        );
    }

    public function downloadQuotation($id, $format) {
        return $this->handleRequest(
            new QuotationsDownloadRequest($id, $format),
            DownloadedQuotation::class
        );
    }
}
