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
     * @param \ArrayObject $entity data being marshalled
     * @param \ArrayObject $options options for the current event
     * @return void
     */
    public function beforeSave(Event $event, Entity $entity, ArrayObject $options)
    {
        $entity->set('model', $this->getAlias());
    }
}
