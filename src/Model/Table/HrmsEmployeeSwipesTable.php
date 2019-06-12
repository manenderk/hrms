<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HrmsEmployeeSwipes Model
 *
 * @property \App\Model\Table\HrmsEmployeesTable|\Cake\ORM\Association\BelongsTo $HrmsEmployees
 *
 * @method \App\Model\Entity\HrmsEmployeeSwipe get($primaryKey, $options = [])
 * @method \App\Model\Entity\HrmsEmployeeSwipe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HrmsEmployeeSwipe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HrmsEmployeeSwipe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsEmployeeSwipe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsEmployeeSwipe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsEmployeeSwipe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsEmployeeSwipe findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HrmsEmployeeSwipesTable extends Table
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

        $this->setTable('hrms_employee_swipes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('HrmsEmployees', [
            'foreignKey' => 'employee_id',
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
            ->dateTime('swipe_time')
            ->allowEmptyDateTime('swipe_time', false);

        $validator
            ->integer('swipe_action')
            ->requirePresence('swipe_action', 'create')
            ->allowEmptyString('swipe_action', false);

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
        $rules->add($rules->existsIn(['employee_id'], 'HrmsEmployees'));

        return $rules;
    }
}
