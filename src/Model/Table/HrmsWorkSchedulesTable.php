<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HrmsWorkSchedules Model
 *
 * @method \App\Model\Entity\HrmsWorkSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\HrmsWorkSchedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HrmsWorkSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HrmsWorkSchedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsWorkSchedule saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsWorkSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsWorkSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsWorkSchedule findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HrmsWorkSchedulesTable extends Table
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

        $this->setTable('hrms_work_schedules');
        $this->setDisplayField('id');
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
            ->scalar('schedule_name')
            ->maxLength('schedule_name', 255)
            ->requirePresence('schedule_name', 'create')
            ->allowEmptyString('schedule_name', false);

        $validator
            ->boolean('monday')
            ->requirePresence('monday', 'create')
            ->allowEmptyString('monday', false);

        $validator
            ->boolean('tuesday')
            ->requirePresence('tuesday', 'create')
            ->allowEmptyString('tuesday', false);

        $validator
            ->boolean('wednesday')
            ->requirePresence('wednesday', 'create')
            ->allowEmptyString('wednesday', false);

        $validator
            ->boolean('thursday')
            ->requirePresence('thursday', 'create')
            ->allowEmptyString('thursday', false);

        $validator
            ->boolean('friday')
            ->requirePresence('friday', 'create')
            ->allowEmptyString('friday', false);

        $validator
            ->boolean('saturday')
            ->requirePresence('saturday', 'create')
            ->allowEmptyString('saturday', false);

        $validator
            ->boolean('sunday')
            ->requirePresence('sunday', 'create')
            ->allowEmptyString('sunday', false);

        $validator
            ->numeric('monday_hours')
            ->greaterThanOrEqual('monday_hours', 0)
            ->requirePresence('monday_hours', 'create')
            ->allowEmptyString('monday_hours', false);

        $validator
            ->numeric('tuesday_hours')
            ->greaterThanOrEqual('tuesday_hours', 0)
            ->requirePresence('tuesday_hours', 'create')
            ->allowEmptyString('tuesday_hours', false);

        $validator
            ->numeric('wednesday_hours')
            ->greaterThanOrEqual('wednesday_hours', 0)
            ->requirePresence('wednesday_hours', 'create')
            ->allowEmptyString('wednesday_hours', false);

        $validator
            ->numeric('thursday_hours')
            ->greaterThanOrEqual('thursday_hours', 0)
            ->requirePresence('thursday_hours', 'create')
            ->allowEmptyString('thursday_hours', false);

        $validator
            ->numeric('friday_hours')
            ->greaterThanOrEqual('friday_hours', 0)
            ->requirePresence('friday_hours', 'create')
            ->allowEmptyString('friday_hours', false);

        $validator
            ->numeric('saturday_hours')
            ->greaterThanOrEqual('saturday_hours', 0)
            ->requirePresence('saturday_hours', 'create')
            ->allowEmptyString('saturday_hours', false);

        $validator
            ->numeric('sunday_hours')
            ->greaterThanOrEqual('sunday_hours', 0)
            ->requirePresence('sunday_hours', 'create')
            ->allowEmptyString('sunday_hours', false);

        $validator
            ->allowEmptyString('created_by');

        $validator
            ->allowEmptyString('modifed_by');

        return $validator;
    }
}
