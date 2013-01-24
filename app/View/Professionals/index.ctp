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
<div class="professionals index">
	<h2><?php echo __('Professionals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('professional_name');?></th>
			<th><?php echo $this->Paginator->sort('birth_date');?></th>
			<th><?php echo $this->Paginator->sort('sex');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($professionals as $professional): ?>
	<tr>
		<td><?php echo h($professional['Professional']['professional_name']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['birth_date']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['sex']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['email']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['phone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $professional['Professional']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $professional['Professional']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $professional['Professional']['id']), null, __('Are you sure you want to delete # %s?', $professional['Professional']['id'])); ?>
                        <?php echo $this->Html->link(__('Skills'), array('plugin' => null,'controller'=>'skills_professionals','action' => 'index','fkfield'=>'professional_id','fkid'=>$professional['Professional']['id'])); ?>                    
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('paginator'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Professional'), array('action' => 'add')); ?></li>
	</ul>
</div>