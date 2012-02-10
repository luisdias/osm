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
echo $this->Form->create('Service',array('url' => array_merge(array('action' => 'find'), $this->params['pass'])));
echo $this->Form->input('service_state_id',array('div' => false,'empty'=>__('---All---')));
echo $this->Form->input('service_type_id',array('div' => false,'empty'=>__('---All---')));
echo $this->Form->submit(__('Filter'));
echo $this->Form->end();
echo $this->Html->tag('span',$this->Html->link(__('Reports'), array('action' => 'report')),array('class'=>'floatRight'));
?>