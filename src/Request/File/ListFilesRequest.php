<?php

namespace Nascom\TeamleaderApiClient\Request\File;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListFilesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\File
 */
class ListFilesRequest extends AbstractPostRequest
{
    /**
     * ListFilesRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param $object_type
     * @param $object_id
     * @param array $options
     *   Optional parameters:
     *   - folder_name
     */
    public function __construct($amount, $pageno, $object_type, $object_id, array $options = [])
    {
        $this->options = $options;
        $this->setAmount($amount);
        $this->setPageno($pageno);
        $this->setObjectType($object_type);
        $this->setObjectId($object_id);
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
     * @param $object_type
     */
    public function setObjectType($object_type)
    {
        $this->options['object_type'] = $object_type;
    }

    /**
     * @param $object_id
     */
    public function setObjectId($object_id)
    {
        $this->options['object_id'] = $object_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getFiles.php';
    }
}
