<?php

namespace Nascom\TeamleaderApiClient\Request\File;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveFileRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\File
 */
class RetrieveFileRequest extends AbstractPostRequest
{
    /**
     * RetrieveFileRequest constructor.
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
        return 'downloadFile.php';
    }
}
