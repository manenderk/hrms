<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployeeTypes Model
 *
 * @property \App\Model\Table\EmployeesDetailsTable|\Cake\ORM\Association\HasMany $EmployeesDetails
 *
 * @method \App\Model\Entity\EmployeeType get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployeeType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployeeType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeeTypesTable extends Table
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

        $this->setTable('employee_types');
        $this->setDisplayField('type');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('EmployeesDetails', [
            'foreignKey' => 'employee_type_id'
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->allowEmptyString('type', false);

        $validator
            ->allowEmptyString('created_by');

        $validator
            ->allowEmptyString('modified_by');

        return $validator;
    }
}
