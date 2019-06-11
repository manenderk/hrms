<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('login_name');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('login_name')
            ->maxLength('login_name', 45)
            ->requirePresence('login_name', 'create')
            ->allowEmptyString('login_name', false);

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 45)
            ->allowEmptyString('middle_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 45)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', false);

        $validator
            ->scalar('contact_number')
            ->maxLength('contact_number', 10)
            ->requirePresence('contact_number', 'create')
            ->allowEmptyString('contact_number', false);

        $validator
            ->scalar('mobile_country_code')
            ->maxLength('mobile_country_code', 6)
            ->requirePresence('mobile_country_code', 'create')
            ->allowEmptyString('mobile_country_code', false);

        $validator
            ->scalar('word_country_code')
            ->maxLength('word_country_code', 6)
            ->requirePresence('word_country_code', 'create')
            ->allowEmptyString('word_country_code', false);

        $validator
            ->scalar('work_contact_number')
            ->maxLength('work_contact_number', 14)
            ->requirePresence('work_contact_number', 'create')
            ->allowEmptyString('work_contact_number', false);

        $validator
            ->scalar('home_country_code')
            ->maxLength('home_country_code', 6)
            ->requirePresence('home_country_code', 'create')
            ->allowEmptyString('home_country_code', false);

        $validator
            ->scalar('home_contact_number')
            ->maxLength('home_contact_number', 14)
            ->requirePresence('home_contact_number', 'create')
            ->allowEmptyString('home_contact_number', false);

        $validator
            ->scalar('signature')
            ->requirePresence('signature', 'create')
            ->allowEmptyString('signature', false);

        $validator
            ->scalar('profile_pic')
            ->maxLength('profile_pic', 100)
            ->allowEmptyFile('profile_pic');

        $validator
            ->dateTime('last_login')
            ->requirePresence('last_login', 'create')
            ->allowEmptyDateTime('last_login', false);

        $validator
            ->scalar('is_active')
            ->allowEmptyString('is_active', false);

        return $validator;
    }
}
