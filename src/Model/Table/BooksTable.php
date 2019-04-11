<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 */
class BooksTable extends Table
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

        $this->setTable('books');
        $this->setDisplayField('book_id');
        $this->setPrimaryKey('book_id');
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
            ->scalar('book_name')
            ->maxLength('book_name', 50, "Name cannot be more then 50 characters")
            ->requirePresence('book_name', 'create')
            ->allowEmptyString('book_name', false)
            ->minLength('book_name',5,"Name must be 5 characters long.");
            /*->add('book_name',[
                'length' => [
                    'rule' => ['minLength',5],
                    'messege' => 'Name must be > 5'
                ]
            ])*/;

        $validator
            ->scalar('book_author')
            ->maxLength('book_author', 50, "Author Name cannot be more then 50 characters")
            ->requirePresence('book_author', 'create')
            ->allowEmptyString('book_author', false)
            ->minLength('book_author',2,"Author Name must be 5 characters long.");

        $validator
            ->scalar('book_description')
            ->maxLength('book_description', 100 , "Book description cannot be more then 10 characters")
            ->requirePresence('book_description', 'create')
            ->allowEmptyString('book_description', false)
            ->minLength('book_author',5,"Author Name must be 5 characters long.");

        $validator
            ->scalar('book_email')
            ->Email('book_email', false, "Invalid Email")
            ->maxLength('book_email', 50 , "Email cannot be more then 50 characters")
            //->requirePresence('book_email', 'create')
            ->allowEmptyString('book_email', false)
            ->add('book_email', 

                ['email_unique' => 
                        [   'rule' => ['validateUnique'], 
                            'provider' => 'table', 
                            'message' => ['Email is already in exits']
                        ]
                ]
            );
            $validator
            ->scalar('book_email_update')
            ->Email('book_email_update', false, "Invalid Email")
            ->maxLength('book_email_update', 50 , "Email cannot be more then 50 characters")
            //->requirePresence('book_email_update', 'create')
            ->allowEmptyString('book_email_update', false);

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
        $rules->add($rules->isUnique(['book_email']));

        return $rules;
    }
}
