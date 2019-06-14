<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployeesDetails Model
 *
 * @property \App\Model\Table\CitiesTable|\Cake\ORM\Association\BelongsTo $Cities
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\EmployeeTypesTable|\Cake\ORM\Association\BelongsTo $EmployeeTypes
 *
 * @method \App\Model\Entity\EmployeesDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployeesDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployeesDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeesDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeesDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeesDetailsTable extends Table
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

        $this->setTable('employees_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('EmployeeTypes', [
            'foreignKey' => 'employee_type_id',
            'joinType' => 'INNER'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 255)
            ->allowEmptyString('middle_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false)
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('present_address')
            ->requirePresence('present_address', 'create')
            ->allowEmptyString('present_address', false);

        $validator
            ->scalar('zipcode')
            ->maxLength('zipcode', 20)
            ->requirePresence('zipcode', 'create')
            ->allowEmptyString('zipcode', false);

        $validator
            ->scalar('home_phone_code')
            ->maxLength('home_phone_code', 5)
            ->requirePresence('home_phone_code', 'create')
            ->allowEmptyString('home_phone_code', false);

        $validator
            ->scalar('home_phone')
            ->maxLength('home_phone', 20)
            ->requirePresence('home_phone', 'create')
            ->allowEmptyString('home_phone', false);

        $validator
            ->scalar('cell_phone_code')
            ->maxLength('cell_phone_code', 5)
            ->requirePresence('cell_phone_code', 'create')
            ->allowEmptyString('cell_phone_code', false);

        $validator
            ->scalar('cell_phone')
            ->maxLength('cell_phone', 20)
            ->requirePresence('cell_phone', 'create')
            ->allowEmptyString('cell_phone', false);

        $validator
            ->date('date_of_birth')
            ->requirePresence('date_of_birth', 'create')
            ->allowEmptyDate('date_of_birth', false);

        $validator
            ->scalar('social_security_number')
            ->maxLength('social_security_number', 54)
            ->requirePresence('social_security_number', 'create')
            ->allowEmptyString('social_security_number', false);

        $validator
            ->scalar('emergency_contact_name')
            ->maxLength('emergency_contact_name', 255)
            ->requirePresence('emergency_contact_name', 'create')
            ->allowEmptyString('emergency_contact_name', false);

        $validator
            ->scalar('emergency_contact_relationship')
            ->maxLength('emergency_contact_relationship', 54)
            ->requirePresence('emergency_contact_relationship', 'create')
            ->allowEmptyString('emergency_contact_relationship', false);

        $validator
            ->scalar('emergency_contact_phone_code')
            ->maxLength('emergency_contact_phone_code', 5)
            ->requirePresence('emergency_contact_phone_code', 'create')
            ->allowEmptyString('emergency_contact_phone_code', false);

        $validator
            ->scalar('emergency_contact_phone')
            ->maxLength('emergency_contact_phone', 20)
            ->requirePresence('emergency_contact_phone', 'create')
            ->allowEmptyString('emergency_contact_phone', false);

        $validator
            ->scalar('employee_id')
            ->maxLength('employee_id', 255)
            ->requirePresence('employee_id', 'create')
            ->allowEmptyString('employee_id', false);


        $validator
            ->scalar('position')
            ->maxLength('position', 255)
            ->requirePresence('position', 'create')
            ->allowEmptyString('position', false);

        $validator
            ->scalar('department')
            ->maxLength('department', 255)
            ->requirePresence('department', 'create')
            ->allowEmptyString('department', false);

        $validator
            ->scalar('manager_name')
            ->maxLength('manager_name', 255)
            ->requirePresence('manager_name', 'create')
            ->allowEmptyString('manager_name', false);

        $validator
            ->scalar('team_lead_name')
            ->maxLength('team_lead_name', 255)
            ->requirePresence('team_lead_name', 'create')
            ->allowEmptyString('team_lead_name', false);

        $validator
            ->scalar('work_location_number')
            ->maxLength('work_location_number', 255)
            ->requirePresence('work_location_number', 'create')
            ->allowEmptyString('work_location_number', false);

        $validator
            ->scalar('office_location')
            ->requirePresence('office_location', 'create')
            ->allowEmptyString('office_location', false);

        $validator
            ->scalar('department_number')
            ->maxLength('department_number', 255)
            ->requirePresence('department_number', 'create')
            ->allowEmptyString('department_number', false);

        $validator
            ->scalar('time_keeper')
            ->maxLength('time_keeper', 255)
            ->requirePresence('time_keeper', 'create')
            ->allowEmptyString('time_keeper', false);

        $validator
            ->boolean('w_4_documentation_complete')
            ->requirePresence('w_4_documentation_complete', 'create')
            ->allowEmptyString('w_4_documentation_complete', false);

        $validator
            ->boolean('i_9_documentation_complete')
            ->requirePresence('i_9_documentation_complete', 'create')
            ->allowEmptyString('i_9_documentation_complete', false);

        $validator
            ->boolean('required_to_travel')
            ->requirePresence('required_to_travel', 'create')
            ->allowEmptyString('required_to_travel', false);

        $validator
            ->scalar('emr_program')
            ->maxLength('emr_program', 255)
            ->requirePresence('emr_program', 'create')
            ->allowEmptyString('emr_program', false);

        $validator
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->allowEmptyDate('start_date', false);

        $validator
            ->date('end_date')
            ->allowEmptyDate('end_date');

        $validator
            ->scalar('evaluation')
            ->maxLength('evaluation', 255)
            ->requirePresence('evaluation', 'create')
            ->allowEmptyString('evaluation', false);

        $validator
            ->requirePresence('created_by', 'create')
            ->allowEmptyString('created_by', false);

        $validator
            ->requirePresence('modified_by', 'create')
            ->allowEmptyString('modified_by', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['employee_type_id'], 'EmployeeTypes'));

        return $rules;
    }
}
