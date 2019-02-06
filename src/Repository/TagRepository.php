<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Tag\Tag;
use Nascom\TeamleaderApiClient\Request\CRM\Tags\TagsListRequest;

/**
 * Class TagRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class TagRepository extends RepositoryBase
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function listTags()
    {
        $request = new TagsListRequest();

        return $this->handleRequest($request, Tag::class.'[]');
    }
}
