<?php

namespace Nascom\TeamleaderApiClient\Repository;

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

    /**
     * @param Company $company
     * @throws \Http\Client\Exception
     */
    public function addCompany(Company $company)
    {
        $companyArray = $this->normalize($company);
        $contactAddRequest = new CompaniesAddRequest($companyArray);
        $this->apiClient->handle($contactAddRequest);
    }

    /**
     * @param Company $company
     * @throws \Http\Client\Exception
     */
    public function updateCompany(Company $company)
    {
        $companyArray = $this->normalize($company);
        $contactAddRequest = new CompaniesUpdateRequest($companyArray);
        $this->apiClient->handle($contactAddRequest);
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function deleteCompany($id) {
        $this->apiClient->handle(new CompaniesDeleteRequest($id));
    }

    /**
     * @param string $id
     * @param array $tags
     * @throws \Http\Client\Exception
     */
    public function tagCompany($id, array $tags) {
        $this->apiClient->handle(new CompaniesTagRequest($id, $tags));
    }

    /**
     * @param string $id
     * @param array $tags
     * @throws \Http\Client\Exception
     */
    public function untagCompany($id, array $tags) {
        $this->apiClient->handle(new CompaniesUntagRequest($id, $tags));
    }
}
