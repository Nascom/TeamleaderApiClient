<?php

namespace Nascom\TeamleaderApiClient\Request\File;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveFileInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\File
 */
class RetrieveFileInfoRequest extends AbstractPostRequest
{
    /**
     * RetrieveFileInfoRequest constructor.
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
        return 'getFileInfo.php';
    }
}
