<?php

namespace App\Model\Table;

use App\Model\Entity\Writer;
use Cake\Datasource\EntityInterface;
use Cake\ORM\Behavior\TimestampBehavior;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Writers Model
 *
 * @method Writer get($primaryKey, $options = [])
 * @method Writer newEntity($data = null, array $options = [])
 * @method Writer[] newEntities(array $data, array $options = [])
 * @method Writer|bool save(EntityInterface $entity, $options = [])
 * @method Writer patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method Writer[] patchEntities($entities, array $data, array $options = [])
 * @method Writer findOrCreate($search, callable $callback = null)
 *
 * @mixin TimestampBehavior
 */
class WritersTable extends Table
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
        $this->setTable('writers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param Validator $validator Validator instance.
     * @return Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator->integer('id')->allowEmpty('id', 'create');
        $validator->requirePresence('name', 'create')->notEmpty('name');
        $validator->email('email')->requirePresence('email', 'create')->notEmpty('email');
        $validator->allowEmpty('username');
        $validator->requirePresence('article_titles', 'create')->notEmpty('article_titles');
        $validator->requirePresence('writing_sample', 'create')->notEmpty('writing_sample');
        $validator->requirePresence('extra_information', 'create')->allowEmpty('extra_information');

        return $validator;
    }
}
