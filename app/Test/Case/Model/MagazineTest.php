<?php
App::uses('Magazine', 'Model');

/**
 * Magazine Test Case
 */
class MagazineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.magazine'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Magazine = ClassRegistry::init('Magazine');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Magazine);

		parent::tearDown();
	}

}
