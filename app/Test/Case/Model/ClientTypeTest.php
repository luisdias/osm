<?php
/* ClientType Test cases generated on: 2012-01-12 16:37:11 : 1326382631*/
App::uses('ClientType', 'Model');

/**
 * ClientType Test Case
 *
 */
class ClientTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client_type', 'app.client');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ClientType = ClassRegistry::init('ClientType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientType);

		parent::tearDown();
	}

}
