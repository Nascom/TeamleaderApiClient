<?php

namespace Nascom\TeamleaderApiClient\Attributes;

use JsonSerializable;

/**
 * Class ContactFilter
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class ContactFilter implements JsonSerializable
{

    /**
     * @var Email $email
     */
    protected $email;

    /**
     * @var array
     */
    protected $ids;

    /**
     * @var string
     */
    protected $term;

    /**
     * @var string
     */
    protected $updated_since;

    /**
     * @var array
     */
    protected $tags;

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param array $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     */
    public function setTerm($term)
    {
        $this->term = $term;
    }

    /**
     * @return string
     */
    public function getUpdatedSince()
    {
        return $this->updated_since;
    }

    /**
     * @param string $updated_since
     */
    public function setUpdatedSince($updated_since)
    {
        $this->updated_since = $updated_since;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'email' => $this->email,
            'ids' => $this->ids,
            'term' => $this->term,
            'updated_since' => $this->updated_since,
            'tags' => $this->tags,
        ]);
    }

}
