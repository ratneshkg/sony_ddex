<?php
App::uses('AppModel', 'Model');
/**
 * Provider Model
 *
 */
class Provider extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'provider_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'provider_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please Enter Provider Name.',
			),
		),
		'provider_code' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please Enter Provider Code.',
			),
		),
	);
        
        
/**
 * getProviderById method 
 * retuns provider record of passed id.
 * @param type $id
 * @return type
 */
        public function getProviderById($id= null) {
            $this->recursive=0;
            return $this->find('first',array('conditions' => array('Provider.id'=>$id)));
        }
}
