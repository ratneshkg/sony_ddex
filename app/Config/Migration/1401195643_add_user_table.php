<?php
class AddUserTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
                    'create_table' => array(
                        'users' => array(
                            'id' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 36,
                                'key'     => 'primary'
                            ),
                            'first_name' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 55,
                            ),
                            'middle_name' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 55,
                            ),
                            'last_name' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 55,
                            ),
                            'email' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 55,
                            ),
                            'password' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 256,
                            ),
                            'type' => array(
                                'type'    =>'integer',
                                'null'    => false,
                                'default' => null,
                                'length'  => 2,
                            ),
                            'created' => array(
                                'type'    =>'datetime',
                                'null'    => false,
                                'default' => null,
                            ),
                            'modified' => array(
                                'type'    =>'datetime',
                                'null'    => false,
                                'default' => null,
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        )
                    ),
		),
		'down' => array(
                           'drop_table' => array(
                                    'users',
                        )
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function after($direction) {
            if($direction ==='up') {
                $users=ClassRegistry::init('User');
                $userData=array(
                    'first_name'   =>'Admin',
                    'email'        =>'admin@infobeans.com',
                    'password'     =>'puneserver.123',
                    'type'         =>1
                );
                $users->save($userData);
            }
		return true;
	}
}
