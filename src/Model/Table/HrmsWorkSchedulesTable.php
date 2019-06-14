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
            ->scalar('monday_shift_start')
            ->maxLength('monday_shift_start', 24)
            ->requirePresence('monday_shift_start', 'create')
            ->allowEmptyString('monday_shift_start', false);

        $validator
            ->scalar('tuesday_shift_start')
            ->maxLength('tuesday_shift_start', 24)
            ->requirePresence('tuesday_shift_start', 'create')
            ->allowEmptyString('tuesday_shift_start', false);

        $validator
            ->scalar('wednesday_shift_start')
            ->maxLength('wednesday_shift_start', 24)
            ->requirePresence('wednesday_shift_start', 'create')
            ->allowEmptyString('wednesday_shift_start', false);

        $validator
            ->scalar('thursday_shift_start')
            ->maxLength('thursday_shift_start', 24)
            ->requirePresence('thursday_shift_start', 'create')
            ->allowEmptyString('thursday_shift_start', false);

        $validator
            ->scalar('friday_shift_start')
            ->maxLength('friday_shift_start', 24)
            ->requirePresence('friday_shift_start', 'create')
            ->allowEmptyString('friday_shift_start', false);

        $validator
            ->scalar('saturday_shift_start')
            ->maxLength('saturday_shift_start', 24)
            ->requirePresence('saturday_shift_start', 'create')
            ->allowEmptyString('saturday_shift_start', false);

        $validator
            ->scalar('sunday_shift_start')
            ->maxLength('sunday_shift_start', 24)
            ->requirePresence('sunday_shift_start', 'create')
            ->allowEmptyString('sunday_shift_start', false);

        $validator
            ->scalar('monday_shift_end')
            ->maxLength('monday_shift_end', 24)
            ->requirePresence('monday_shift_end', 'create')
            ->allowEmptyString('monday_shift_end', false);

        $validator
            ->scalar('tuesday_shift_end')
            ->maxLength('tuesday_shift_end', 24)
            ->requirePresence('tuesday_shift_end', 'create')
            ->allowEmptyString('tuesday_shift_end', false);

        $validator
            ->scalar('wednesday_shift_end')
            ->maxLength('wednesday_shift_end', 24)
            ->requirePresence('wednesday_shift_end', 'create')
            ->allowEmptyString('wednesday_shift_end', false);

        $validator
            ->scalar('thursday_shift_end')
            ->maxLength('thursday_shift_end', 24)
            ->requirePresence('thursday_shift_end', 'create')
            ->allowEmptyString('thursday_shift_end', false);

        $validator
            ->scalar('friday_shift_end')
            ->maxLength('friday_shift_end', 24)
            ->requirePresence('friday_shift_end', 'create')
            ->allowEmptyString('friday_shift_end', false);

        $validator
            ->scalar('saturday_shift_end')
            ->maxLength('saturday_shift_end', 24)
            ->requirePresence('saturday_shift_end', 'create')
            ->allowEmptyString('saturday_shift_end', false);

        $validator
            ->scalar('sunday_shift_end')
            ->maxLength('sunday_shift_end', 24)
            ->requirePresence('sunday_shift_end', 'create')
            ->allowEmptyString('sunday_shift_end', false);

        $validator
            ->allowEmptyString('created_by');

        $validator
            ->allowEmptyString('modifed_by');

        return $validator;
    }
}
