<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class SendSaleToClientRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class SendSaleToClientRequest extends AbstractPostRequest
{
    /**
     * SendSaleToClientRequest constructor.
     *
     * @param $sale_id
     * @param $email
     * @param $subject
     * @param $message
     * @param array $options
     *   Optional parameters:
     *   - template_id
     */
    public function __construct($sale_id, $email, $subject, $message, array $options = [])
    {
        $this->options = $options;
        $this->setSaleId($sale_id);
        $this->setEmail($email);
        $this->setSubject($subject);
        $this->setMessage($message);
    }

    /**
     * @param $sale_id
     */
    public function setSaleId($sale_id)
    {
        $this->options['sale_id'] = $sale_id;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->options['email'] = $email;
    }

    /**
     * @param $subject
     */
    public function setSubject($subject)
    {
        $this->options['subject'] = $subject;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->options['message'] = $message;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'sendSaleToClient.php';
    }
}
