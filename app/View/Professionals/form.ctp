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
<div class="professionals form">
<?php echo $this->Form->create('Professional');?>
	<fieldset>
		<legend><?php echo $currentAction . __(' Professional'); ?></legend>
	<?php echo $this->Form->input('id'); ?>
        <div id="tabs">
            <ul>
                    <li><a href="#tabs-1"><?php echo __('Main');?></a></li>
                    <li><a href="#tabs-2"><?php echo __('Bank');?></a></li>
                    <li><a href="#tabs-3"><?php echo __('Address');?></a></li>
            </ul>
            <div id="tabs-1">
                <?php
		echo $this->Form->input('professional_name',array('label'=>'Name','size'=>'50','maxlength'=>'50','title'=>__('Required field ') . __('Max length').' = 50'));
		echo $this->Form->input('birth_date',array('type'=>'text','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd')));
                $options = array('M'=>__('Male'),'F'=>__('Female'));
		echo $this->Form->input('sex',array('type'=>'select','empty'=>__('---Select---'),'options'=>$options));
		echo $this->Form->input('email',array('size'=>'50','maxlength'=>'100','title'=>__('Max length').' = 100'));
		echo $this->Form->input('phone',array('size'=>'15','maxlength'=>'15','title'=>__('Max length').' = 15'));
		echo $this->Form->input('social_security_number',array('size'=>'15','maxlength'=>'15','title'=>__('Max length').' = 15'));
                ?>
            </div>
            <div id="tabs-2">
                <?php
		echo $this->Form->input('bank',array('size'=>'15','maxlength'=>'15','title'=>__('Max length').' = 15'));
		echo $this->Form->input('account_number',array('size'=>'15','maxlength'=>'15','title'=>__('Max length').' = 15'));
		echo $this->Form->input('account_name',array('size'=>'30','maxlength'=>'30','title'=>__('Max length').' = 30'));
                ?>
            </div>
            <div id="tabs-3">
                <?php echo $this->element('address_form'); ?>
            </div>
        </div>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->tag('div',$this->Html->link(__('Cancel'),array('action' => 'index')),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>  
</div>