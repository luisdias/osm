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
<h2><?php echo __('Professionals for Service = ') . $fkid;?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
    <th><?php echo __('Professional');?></th>
    <th><?php echo __('Total time');?></th>
    <th><?php echo __('Total value');?></th>
    <th><?php echo __('Payment date');?></th>
    <th class="actions"><?php echo __('Actions');?></th>
</tr>
<?php
foreach ($professionalsServices as $professionalsService): ?>
<tr>
    <td>
    <?php echo $this->Html->link($professionalsService['Professional']['professional_name'], array('controller' => 'professionals', 'action' => 'view', $professionalsService['Professional']['id'])); ?>
    </td>
    <td><?php echo h($professionalsService['ProfessionalsService']['total_time']); ?>&nbsp;</td>
    <td><?php echo h($professionalsService['ProfessionalsService']['total_value']); ?>&nbsp;</td>
    <td><?php echo h($professionalsService['ProfessionalsService']['payment_date']); ?>&nbsp;</td>
    <td class="actions">
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $professionalsService['ProfessionalsService']['id'],'fkfield'=>$fkfield, 'fkid'=>$fkid)); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $professionalsService['ProfessionalsService']['id'],'fkfield'=>$fkfield, 'fkid'=>$fkid), null, __('Are you sure you want to delete # %s?', $professionalsService['ProfessionalsService']['id'])); ?>
    </td>
</tr>
<?php endforeach; ?>
</table>