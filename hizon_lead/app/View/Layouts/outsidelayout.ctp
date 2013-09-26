<?php 
$cakeDescription = __d('hizon_dev', 'Hizon Lead Management App');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $this->Html->charset(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>
	<?php echo $cakeDescription ?>:
	<?php echo $title_for_layout; ?>
</title>
<?php 
	echo $this->Html->css('main');
?>
<!--[if IE]> <link href="<?php echo $this->webroot; ?>/css/ie.css" rel="stylesheet" type="text/css"> <![endif]-->
<?php 

    echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js');
    echo $this->Html->script('jquery_ui_custom');
    echo $this->Html->script('plugins/charts/excanvas.min');
    echo $this->Html->script('plugins/charts/jquery.sparkline.min');
	
	echo $this->Html->script('plugins/forms/jquery.tagsinput.min');
	echo $this->Html->script('plugins/forms/jquery.inputlimiter.min');
	echo $this->Html->script('plugins/forms/jquery.maskedinput.min');
	echo $this->Html->script('plugins/forms/jquery.autosize');
	echo $this->Html->script('plugins/forms/jquery.ibutton');
	echo $this->Html->script('plugins/forms/jquery.dualListBox');
	echo $this->Html->script('plugins/forms/jquery.validate');
	echo $this->Html->script('plugins/forms/jquery.uniform.min');
	echo $this->Html->script('plugins/forms/jquery.select2.min');
	echo $this->Html->script('plugins/forms/jquery.cleditor');
	
	echo $this->Html->script('plugins/uploader/plupload');	
	echo $this->Html->script('plugins/uploader/plupload.html4');	
	echo $this->Html->script('plugins/uploader/plupload.html5');	
	echo $this->Html->script('plugins/uploader/jquery.plupload.queue');	
	
	echo $this->Html->script('plugins/wizard/jquery.form.wizard');	
	echo $this->Html->script('plugins/wizard/jquery.form');	
	
	echo $this->Html->script('plugins/ui/jquery.collapsible.min');	
	echo $this->Html->script('plugins/ui/jquery.timepicker.min');	
	echo $this->Html->script('plugins/ui/jquery.jgrowl.min');	
	echo $this->Html->script('plugins/ui/jquery.pie.chart');	
	echo $this->Html->script('plugins/ui/jquery.fullcalendar.min');	
	echo $this->Html->script('plugins/ui/jquery.elfinder');	
	echo $this->Html->script('plugins/ui/jquery.fancybox');	
	
	echo $this->Html->script('plugins/tables/jquery.dataTables.min');
	
	echo $this->Html->script('plugins/bootstrap/bootstrap.min');	
	echo $this->Html->script('plugins/bootstrap/bootstrap-bootbox.min');	
	echo $this->Html->script('plugins/bootstrap/bootstrap-progressbar');	
	echo $this->Html->script('plugins/bootstrap/bootstrap-colorpicker');	
	
	echo $this->Html->script('functions/custom');	
?>
</head>

<body>


<!-- Main wrapper -->
<div class="login-wrapper">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

</div>
<!-- /main wrapper -->

</body>
</html>
