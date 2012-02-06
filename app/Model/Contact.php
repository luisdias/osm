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
 * Contact Model
 *
 * @property Client $Client
 */
class Contact extends AppModel {
public $actsAs = array('Searchable');        
public $displayField = 'contact_name';
public $validate = null;    
public $filterArgs = array(
    array('name' => 'contact_name', 'type' => 'like', 'field' => 'Contact.contact_name'),
);
public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    /**
     * Validation rules
     *
     * @var array
     */
    $this->validate = array(
        'contact_name' => array(                
            'rule' => 'notEmpty',
            'message' => __('Name is required',true)
            ),
        'client_id' => array(
            'rule' => 'notEmpty',
            'message' => __('Client is required',true),
            'required' => true,            
        ),
        'email' => array(
            'allowEmpty' =>  true,				
            'rule' => array('email'),
            'message' => __('Invalid email',true),
        ),
        'birth_date' => array(
            'allowEmpty' =>  true,                    
            'rule' => array('date','ymd'),
            'message' => __('Invalid date (yyyy-mm-dd)',true),
        ),
    );    
}
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
