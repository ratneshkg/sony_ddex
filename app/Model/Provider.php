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
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'provider_code' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
