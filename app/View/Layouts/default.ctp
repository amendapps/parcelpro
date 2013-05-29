<!DOCTYPE html>
<html>
<head>
<title>Parcel Service</title>
<meta charset="utf-8">
<meta name="Description" content="" />
<meta name="Keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width">

	<?php echo $this->Html->css('user/style.css');?>
	<?php echo $this->Html->css('admin/jquery.datepicker.css');?>
		<?php echo $this->Html->css('jquery-ui.css');?>
<!--[if lt IE 9]>

<script src="js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php echo $this->Html->script('user/jquery.min.js');?>
<?php #echo $this->Html->script('jquery-1.7.2.js');?>

<?php echo $this->Html->script('script.js');?>
<?php echo $this->Html->script('user/jquery.cycle.all.js');?>
<?php echo $this->Html->script('jquery-ui.js'); ?>
</head>
<body>
<div id="<?php if(!empty($home_page)) echo 'page'; else echo 'inner-page';?>">
	<!-- header menu start-->
    <?php echo $this->element('header');?>
    <!-- header end-->
    
    <!-- start main content-->
  		<?php //echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
		  <!-- End main content-->
  <!-- Footer start-->
  <?php echo $this->element('footer');?>
    <!-- footer end-->
   </div>
</body>
</html>
