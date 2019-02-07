<?php

namespace Nascom\TeamleaderApiClient;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClientInterface;
use Nascom\TeamleaderApiClient\Repository\BusinessTypeRepository;
use Nascom\TeamleaderApiClient\Repository\CompanyRepository;
use Nascom\TeamleaderApiClient\Repository\ContactRepository;
use Nascom\TeamleaderApiClient\Repository\CustomFieldDefinitionRepository;
use Nascom\TeamleaderApiClient\Repository\DepartmentRepository;
use Nascom\TeamleaderApiClient\Repository\TagRepository;
use Nascom\TeamleaderApiClient\Repository\UserRepository;
use Nascom\TeamleaderApiClient\Repository\WorkTypesRepository;
use Nascom\TeamleaderApiClient\Request\CRM\BusinessTypes\BusinessTypesListRequest;
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
    public function departments() {
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
    public function customFieldDefinition() {
        return new CustomFieldDefinitionRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return WorkTypesRepository
     */
    public function workTypes() {
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
    public function companies() {
        return new CompanyRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return BusinessTypeRepository
     */
    public function businessTypes() {
        return new BusinessTypeRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return TagRepository
     */
    public function tags() {
        return new TagRepository($this->apiClient, $this->serializer);
    }
}
