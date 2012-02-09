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
<div class="settings form">
<?php echo $this->Form->create('Setting');?>
	<fieldset>
		<legend><?php echo $currentAction . __(' Setting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('my_company_name',array('size'=>'50','maxlength'=>'50','title'=>__('Required field ') . __('Max length').' = 50'));
		echo $this->Form->input('hourly_rate',array('title'=>__('Required field ') . __('Numeric field')));
                $options=array('eng'=>'English','spa'=>'Spanish','fre'=>'French','ita'=>'Italian','por'=>'Portuguese','bra'=>'Brazilian-Portuguese');
		echo $this->Form->input('language',array('type'=>'select','options'=>$options));
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->tag('div',$this->Html->link(__('Cancel'),array('action' => 'index')),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>
</div>