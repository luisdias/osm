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
<div class="skillsProfessionals view">
<h2><?php  echo __('Skills Professional');?></h2>
	<dl>
		<dt><?php echo __('Skill'); ?></dt>
		<dd>
			<?php echo $this->Html->link($skillsProfessional['Skill']['id'], array('controller' => 'skills', 'action' => 'view', $skillsProfessional['Skill']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Professional'); ?></dt>
		<dd>
			<?php echo $this->Html->link($skillsProfessional['Professional']['id'], array('controller' => 'professionals', 'action' => 'view', $skillsProfessional['Professional']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($skillsProfessional['SkillsProfessional']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($skillsProfessional['SkillsProfessional']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($skillsProfessional['SkillsProfessional']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skills Professional'), array('action' => 'edit', $skillsProfessional['SkillsProfessional']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skills Professional'), array('action' => 'delete', $skillsProfessional['SkillsProfessional']['id']), null, __('Are you sure you want to delete # %s?', $skillsProfessional['SkillsProfessional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills Professionals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skills Professional'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('controller' => 'professionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
	</ul>
</div>
