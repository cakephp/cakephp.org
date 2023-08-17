<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity.
 *
 * @property int $id
 * @property string $title
 * @property string $website
 * @property bool $is_highlighted
 * @property bool $is_showcase
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $slug
 * @property string|null $technologies
 * @property string $brief_description
 * @property string $description
 * @property array $tags_array
 * @property \Muffin\Tags\Model\Entity\Tagged[] $tagged
 * @property \Muffin\Tags\Model\Entity\Tag[] $tags
 * @property \App\Model\Entity\PerspectiveImage|null $perspective_image
 * @property \App\Model\Entity\ScreenMonitorImage[] $screen_monitor_images
 */
class Project extends Entity
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

    /**
     * @return array
     * @see \App\Model\Entity\Project::$tags_array
     */
    protected function _getTagsArray()
    {
        if (empty($this->tags)) {
            return '';
        }

        return collection($this->tags)->map(function ($t) {
            return $t->label;
        })->toArray();
    }
}
