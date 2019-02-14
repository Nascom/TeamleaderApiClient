<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinition;
use Nascom\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinitionListView;
use Nascom\TeamleaderApiClient\Request\General\CustomFieldDefinition\CustomFieldDefinitionInfoRequest;
use Nascom\TeamleaderApiClient\Request\General\CustomFieldDefinition\CustomFieldDefinitionListRequest;

/**
 * Class CustomFieldDefinitionRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class CustomFieldDefinitionRepository extends RepositoryBase
{
    /**
     * @param string $id
     * @return CustomFieldDefinition
     * @throws \Http\Client\Exception
     */
    public function getCustomFieldDefinition($id)
    {
        $request = new CustomFieldDefinitionInfoRequest($id);

        return $this->handleRequest(
            $request,
            CustomFieldDefinition::class
        );
    }

    /**
     * @return CustomFieldDefinitionListView[]
     * @throws \Http\Client\Exception
     */
    public function listCustomFieldDefinitions()
    {
        $request = new CustomFieldDefinitionListRequest();

        return $this->handleRequest(
            $request,
            CustomFieldDefinitionListView::class.'[]'
        );
    }
}
