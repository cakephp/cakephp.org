<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UploadedFile Entity.
 *
 * @property int $id
 * @property string $file
 * @property string $dir
 * @property string $size
 * @property string $type
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $entity_id
 * @property string $model
 */
class UploadedFile extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
