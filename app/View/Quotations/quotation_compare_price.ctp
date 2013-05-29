 <div id="main_wapper">  
    <div class="back-to-parcle">
	<a href="#">Add/change parcel details</a>    
    </div>
    </section>
 
 
    <section class="prices-wrapper">
    <article class="price-menu">
      <ul>
        <li>Your Parcel</li>
        <li class="price-active">Compare Prices</li>
        <li>Drop-off/Collect</li>
        <li>Sender & Recipient</li>
        <li>Parcel Contents</li>
        <li>Review</li>
        <li>Payment</li>
        <li>Complete!</li>
      </ul>
    </article>
    <!--price menu--> 
    <div class="back-to-parcle">
	   <?php echo $this->Html->link('Back to Your Parcel',array('controller'=>'companies','action'=>'index'))?>   
    </div>
    <article class="parcle-details">
	 <?php echo $this->Form->create('Quotation',array('url'=>array('controller'=>'quotations','action'=>'quotation_compare_price')))?>
	 <?php  echo $this->Form->hidden('country_id',array('value'=>$country_id));?>
    <!--<form>-->
    <div class="deatail-row">
    <label>Weight</label>
    <?php echo $this->Form->text('weight',array('value'=>$w));?>
    <span>kg</span>
    </div>
    <div class="deatail-row">
        <label>Length</label>
       <?php echo $this->Form->text('length',array('value'=>$l));?>
    </div>
    <div class="deatail-row">
    <label>Width</label>
    <?php echo $this->Form->text('width',array('value'=>$b));?>
    </div>
    <div class="deatail-row">
    <label>Height</label>
   <?php echo $this->Form->text('height',array('value'=>$h));?>
    </div>
    <div class="deatail-row">
    <label>Unit</label>
     <?php echo $this->Form->input('unit',array('options'=>array('cm'=>'cm','in'=>'in'),'div'=>false, 'legend'=>false, 'label'=>false)); ?></td>
    </div>
    
	<?php echo $this->Form->end('Refresh price');?>
    <!--</form>-->
    </article><!--parcle details-->
    <section class="compare-price">
	
    <h3>Compare prices to <?php foreach($country_name as $c){ echo $c['country_name'];}?></h3>
    <h4>Choose your preferred delivery service:</h4>

	<?php foreach($compare_result as $r){//echo "<pre>";print_r($r);?>
	
    <div class="delivery-service-wrap">
	
	<article class="com-logo">
		<h5><?php echo $r['Company']['name']?><br/><?php if($r['Quotation']['service']==0){echo "Economy";}else{echo "Express";}?></h5>
		<img src="<?php echo Configure :: read('HTTP_PATH_IMAGE');?>/app/webroot/img/uploadfile/<?php echo  $r['Company']['image']?>" width="100" height="50"><?php //echo $this->Html->image('user/fedex.png');?>
	</article><!--company logo-->
	
	<article class="services-list">
		<ul>
			<li><?php echo $r['Company']['description']?></li>
			<li>Ideal for single &amp; multiple package shipments</li>
			<li>Suitable for personal belongings to many destinations</li>
			<li>Door to door service within 1-7 business days</li>
			<li>Full tracking service available</li>
		 </ul>
			<p>Please note all international shipments could be subject to customs duties and taxes.</p>
	</article><!--services list-->
	
	
	<?php  $fixed_price=$r['Quotation']['fixed_price'];
						 $drop_off_rate=$r['Quotation']['rate'];
						 $weight=$higher_weight;
						  $collection_cost=$r['Quotation']['collect_price'];

						  if($weight>1)
						  {
						    $weight_diff=$weight-1;
							$drop_off_price=$weight_diff*$drop_off_rate+$fixed_price;
  						    $collection_price=$drop_off_price+$collection_cost;
						  }
						  else
						  {
  						    $drop_off_price=$fixed_price;
							$collection_price=$fixed_price+$collection_cost;
						  }
						 ?>
	

	<article class="price">
		<h6>Drop-off: <a href="#">Help?</a></h6>
		<h3>&#163;<?php  echo $drop_off_price;?></h3>
		<span>Total:&#163;<?php  echo $drop_off_price;?> (no VAT)</span>
		<?php echo $this->Html->link('Select',array('controller'=>'quotations','action'=>'parcel_delivery_quot_dropoff_pickup',$r['Quotation']['destination_country'],$r['Quotation']['drop_of_price']),array( 'class' => 'selectbutton'));?>
	</article><!--price-->
	
	<article class="price-collection">
		<h6>Collection: <a href="#">Help?</a></h6>
		<h3>&#163;<?php  echo $collection_price;?></h3>
		<span>Total: &#163;<?php  echo $collection_price?> (no VAT)</span>
		 <?php echo $this->Html->link('Select',array('controller'=>'quotations','action'=>'parcel_delivery_quot_collectoff_pickup',$r['Quotation']['destination_country'],$r['Quotation']['collect_price']),array( 'class' => 'selectbutton'));?>
	</article><!--price-->
    </div><!--delivery service wrap-->
    
    <?php }?>
    
    <!--/div><!--Choose delivery service-->
    <div class="back-to-parcle">
	<a href="#">Add/change parcel details</a>    
    </div>
    </article>
    </section><!--compare price-->
    <div class="parcle-text">
    <h5>Drop-offs</h5>
    <p>Dropping off your parcel is easy and cheap. Just select on a service to proceed, then choose from one of 100+ locations in the UK. We'll email parcel delivery labels to you-attach the labels to your parcel and take it to your chosen location before 3pm on your selected drop off date. <b>Please note: you cannot drop off a parcel without booking online first and obtaining the required paperwork.</b> <a href="#">Find your nearest location ></a></p>
    </div><!--parcel text-->
    <div class="parcle-text">
    <h5>Collections</h5>
    <p>If you prefer, we can arrange for your parcel to be collected from a home or work address. Just select the service you want to proceed. We'll ask you to enter the collection address, choose a date, and we'll email your labels before the driver comes to collect. <b>Please note: We cannot guarantee collection times or select specific time frames for collection.</b></p>
    </div><!--parcel text-->
  </section><!--price wrapper-->
  <div class="clear"></div>
















