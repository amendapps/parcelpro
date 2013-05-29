<script src="../../../js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
	var status_hidden=true;
	$('#change_status').live('click',function(){
		if(status_hidden)
		{
			$('.status b').hide();
			$('.status_input').show();
		}
		else
		{		
			$('.status b').show();
			$('.status_input').hide();
		}
		status_hidden=!status_hidden;
	});
})
</script>
<div>

        		<article>
                    <header>
                        <h2>Booking Details</h2>
					<div style="float:right;" class="search_booking">	
						<?php echo $this->Form->create('Booking',array('url'=>array('controller'=>'trackers','action'=>'admin_booking_view')))?>
						<div  style="float:left;">Search:</div><div style="float:left;"><?php echo $this->Form->input('reference_no',array('label'=>'','placeholder'=>'Refrence no.'));?></div>
						<div style="float:left;"> <?php $this->Form->end('');?>&nbsp;&nbsp;<button type="submit">Search</button></div>
						</div>
				
								    </header>
									
                </article>
				<?php if(!empty($sender_address) && !empty($reciver_address)) {?>
				<div>
				 <h2>Refrence no: <b><?php echo $reference_no;?></b>
				 	
				 </h2>
				 <br/>
				 <br/>
				</div>
				<div><h2>Sender Address:</h2></div>
				<table>
					<tr>					
						
						<th>Name;</th>
						<th>Address1</th>
						<th>Address2</th>
						<th>Town</th>
						<th>Country</th>
						<th>Postcode</th>
						<th>Telephone</th>
						<th>Email</th>
					</tr>
					<?php 
					foreach($sender_address as $address){
					?>									
					<tr>
						<td>
						 <?php echo $address['Address']['name'];?>
						</td>						
						<td>
						 <?php echo $address['Address']['first_address'];?>
						</td>
						<td>
						 <?php echo $address['Address']['second_address'];?>
						</td>
						<td>
						 <?php echo $address['Address']['town'];?>
						</td>
						<td>
						 <?php echo $address['Address']['country'];?>
						</td>																		
						<td>
						 <?php echo $address['Address']['postcode'];?>
						</td>
						<td>
						 <?php echo $address['Address']['telephone'];?>
						</td>						
						<td>
						 <?php echo $address['Address']['email'];?>
						</td>						
					</tr>
					<?php }?>
				</table>
				<!-- Reciever Address-->
				<br/>
				<br />
				<div><h2>Reciever Address:</h2></div>
				<table>
					<tr>					
						
						<th>Name;</th>
						<th>Address1</th>
						<th>Address2</th>
						<th>Town</th>
						<th>Country</th>
						<th>Postcode</th>
						<th>Telephone</th>
						<th>Email</th>
					</tr>
					<?php 
					foreach($reciver_address as $address){
					?>									
					<tr>
						<td>
						 <?php echo $address['Address']['name'];?>
						</td>						
						<td>
						 <?php echo $address['Address']['first_address'];?>
						</td>
						<td>
						 <?php echo $address['Address']['second_address'];?>
						</td>
						<td>
						 <?php echo $address['Address']['town'];?>
						</td>
						<td>
						 <?php echo $address['Address']['country'];?>
						</td>																		
						<td>
						 <?php echo $address['Address']['postcode'];?>
						</td>
						<td>
						 <?php echo $address['Address']['telephone'];?>
						</td>						
						<td>
						 <?php echo $address['Address']['email'];?>
						</td>						
					</tr>
					<?php }?>
				</table>
				
				<br/>
				<br />
				<div class="status"><h2 style="width:100px;float:left;">Status :</h2><b><?php echo $deliver_status;?></b>
					<div class="status_input" style="display:none;">
						<?php echo $this->Form->create('Booking',array('url'=>array('controller'=>'trackers','action'=>'admin_booking_view',$booking_id)));	?>
						<?php echo $this->Form->hidden('id',array('value'=>$booking_id));?>
						<?php echo $this->Form->input('deliver_status');?>
						<?php echo $this->Form->end('Update');?>
					</div>
				</div>
				
				<a href="javascript:void(0);" id="change_status">Change Status</a>
			<?php }
			else
			{ ?>
			<div style='color:#FF0000'>No Record Found</div>
			<?php 
			} ?>
			<!-- Collect Address-->
				
				
							
</div>
