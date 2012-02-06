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
<div class="professionals view">
<h2><?php  echo __('Professional');?></h2>
	<dl>
		<dt><?php echo __('Professional Name'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['professional_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social Security Number'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['social_security_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['bank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Number'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['account_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Name'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['account_name']); ?>
			&nbsp;
		</dd>
                <?php echo $this->element('address_view',array('currentModel' => $professional)); ?>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Professional'), array('action' => 'edit', $professional['Professional']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Professional'), array('action' => 'delete', $professional['Professional']['id']), null, __('Are you sure you want to delete # %s?', $professional['Professional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Services');?></h3>
	<?php if (!empty($professional['ProfessionalsService'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Service'); ?></th>
                <th><?php echo __('Approval date'); ?></th>
                <th><?php echo __('Total time'); ?></th>
                <th><?php echo __('Total value'); ?></th>
                <th><?php echo __('Payment date'); ?></th>                
	</tr>
	<?php
		$i = 0;
		foreach ($professional['ProfessionalsService'] as $professionalsService): ?>
		<tr>
                    <td><?php echo $professionalsService['service_id'];?></td>
                    <td><?php echo $professionalsService['Service']['approval_date'];?></td>
                    <td><?php echo $professionalsService['total_time'];?></td>
                    <td><?php echo $professionalsService['total_value'];?></td>
                    <td><?php echo $professionalsService['payment_date'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Skills');?></h3>
	<?php if (!empty($professional['SkillsProfessional'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
            <th><?php echo __('Skill'); ?></th>
            <th><?php echo __('Rating'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($professional['SkillsProfessional'] as $skillsProfessional): ?>
		<tr>
                    <td><?php echo $skillsProfessional['Skill']['skill_desc'];?></td>
                    <td><?php echo $this->element('rating',array('rating'=>$skillsProfessional['rating']));?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
