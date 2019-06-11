<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HrmsDepartments Model
 *
 * @method \App\Model\Entity\HrmsDepartment get($primaryKey, $options = [])
 * @method \App\Model\Entity\HrmsDepartment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HrmsDepartment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HrmsDepartment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsDepartment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsDepartment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsDepartment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsDepartment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HrmsDepartmentsTable extends Table
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

        $this->setTable('hrms_departments');
        $this->setDisplayField('department_name');
        $this->setPrimaryKey('id');

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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('department_name')
            ->maxLength('department_name', 64)
            ->requirePresence('department_name', 'create')
            ->allowEmptyString('department_name', false);

        $validator
            ->allowEmptyString('created_by');

        $validator
            ->allowEmptyString('modified_by');

        return $validator;
    }
}
