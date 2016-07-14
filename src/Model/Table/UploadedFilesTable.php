<?php
namespace App\Model\Table;

use ArrayObject;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use App\Model\Entity\UploadedFile;

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
	public function initialize(array $config)
	{
		parent::initialize($config);

		$this->table('uploaded_files');
		$this->displayField('id');
		$this->primaryKey('id');

		$this->addBehavior('Timestamp');
		$this->addBehavior('Burzum/Imagine.Imagine');
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
			->requirePresence('file', 'create')
			->notEmpty('file');

		$validator
			->requirePresence('dir', 'create')
			->notEmpty('dir');

		$validator
			->requirePresence('size', 'create')
			->notEmpty('size');

		$validator
			->requirePresence('type', 'create')
			->notEmpty('type');

		return $validator;
	}

	/**
	 * beforeSave
	 *
	 * @param \Cake\Event\Event $event an event instance
	 * @param \ArrayObject $data data being marshalled
	 * @param \ArrayObject $options options for the current event
	 * @return void
	 */
	public function beforeSave(Event $event, Entity $entity, ArrayObject $options)
	{
		$entity->set('model', $this->alias());
	}
}
