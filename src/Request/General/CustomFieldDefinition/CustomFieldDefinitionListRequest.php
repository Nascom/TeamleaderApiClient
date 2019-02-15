<?php

namespace Nascom\TeamleaderApiClient\Request\General\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CustomFieldDefinitionListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class CustomFieldDefinitionListRequest extends GetRequest implements PageInterface, SortInterface
{
    use MultipleMethodsTrait, PageTrait, SortTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'customFieldDefinitions.list';
    }
}
