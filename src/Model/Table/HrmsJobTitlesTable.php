<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HrmsJobTitles Model
 *
 * @method \App\Model\Entity\HrmsJobTitle get($primaryKey, $options = [])
 * @method \App\Model\Entity\HrmsJobTitle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HrmsJobTitle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HrmsJobTitle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsJobTitle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsJobTitle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsJobTitle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsJobTitle findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HrmsJobTitlesTable extends Table
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

        $this->setTable('hrms_job_titles');
        $this->setDisplayField('job_title');
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
            ->scalar('job_title')
            ->maxLength('job_title', 64)
            ->requirePresence('job_title', 'create')
            ->allowEmptyString('job_title', false);

        $validator
            ->allowEmptyString('created_by');

        $validator
            ->allowEmptyString('modified_by');

        return $validator;
    }
}
