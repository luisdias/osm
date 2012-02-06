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
 * ProfessionalsService Model
 *
 * @property Professional $Professional
 * @property Service $Service
 */
class ProfessionalsService extends AppModel {
    
public $displayField = 'id';

public $validate = null;    

public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    
    $this->validate = array(
        'professional_id' => array(
            'required' => true,             
            'rule' => 'notEmpty',
            'message' => __('Professional is required',true),
        ),
        'service_id' => array(
            'required' => true,             
            'rule' => 'notEmpty',
            'message' => __('Service is required',true),
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
            'Professional' => array(
                    'className' => 'Professional',
                    'foreignKey' => 'professional_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            ),
            'Service' => array(
                    'className' => 'Service',
                    'foreignKey' => 'service_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            )
    );
    
    public function beforeSave($options = array()) {
        $settings = ClassRegistry::init('Setting'); // load Setting model
        $setting = $settings->find('first');
        $hourlyRate = $setting['Setting']['hourly_rate'];
        
        if(!empty($this->data['ProfessionalsService']['total_time']) && !empty($hourlyRate))
                $this->data['ProfessionalsService']['total_value'] = $this->data['ProfessionalsService']['total_time'] * $hourlyRate;
        
        return true;
    }
}
