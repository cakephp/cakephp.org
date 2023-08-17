<?php
namespace App\Model\Table;

use ArrayObject;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UploadedFiles Model
 *
 *
 * @method \App\Model\Entity\UploadedFile newEmptyEntity()
 * @method \App\Model\Entity\UploadedFile newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UploadedFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UploadedFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\UploadedFile findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UploadedFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UploadedFile[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UploadedFile|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UploadedFile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UploadedFile[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UploadedFile[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UploadedFile[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UploadedFile[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Burzum\Imagine\Model\Behavior\ImagineBehavior
 */
class UploadedFilesTable extends Table
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

        $this->setTable('uploaded_files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Burzum/Imagine.Imagine');
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
            ->requirePresence('file', 'create')
            ->notEmptyString('file');

        $validator
            ->requirePresence('dir', 'create')
            ->notEmptyString('dir');

        $validator
            ->requirePresence('size', 'create')
            ->notEmptyString('size');

        $validator
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        return $validator;
    }

    /**
     * beforeSave
     *
     * @param \Cake\Event\Event $event an event instance
     * @param \App\Model\Entity\UploadedFile $entity data being marshalled
     * @param \ArrayObject $options options for the current event
     * @return void
     */
    public function beforeSave(Event $event, Entity $entity, ArrayObject $options)
    {
        $entity->set('model', $this->getAlias());
    }
}
