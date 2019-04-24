<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedQuotation;
use Nascom\TeamleaderApiClient\Model\Quotation\Quotation;
use Nascom\TeamleaderApiClient\Request\Deals\Quotations\QuotationsDownloadRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Quotations\QuotationsInfoRequest;

/**
 * Class QuotationRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class QuotationRepository extends RepositoryBase
{
    /**
     * @param string $id
     *
     * @return Quotation
     * @throws \Http\Client\Exception
     */
    public function getQuotation($id)
    {
        $request = new QuotationsInfoRequest($id);

        return $this->handleRequest(
            $request,
            Quotation::class
        );
    }

    /**
     * @param string $id
     * @param string $format
     *
     * @return DownloadedQuotation
     * @throws \Http\Client\Exception
     */
    public function downloadQuotation($id, $format)
    {
        $request = new QuotationsDownloadRequest($id, $format);

        return $this->handleRequest(
            $request,
            DownloadedQuotation::class
        );
    }
}
