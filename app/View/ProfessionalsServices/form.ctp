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
<div class="professionalsServices form">
<?php echo $this->Form->create('ProfessionalsService',$formOptions);?>
	<fieldset>
		<legend><?php echo $currentAction . __(' Professionals Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('professional_id',array('type'=>'hidden'));
		echo $this->Form->input('service_id',array('type'=>'hidden'));
                echo $this->Form->input('professional_name',array('type'=>'text','value'=>$this->Form->data['Professional']['professional_name'],'disabled'=>'disabled'));                
		echo $this->Form->input('total_time');
		//echo $this->Form->input('total_value');
		echo $this->Form->input('payment_date',array('type'=>'text','class'=>'datepicker','size'=>'10','maxlength'=>'10'));
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->tag('div',$this->Html->link(__('Cancel'),array('action' => 'index','fkfield'=>$this->passedArgs['fkfield'], 'fkid'=>$this->passedArgs['fkid'])),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>  
</div>