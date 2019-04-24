<?php

namespace Nascom\TeamleaderApiClient\Model\Tag;

/**
 * Class TagBase
 *
 * @package Nascom\TeamleaderApiClient\Model\TagBase
 */
abstract class TagBase
{
    /**
     * @var string[]
     */
    private $tag;

    /**
     * @return string[]
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string[] $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
}
