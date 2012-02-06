<?php
/* Skill Test cases generated on: 2012-01-12 16:37:21 : 1326382641*/
App::uses('Skill', 'Model');

/**
 * Skill Test Case
 *
 */
class SkillTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.skill', 'app.professional', 'app.address', 'app.entity', 'app.table', 'app.client', 'app.federal_tax', 'app.client_category', 'app.client_type', 'app.contact', 'app.service', 'app.status', 'app.service_type', 'app.professionals_service', 'app.skills_professional');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Skill = ClassRegistry::init('Skill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Skill);

		parent::tearDown();
	}

}
