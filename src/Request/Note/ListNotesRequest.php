<?php

namespace Nascom\TeamleaderApiClient\Request\Note;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListNotesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Note
 */
class ListNotesRequest extends AbstractPostRequest
{
    /**
     * ListNotesRequest constructor.
     *
     * @param $object_type
     * @param $object_id
     * @param $pageno
     * @param array $options
     */
    public function __construct($object_type, $object_id, $pageno, array $options = [])
    {
        $this->options = $options;
        $this->setObjectType($object_type);
        $this->setObjectId($object_id);
        $this->setPageno($pageno);
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
        return 'getNotes.php';
    }
}
