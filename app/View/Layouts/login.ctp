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
    echo $scripts_for_layout;
?>
</head>

<body>
    <div id="container">
    <div id="header">
            <h2>OSM - Open Service Manager</h2>
    <div id="topmenu">
    </div>
    </div>
    <div id="top-panel">
    </div>
    <div id="wrapper">
        <div id="content">
        <?php echo $this->Session->flash(); ?>
        <?php echo $content_for_layout; ?>
        </div>
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