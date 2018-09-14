<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experiences Model
 *
 * @property \App\Model\Table\CvsTable|\Cake\ORM\Association\BelongsTo $Cvs
 *
 * @method \App\Model\Entity\Experience get($primaryKey, $options = [])
 * @method \App\Model\Entity\Experience newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Experience[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Experience|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experience|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experience patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Experience[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Experience findOrCreate($search, callable $callback = null, $options = [])
 */
class ExperiencesTable extends Table
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

        $this->setTable('experiences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cvs', [
            'foreignKey' => 'cv_id',
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
            ->scalar('enterprice')
            ->maxLength('enterprice', 45)
            ->allowEmpty('enterprice');

        $validator
            ->scalar('position')
            ->maxLength('position', 45)
            ->allowEmpty('position');

        $validator
            ->date('since')
            ->allowEmpty('since');

        $validator
            ->date('until')
            ->allowEmpty('until');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['cv_id'], 'Cvs'));

        return $rules;
    }
}
