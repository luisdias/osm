<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<title>
        <?php echo 'OSM : ' . $title_for_layout; ?>
</title>
<?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('theme');    
    echo $this->Html->css('style');
    echo $this->Html->css('jquery-ui-1.8.17.custom');
    echo $this->Html->css('tipsy');
    echo $this->Html->css('jquery.ui.stars');
    echo $this->Html->script(array('jquery-1.7.1.min.js','jquery-ui-1.8.17.custom.min.js','jquery.tipsy.js','default.js')); 
    echo $scripts_for_layout;
?>
<script type="text/javascript">
    firstLevel = "<?php echo Router::url('/',true); ?>";
</script>
</head>

<body>
    <div id="container">
    <div id="header">
        <h2>
            OSM - Open Service Manager
            <span class="floatRight">
                <?php echo AuthComponent::user('username'); ?> | 
                <?php echo $this->Html->link(__('Logout'), array('plugin' => null,'controller' => 'users', 'action' => 'logout'),array('class'=>'topLink')); ?>                
            </span>
        </h2>
    <div id="topmenu">
        <div class="ui-tabs ui-widget ui-corner-all">            
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-corner-all">
            <?php 
            $cssDefaultClass = 'ui-state-default ui-corner-top';
            $cssCurrentClass = 'ui-state-default ui-corner-top ui-tabs-selected ui-state-active';
            $ctrl = $this->params['controller'];
            ?>

            <?php $cssClass = ( $ctrl == 'clients') ? $cssCurrentClass : $cssDefaultClass; ?>
            <li class="<?php echo $cssClass; ?>"><?php echo $this->Html->link(__('Clients'), array('plugin' => null,'controller' => 'clients', 'action' => 'index')); ?></li>

            <?php $cssClass = ( $ctrl == 'contacts') ? $cssCurrentClass : $cssDefaultClass; ?>
            <li class="<?php echo $cssClass; ?>"><?php echo $this->Html->link(__('Contacts'), array('plugin' => null,'controller' => 'contacts', 'action' => 'index')); ?></li>

            <?php $cssClass = ( $ctrl == 'services' || $ctrl == 'professionals_services') ? $cssCurrentClass : $cssDefaultClass; ?>
            <li class="<?php echo $cssClass; ?>"><?php echo $this->Html->link(__('Services'), array('plugin' => null,'controller' => 'services', 'action' => 'index')); ?></li>

            <?php $cssClass = ( $ctrl == 'professionals' || $ctrl == 'skills_professionals') ? $cssCurrentClass : $cssDefaultClass; ?>
            <li class="<?php echo $cssClass; ?>"><?php echo $this->Html->link(__('Professionals'), array('plugin' => null,'controller' => 'professionals', 'action' => 'index')); ?></li>

            <?php $cssClass = ( $ctrl == 'skills') ? $cssCurrentClass : $cssDefaultClass; ?>
            <li class="<?php echo $cssClass; ?>"><?php echo $this->Html->link(__('Skills'), array('plugin' => null,'controller' => 'skills', 'action' => 'index')); ?></li>

            <?php $cssClass = ( $ctrl == 'report_manager') ? $cssCurrentClass : $cssDefaultClass; ?>
            <li class="<?php echo $cssClass; ?>"><?php echo $this->Html->link(__('Reports'), array('plugin' => 'report_manager','controller' => null, 'action' => 'reports')); ?></li>
            
            <?php 
            if ( AuthComponent::user('role') == "admin" ) {
                if ( $ctrl == 'client_categories' || 
                     $ctrl == 'client_types' ||    
                     $ctrl == 'service_states' ||
                     $ctrl == 'service_types' ||
                     $ctrl == 'users' ||
                     $ctrl == 'settings' ) 
                    $cssClass = $cssCurrentClass;
                else
                    $cssClass = $cssDefaultClass;
                ?>
                <li class="<?php echo $cssClass; ?>">
                <?php echo $this->Html->link(__('Admin'), array('plugin' => null,'controller' => 'client_categories', 'action' => 'index')); ?>
                </li>
            <?php } ?>
          </ul>
        </div>
    </div>
    </div>
    <div id="top-panel">
        <div id="panel">
                <?php 
                if ( $ctrl == 'client_categories' || 
                     $ctrl == 'client_types' ||    
                     $ctrl == 'service_states' ||
                     $ctrl == 'service_types' ||
                     $ctrl == 'users' ||
                     $ctrl == 'settings' ) {
                    echo $this->element('panel');
                } else {
                    if ( $this->params['action'] == 'index' || $this->params['action'] == 'find' ) {
                        if ( $this->_getElementFileName($ctrl.DS.'panel') )
                            echo $this->element($ctrl.DS.'panel');                            
                    }
                }
                ?>            
        </div>
    </div>
    <div id="wrapper">
        <div id="content">
        <?php echo $this->Session->flash(); ?>
        <?php echo $content_for_layout; ?>
        </div>
        <?php 
        if ( $this->params['action'] == 'index' && $this->_getElementFileName($ctrl.DS.'sidebar') )
            echo $this->element($ctrl.DS.'sidebar');
        ?>
    </div>
    <div id="footer">
    <div id="credits">
            Web Development by <a target="blank" href="http://www.smartbyte.com.br">Smartbyte</a> | 
            Template by <a target="blank" href="http://www.bloganje.com">Bloganje</a>            
    </div>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>    
</body>
</html>