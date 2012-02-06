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
<div class="services form">
<?php echo $this->Form->create('Service');?>
	<fieldset>
		<legend><?php echo $currentAction . __(' Service'); ?></legend>
	<?php echo $this->Form->input('id'); ?>
        <div id="tabs">
            <ul>
                    <li><a href="#tabs-1"><?php echo __('Main');?></a></li>
                    <li><a href="#tabs-2"><?php echo __('Dates');?></a></li>
                    <li><a href="#tabs-3"><?php echo __('Description');?></a></li>
                    <li><a href="#tabs-4"><?php echo __('Values');?></a></li>
                    <li><a href="#tabs-5"><?php echo __('Address');?></a></li>
            </ul>
            <div id="tabs-1">
                <?php 
		echo $this->Form->input('client_id',array('empty'=>__('---Select---',true),'title'=>__('Required field ')));                
		echo $this->Form->input('service_state_id',array('empty'=>__('---Select---',true),'title'=>__('Required field ')));
		echo $this->Form->input('service_type_id',array('empty'=>__('---Select---',true),'title'=>__('Required field ')));
                ?>    
            </div>
            <div id="tabs-2">
                <?php
		echo $this->Form->input('approval_date',array('type'=>'text','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd')));
		echo $this->Form->input('expiration_date',array('type'=>'text','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd')));
		echo $this->Form->input('payment_date',array('type'=>'text','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd')));
		echo $this->Form->input('begin_date',array('type'=>'text','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd')));
		echo $this->Form->input('end_date',array('type'=>'text','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd')));
                ?>
            </div>
            <div id="tabs-3">
                <?php
		echo $this->Form->input('service_description',array('title'=>__('Free text')));
                ?>
            </div>
            <div id="tabs-4">
                <?php                
		echo $this->Form->input('estimated_value',array('title'=>__('Numeric field')));
		echo $this->Form->input('real_value',array('title'=>__('Numeric field')));
		echo $this->Form->input('discount_value',array('title'=>__('Numeric field')));
		echo $this->Form->input('paid_value',array('title'=>__('Numeric field')));
                ?>                
            </div>
            <div id="tabs-5">
                <?php echo $this->element('address_form'); ?> 
            </div>
            
        </div>                
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->tag('div',$this->Html->link(__('Cancel'),array('action' => 'index')),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>  
</div>