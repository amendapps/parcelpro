<script>
$(function() {
       $("#datepicker").datepicker({'dateFormat':'yy-mm-dd'});
});
</script>
<div id="main_wapper">
	<?php //echo "<pre>";print_r($day);die();?>
	<?php if($message){?>	
	
	<div class="top_heading" >
		<?php echo $this->Html->link('Back to Dropoff/Collect',array('controller'=>'quotations','action'=>'parcel_delivery_quot_dropoff_pickup',$country_id,T));?>
	</div>
	
	<div class="summary">
		 <div class="summary-row">
		 	<?php echo $message;?>
		 <div class="summary-row"><?php echo $location;?></div>
		<div class="submit"><?php echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'sender_contact_detail'))?></div>
	<?php }else{?>
	
	<div class="top_heading">
		<?php echo $this->Html->link('Back to Compare Price',array('action'=>'quotation_compare_price',T)); ?>	
		</div>
	<div class="parcel-details drop-off-location">
		<h2>Choose your nearest drop-off location:</h2>
		 <?php echo $this->Form->create('Quotation',array('url'=>array('controller'=>'quotations','action'=>'parcel_delivery_quot_dropoff_pickup'),'onSubmit'=>'return validateDropOff()'))?>
		 
		<div class="parcel-row">
		  <?php echo $this->Form->input('destination_address',array('options'=>array($destination_address),'div'=>false, 'legend'=>false, 'label'=>false)); ?>		
		 </div>
		 <h2>Drop off your parcel before 3pm on:*</h2>
		 <div class="parcel-row">
		 			<input type="text" name="data[Address][day]" id="datepicker" />
				  <?php #echo $this->Form->input('day',array('id'=>'datepicker')); ?>
	   <?php echo $this->Form->end('Save');?>	
		<?php }?>
		</div>
		</div>