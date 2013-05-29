<div id="main_wapper">
<?php //echo "<pre>":print_r()?>
<?php if($detail){?>
	
	<div class="top_heading" >
		
	</div>
	<div class="summary">
	<h2>Sender Contact Details:</h2>
		<?php foreach($detail as $d){?>			
		<div class="summary-row"><div class="label"> Name:     </div>	<?php echo $d['Address']['name']?></div>
		<div class="summary-row"><div class="label"> Address 1:</div>	<?php echo $d['Address']['first_address']?>  </div>
		<div class="summary-row"><div class="label"> Address 2:</div>   <?php echo $d['Address']['second_address']?>  </div>
		<div class="summary-row"><div class="label"> Town:     </div>   <?php echo $d['Address']['town']?>     </div>
		<div class="summary-row"><div class="label"> Postcode: </div>	<?php echo $d['Address']['postcode']?> </div>
		<div class="summary-row"><div class="label"> Telephone:</div>	<?php echo $d['Address']['telephone']?> </div>
		<div class="summary-row"><div class="label"> Email:    </div>	<?php echo $d['Address']['email']?> </div>
		<div class="summary-row"><div class="label"> Email:    </div>	
					<?php if($d['Address']['type']=='H') echo "This is a private address";
						  else	echo "This is A business address";?></div>		
		<div class="summary-row submit"><?php echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'parcel_content_compensation'))?></div>
		<?php }?>
		</div>
	
	</div>
	<?php }else{?>

	<?php echo $this->Html->link('Back to Compare Price',array('Controller'=>'quotations','action'=>'#')); ?>
	    <div class="top_heading">
      <h1>Recipent Address Details</h1>
    </div>
	
    <div class="sender_form">
		 <?php echo $this->Form->create('Address',array('url'=>array('controller'=>'quotations','action'=>'recipient_contact_detail'),'onSubmit'=>'return validateSenderContactDetail()'))?>
			<?php echo $this->Form->hidden('id');?>
		  <div class="sender_row">
			<label>Your name :</label>
			<?php echo $this->Form->text('name');?>
		  </div>
		  <div class="sender_row">
			<label>Address1 :</label>
			<?php echo $this->Form->text('first_address');?>
		  </div>
		  <div class="sender_row">
			<label>Address2 :</label>
			<?php echo $this->Form->text('second_address');?>
		  </div>
		  <div class="sender_row">
			<label>Town :</label>
			<?php echo $this->Form->text('town');?>
		  </div>
		  <div class="sender_row">
			<label>Country :</label>
			<?php echo $this->Form->text('country');?>
		  </div>
		  <div class="sender_row">
			<label>Postcode :</label>
			<?php echo $this->Form->text('postcode');?>
		  </div>
		  <div class="sender_row">
			<label>Country :</label>
			<?php echo $this->Form->text('source_country');?>
		  </div>
		  <div class="sender_row">
			<label>Telephone :</label>
			<?php echo $this->Form->text('telephone');?>
		  </div>
		  <div class="sender_row">
			<label>Notes :</label>
			<?php echo $this->Form->text('notes');?>
		  </div>
		  <div class="sender_row">
			<label>Email :</label>
			<?php echo $this->Form->text('email');?>
		  </div>
		  <div class="clear"></div>
		  <?php echo $this->Form->end('Save');?>
		  <span>*Yahoo Parcels.com offer delivery services from United Kingdom addresses only.</span>
	
		  <div class="clear"></div>
		</div>
	
		<div class="sender_right">
		  <h3>Quote Summary</h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
		  <h4>Features of UPS Express Saver:</h4>
		  <ul>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
		  </ul>
		  <div class="clear"></div>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
		  <h4>Subtotal:</h4>
		  <h5>&pound;<?php echo $this->Session->read('drop_off_price')?> <br>
			<span>&pound;<?php echo $this->Session->read('drop_off_price')?> (no vat)</span></h5>
		</div>

  <!--sign in box-->

<?php }?>

