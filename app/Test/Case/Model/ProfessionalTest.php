<?php
/* Professional Test cases generated on: 2012-01-12 16:37:15 : 1326382635*/
App::uses('Professional', 'Model');

/**
 * Professional Test Case
 *
 */
class ProfessionalTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.professional', 'app.address', 'app.entity', 'app.table', 'app.client', 'app.federal_tax', 'app.client_category', 'app.client_type', 'app.contact', 'app.service', 'app.professionals_service', 'app.skill', 'app.skills_professional');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Professional = ClassRegistry::init('Professional');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Professional);

		parent::tearDown();
	}

}
