<?php
/**
 * Book Fixture
 */
class BookFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'code' => array('type' => 'string', 'null' => false, 'length' => 15, 'key' => 'primary', 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'edition' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'editorial' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'code', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'code' => 'Lorem ipsum d',
			'title' => 'Lorem ipsum dolor sit amet',
			'edition' => 1,
			'editorial' => 'Lorem ipsum dolor sit amet'
		),
	);

}
