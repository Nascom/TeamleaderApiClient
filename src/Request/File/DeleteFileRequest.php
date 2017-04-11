<?php

namespace Nascom\TeamleaderApiClient\Request\File;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class DeleteFileRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\File
 */
class DeleteFileRequest extends AbstractPostRequest
{
    /**
     * DeleteFileRequest constructor.
     *
     * @param $file_id
     * @param array $options
     */
    public function __construct($file_id, array $options = [])
    {
        $this->options = $options;
        $this->setFileId($file_id);
    }

    /**
     * @param $file_id
     */
    public function setFileId($file_id)
    {
        $this->options['file_id'] = $file_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'deleteFile.php';
    }
}
