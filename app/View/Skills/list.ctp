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
<ul>
    <li><h3><a href="#" class="user"><?php echo __('Skills'); ?></a></h3>
        <ul>
        <?php
        foreach ($skills as $skill):
            echo '<li><div class="draggable" skill_id="';
            echo $skill['Skill']['id'];
            echo '">';
            echo $skill['Skill']['skill_desc'];
            echo '</div></li>';
        endforeach; 
        ?>
        </ul>
    </li>
</ul>