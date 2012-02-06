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
 * Service Model
 *
 * @property Status $Status
 * @property Client $Client
 * @property ServiceType $ServiceType
 * @property Address $Address
 * @property Professional $Professional
 */
class Service extends AppModel {
public $actsAs = array('Searchable');       
public $displayField = 'id';
public $filterArgs = array(
    array('name' => 'service_state_id', 'type' => 'value'),
    array('name' => 'service_type_id', 'type' => 'value'),
);

public $validate = null;    

public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    
    $this->validate = array(
        'service_state_id' => array(
            'rule' => 'notEmpty',
            'message' => __('State is required',true),
            'required' => true,
        ),
        'client_id' => array(
            'rule' => 'notEmpty',
            'message' => __('Client is required',true),
            'required' => true,            
        ),
        'service_type_id' => array(
            'rule' => 'notEmpty',
            'message' => __('Service type is required',true),
            'required' => true,            
        ),
        'approval_date' => array(
            'allowEmpty' =>  true,                    
            'rule' => array('date','ymd'),
            'message' => __('Invalid date (yyyy-mm-dd)',true),
        ),
        'expiration_date' => array(
            'allowEmpty' =>  true,                    
            'rule' => array('date','ymd'),
            'message' => __('Invalid date (yyyy-mm-dd)',true),
        ),
        'payment_date' => array(
            'allowEmpty' =>  true,                    
            'rule' => array('date','ymd'),
            'message' => __('Invalid date (yyyy-mm-dd)',true),
        ),
        'begin_date' => array(
            'allowEmpty' =>  true,                    
            'rule' => array('date','ymd'),
            'message' => __('Invalid date (yyyy-mm-dd)',true),
        ),
        'end_date' => array(
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
		'ServiceState' => array(
			'className' => 'ServiceState',
			'foreignKey' => 'service_state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ServiceType' => array(
			'className' => 'ServiceType',
			'foreignKey' => 'service_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public $hasOne = array(    
            'Address' => array(
                    'className' => 'Address',
                    'foreignKey' => 'entity_id',
                    'conditions' => array('Address.table_name' =>'services'),
            )
    );        

    public $hasMany = array(
            'ProfessionalsService' => array(
                    'className' => 'ProfessionalsService',
                    'foreignKey' => 'service_id',
                    'dependent' => false,
                    'conditions' => '',
                    'fields' => '',
                    'order' => '',
                    'limit' => '',
                    'offset' => '',
                    'exclusive' => '',
                    'finderQuery' => '',
                    'counterQuery' => ''
            )
    );    
    

}
