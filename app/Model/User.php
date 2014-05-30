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
        
        public function validatePassword($data=array()) {
            if(!empty($data) && isset($data['User']['new_password']) && isset($data['User']['confirm_new_password'])) {
                if(trim($data['User']['new_password']) != '' && $data['User']['new_password'] == $data['User']['confirm_new_password']) {
                    return true;
                }
            }
            return false;
        }
}
