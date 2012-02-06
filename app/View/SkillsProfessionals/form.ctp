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
<?php echo $this->Html->script(array('jquery.ui.stars.js')); ?>
<?php echo $this->Html->script(array('skills-professionals-form.js')); ?>
<div class="skillsProfessionals form">
<?php echo $this->Form->create('SkillsProfessional',$formOptions);?>    
	<fieldset>
		<legend><?php echo $currentAction . __(' Skills Professional'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('skill_id',array('type'=>'hidden'));
		echo $this->Form->input('professional_id',array('type'=>'hidden'));
                echo $this->Form->input('skill_desc',array('type'=>'text','value'=>$this->Form->data['Skill']['skill_desc'],'disabled'=>'disabled'));
                $options = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5');
                echo $this->Html->tag('div',$this->Form->select('rating',$options),array('id'=>'stars-wrapper'));
                echo $this->Form->input('rating',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->tag('div',
        $this->Html->link(__('Cancel'),array('action' => 'index','fkfield'=>$this->passedArgs['fkfield'], 'fkid'=>$this->passedArgs['fkid'])),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>
</div>