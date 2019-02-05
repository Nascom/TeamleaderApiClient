<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Company\Company;
use Nascom\TeamleaderApiClient\Model\Company\CompanyListView;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesInfoRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesListRequest;

/**
 * Class CompanyRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class CompanyRepository extends RepositoryBase
{
    /**
     * @param string $id
     * @return Company
     * @throws \Http\Client\Exception
     */
    public function getCompany($id)
    {
        $request = new CompaniesInfoRequest($id);

        return $this->handleRequest($request, Company::class);
    }

    /**
     * @return CompanyListView
     * @throws \Http\Client\Exception
     */
    public function listCompanies()
    {
        $request = new CompaniesListRequest();

        return $this->handleRequest($request, CompanyListView::class.'[]');
    }
}
