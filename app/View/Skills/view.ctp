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
<div class="skills view">
<h2><?php  echo __('Skill');?></h2>
	<dl>
		<dt><?php echo __('Skill Desc'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['skill_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skill'), array('action' => 'edit', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skill'), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Professionals');?></h3>
	<?php if (!empty($skill['SkillsProfessional'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Professional Name'); ?></th>
                <th><?php echo __('Rating'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($skill['SkillsProfessional'] as $professional): ?>
		<tr>
			<td><?php echo $professionals[$professional['professional_id']];?></td>
			<td><?php echo $this->element('rating',array('rating'=>$professional['rating']));?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>