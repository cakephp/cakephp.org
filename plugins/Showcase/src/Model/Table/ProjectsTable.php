<?php
namespace Showcase\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Showcase\Model\Entity\Project;

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

        $this->table('projects');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('website', 'create')
            ->notEmpty('website');

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
}
