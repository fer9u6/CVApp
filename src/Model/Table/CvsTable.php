<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cvs Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EducationsTable|\Cake\ORM\Association\HasMany $Educations
 * @property \App\Model\Table\ExperiencesTable|\Cake\ORM\Association\HasMany $Experiences
 * @property \App\Model\Table\LanguajesTable|\Cake\ORM\Association\HasMany $Languajes
 * @property \App\Model\Table\OtherJobsTable|\Cake\ORM\Association\HasMany $OtherJobs
 *
 * @method \App\Model\Entity\Cv get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cv newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cv[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cv|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cv|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cv patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cv[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cv findOrCreate($search, callable $callback = null, $options = [])
 */
class CvsTable extends Table
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

        $this->setTable('cvs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Educations', [
            'foreignKey' => 'cv_id',
			 'dependent' => true,
           'cascadeCallbacks' => true,
        ]);
        $this->hasMany('Experiences', [
            'foreignKey' => 'cv_id',
			 'dependent' => true,
           'cascadeCallbacks' => true,
        ]);
        $this->hasMany('Languajes', [
            'foreignKey' => 'cv_id',
			'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
        $this->hasMany('OtherJobs', [
            'foreignKey' => 'cv_id',
			 'dependent' => true,
            'cascadeCallbacks' => true,
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
            ->scalar('profile')
            ->allowEmpty('profile');

        $validator
            ->scalar('skills')
            ->maxLength('skills', 45)
            ->allowEmpty('skills');

        $validator
            ->scalar('recommendations')
            ->allowEmpty('recommendations');

        $validator
            ->scalar('acknowledgments')
            ->allowEmpty('acknowledgments');

        $validator
            ->integer('visits')
            ->allowEmpty('visits');

        $validator
            ->scalar('category')
            ->maxLength('category', 50)
            ->allowEmpty('category');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
