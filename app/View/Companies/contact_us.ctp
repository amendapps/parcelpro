
<div id="content">

	<!-- Sidebar -->
		 <div id="sidebar-inner">
		<!-- quote bar-->
				
		
		<!-- end of quotebar -->
		
			<p>It's easy to contact us and we normally answer emails within a couple of hours. If its urgent then please give us a call on the number below.</p>
			<h1>Telephone</h1>
			<p>We do offer a callback service if you'd like to speak with a member of our team. Please leave your name, number and a short message on our voicemail and we'll return your call as soon as we can.</p>
			<div>
				<h1 style="color: #666; font-size:18px; margin-bottom:0px;">Call Now:<strong style="color:#206DC5"> </strong></h1>

			</div>
			<br>
					
		</div>
		<!-- Sidebar -->
	
		<!-- Page Content -->
		<div id="the-content">
			<div class="contact-content">
								<!-- Email -->
					<h1>Contact Us Via E-mail</h1>
										
					<p>Please ensure you visit our <a href="/help">Help</a> section before contacting customer services, as you will find answers to many questions there. Our offices are open Monday to Friday 09:00 to 17:00. Saturday &amp; Sunday closed. These are the times we concentrate on a rapid response to queries, however we do operate from our offices from 8.00 till 6.00 5 days a week.</p>
					<!--
					<div style="background:url('/images/newsinfo.png') no-repeat; background-color:#fff; border:1px solid #ccc; margin-bottom:5px;">
						<ul id="newsinfo" style="margin:0px; padding-right:8px;">
							<li><h2>Email Problems</h2>
								Please note that we are currently experiencing problems with the automated emails that are sent out from our site. This does not effect the ability to book your orders.
								<br/><br/>We are looking into the problem and hopefully resolve soon.</p>
							</li>
						</ul>
						
					</div>
					
					<p>Please send your email queries directly to us on <img style="vertical-align:text-bottom;" src="/images/mail.png"/>.</p>
					-->
					
					
					<p>Complete the form below or alternatively contact us directly on .</p>
					
										<ul class="wider-label white-box">
						<li>
						<?php echo $this->Form->create('Contact',array('url'=>array('controller'=>'companies','action'=>'contact_us')));?>
							<label style="width:160px;">Your Name:<span>*</span></label>
							<?php echo $this->Form->input('name',array('label'=>''));?>
						</li>
						<li>
							<label style="width:160px;">Contact Email:<span>*</span></label>
						   <?php echo $this->Form->input('sender_email',array('label'=>''));?>
						</li>
						<li>
							<label style="width:160px;">Contact Telephone:</label>
						   <?php echo $this->Form->input('phoneno',array('label'=>''));?>
						</li>
						<li>
							<label style="width:160px;">Subject:<span>*</span></label>
						   <?php echo $this->Form->input('subject',array('label'=>''));?>
						</li>
						<li>
							<label style="width:160px;">Your Message:<span>*</span></label>
						   <?php echo $this->Form->input('body',array('label'=>'','type'=>'textarea'));?>
						</li>
						<li>
							<label style="width:160px;">How did you hear about us?</label>
							<select name="hear">
								<option value="" selected=""></option>
								<option value="Existing Customer">Existing Customer</option>
								<option value="Ebay Advert">Ebay Advert</option>
								<option value="Google Search Engine">Google Search Engine</option>
								<option value="Other Search Engine">Other Search Engine</option>
								<option value="Word of Mouth">Word of Mouth</option>
								<option value="Internet Forum">Internet Forum</option>
								<option value="Other">Other</option>
							</select>
							<div class="clear"></div>
						</li>
						<li>
							<label style="width:160px;">&nbsp;</label>
							<input type="submit" value="Send Message &gt;&gt;">
						</li>
					</ul>
						
				<?php echo $this->Form->end('Send');?>
				
					<!-- Email -->
				
			</div>
		</div>
		<!-- Page Content -->
	

<div class="clear"></div>
	</div>

























<!--style>
#leftCol {
    border: 1px solid #FDDB02;
    float: left;
    min-height: 300px;
    width: 704px;
	border-radius:12px;
}


