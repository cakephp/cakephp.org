<?php
namespace Showcase\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity.
 *
 * @property int $id
 * @property string $title
 * @property string $website
 * @property bool $is_highlighted
 * @property bool $is_showcase
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
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
