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
 * Client Model
 *
 * @property FederalTax $FederalTax
 * @property ClientCategory $ClientCategory
 * @property ClientType $ClientType
 * @property Address $Address
 * @property Contact $Contact
 * @property Service $Service
 */
class Client extends AppModel {
public $actsAs = array('Searchable');    
public $displayField = 'client_name';
public $validate = null;    

public $filterArgs = array(
    array('name' => 'client_category_id', 'type' => 'value'),
    array('name' => 'client_type_id', 'type' => 'value'),
    array('name' => 'client_name', 'type' => 'like', 'field' => 'Client.client_name'),
);

public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    /**
     * Validation rules
     *
     * @var array
     */
    $this->validate = array(
        'client_name' => array(                
            'rule' => 'notEmpty',
            'message' => __('Name is required')
            ),        
        'client_category_id' => array(
            'required' => true,             
            'rule' => 'notEmpty',
            'message' => __('Category is required'),             
        ),
        'client_type_id' => array(
            'required' => true, 
            'rule' => 'notEmpty',
            'message' => __('Type is required',true),
        ),
        'email' => array(
            'allowEmpty' =>  true,				
            'rule' => array('email'),
            'message' => __('Invalid email',true),
        ),
        'website' => array(
            'allowEmpty' =>  true,
            'rule' => 'url',
            'message' => __('Invalid website',true),
        )
    );    
}


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
            'ClientCategory' => array(
                    'className' => 'ClientCategory',
                    'foreignKey' => 'client_category_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            ),
            'ClientType' => array(
                    'className' => 'ClientType',
                    'foreignKey' => 'client_type_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            ),
    );

    public $hasOne = array(    
            'Address' => array(
                    'className' => 'Address',
                    'foreignKey' => 'entity_id',
                    'conditions' => array('Address.table_name' =>'clients'),
            )
    );
    
/**
 * hasMany associations
 *
 * @var array
 */
    public $hasMany = array(
            'Contact' => array(
                    'className' => 'Contact',
                    'foreignKey' => 'client_id',
                    'dependent' => false,
                    'conditions' => '',
                    'fields' => '',
                    'order' => '',
                    'limit' => '',
                    'offset' => '',
                    'exclusive' => '',
                    'finderQuery' => '',
                    'counterQuery' => ''
            ),
            'Service' => array(
                    'className' => 'Service',
                    'foreignKey' => 'client_id',
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