.contact input, select {
    height: 25px;
    width: 250px;
}


#leftCol .col {
    background: none repeat scroll 0 0 #FDDB04;
    border-radius: 12px 12px 0 0;
    padding: 20px;
}

#rightCol .col
{
border-radius:12px;
}


.contact input[type="submit"] {
    height: 40px;
    width:  100px;
	background:none repeat scroll 0 0 #E30F03;
	border:none;
	color:#ffffff;
	cursor:pointer;
}


#leftCol {
    float: right;
    width: 400px;
	height:460px;
}
#rightCol {
    clear: left;
    float: left;
  /*  padding-top: 5px;*/

}
#rightCol .col {
    background: none repeat scroll 0 0 #FDDB02;
/*    margin: 5px 0 30px;*/
    padding: 15px;
}
#leftCol .col {
    padding: 20px;
}
#outer-footer{
float:left;}

.wrapper{clear:both;width:1000px;margin:0px auto;}
.wrapper h2 {
    font-size: 1.2em;
    line-height: 1.25em;
    margin: 1.5em 0 0.5em;
}
.wrapper h1 {
    clear: left;
    color: #FFFFFF;
    font-size: 1.5em;
    line-height: 1.25em;
    margin: 0 0 0.5em;
    padding-top: 0.5em;
}
.wrapper a
{color:#E74E56;}

.like-us-on-facebook  img {
    float: left;
    margin: 0 10px 10px 0;
}

.wrapper .like-us-on-facebook {
    background: none repeat scroll 0 0 #FDDB02;
    /*height: 48px;*/
    margin: 0 0 1em;
    padding: 15px;
}

.wrapper #rightCol .col .like-us-on-facebook  h2
{
 margin:0;
}
.wrapper .contact th {
    font-weight: normal;
    padding: 0.5em 0.25em 0.25em 0;
    text-align: right;
    vertical-align: top;
    width: 120px;
}
</style>
<div class="wrapper">
	<?php #echo $this->element('quote-bar');?>
	<h1>About yahooparcels.com</h1>
	<div id="leftCol"><div class="col">
		<ul>
			<li><a href="contact_us">Contact</a></li>		
		</ul>
	</div>

		<p style="font-size: 0.9em;width:160px; color: #666; margin: 0 15px 10px "> YahooParcel ltd
32 34 New Heston Rd,Ground floor ,Heston Business Park,MiddlesexTW50LJ </p>
		
		
		<div style="width:300px;height:200px;margin-top:100px;"><iframe width="400" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Heston%2BBusiness%2BPark%2C%2BMiddlesex%2C%2BTW50LJ&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe><br><table width="400" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Heston%2BBusiness%2BPark%2C%2BMiddlesex%2C%2BTW50LJ&ie=UTF8&z=12&t=m&iwloc=near">View Larger Map</a></small></td></tr></table></div>
	</div>

<div id="rightCol">

	<div class="col">
	<h2 class="no-margin-top">Please complete the form to send us a message</h2>
		<form method="post" action="">
		<table class="contact">
		<tbody><tr><th>Name:*</th><td><input type="text" value="" size="40" name="name"></td></tr>
		<tr><th>Email:*</th><td><input type="text" value="" size="40" name="email"></td></tr>
		<tr><th>Telephone:</th><td><input type="text" value="" size="40" name="tel"></td></tr>
		<tr><th>Where did you hear about us?</th><td>
			<select name="referrer">
				<option value="">Choose...</option>
				<option value="Search engine">Search engine</option>
				<option value="Newspaper/magazine advert">Newspaper/magazine advert</option>
				<option value="Radio advert">Radio advert</option>
				<option value="Other">Other</option>
			</select></td></tr>
	<tr><th>(If 'Other':</th><td><input type="text" value="" size="40" name="other">)</td></tr>
	<tr><th>Message:*</th><td><textarea cols="40" rows="6" name="message"></textarea></td></tr>
	<tr><th>&nbsp;</th><td><input type="submit" value="Send" class="button"></td></tr>
	</tbody></table>
	<p>* Required fields</p>
	</form>
	</div>		
</div>
</div-->