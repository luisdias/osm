<?php
/* ServiceType Test cases generated on: 2012-01-12 16:37:18 : 1326382638*/
App::uses('ServiceType', 'Model');

/**
 * ServiceType Test Case
 *
 */
class ServiceTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.service_type', 'app.service');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ServiceType = ClassRegistry::init('ServiceType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceType);

		parent::tearDown();
	}

}
