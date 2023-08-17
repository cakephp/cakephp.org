<?php
namespace App\Model\Table;

use App\Model\Entity\Project;
use Cake\Event\Event;
use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 *
 * @property \Muffin\Tags\Model\Table\TaggedTable&\Cake\ORM\Association\HasMany $Tagged
 * @property \App\Model\Table\ScreenMonitorImagesTable&\Cake\ORM\Association\HasMany $ScreenMonitorImages
 * @property \Muffin\Tags\Model\Table\TagsTable&\Cake\ORM\Association\BelongsToMany $Tags
 * @property \App\Model\Table\PerspectiveImagesTable&\Cake\ORM\Association\HasOne $PerspectiveImages
 * @method \App\Model\Entity\Project newEmptyEntity()
 * @method \App\Model\Entity\Project newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Muffin\Slug\Model\Behavior\SlugBehavior
 * @mixin \Muffin\Tags\Model\Behavior\TagBehavior
 */
class ProjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
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
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->requirePresence('title')
            ->notEmptyString('title');

        $validator
            ->requirePresence('description')
            ->notEmptyString('title');

        $validator
            ->requirePresence('website', 'create')
            ->notEmptyString('website')
            ->add('website', 'valid-url', ['rule' => 'url']);

        $validator
            ->boolean('is_highlighted')
            ->requirePresence('is_highlighted', 'create')
            ->notEmptyString('is_highlighted');

        $validator
            ->boolean('is_showcase')
            ->requirePresence('is_showcase', 'create')
            ->notEmptyString('is_showcase');

        return $validator;
    }

    /**
     * beforeSave
     *
     * @param Event $event event
     * @param \App\Model\Entity\Project $entity entity
     * @param array $options options
     * @return void
     */
    public function beforeSave(Event $event, Entity $entity, $options)
    {
        if (empty($entity->perspective_image->file->getClientFilename())) {
            unset($entity->perspective_image);
        }
        if (empty($entity->screen_monitor_images[0]->file->getClientFilename())) {
            unset($entity->screen_monitor_images);
        }

        if (!$entity->isNew()) {
            if ($entity->perspective_image) {
                $this->PerspectiveImages->deleteAll([
                    'entity_id' => $entity->id, 'model' => $this->PerspectiveImages->getAlias(),
                ]);
            }

            if ($entity->screen_monitor_images) {
                $this->ScreenMonitorImages->deleteAll([
                    'entity_id' => $entity->id, 'model' => $this->ScreenMonitorImages->getAlias(),
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

    /**
     * Before marshal method
     *
     * @param \Cake\Event\Event $event Event
     * @param \ArrayObject $data Data
     * @param \ArrayObject $options Options
     * @return void
     */
    public function beforeMarshal(Event $event, \ArrayObject $data, \ArrayObject $options): void
    {
        if (isset($data['screen_monitor_images']['file'])) {
            $files = $data['screen_monitor_images']['file'];
            $data['screen_monitor_images'] = [];

            foreach ($files as $f) {
                $data['screen_monitor_images'][] = ['file' => $f];
            }
        }
    }
}
