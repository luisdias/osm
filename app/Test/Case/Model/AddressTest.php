<?php
/* Address Test cases generated on: 2012-01-12 16:37:09 : 1326382629*/
App::uses('Address', 'Model');

/**
 * Address Test Case
 *
 */
class AddressTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.address', 'app.entity', 'app.table', 'app.client', 'app.professional', 'app.service');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Address = ClassRegistry::init('Address');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Address);

		parent::tearDown();
	}

}
