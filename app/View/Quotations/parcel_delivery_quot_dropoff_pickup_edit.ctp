<script>
	 $(document).ready(function(){
	   $val='<?php echo $day;?>';
	    $("input[value="+$val+"]").attr('checked','checked');
	    
	 })
</script>

<?php //echo "<pre>"; print_r($destination_country);die(); ?>
<?php if($message){?>
	 	<p ><?php echo $this->Html->link('Back to Dropoff/Collect',array('controller'=>'quotations','action'=>'parcel_delivery_quot_dropoff_pickup',$country_id,T));?><p>
	 <p style="margin-left: 180px;"><?php echo $message;?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Change Dropoff detail',array('controller'=>'quotations','action'=>'parcel_delivery_quot_dropoff_pickup_edit',$location_id));?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'sender_contact_detail'))?></p><br>
	 <p style="margin-left: 180px;"><?php echo $location;?></p>
	<?php }else{?>
<br><br>
<table border="0" width="995px" cellpadding="6" cellspacing="6" style="margin-left: 180px; text-align: left">
	<tr>
		  <td colspan='7'><?php echo $this->Html->link('Back to Compare Price',array('action'=>'quotation_compare_price',T)); ?></td>
		  <td><b>Quote summary</b></td>
	</tr>
	 <tr>
		  <td style="height: 70px;" colspan='7'><h1>Arrange drop-off of your parcel</h1></td>
		  <td rowspan='9' style="text-align: center;"><b>Subtotal</b></br>&#163;<?php echo $drop_off_price;?></td>
	 </tr>
	 <tr>
		<td colspan='7'><h3><b>Choose your nearest drop-off location:</h3></b>
		</td>
	 </tr>
	  <tr>
		<td colspan='7'>&nbsp;</td>
	  </tr>
	 <?php echo $this->Form->create('Quotation',array('url'=>array('controller'=>'quotations','action'=>'parcel_delivery_quot_dropoff_pickup_edit'),'onSubmit'=>'return validateDropOff()'))?>
	
	<tr>
		<?php echo $this->Form->hidden('id',array('value'=>$id));?>
		<td colspan='7'> <?php echo $this->Form->input('destination_address',array('options'=>array($destination_country),'div'=>false, 'legend'=>false, 'label'=>false,'style'=>'width:500px; height:20px;')); ?></td>
		
	</tr>
	 <tr>
		<td colspan='7'>&nbsp;</td>
	 </tr>
	 <tr>
		<td colspan='7'><b><h2>Drop off your parcel before 3pm on:*</h2></b></td>
	 </tr>
	 
          <tr>
		<td colspan='7'>&nbsp;</td>
	  </tr>
          <tr>
			   <?php 

			function getWeekDays(){
   				 $days = 7;
   				 $d = new DateTime();
   				 $t = $d->getTimestamp();
				 $days_arr=Array();
 				 $j=0;

   						 for($i=0; $i<$days; $i++){
       					 $addDay = 86400;
       					 $nextDay = date('w', ($t+$addDay));
  	   					 $weekend=false;
       					 if($nextDay == 0 || $nextDay == 6) {
           					 $i--;
							$weekend=true;
        					}
       						 $t = $t+$addDay;
		
		
   	  			 if(!$weekend) {
	 					  $day=$d->setTimestamp($t)->format( 'D ,d ,M' );
						  $day_val=$d->setTimestamp($t)->format( 'Y-m-d' );?>
	    			<td><?php echo "<input type='radio' name='data[Address][day]' value='".$day_val."'/><label>$day<lable>";?></td>
		<?php  $j=$j+1;
		}		
    }
}

getWeekDays();

?>
         </tr>
	 <tr>
	       <td colspan='7'><?php echo $this->Form->end('Save');?></td>
	 </tr>
</table>
<br><br>
<?php }?>
