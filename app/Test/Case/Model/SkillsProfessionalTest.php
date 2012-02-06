<?php
/* SkillsProfessional Test cases generated on: 2012-01-12 16:37:23 : 1326382643*/
App::uses('SkillsProfessional', 'Model');

/**
 * SkillsProfessional Test Case
 *
 */
class SkillsProfessionalTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.skills_professional', 'app.skill', 'app.professional', 'app.address', 'app.entity', 'app.table', 'app.client', 'app.federal_tax', 'app.client_category', 'app.client_type', 'app.contact', 'app.service', 'app.status', 'app.service_type', 'app.professionals_service');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->SkillsProfessional = ClassRegistry::init('SkillsProfessional');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SkillsProfessional);

		parent::tearDown();
	}

}
