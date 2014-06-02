<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Invalid Email address ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                       
		),
                'first_name' => array(
                    'empty' =>array(
                        'rule'     =>'notEmpty',
                        'message'  => "Please enter First name "
                    ),
                    'onlyText' =>array (
                        'rule'     => '/^[a-zA-Z_]+[\ ]*$/',
                        'message'  => "Only alphabetic characters are allowed "
                    )
                            
                ),
                'last_name' => array(
                     'empty' =>array(
                        'rule'     =>'notEmpty',
                        'message'  => "Please enter Last  name "
                    ),
                    'onlyText' =>array (
                        'rule'     => '/^[a-zA-Z_]+[\ ]*$/',
                        'message'  => "Only alphabetic characters are allowed "
                    )
                ),
                'username' => array(
                            'rule'     =>'notEmpty',
                            'message'  => "Please enter username "
                ),
                
	);

/**
 * Beforesave Callback.
 * @param type $options
 * @return boolean
 */        
        public function beforeSave($options = array()) {
            if (!empty($this->data['User']['password'])) {
                $passwordHasher                  =  new SimplePasswordHasher(array('hashType' => 'sha256'));
                $this->data['User']['password']  =  $passwordHasher->hash($this->data['User']['password']);
            }
            return true;
        }
        
/**
 * validate Password method:
 * check entered password is correcr or not.
 * @param array $data
 * @return boolean
 */        

        public function validatePassword($password=null,$confirm_password=null) {
            if(trim($password) != '' && $password == $confirm_password) {
                return true;
            }
            return false;
        }
        
/**
 * Get the user according to id.
 * @param type $id
 * @return type
 */
        public function getUserById($id= null) {
            $this->recursive=0;
            return $this->find('first',array('conditions' => array('User.id'=>$id)));
        }
}
