<section id="banner-wrap">
  <div class="banner">
  					  <?php echo $this->Html->image('user/banner1.jpg');?> 
  					  <?php echo $this->Html->image('user/banner2.jpg');?> 
					  <?php echo $this->Html->image('user/banner3.jpg');?>
					  <?php echo $this->Html->image('user/banner4.jpg');?> 
					  <?php echo $this->Html->image('user/banner5.jpg');?>
  </div>
  <div class="quote-form"> <span class="titel">Franchises Register</span>
     <?php echo $this->Form->create('Franchise',array('name'=>'franchise','url'=>array('controller'=>'franchises','action'=>'register'),'onsubmit'=>'return validatefields();'))?>
     <table cellspacing="4px;">
     <tr><td colspan="2"><?php echo $this->Session->flash(); ?></td></tr>
     <tr><td>Your Name</td><td><?php echo $this->Form->text('name',array('style'=>'width:250px; height:25px;')); ?></td><tr>
     <tr><td>Email</td><td><?php echo $this->Form->text('username',array('style'=>'width:250px; height:25px;')); ?></td><tr>
	<tr><td>Password</td><td><?php echo $this->Form->text('password',array('style'=>'width:250px; height:25px;','type'=>'password')); ?></td><tr>
	<tr><td>Country</td><td> <?php echo $this->Form->input('country_name',array('options'=>array($countryname),'style'=>'width:250px; height:30px;','div'=>false, 'legend'=>false, 'label'=>false)); ?></td></tr>
	<tr><td>Address</td><td><?php echo $this->Form->textarea('address',array('style'=>'width:250px; height:50px;')); ?></td><tr>
	<tr><td> <?php echo $this->Form->submit('Register');?><td></tr>
		
     </table>
   <?php //echo $this->Form->submit('Register');?>
  </div>
  <div class="clear"></div>
  </section>
  <div id="main_wapper"> 
    <!--parcel_delivery-->
    <div class="parcel_delivery">
      <h1>Parcel Delivery in 3 Easy Steps</h1>
      <div class="parcel_box"><?php echo $this->Html->image('user/mid_img1.png');?>
        <div class="clear"></div>
        <p><?php echo $this->Html->image('user/1.gif');?><a href="#">Get a quick quote</a> to compare costs via the major parcel couriers</p>
      </div>
      <div class="parcel_box"> <?php echo $this->Html->image('user/mid_img2.png');?>
        <div class="clear"></div>
        <p><?php echo $this->Html->image('user/2.gif');?>Pay online, then print off our labels to stick them onto your  parcel</p>
      </div>
      <div class="parcel_box nomargin_right"><?php echo $this->Html->image('user/mid_img3.png');?>
        <div class="clear"></div>
        <p><?php echo $this->Html->image('user/3.gif');?> Take your parcel to your nearest <a href="#">drop off point</a> or <a href="#">we can collect!</a></p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="live_chat">
      <div class="chat_box"><?php echo $this->Html->image('user/chat1.png');?>
        <h4>Live chat</h4>
        <p>Pay online, then print off our labels to stick them onto your  parcel</p>
      </div>
      <div class="chat_box"> <?php echo $this->Html->image('user/chat2.png');?>
        <h4> Track your parcel </h4>
        <p>Pay online, then print off our labels to stick them onto your  parcel</p>
      </div>
      <div class="chat_box nomargin_right"><?php echo $this->Html->image('user/chat3.png');?>
        <h4>Drop off to Save</h4>
        <p>Pay online, then print off our labels to stick them onto your  parcel<a href="#"><?php echo $this->Html->image('user/find-more.png');?></a></p>
      </div>
    </div>
    <div class="services_box2">
      <div class="yahoo_box">
        <h4>Yahoo Parcel Services</h4>
        <div class="box1"><?php echo $this->Html->image('user/international.png');?>
          <h5>International Document</h5>
          <p>Form &#8364; 16.00 </p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/luggage.png');?>
          <h5>Excess Luggage</h5>
          <p>Form &#8364; 5.00 per kg</p>
        </div>
        <div class="box1"> <?php echo $this->Html->image('user/student.png');?>
          <h5>Student</h5>
          <p>10% Discount</p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/sending.png');?> 
          <h5>Send Parcel to Family or friends</h5>
          <p>Form &#8364; 4.00 per kg</p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/arrange-img.png');?>
          <h5>Arrange collection form India, Pakistan, Bangladesh and pay in UK</h5>
          <p>Form &#8364; 5 per kg</p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/mobile.png');?>
          <h5>Send Mobile, TV, Lablets</h5>
          <p>Form &#8364; 23.00 </p>
        </div>
      </div>
      <div  class="service-box-right"> <figure><a href="#"><?php echo $this->Html->image('user/agent-img.jpg');?></a></figure>
        <div class="our-review">
          <h5>Read our Reviews </h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Read more</a></p>
        </div>
      </div>
    </div>
    <div class="couriers_box">
      <div class="couriers_box_left">
        <div class="Sending_box">
          <h4>SendingParcels.com works with major international couriers</h4>
          <ul>
            <li><?php echo $this->Html->image('user/logo1.gif');?></li>
            <li><?php echo $this->Html->image('user/logo2.gif');?></li>
            <li><?php echo $this->Html->image('user/logo3.gif');?></li>
            <li><?php echo $this->Html->image('user/logo4.gif');?></li>
          </ul>
        </div>
        <div class="Sending_box nomargin_right">
          <h4>SendingParcels.com works with major international couriers</h4>
          <ul>
            <li><?php echo $this->Html->image('user/sage-pay.gif');?></li>
            <li><?php echo $this->Html->image('user/master-card.gif');?></li>
            <li><?php echo $this->Html->image('user/visa.gif');?></li>
            <li><?php echo $this->Html->image('user/maestro.gif');?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>


