<?php
namespace App\Model\Table;

use App\Model\Entity\Contact;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 *
 * @method \App\Model\Entity\Contact newEmptyEntity()
 * @method \App\Model\Entity\Contact newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactsTable extends Table
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

        $this->setTable('contacts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('subject', 'create')
            ->notEmptyString('subject');

        $validator
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->requirePresence('body', 'create')
            ->notEmptyString('body');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        return $rules;
    }

    /**
     * Generates a rapid contact from data
     *
     * @param array $data data
     * @return Contact
     */
    public function createRapidContact($data)
    {
        $contact = $this->newEmptyEntity();
        $contact->set('name', $data['name']);
        $contact->set('email', $data['email']);
        $contact->set('subject', $this->extractRapidSubject($data));
        $contact->set('body', $this->extractRapidBody($data));

        return $contact;
    }

    /**
     * Extracts the right body for rapid contact based on data
     *
     * @param array $data data
     * @return string
     */
    private function extractRapidBody($data)
    {
        $intro = 'Hi, my name is ' . $data['name'] . '. Please ';
        $body = '';

        switch ($data['type']) {
            case 'email':
                $body = 'email me at ' . $data['email'];
                break;
            case 'call':
                $body = 'call me on ' . $data['phone'];
                break;
            case 'skype':
                $body = 'skype me at ' . $data['skype'];
                break;
            case 'road_trip':
                $body = 'come to ' . $data['where'];
                break;
            default:
                throw new \InvalidArgumentException();
        }

        return $intro . $body . '. Thanks.';
    }

    /**
     * Extracs the right subject for rapid contact based on data
     *
     * @param array $data data
     * @return string
     */
    private function extractRapidSubject($data)
    {
        $subject = '';
        switch ($data['subject']) {
            case 'other':
                $subject = 'Rapid Response';
                break;
            case 'dev':
                $subject = 'Rapid Response: Development';
                break;
            case 'consultancy':
                $subject = 'Rapid Response: Consultancy';
                break;
            case 'review':
                $subject = 'Rapid Response: Code Review';
                break;
            case 'migration':
                $subject = 'Rapid Response: Migration';
                break;
            case 'training':
                $subject = 'Rapid Response: Training';
                break;
            case 'road_trip':
                $subject = 'Road Trip';
                break;
            default:
                throw new \InvalidArgumentException();
        }

        $subject .= " ({$data['name']} / {$data['email']})";

        return $subject;
    }
}
