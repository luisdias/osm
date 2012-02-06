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
        echo $this->Form->input('Address.id');
        echo $this->Form->input('Address.street',array('size'=>'50','maxlength'=>'50','title'=>__('Min length').' = 5, '.__('Max length').' = 50'));
        echo $this->Form->input('Address.number',array('size'=>'10','maxlength'=>'10','title'=>__('Max length').' = 10'));
        echo $this->Form->input('Address.city',array('size'=>'30','maxlength'=>'30','title'=>__('Max length').' = 30'));
        echo $this->Form->input('Address.district',array('size'=>'20','maxlength'=>'20','title'=>__('Max length').' = 20'));
        echo $this->Form->input('Address.state',array('size'=>'10','maxlength'=>'10','title'=>__('Max length').' = 10'));
        echo $this->Form->input('Address.zip_code',array('size'=>'9','maxlength'=>'9','title'=>__('Max length').' = 9'));
        echo $this->Form->input('Address.country',array('size'=>'20','maxlength'=>'20','title'=>__('Max length').' = 20'));
        echo $this->Form->input('Address.entity_id',array('type'=>'hidden'));
        echo $this->Form->input('Address.table_name',array('type'=>'hidden'));
?>