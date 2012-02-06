<?php
/**
    This file is part of OSM - Open Service Manager.

    OSM - Open Service Manager is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    OSM - Open Service Manager is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with OSM - Open Service Manager.  If not, see <http://www.gnu.org/licenses/>.
 */
App::uses('AppModel', 'Model');
/**
 * Address Model
 *
 * @property Client $Client
 * @property Professional $Professional
 * @property Service $Service
 */
class Address extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed
public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    /**
     * Validation rules
     *
     * @var array
     */
    $this->validate = array(
        'street' => array(
            'allowEmpty' =>  true,				
            'rule' => array('minLength', 5),
            'message' => __('Street must be at least 5 characters long',true),
        )
    );    
}
/**
 * hasMany associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'entity_id',
			'dependent' => false,
			'conditions' => array('table_name'=>'clients'),
		),
		'Professional' => array(
			'className' => 'Professional',
			'foreignKey' => 'entity_id',
			'dependent' => false,
			'conditions' => array('table_name'=>'professionals'),
		),
		'Service' => array(
			'className' => 'Service',
			'foreignKey' => 'entity_id',
			'dependent' => false,
			'conditions' => array('table_name'=>'services'),
		)
	);

}
