<!doctype html>
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title> Admin Panel</title>
	<link href="<?php echo Configure::read('HTTP_PATH');?>/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
        <link href="<?php echo Configure::read('HTTP_PATH');?>/img/favicon.ico" type="image/x-icon" rel="icon" />
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
	<!-- CSS Styles -->
	<?php echo $this->Html->css('admin/style.css');?>
	<?php echo $this->Html->css('admin/colors.css');?>
	<?php echo $this->Html->css('admin/jquery.tipsy.css');?>
	<?php echo $this->Html->css('admin/jquery.wysiwyg.css');?>
	<?php echo $this->Html->css('admin/jquery.datatables.css');?>
	<?php echo $this->Html->css('admin/jquery.nyromodal.css');?>
	<?php echo $this->Html->css('admin/jquery.datepicker.css');?>
	<?php echo $this->Html->css('admin/jquery.fileinput.css');?>
	<?php echo $this->Html->css('admin/jquery.fullcalendar.css');?>
	<?php echo $this->Html->css('admin/jquery.visualize.css');?>
    <?php echo $this->Html->css('admin/demo.css');?>
    <?php echo $this->Html->css('../js/jscalendar/skins/aqua/theme');?>
    <?php echo $this->Html->script('jquery.js'); ?>
    <?php echo $this->Html->script('common.js'); ?>
	<?php echo $this->Html->script('admin/managecontent.js'); ?>
    <?php echo $this->Html->script('jscalendar/calendar.js'); ?>
    <?php echo $this->Html->script('jscalendar/lang/calendar-en.js'); ?>
    
  
       <?php echo $this->Html->script('ckeditor/ckeditor.js');?>
        <?php echo $this->Html->script('ckfinder/ckfinder.js'); ?>

	<!-- Google WebFonts -->
	<!--<link href='http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css'>-->
	<?php echo $this->Html->script('admin/libs/modernizr-1.7.min.js'); ?>
    <style> 
	  .odd{background-color: white;}
	  .even{background-color: gray;} 
	</style>
    <script>
	function alternate(id){ 
		if(document.getElementsByTagName){ 
			var table = document.getElementById(id);  
			var rows = table.getElementsByTagName("tr"); 
			for(i = 0; i < rows.length; i++){   
				//manipulate rows <br>  
				if(i % 2 == 0){   
					rows[i].className = "even"; 
				}else{  
					rows[i].className = "odd";       
				}	     
			} 
		}  
	}

	</script>
    
    
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	
    <?php echo $this->Html->script('fancybox/jquery.fancybox-1.3.4.pack.js'); ?>
    <?php echo $this->Html->css('fancybox/jquery.fancybox-1.3.4.css');?>


<script type="text/javascript">
var j = jQuery.noConflict();
// Use jQuery via $j(...)
j(document).ready(function(){
});
</script>
	
</head>

<!-- Add class .fixed for fixed layout. You would need also edit CSS file for width -->
<body>

	<div class="fixed-wraper">

	<!-- Aside Block -->
	<section role="navigation">
		<!-- Header with logo and headline -->
		<header>
			 <?php if($ADMIN_DETAIL['siteimage'])echo $this->Html->image('site_config/'.$ADMIN_DETAIL['siteimage'],array('style'=>'width:225px; height:65px'));  ?>			
		</header>
		
		<!-- User Info -->
			<section id="user-info">				
				<?php if($ADMIN_DETAIL['adminimage']) { ?>
				<?php echo $this->Html->image('site_config/'.$ADMIN_DETAIL['adminimage']);?>
				<?php } else { ?>
				<?php echo $this->Html->image('admin/sample_user.png');?>
				<?php } ?>
				<div>
					<a href="#" title="Account Settings and Profile Page"><?php if($loggedIn): ?><? echo ucfirst($ADMIN_DETAIL['adminname']); ?><?php endif; ?></a>
		       
					<em>Administrator Hello</em>                
			
					<ul>
						<li><?php //echo $this->Html->link('view website', array('controller'=>'../users', 'action' => 'index'),array('class'=>'button-link','rel'=>'tooltip','title'=>'view website','target'=>'_blank')); ?>
			    </li>
						<li><?php echo $this->Html->link('Logout', array('controller'=>'franchises', 'action' => 'user_logout'), array('class'=>'button-link','rel'=>'tooltip','title'=>'Logout'));?>
						</li>
					</ul>
				</div>
			</section>
		<!-- /User Info -->
		
		<!-- Main Navigation -->
		<nav id="main-nav">
			<ul>
				
		<!--Franchise manager-->	
				<li class="<?php if($this->params['controller']=="franchises" && ($this->params['action']=="admin_add" || $this->params['action']=="admin_index")) echo "current"; ?>">
					<a href="" title="" class="press">Franchises Manager</a>
					<ul>
				<li class="<?php if($this->params['controller']=="franchises" && $this->params['action']=="admin_index") echo "current"; ?>"><a href="<?php echo Configure::read('HTTP_PATH_IMAGE');?>/admin/franchises/index">Manage</a></li>
					</ul>
				</li>
		<!-- Franchise Booking managar-->		
		<li class="<?php if($this->params['controller']=="franchises" && ($this->params['action']=="admin_franchises_calculate_price" || $this->params['action']=="admin_index")) echo "current"; ?>">
					<a href="" title="" class="press">Franchises Booking</a>
					<ul>
				<li class="<?php if($this->params['controller']=="franchises" && $this->params['action']=="admin_franchises_calculate_price") echo "current"; ?>"><a href="<?php echo Configure::read('HTTP_PATH_IMAGE');?>/admin/franchises/franchises_calculate_price">Book Parcel</a></li>
					</ul>
				</li>
				

							
								
				
			</ul>
		</nav>
		<!-- /Main Navigation -->
		
	</section>
	<!-- /Aside Block -->
	
	<!-- Main Content -->
	<section role="main">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
		<?php //echo $this->fetch('content'); ?>
        
     </section> 
	<!-- /Fixed Layout Wrapper -->

	<!-- JS Libs at the end for faster loading -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	
	<?php echo $this->Html->script('admin/libs/selectivizr.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.nyromodal.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.tipsy.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.wysiwyg.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.datatables.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.datepicker.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.fileinput.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.fullcalendar.min.js'); ?>
	<?php echo $this->Html->script('admin/jquery/excanvas.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.visualize.js'); ?>
	<?php echo $this->Html->script('admin/jquery/jquery.visualize.tooltip.js'); ?>
	<?php echo $this->Html->script('admin/script.js'); ?>
	
</body>
</html>
