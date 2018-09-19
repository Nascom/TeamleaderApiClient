<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Filter;

use Nascom\TeamleaderApiClient\Model\Aggregate\Email;

/**
 * Class ContactFilter
 *
 * @package Nascom\TeamleaderApiClient\Request\Filter
 */
class ContactFilter implements FilterInterface
{
    /**
     * @var array
     */
    private $filters = [];

    /**
     * @param Email $email
     * @return $this
     */
    public function setEmail(Email $email)
    {
        $this->filters['email']['type'] = $email->getType();
        $this->filters['email']['email'] = $email->getEmail();

        return $this;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function addId($id)
    {
        $this->filters['ids'][] = $id;

        return $this;
    }

    /**
     * @param string[] $ids
     * @return $this
     */
    public function setIds(array $ids)
    {
        $this->filters['ids'] = $ids;

        return $this;
    }

    /**
     * @param string $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->filters['term'] = $term;

        return $this;
    }

    /**
     * @param string $updatedSince
     * @return $this
     */
    public function setUpdatedSince($updatedSince)
    {
        $this->filters['updated_since'] = $updatedSince;

        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function addTag($tag)
    {
        $this->filters['tags'][] = $tag;

        return $this;
    }

    /**
     * @param string[] $tags
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->filters['tags'] = $tags;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return $this->filters;
    }
}
