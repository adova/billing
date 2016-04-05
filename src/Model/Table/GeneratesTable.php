<?php
namespace App\Model\Table;

use App\Model\Entity\Generate;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Generates Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PackageUsers
 * @property \Cake\ORM\Association\BelongsTo $BillingTypes
 */
class GeneratesTable extends Table
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

        $this->table('generates');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('PackageUsers', [
            'foreignKey' => 'package_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BillingTypes', [
            'foreignKey' => 'billing_type_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

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
        $rules->add($rules->existsIn(['package_user_id'], 'PackageUsers'));
        $rules->add($rules->existsIn(['billing_type_id'], 'BillingTypes'));
        return $rules;
    }
}
