<?php

namespace Nascom\TeamleaderApiClient\Model\Tag;

/**
 * Class Tag
 * @package Nascom\TeamleaderApiClient\Model\Tag
 */
class Tag
{
    /**
     * @var string
     */
    private $tag;

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
}
