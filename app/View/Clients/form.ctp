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
?>
<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo $currentAction . __(' Client'); ?></legend>
	<?php echo $this->Form->input('id'); ?>
        <div id="tabs">
            <ul>
                    <li><a href="#tabs-1"><?php echo __('Main');?></a></li>
                    <li><a href="#tabs-2"><?php echo __('Address');?></a></li>
            </ul>
            <div id="tabs-1">
                <?php 
		echo $this->Form->input('client_category_id',array('empty'=>__('---Select---'),'title'=>__('Required field ')));
		echo $this->Form->input('client_type_id',array('empty'=>__('---Select---'),'title'=>__('Required field ')));                
		echo $this->Form->input('client_name',array('size'=>'50','maxlength'=>'50','title'=>__('Required field ') . __('Max length').' = 50'));
		echo $this->Form->input('corporate_name',array('size'=>'50','maxlength'=>'50','title'=>__('Max length').' = 50'));
		echo $this->Form->input('phone',array('size'=>'15','maxlength'=>'15','title'=>__('Max length').' = 15'));
		echo $this->Form->input('federal_tax_number',array('size'=>'18','maxlength'=>'18','title'=>__('Max length').' = 18'));
		echo $this->Form->input('email',array('size'=>'50','maxlength'=>'100','title'=>__('Max length').' = 100'));
		echo $this->Form->input('website',array('size'=>'50','maxlength'=>'100','title'=>__('Max length').' = 100'));
                ?>
            </div>
            <div id="tabs-2">
                <?php echo $this->element('address_form'); ?>
            </div>
        </div>
        </fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->tag('div',$this->Html->link(__('Cancel'),array('action' => 'index')),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>    
</div>