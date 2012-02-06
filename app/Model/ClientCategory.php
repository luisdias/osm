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
 * ClientCategory Model
 *
 * @property Client $Client
 */
class ClientCategory extends AppModel {
    
    public $displayField = 'client_category_desc';

    public $validate = null;   

    public function __construct($id = false, $table = null, $ds = null) {
        parent::__construct($id, $table, $ds);

        $this->validate = array(
            'client_category_desc' => array(                
                'rule' => 'notEmpty',
                'message' => __('Description is required',true)
                ),
        );    
    }
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' =>'',
			'counterQuery' => ''
		)
	);

}
