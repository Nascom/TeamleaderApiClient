<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCompany;
use Nascom\TeamleaderApiClient\Model\Company\Company;
use Nascom\TeamleaderApiClient\Model\Company\CompanyListView;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesAddRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesDeleteRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesInfoRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesListRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesTagRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesUntagRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesUpdateRequest;

/**
 * Class CompanyRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class CompanyRepository extends RepositoryBase
{
    /**
     * @param string $id
     *
     * @return Company
     * @throws \Http\Client\Exception
     */
    public function getCompany($id)
    {
        $request = new CompaniesInfoRequest($id);

        return $this->handleRequest(
            $request,
            Company::class
        );
    }

    /**
     * @param array $filters
     * @param array $page
     * @param array $sort
     *
     * @return CompanyListView[]
     * @throws \Http\Client\Exception
     */
    public function listCompanies(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new CompaniesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            CompanyListView::class . '[]'
        );
    }

    /**
     * @param Company $company
     *
     * @return LinkedCompany
     * @throws \Http\Client\Exception
     */
    public function addCompany(Company $company)
    {
        $request = new CompaniesAddRequest($this->normalize($company));

        return $this->handleRequest(
            $request,
            LinkedCompany::class
        );
    }

    /**
     * @param Company $company
     *
     * @throws \Http\Client\Exception
     */
    public function updateCompany(Company $company)
    {
        $request = new CompaniesUpdateRequest($this->normalize($company));

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     *
     * @throws \Http\Client\Exception
     */
    public function deleteCompany($id)
    {
        $request = new CompaniesDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param array $tags
     *
     * @throws \Http\Client\Exception
     */
    public function tagCompany($id, array $tags)
    {
        $request = new CompaniesTagRequest($id, $tags);

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param array $tags
     *
     * @throws \Http\Client\Exception
     */
    public function untagCompany($id, array $tags)
    {
        $request = new CompaniesUntagRequest($id, $tags);

        $this->apiClient->handle($request);
    }
}
