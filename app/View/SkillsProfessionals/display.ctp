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
<h2><?php echo __('Skills of Professional ');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
                <th><?php echo __('Skill');?></th>
                <th><?php echo __('Rating');?></th>
                <th class="actions"><?php echo __('Actions');?></th>
</tr>
<?php
foreach ($skillsProfessionals as $skillsProfessional): ?>
<tr>
        <td>
                <?php echo $this->Html->link($skillsProfessional['Skill']['skill_desc'], array('controller' => 'skills', 'action' => 'view', $skillsProfessional['Skill']['id'])); ?>
        </td>
        <td><?php echo $this->element('rating',array('rating'=>$skillsProfessional['SkillsProfessional']['rating'])); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skillsProfessional['SkillsProfessional']['id'],'fkfield'=>$fkfield, 'fkid'=>$fkid)); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skillsProfessional['SkillsProfessional']['id'],'fkfield'=>$fkfield, 'fkid'=>$fkid), null, __('Are you sure you want to delete # %s?', $skillsProfessional['SkillsProfessional']['id'])); ?>
        </td>
</tr>
<?php endforeach; ?>
</table>