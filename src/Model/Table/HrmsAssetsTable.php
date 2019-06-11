<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HrmsAssets Model
 *
 * @property \App\Model\Table\HrmsAssetCategoriesTable|\Cake\ORM\Association\BelongsTo $HrmsAssetCategories
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\HrmsAsset get($primaryKey, $options = [])
 * @method \App\Model\Entity\HrmsAsset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HrmsAsset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HrmsAsset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsAsset saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HrmsAsset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsAsset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HrmsAsset findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HrmsAssetsTable extends Table
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

        $this->setTable('hrms_assets');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('HrmsAssetCategories', [
            'foreignKey' => 'asset_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'allocated_to_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('serial_number')
            ->maxLength('serial_number', 56)
            ->allowEmptyString('serial_number');

        $validator
            ->scalar('tag_number')
            ->maxLength('tag_number', 56)
            ->allowEmptyString('tag_number');

        $validator
            ->allowEmptyString('created_by');

        $validator
            ->allowEmptyString('modified_by');

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
        $rules->add($rules->existsIn(['asset_category_id'], 'HrmsAssetCategories'));
        $rules->add($rules->existsIn(['allocated_to_id'], 'Users'));

        return $rules;
    }
}
