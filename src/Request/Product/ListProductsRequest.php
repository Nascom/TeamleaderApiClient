<?php

namespace Nascom\TeamleaderApiClient\Request\Product;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListProductsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Product
 */
class ListProductsRequest extends AbstractPostRequest
{
    /**
     * ListProductsRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param array $options
     *   Optional parameters:
     *   - searchby
     *   - modifiedsince
     */
    public function __construct($amount, $pageno, array $options = [])
    {
        $this->options = $options;
        $this->setAmount($amount);
        $this->setPageno($pageno);
    }

    /**
     * @param $amount
     */
    public function setAmount($amount)
    {
        $this->options['amount'] = $amount;
    }

    /**
     * @param $pageno
     */
    public function setPageno($pageno)
    {
        $this->options['pageno'] = $pageno;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getProducts.php';
    }
}
