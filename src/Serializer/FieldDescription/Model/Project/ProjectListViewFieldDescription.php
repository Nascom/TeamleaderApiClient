<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project;

use Nascom\TeamleaderApiClient\Model\Project\ProjectListView;

/**
 * Class ProjectListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project
 */
class ProjectListViewFieldDescription extends ProjectFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return ProjectListView::class;
    }
}
