
<?php if($detail){?>
	
	 <table style="margin-left: 180px;">
		<?php foreach($detail as $d){?>
		<tr>
			
			<td><?php echo $d['Address']['name']?></td><td><?php echo $this->Html->link('Change sender detail',array('controller'=>'quotations','action'=>'sender_contact_detail_edit',$d['Address']['id']));?>
      </td>
			 <td>&nbsp;</td>
			 <td><?php echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'recipient_contact_detail'))?></td>  
		</tr>
		<tr>
			<td><?php echo $d['Address']['first_address']?></td>
		</tr>
		<tr>
			<td><?php echo $d['Address']['second_address']?></td>
		</tr>
		<tr>
			<td><?php echo $d['Address']['town']?></td>
		</tr>
		<tr>
			<td><?php echo $d['Address']['postcode']?></td>
		</tr>
		<tr>
			<td><?php echo $d['Address']['telephone']?></td>
		</tr>
		<tr>
			<td><?php echo $d['Address']['email']?></td>
		</tr>
		<?php }?>
	 </table>
	
	<?php }
  else{?>
  <?php echo $this->Html->link('Back to Dropoff/collectoff',array('Controller'=>'quotations','action'=>'parcel_delivery_quot_collectoff_pickup')); ?>
    <div class="top_heading">
      <h1>Sender Address Details</h1>
    </div>
    
    <div class="sender_form">
	   <?php echo $this->Form->create('Address',array('url'=>array('controller'=>'quotations','action'=>'sender_contact_detail_edit')))?>
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
  </div>
  
</div>
</div>
<?php }?>
