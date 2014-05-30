<?php
class CreateProvidersTable extends CakeMigration {

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
                        'providers' => array(
                            'id' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 36,
                                'key'     => 'primary'
                            ),
                            'provider_name' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 45,
                            ),
                            'provider_code' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 45,
                            ),
                            'party_id' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 45,
                            ),
                            'party_name' => array(
                                'type'    =>'string',
                                'null'    => false,
                                'default' => null,
                                'length'  => 45,
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
                     'providers'   
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
		return true;
	}
}
