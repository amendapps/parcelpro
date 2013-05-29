<!doctype html>
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title>Admin Panel</title>
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
						<li><?php echo $this->Html->link('Logout', array('controller'=>'users', 'action' => 'logout'), array('class'=>'button-link','rel'=>'tooltip','title'=>'Logout'));?>
						</li>
					</ul>
				</div>
			</section>
		<!-- /User Info -->
		
		<!-- Main Navigation -->
		<nav id="main-nav">
			<ul>
				<li class="<?php if($this->params['controller']=="users" && $this->params['action']=="admin_welcome") echo "current"; ?>">
				<?php echo $this->Html->link('Dashboard', array('controller'=>'users', 'action' => 'admin_welcome'),array('class'=>'dashboard no-submenu'));?>
				</li>

				
				
				
								
				
				
				<!--page manager-->	
				<li class="<?php if($this->params['controller']=="companies" && ($this->params['action']=="admin_add" || $this->params['action']=="admin_index")) echo "current"; ?>">
					<a href="" title="" class="press">Page Manager</a>
					<ul>
						<!--<li class="<?php //if($this->params['controller']=="pages" && $this->params['action']=="admin_add") echo "current"; ?>"><?php //echo $this->Html->link('Add', array('controller'=>'pages', 'action' => 'add'));?></li>-->
						<li class="<?php if($this->params['controller']=="pages" && $this->params['action']=="admin_index") echo "current"; ?>"><?php echo $this->Html->link('Manage pages', array('controller'=>'pages', 'action' => 'index'));?></li>
						
					</ul>
				</li>
				
								
				
				
				<!--Company manager-->	
				<li class="<?php if($this->params['controller']=="companies" && ($this->params['action']=="admin_add" || $this->params['action']=="admin_index")) echo "current"; ?>">
					<a href="" title="" class="press">Company Manager</a>
					<ul>
						<li class="<?php if($this->params['controller']=="companies" && $this->params['action']=="admin_add") echo "current"; ?>"><?php echo $this->Html->link('Add', array('controller'=>'companies', 'action' => 'add'));?></li>
						<li class="<?php if($this->params['controller']=="companies" && $this->params['action']=="admin_index") echo "current"; ?>"><?php echo $this->Html->link('Manage companies', array('controller'=>'companies', 'action' => 'index'));?></li>
						<li class="<?php if($this->params['controller']=="companies" && $this->params['action']=="admin_add_country") echo "current"; ?>"><?php echo $this->Html->link('Add Country', array('controller'=>'companies', 'action' => 'add_country'));?></li>
					</ul>
				</li>
				
							
				<!--Quotation manager-->	
				<li class="<?php if($this->params['controller']=="quotations" && ($this->params['action']=="admin_add" || $this->params['action']=="admin_index")) echo "current"; ?>">
					<a href="" title="" class="press">Quotation Manager</a>
					<ul>
						<li class="<?php if($this->params['controller']=="quotations" && $this->params['action']=="admin_add") echo "current"; ?>"><?php echo $this->Html->link('Add', array('controller'=>'quotations', 'action' => 'add'));?></li>
						<li class="<?php if($this->params['controller']=="quotations" && $this->params['action']=="admin_index") echo "current"; ?>"><?php echo $this->Html->link('Manage quotations', array('controller'=>'quotations', 'action' => 'index'));?></li>
					</ul>
				</li>
			
						
                <!--Franchise manager-->	
				<li class="<?php if($this->params['controller']=="franchises" && ($this->params['action']=="admin_approve" || $this->params['action']=="admin_approve")) echo "current"; ?>">
					<a href="" title="" class="press">Approved Franchises Manager</a>
					<ul>
												
                                                <li class="<?php if($this->params['controller']=="franchises" && $this->params['action']=="admin_showapprove") echo "current"; ?>"><?php echo $this->Html->link('Manage franchises', array('controller'=>'franchises', 'action' => 'showapprove'));?></li>
					</ul>
				</li>
				
				 <!--Comment manager-->	
				<li class="<?php if($this->params['controller']=="posts" && ($this->params['action']=="admin_comment_approve" || $this->params['action']=="admin_comment_approve")) echo "current"; ?>">
					<a href="" title="" class="press">Approve comments</a>
					<ul>
												
                                                <li class="<?php if($this->params['controller']=="posts" && $this->params['action']=="admin_comment_approve") echo "current"; ?>"><?php echo $this->Html->link('Approve comment', array('controller'=>'posts', 'action' => 'admin_comment_approve'));?></li>
					</ul>
				</li>
		
			 <!--Comment manager-->	
				<li class="<?php if($this->params['controller']=="trackers" && ($this->params['action']=="admin_booking_detail" || $this->params['action']=="admin_booking_detail")) echo "current"; ?>">
					<a href="" title="" class="press">Booking & Tracking Manager</a>
					<ul>												
          				<li class="<?php if($this->params['controller']=="trackers" && ($this->params['action']=="admin_booking_detail" || $this->params['action']=="admin_booking_detail")) echo "current"; ?>">
						<?php echo $this->Html->link('Track Pracel', array('controller'=>'trackers', 'action' => 'admin_booking_detail'));?></li>
					</ul>
				</li>
				
        
                        	
								
				
				
				<li class="<?php if(($this->params['controller']=="sites" || $this->params['controller']=="users") and ($this->params['action']=="admin_siteconfig" || $this->params['action']=="admin_changepassword"))
					echo "current"; ?>"><a href="" title="" class="settings">Settings</a>
					<ul>
						<li <?php //if($this->params['controller']=="sites") echo "class=\"current\""; ?> ><?php //echo $this->Html->link('Site Configuration', array('controller'=>'sites', 'action' => 'admin_siteconfig'));?></li>
						
						<li class="<?php if($this->params['controller']=="users") echo "current"; ?>"><?php echo $this->Html->link('Change Password', array('controller'=>'users', 'action' => 'admin_changepassword'));?></li>
						
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /Main Navigation -->
		
	</section>
	<!-- /Aside Block -->
	
	<!-- Main Content -->
	<section role="main">
		<h1 style="font-size:14px; color:#C00"><?php echo $this->Session->flash(); ?></h1></br>
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
