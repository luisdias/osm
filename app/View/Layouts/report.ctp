<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('OSM : Open Service Manager'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');		
                echo $this->Html->css('report');
                echo $this->Html->css('print','stylesheet',array('media' => 'print'));
		echo $scripts_for_layout;
	?>
</head>
<body>
<div id="main">    
    <?php echo $content_for_layout; ?>    
    <div id="footer"><br/>© Smartbyte 2011.</div>        
<?php echo $this->element('sql_dump'); ?>      
</div>
     
</body>
</html>