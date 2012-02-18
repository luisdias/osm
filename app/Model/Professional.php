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
 * Professional Model
 *
 * @property Address $Address
 * @property Service $Service
 * @property Skill $Skill
 */
class Professional extends AppModel {
public $actsAs = array('Searchable');      
public $displayField = 'professional_name';
public $validate = null;    
public $filterArgs = array(
    array('name' => 'professional_name', 'type' => 'like', 'field' => 'Professional.professional_name'),
);

public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    
    $this->validate = array(
        'professional_name' => array(                
            'rule' => 'notEmpty',
            'message' => __('Name is required',true)
            ),
        'email' => array(
            'allowEmpty' =>  true,				
            'rule' => array('email'),
            'message' => __('Invalid email',true),
        ),        
    );    
}
	//The Associations below have been created with all possible keys, those that are not needed can be removed


    public $hasOne = array(    
            'Address' => array(
                    'className' => 'Address',
                    'foreignKey' => 'entity_id',
                    'conditions' => array('Address.table_name' =>'professionals'),
            )
    );
    
    public $hasMany = array(
            'ProfessionalsService' => array(
                    'className' => 'ProfessionalsService',
                    'foreignKey' => 'professional_id',
                    'dependent' => false,
                    'conditions' => '',
                    'fields' => '',
                    'order' => '',
                    'limit' => '50',
                    'offset' => '',
                    'exclusive' => '',
                    'finderQuery' => 'SELECT `ProfessionalsService`.`id`, 
                        `ProfessionalsService`.`professional_id`, 
                        `ProfessionalsService`.`service_id`, 
                        `ProfessionalsService`.`total_time`, 
                        `ProfessionalsService`.`total_value`, 
                        `ProfessionalsService`.`payment_date`, 
                        `ProfessionalsService`.`created`, 
                        `ProfessionalsService`.`modified`, 
                        `Service`.`approval_date` 
                        FROM `professionals_services` AS `ProfessionalsService` 
                        LEFT JOIN `services` AS `Service` ON 
                        (`ProfessionalsService`.`service_id` = `Service`.`id`) 
                        WHERE `ProfessionalsService`.`professional_id` IN ( {$__cakeID__$} ) 
                        ORDER BY `Service`.`approval_date` DESC',
                    'counterQuery' => ''
            ),
            'SkillsProfessional' => array(
                    'className' => 'SkillsProfessional',
                    'foreignKey' => 'professional_id',
                    'dependent' => false,
                    'conditions' => '',
                    'fields' => '',
                    'order' => '',
                    'limit' => '',
                    'offset' => '',
                    'exclusive' => '',
                    'finderQuery' => 
                    'SELECT `SkillsProfessional`.`id`, 
                        `SkillsProfessional`.`skill_id`, 
                        `Skill`.`skill_desc`, 
                        `SkillsProfessional`.`professional_id`, 
                        `SkillsProfessional`.`rating`, 
                        `SkillsProfessional`.`created`, 
                        `SkillsProfessional`.`modified` 
                        FROM `skills_professionals` AS `SkillsProfessional` 
                        LEFT JOIN `skills` AS `Skill` ON 
                        ( `SkillsProfessional`.`skill_id` = `Skill`.`id` ) 
                        WHERE `SkillsProfessional`.`professional_id` IN ( {$__cakeID__$} )  
                        ORDER BY `SkillsProfessional`.`rating` DESC',
                    'counterQuery' => ''
            )        
    );

}
