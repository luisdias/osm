<?php
/* SkillsProfessionals Test cases generated on: 2012-01-12 16:40:31 : 1326382831*/
App::uses('SkillsProfessionalsController', 'Controller');

/**
 * TestSkillsProfessionalsController *
 */
class TestSkillsProfessionalsController extends SkillsProfessionalsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * SkillsProfessionalsController Test Case
 *
 */
class SkillsProfessionalsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.skills_professional', 'app.skill', 'app.professional', 'app.address', 'app.entity', 'app.table', 'app.client', 'app.client_category', 'app.client_type', 'app.contact', 'app.service', 'app.status', 'app.service_type', 'app.professionals_service');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->SkillsProfessionals = new TestSkillsProfessionalsController();
		$this->SkillsProfessionals->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SkillsProfessionals);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
