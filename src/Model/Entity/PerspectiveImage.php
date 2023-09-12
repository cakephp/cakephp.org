<?php
namespace App\Model\Entity;

/**
 * @property int $id
 * @property string $file
 * @property string $dir
 * @property string $size
 * @property string $type
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $entity_id
 * @property string $model
 * @property \App\Model\Entity\Project $project
 */
class PerspectiveImage extends UploadedFile
{
}
