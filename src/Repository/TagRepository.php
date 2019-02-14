<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Tag\TagListView;
use Nascom\TeamleaderApiClient\Request\CRM\Tags\TagsListRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TagRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class TagRepository extends RepositoryBase
{
    use MultipleMethodsTrait;

    /**
     * @return TagListView[]
     * @throws \Http\Client\Exception
     */
    public function listTags()
    {
        $request = new TagsListRequest();

        return $this->handleRequest(
            $request,
            TagListView::class.'[]'
        );
    }
}
