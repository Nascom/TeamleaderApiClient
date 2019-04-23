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
     * @param array $page
     * @param array $sort
     *
     * @return TagListView[]
     * @throws \Http\Client\Exception
     */
    public function listTags(array $page = [], array $sort = [])
    {
        $request = new TagsListRequest();
        $request->setPage($page);
        $request->setSort($sort);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            TagListView::class . '[]'
        );
    }
}
