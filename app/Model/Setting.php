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
 * Setting Model
 *
 */
class Setting extends AppModel {
public $displayField = 'id';

public $validate = null;    

public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    
    $this->validate = array(
        'my_company_name' => array(                
            'rule' => 'notEmpty',
            'message' => __('Company name is required',true)
            ),
        'hourly_rate' => array(                
            'rule' => 'notEmpty',
            'message' => __('Hourly rate is required',true)
            ),
        'language' => array(                
            'rule' => 'notEmpty',
            'message' => __('Language is required',true)
            ),         
    );    
}       
}
