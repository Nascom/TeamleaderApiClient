<?php

namespace Nascom\TeamleaderApiClient\Model\ProductCategory;

use Nascom\TeamleaderApiClient\Model\Aggregate\Ledger;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ProductCategoryBase
 *
 * @package Nascom\TeamleaderApiClient\Model\ProductCategory
 */
abstract class ProductCategoryBase extends ModelBase
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Ledger[]
     */
    private $ledgers;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Ledger[]
     */
    public function getLedgers()
    {
        return $this->ledgers;
    }

    /**
     * @param Ledger[] $ledgers
     */
    public function setLedgers($ledgers)
    {
        $this->ledgers = $ledgers;
    }
}
