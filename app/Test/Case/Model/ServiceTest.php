<?php
/* Service Test cases generated on: 2012-01-12 16:37:19 : 1326382639*/
App::uses('Service', 'Model');

/**
 * Service Test Case
 *
 */
class ServiceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.service', 'app.status', 'app.client', 'app.federal_tax', 'app.client_category', 'app.client_type', 'app.address', 'app.entity', 'app.table', 'app.professional', 'app.professionals_service', 'app.skill', 'app.skills_professional', 'app.contact', 'app.service_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Service = ClassRegistry::init('Service');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Service);

		parent::tearDown();
	}

}
