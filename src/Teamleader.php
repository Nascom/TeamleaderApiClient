<?php

namespace Nascom\TeamleaderApiClient;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClientInterface;
use Nascom\TeamleaderApiClient\Repository\ActivityTypeRepository;
use Nascom\TeamleaderApiClient\Repository\BusinessTypeRepository;
use Nascom\TeamleaderApiClient\Repository\CalendarRepository;
use Nascom\TeamleaderApiClient\Repository\CompanyRepository;
use Nascom\TeamleaderApiClient\Repository\ContactRepository;
use Nascom\TeamleaderApiClient\Repository\CustomFieldDefinitionRepository;
use Nascom\TeamleaderApiClient\Repository\DealPhaseRepository;
use Nascom\TeamleaderApiClient\Repository\DealRepository;
use Nascom\TeamleaderApiClient\Repository\DealSourceRepository;
use Nascom\TeamleaderApiClient\Repository\DepartmentRepository;
use Nascom\TeamleaderApiClient\Repository\InvoiceRepository;
use Nascom\TeamleaderApiClient\Repository\QuotationRepository;
use Nascom\TeamleaderApiClient\Repository\TagRepository;
use Nascom\TeamleaderApiClient\Repository\TaxRateRepository;
use Nascom\TeamleaderApiClient\Repository\UserRepository;
use Nascom\TeamleaderApiClient\Repository\WithholdingTaxRateRepository;
use Nascom\TeamleaderApiClient\Repository\WorkTypesRepository;
use Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates\WithholdingTaxRatesListRequest;
use Nascom\TeamleaderApiClient\Serializer\SerializerFactory;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class Teamleader
 *
 * @package Nascom\TeamleaderApiClient
 */
class Teamleader
{
    /**
     * @var ApiClientInterface
     */
    private $apiClient;

    /**
     * @var SerializerInterface&NormalizerInterface
     */
    private $serializer;

    /**
     * Teamleader constructor.
     *
     * @param ApiClientInterface $apiClient
     * @param SerializerInterface&NormalizerInterface $serializer
     */
    public function __construct(
        ApiClientInterface $apiClient,
        SerializerInterface $serializer
    ) {
        $this->apiClient = $apiClient;
        $this->serializer = $serializer;
    }

    /**
     * @param ApiClientInterface $apiClient
     * @return Teamleader
     */
    public static function withDefaultSerializer(ApiClientInterface $apiClient)
    {
        return new static($apiClient, SerializerFactory::create());
    }

    /**
     * @return DepartmentRepository
     */
    public function departments()
    {
        return new DepartmentRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return UserRepository
     */
    public function users()
    {
        return new UserRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return CustomFieldDefinitionRepository
     */
    public function customFieldDefinition()
    {
        return new CustomFieldDefinitionRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return WorkTypesRepository
     */
    public function workTypes()
    {
        return new WorkTypesRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return ContactRepository
     */
    public function contacts()
    {
        return new ContactRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return CompanyRepository
     */
    public function companies()
    {
        return new CompanyRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return BusinessTypeRepository
     */
    public function businessTypes()
    {
        return new BusinessTypeRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return TagRepository
     */
    public function tags()
    {
        return new TagRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return DealRepository
     */
    public function deals()
    {
        return new DealRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return DealPhaseRepository
     */
    public function dealPhases()
    {
        return new DealPhaseRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return DealSourceRepository
     */
    public function dealSources()
    {
        return new DealSourceRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return QuotationRepository
     */
    public function quotations() {
        return new QuotationRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return CalendarRepository
     */
    public function calendarEvents() {
        return new CalendarRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return ActivityTypeRepository
     */
    public function activityTypes() {
        return new ActivityTypeRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return InvoiceRepository
     */
    public function invoices() {
        return new InvoiceRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return TaxRateRepository
     */
    public function taxRates() {
        return new TaxRateRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return WithholdingTaxRateRepository
     */
    public function withholdingTaxRates() {
        return new WithholdingTaxRateRepository($this->apiClient, $this->serializer);
    }
}
