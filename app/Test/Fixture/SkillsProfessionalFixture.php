<?php
/* SkillsProfessional Fixture generated on: 2012-01-12 16:37:22 : 1326382642 */

/**
 * SkillsProfessionalFixture
 *
 */
class SkillsProfessionalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'skill_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'professional_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'rating' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 6, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_skills_employees_skills' => array('column' => 'skill_id', 'unique' => 0), 'fk_skills_professionals_professionals' => array('column' => 'professional_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'skill_id' => 1,
			'professional_id' => 1,
			'rating' => 1,
			'created' => '2012-01-12 16:37:22',
			'modified' => '2012-01-12 16:37:22'
		),
	);
}
