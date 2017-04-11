<?php

namespace Nascom\TeamleaderApiClient\Request\Contact;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListContactCompanyRelationsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Contact
 */
class ListContactCompanyRelationsRequest extends AbstractPostRequest
{
    /**
     * ListContactCompanyRelationsRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param array $options
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
        return 'getContactCompanyRelations.php';
    }
}
