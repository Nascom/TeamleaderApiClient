<?php

namespace Nascom\TeamleaderApiClient\Request\File;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UploadFileRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\File
 */
class UploadFileRequest extends AbstractPostRequest
{
    /**
     * UploadFileRequest constructor.
     *
     * @param $object_type
     * @param $object_id
     * @param $file_content
     * @param $file_name
     * @param array $options
     */
    public function __construct($object_type, $object_id, $file_content, $file_name, array $options = [])
    {
        $this->options = $options;
        $this->setObjectType($object_type);
        $this->setObjectId($object_id);
        $this->setFileContent($file_content);
        $this->setFileName($file_name);
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
     * @param $file_content
     */
    public function setFileContent($file_content)
    {
        $this->options['file_content'] = $file_content;
    }

    /**
     * @param $file_name
     */
    public function setFileName($file_name)
    {
        $this->options['file_name'] = $file_name;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'uploadFile.php';
    }
}
