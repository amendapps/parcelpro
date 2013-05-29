<?php //echo "<pre>":print_r()?>
<?php if($detail){?>
	
	 <table style="margin-left: 180px;">
		<?php foreach($detail as $d){?>
		<tr>
			
			<td><?php echo $d['Address']['name']?></td><td><?php echo $this->Html->link('Change Recipient contact details:',array('controller'=>'franchises','action'=>'recipient_contact_detail_edit',$d['Address']['id']));?></td>
			 <td>&nbsp;</td>
			 <td><?php echo $this->Html->link('Continue',array('controller'=>'franchises','action'=>'parcel_content_compensation'))?></td>  
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
        
        <tr>
			<td>
					<?php if($d['Address']['type']=='H')
					{
						
						echo "This is a private address";
					}
					else{
						
						echo "This is A business address";
					}
						?>
            </td>
		</tr>
       
		<?php }?>
	 </table>
	
	<?php }else{?>
<br><br>
<table border="0" width="995px" cellpadding="0" cellspacing="4" style="margin-left: 180px; text-align: left">
	<tr>
		  <td colspan='2'><?php echo $this->Html->link('Back to Compare Price',array('Controller'=>'franchises','action'=>'#')); ?></td>
	</tr>
	 <?php echo $this->Form->create('Address',array('url'=>array('controller'=>'franchises','action'=>'recipient_contact_detail_edit')))?>
	 <tr>
		  <td style="height: 70px;" colspan='2'><h1>Sender and Recipient contact details</h1></td>
	 </tr>
		<?php echo $this->Form->hidden('id');?>
		
	</tr>
	 <tr>	<td>&nbsp;</td></tr>
	 <tr>	<td colspan='2'><b><h2><b>Recipient contact details:</b></h2></b></td></tr>
	 	 <tr><td>&nbsp;</td></tr>
		 
		 <tr><td>&nbsp;</td></tr>
         <tr>
			 <td style="width: 100px;">This is a:</td><td><?php echo $this->Form->input('type',array('options'=>array('H'=>'Home Address','B'=>'Business Address'),'style'=>'width:250px; height:25px;','type'=>'radio','label'=>''));?></td>
		 </tr>
		 <tr>
			 <td style="width: 100px;">Name:</td><td><?php echo $this->Form->text('name',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		 <tr>
			 <td style="width: 100px;">Address 1:</td><td><?php echo $this->Form->text('first_address',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		  <tr>
			 <td>Address 2:</td><td><?php echo $this->Form->text('second_address',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		   <tr>
			 <td>Town :</td><td><?php echo $this->Form->text('town',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		    <tr>
			 <td>Country :</td><td><?php echo $this->Form->text('country',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		     <tr>
			 <td>Postcode:</td><td><?php echo $this->Form->text('postcode',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		      <tr>
			 <td>Country :</td><td><?php echo $this->Form->text('source_country',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		       <tr>
			<td>Telephone :</td><td><?php echo $this->Form->text('telephone',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
		        
                         <tr>
			 <td>Email</td><td><?php echo $this->Form->text('email',array('style'=>'width:250px; height:25px;'));?></td>
		 </tr>
	 <tr>
	<td><?php echo $this->Form->end('Save');?></td>
	 </tr>
</table>
<br><br>
<?php }?>
