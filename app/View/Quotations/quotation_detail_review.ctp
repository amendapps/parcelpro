<div id="main_wapper">
	<?php echo $this->Html->link('Change Recipient contact details:',array('controller'=>'quotations','action'=>'recipient_contact_detail_edit',$d['Address']['id']));?>
	<div class="summary">
		<h2>Review your order</h2>
		<p>
			Please check that all your order details are correct. Once you have concluded your order, it cannot be amended and in the event of an error, will need to be cancelled and rebooked. A £5+VAT administration fee will apply and the service may be delayed.
		</p>
		<h2>Destination country:</h2>
		<p><?php foreach($country_name as $c){ echo $c['country_name'];}?></p>
		<h2>Your parcel(s):</h2>
		<div class="parcel-row">
			<div class="detail-columns">Quantity</div>
			<div class="detail-columns">Description</div>
			<div class="detail-columns">Weight</div>
			<div class="detail-columns">Country of Origin</div>
			<div class="detail-columns">Total value</div>			
		</div>

		<?php foreach($compansion as $comp){?>
		<div class="parcel-row">
			<div class="detail-columns">&nbsp;<?php echo $comp['Parcel']['quantity'];?></div>
			<div class="detail-columns">&nbsp;<?php echo $comp['Parcel']['item_description'];?></div>
			<div class="detail-columns">&nbsp;<?php echo $comp['Parcel']['weight'];?></div>
			<div class="detail-columns">&nbsp;<?php echo $comp['Parcel']['country_of_origin'];?></div>
			<div class="detail-columns">&nbsp;<?php echo $comp['Parcel']['total_value'];?></div>		
		</div>
		<?php }?>

		<div class="parcel-row"><h2>Sender contact Detail</h2></div>
		<?php foreach($sender_detail as $d){?>		
			<div class="parcel-row"><label>Name</label><?php echo $d['Address']['name']?></div>
			<div class="parcel-row"><label>Address1</label><?php echo $d['Address']['first_address']?></div>
			<div class="parcel-row"><label>Address2</label><?php echo $d['Address']['second_address']?></div>
			<div class="parcel-row"><label>Town</label><?php echo $d['Address']['town']?></div>
			<div class="parcel-row"><label>Postcode</label><?php echo $d['Address']['postcode']?></div>	
			<div class="parcel-row"><label>Telephone</label><?php echo $d['Address']['telephone']?></div>	
			<div class="parcel-row"><label>Email</label><?php echo $d['Address']['email']?></div>
		<?php }?>	
		
		<!--/div-->			

		<div class="parcel-row">
			<h2>Reciever contact Detail</h2>
		</div>
		<?php foreach($reciver_detail as $d){?>		
			<div class="parcel-row"><label>Name</label><?php echo $d['Address']['name']?></div>
			<div class="parcel-row"><label>Address1</label><?php echo $d['Address']['first_address']?></div>
			<div class="parcel-row"><label>Address2</label><?php echo $d['Address']['second_address']?></div>
			<div class="parcel-row"><label>Town</label><?php echo $d['Address']['town']?></div>
			<div class="parcel-row"><label>Postcode</label><?php echo $d['Address']['postcode']?></div>	
			<div class="parcel-row"><label>Telephone</label><?php echo $d['Address']['telephone']?></div>	
			<div class="parcel-row"><label>Email</label><?php echo $d['Address']['email']?></div>
		<?php }?>	

		<div class="parcel-row">
			<h2>		
		<?php if($d['Address']['type']=='H')
					{
						
						echo "This is a private address";
					}
					else{
						
						echo "This is A business address";
					}
				?>	
			</h2>
		</div>				
	  
   <?php if($this->Session->check('drop_off_review'))
	    {?>
			<h2>Drop off your parcel</h2>  
		    <div class="parcel-row"><?php echo $message;?></div>
		    <div class="parcel-row"><?php echo $location;?></div>
	   <?php 
	   }else
	   {?>
	   <div class="parcel-row">
	   <?php echo $this->Html->link('Change dropoff/collection detail',array('controller'=>'quotations','action'=>'parcel_delivery_quot_collectoff_pickup_edit',$d['Address']['id']));?>
		<h2>We'll arrange to collect your parcel from:</h2>
	</div>
		<?php foreach($collect_detail as $d){?>
		 <div class="parcel-row"> <label>Address1</label>	<?php echo $d['Address']['first_address']?></div>			
		<div class="parcel-row"> <label>Address2</label>		<?php echo $d['Address']['second_address']?></div>
		<div class="parcel-row"><label>Town</label>		<?php echo $d['Address']['town']?></div>
		<div class="parcel-row"><label>Postcode</label>	<?php echo $d['Address']['postcode']?></div>
		<div class="parcel-row"><label>Telephone</label>	<?php echo $d['Address']['telephone']?></div>
		<div class="parcel-row"><label>Note</label>	<?php echo $d['Address']['note']?></div>
		<?php }}?>	
		<div class="parcel-row summary-row submit">
			<?php echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'payment'));?>
		</div>
		
 </div>
</div>