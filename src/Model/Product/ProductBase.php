<?php

namespace Nascom\TeamleaderApiClient\Model\Product;

use Nascom\TeamleaderApiClient\Model\Aggregate\Translation;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ProductBase
 *
 * @package Nascom\TeamleaderApiClient\Model\Product
 */
abstract class ProductBase extends ModelBase
{
    /**
     * @var Translation[]
     */
    private $translations;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @param Translation[] $translations
     */
    public function setTranslations($translations)
    {
        $this->translations = $translations;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }
}
