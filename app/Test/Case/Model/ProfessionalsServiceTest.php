<?php
/* ProfessionalsService Test cases generated on: 2012-01-12 16:37:17 : 1326382637*/
App::uses('ProfessionalsService', 'Model');

/**
 * ProfessionalsService Test Case
 *
 */
class ProfessionalsServiceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.professionals_service', 'app.professional', 'app.address', 'app.entity', 'app.table', 'app.client', 'app.federal_tax', 'app.client_category', 'app.client_type', 'app.contact', 'app.service', 'app.skill', 'app.skills_professional');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ProfessionalsService = ClassRegistry::init('ProfessionalsService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProfessionalsService);

		parent::tearDown();
	}

}
