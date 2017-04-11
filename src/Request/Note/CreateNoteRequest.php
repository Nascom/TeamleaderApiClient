<?php

namespace Nascom\TeamleaderApiClient\Request\Note;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateNoteRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Note
 */
class CreateNoteRequest extends AbstractPostRequest
{
    /**
     * CreateNoteRequest constructor.
     *
     * @param $object_type
     * @param $object_id
     * @param $note_title
     * @param array $options
     *   Optional parameters:
     *   - note_extra_information
     *   - note_extra_information_type
     *   - disable_modification
     *   - date
     */
    public function __construct($object_type, $object_id, $note_title, array $options = [])
    {
        $this->options = $options;
        $this->setObjectType($object_type);
        $this->setObjectId($object_id);
        $this->setNoteTitle($note_title);
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
     * @param $note_title
     */
    public function setNoteTitle($note_title)
    {
        $this->options['note_title'] = $note_title;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addNote.php';
    }
}
