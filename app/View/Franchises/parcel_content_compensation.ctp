<br><br>
<table border="0" width="995px" cellpadding="0" cellspacing="4" style="margin-left: 180px; text-align: left">
	
	<tr>
		  <td colspan='2'><?php echo $this->Html->link('Back to Dropoff/collectoff',array('Controller'=>'franchises','action'=>'parcel_delivery_quot_collectoff_pickup')); ?></td>
	</tr>
	 <?php echo $this->Form->create('Parcel',array('url'=>array('controller'=>'franchises','action'=>'parcel_content_compensation')))?>
	 <tr>
		  <td style="height: 70px;" colspan='5'><h1>Parcel contents, values & compensation cover</h1></td>
	 </tr>
		<?php echo $this->Form->hidden('id');?>
		
	</tr>
	 <tr>	<td>&nbsp;</td></tr>
	 <tr>	<td colspan='5'><b><h2><b>Describe each item in parcel 1:</b></h2></b></td></tr>
	 	 <tr><td>&nbsp;</td></tr>
		 
		 <tr>
         		<td>Quantity:</td>
                <td>Description:</td>
                 <td>weight:</td>
                 <td>Country of Origin :</td>
                 <td>Totel value</td>
         
         </tr>
		 <tr>
			 <td><?php echo $this->Form->text('quantity');?></td>
			 <td><?php echo $this->Form->text('item_description');?></td>
				<td><?php echo $this->Form->text('weight');?></td>
			 <td><?php echo $this->Form->input('country_of_origin',array('options'=>array($destination_country)),'label'=>'');?></td>
			 <td><?php echo $this->Form->text('total_value');?></td>
		 </tr>
         
         <tr>
         		<td>Reason for sending:<br/>
                <?php echo $this->Form->input('sending_reason',array('options'=>array('Gift'=>'Gift','Sample'=>'Sample','Repair'=>'Repair','Document'=>'Document','intra_company_transfer'=>'intra_company_transfer','Personal_Effects'=>'Personal_Effects'),'type'=>'select','label'=>''));?>
                </td>
         </tr>
		     
	 <tr>
	<td><?php echo $this->Form->end('Save');?></td>
	 </tr>
</table>
<br><br>

