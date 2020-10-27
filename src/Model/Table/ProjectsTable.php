<?php
namespace App\Model\Table;

use App\Model\Entity\Project;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 */
class ProjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('projects');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Muffin/Slug.Slug');
        $this->addBehavior('Muffin/Tags.Tag', [
            'taggedCounter' => false,
        ]);

        $this->hasOne('PerspectiveImages', [
            'foreignKey' => 'entity_id',
            'conditions' => ['model' => 'PerspectiveImages'],
            'dependent' => true,
        ]);

        $this->hasMany('ScreenMonitorImages', [
            'foreignKey' => 'entity_id',
            'conditions' => ['model' => 'ScreenMonitorImages'],
            'dependent' => true,
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title')
            ->notEmpty('title');

        $validator
            ->requirePresence('description')
            ->notEmpty('title');

        $validator
            ->requirePresence('website', 'create')
            ->notEmpty('website')
            ->add('website', 'valid-url', ['rule' => 'url']);

        $validator
            ->boolean('is_highlighted')
            ->requirePresence('is_highlighted', 'create')
            ->notEmpty('is_highlighted');

        $validator
            ->boolean('is_showcase')
            ->requirePresence('is_showcase', 'create')
            ->notEmpty('is_showcase');

        return $validator;
    }

    /**
     * beforeSave
     *
     * @param Event $event event
     * @param Entity $entity entity
     * @param array $options options
     * @return void
     */
    public function beforeSave(Event $event, Entity $entity, $options)
    {
        if (empty($entity->perspective_image->file['name'])) {
            unset($entity->perspective_image);
        }
        if (empty($entity->screen_monitor_images[0]->file['name'])) {
            unset($entity->screen_monitor_images);
        }

        if (!$entity->isNew()) {
            if ($entity->perspective_image) {
                $this->PerspectiveImages->deleteAll([
                    'entity_id' => $entity->id, 'model' => $this->PerspectiveImages->alias(),
                ]);
            }

            if ($entity->screen_monitor_images) {
                $this->ScreenMonitorImages->deleteAll([
                    'entity_id' => $entity->id, 'model' => $this->ScreenMonitorImages->alias(),
                ]);
            }
        }
    }

    /**
     * @param Query $query query
     * @param array $options options
     * @return Query
     */
    public function findHighlighted($query, $options)
    {
        return $query
            ->contain('PerspectiveImages')
            ->contain('ScreenMonitorImages')
            ->contain('Tags')
            ->where(['is_highlighted' => true]);
    }

    /**
     * @return Query
     */
    public function getHighlights()
    {
        $highlights = $this->find('highlighted');

        $ids = collection($highlights)->map(function ($h) {
            return $h->id;
        })->toArray();

        if (!$ids) {
            return [];
        }

        shuffle($ids);

        $projects = $this->find()
            ->find('view')
            ->where(['Projects.id IN' => array_slice($ids, 0, 3)])
            ->toArray();

        shuffle($projects);

        return $projects;
    }

    /**
     * @param Query $query query
     * @param array $options options
     * @return Query
     */
    public function findView($query, $options)
    {
        return $query
            ->contain('PerspectiveImages')
            ->contain('ScreenMonitorImages')
            ->contain('Tags');
    }

    /**
     * @param Query $query query
     * @param array $options options
     * @return Query
     */
    public function findShowcase($query, $options)
    {
        return $query
            ->find('view')
            ->where(['is_showcase' => true]);
    }
}
