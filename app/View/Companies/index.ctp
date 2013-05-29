<?php //echo "<pre>";print_r($user_detail); die();?>
<section id="banner-wrap">
  <div class="banner">
  					  <?php echo $this->Html->image('user/banner1.jpg');?> 
  					  <?php echo $this->Html->image('user/banner2.jpg');?> 
					  <?php echo $this->Html->image('user/banner3.jpg');?>
					  <?php echo $this->Html->image('user/banner4.jpg');?> 
					  <?php echo $this->Html->image('user/banner5.jpg');?>
  </div>
  <div class="quote-form"> <span class="titel">Get Rapid Quote</span>
  <?php echo $this->Form->create('Quotation',array('url'=>array('controller'=>'quotations','action'=>'quotation_compare_price'),'onSubmit'=>'return validateQuoteBar()'))?>
  <p>Send a parcel from the UK to:
  <?php echo $this->Session->flash();?>
        <?php echo $this->Form->input('country_id',array('options'=>array(''=>'Choose Destination',$destination_country),'div'=>false, 'legend'=>false, 'label'=>false)); ?>
      </p>
  <ul>
        <li>
          <p>Weight
           <?php echo $this->Form->text('weight');?>
          </p>
        </li>
        <li>
          <p>Lenght
            <?php echo $this->Form->text('length');?>
          </p>
        </li>
        <li>
          <p>Width
             <?php echo $this->Form->text('width');?>
          </p>
        </li>
        <li>
          <p>Height
             <?php echo $this->Form->text('height');?>
          </p>
        </li>
        <li>
          <p>
            <?php echo $this->Form->input('unit',array('options'=>array('cm'=>'cm','in'=>'in'),'div'=>false, 'legend'=>false, 'label'=>false)); ?>
          </p>
        </li>
	<button type="submit" class="quote-btn"></button>
        
      </ul>
  <?php $this->Form->end('');?>
    
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
        <p>Pay online, then print off our labels to stick them onto your  parcel<a href="<?php echo Configure :: read('HTTP_PATH_IMAGE')?>/franchises/nearest_parcels_store"><?php echo $this->Html->image('user/find-more.png');?></a></p>
      </div>
    </div>
    <div class="services_box2">
      <div class="yahoo_box">
        <h4>Yahoo Parcel Services</h4>
        <div class="box1"><?php echo $this->Html->image('user/international.png');?>
          <h5><?php echo $this->Html->link('International Document',array('controller'=>'pages','action'=>'show_page',1));?></h5>
          <p>Form &#8364; 16.00 </p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/luggage.png');?>
          <h5><?php echo $this->Html->link('Excess Luggage',array('controller'=>'pages','action'=>'show_page',2));?></h5>
          <p>Form &#8364; 5.00 per kg</p>
        </div>
        <div class="box1"> <?php echo $this->Html->image('user/student.png');?>
          <h5><?php echo $this->Html->link('Student',array('controller'=>'pages','action'=>'show_page',3));?></h5>
          <p>10% Discount</p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/sending.png');?> 
          <h5><?php echo $this->Html->link('Send Parcel to Family or friends',array('controller'=>'pages','action'=>'show_page',4));?></h5>
          <p>Form &#8364; 4.00 per kg</p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/arrange-img.png');?>
          <h5><?php echo $this->Html->link('Arrange collection form India, Pakistan, Bangladesh and pay in UK',array('controller'=>'pages','action'=>'show_page',5));?></h5>
          <p>Form &#8364; 5 per kg</p>
        </div>
        <div class="box1"><?php echo $this->Html->image('user/mobile.png');?>
          <h5><?php echo $this->Html->link('Send Mobile, TV, Lablets',array('controller'=>'pages','action'=>'show_page',6));?></h5>
          <p>Form &#8364; 23.00 </p>
        </div>
      </div>
      <div  class="service-box-right"> <figure><a href="<?php echo Configure :: read('HTTP_PATH_IMAGE')?>/franchises/franchises_register"><?php echo $this->Html->image('user/agent-img.jpg');?></a></figure>
        <div class="our-review">
          <h5>Read our Reviews </h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<?php echo $this->Html->link('Read more',array('controller'=>'posts','action'=>'add')); ?></p>
        </div>
      </div>
    </div>
    <div class="couriers_box">
      <div class="couriers_box_left">
        <div class="Sending_box">
          <h4>Yahooparcel.com works with major international couriers</h4>
          <ul>
            <li><?php echo $this->Html->image('user/logo1.gif');?></li>
            <li><?php echo $this->Html->image('user/logo2.gif');?></li>
            <li><?php echo $this->Html->image('user/logo3.gif');?></li>
            <li><?php echo $this->Html->image('user/logo4.gif');?></li>
          </ul>
        </div>
        <div class="Sending_box nomargin_right">
          <h4>Yahooparcel.com works with major international couriers</h4>
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
    <div class="delivery-price">
  	<h3>Parcel Delivery Price Guide</h3>
	<div class="destination-list">
	<h5>Destination<br>
<span>Tranist Time (working days)*</span></h5>
	<ul>
	<li>Less then 0.5kg</li>
	<li>Less then 0.5kg</li>
	<li>Less then 0.5kg</li>
	<li>Less then 0.5kg</li>
	<li>Less then 0.5kg</li>
	<li>Less then 0.5kg</li>
	<li>Less then 0.5kg</li>
	</ul>
	</div><!--destination-list-->
	<div class="destination-list2">
	<h5>UK<br>
   <span>1</span></h5>
	<ul>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	</ul>
	</div><!--destination-list-->
	<div class="destination-list2">
	<h5>EU<br>
   <span>1</span></h5>
	<ul>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	</ul>
	</div><!--destination-list-->
	<div class="destination-list2">
	<h5>USA/Canada<br>
   <span>1-3</span></h5>
	<ul>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	</ul>
	</div><!--destination-list-->
	<div class="destination-list2">
	<h5>Rest of World<br>
   <span>1-4</span></h5>
	<ul>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	</ul>
	</div><!--destination-list-->
	<div class="destination-list2">
	<h5>Channel Island<br>
   <span>1-2</span></h5>
	<ul>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	<li>&pound; 11.95</li>
	</ul>
	</div><!--destination-list-->
	</div><!--delivery price-->
  
