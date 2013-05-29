<div id="main_wapper">
<?php if($compansion){?>		
	<div class="top_heading">
		<?php #echo $this->Html->link('Change Parcel Detail',array('controller'=>'quotations','action'=>'parcel_content_compensation_edit',$comp['Parcel']['id']));?>
	</div>
	<div class="summary">
		<?php foreach($compansion as $comp){?>
			<div class="summary-row"> <div class="label"> Quantity</div>        &nbsp; <?php echo $comp['Parcel']['quantity'];?>	</div>
			<div class="summary-row"> <div class="label"> Description</div>     &nbsp; <?php echo $comp['Parcel']['item_description'];?>	</div>
			<div class="summary-row"> <div class="label"> Weight</div>	        &nbsp; <?php echo $comp['Parcel']['weight'];?></div>
			<div class="summary-row"> <div class="label"> Country Origin</div>&nbsp;<?php echo $comp['Parcel']['country_of_origin'];?>	</div>
			<div class="summary-row"> <div class="label"> Total Value </div>     &nbsp;<?php echo $comp['Parcel']['total_value'];?>	</div>	
		<?php }?>							
			<div class="summary-row submit">	<?php echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'quotation_detail_review'));?>
			</div>
	</div>
			<?php #foreach($compansion as $comp){} ?>
			<td>
			</td><td> 
			<?php #echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'quotation_detail_review'));?>
			</td>			
		</tr>
		<tr>
			<th></th>
			<th>Description</th>
			<th>Weight</th>
			<th>Country of Origin</th>
			<th>Total Value</th>
		</tr>
		<?php #foreach($compansion as $comp){?>
		<tr>
			<td><?php# echo $comp['Parcel']['quantity'];?></td>
			<td><?php #echo $comp['Parcel']['item_description'];?></td>
			<td><?php# echo $comp['Parcel']['weight'];?></td>
			<td><?php# echo $comp['Parcel']['country_of_origin'];?></td>
			<td><?php# echo $comp['Parcel']['total_value'];?></td>
		</tr>
		<?php# }?>
	</table>
	
<?php }else{?>


	<div class="top_heading">
	<?php echo $this->Html->link('Back to Dropoff/collectoff',array('Controller'=>'quotations','action'=>'parcel_delivery_quot_collectoff_pickup')); ?></td>
		<h1>Parcel contents, values & compensation cover</h1>	 
    </div>      	
	<div class="sender_form">					
			 <?php echo $this->Form->create('Parcel',array('url'=>array('controller'=>'quotations','action'=>'parcel_content_compensation'),'onSubmit'=>'return validateParcelDetail()'))?>
			 <?php echo $this->Form->hidden('id');?>		
		<h2>Describe each item in parcel 1:</h2>				
		<a href="Javascript:void(0);" onclick="more_fields();" >Add More</a> 
		<div class="parcel-details">
			<div class="parcel-row">
				<div class="detail-columns">Quantity</div>
				<div class="detail-columns">Description</div>
				<div class="detail-columns">Country</div>
				<div class="detail-columns">Weight</div>
				<div class="detail-columns">Total Cost</div>
			</div>
   		    <div class="parcel-row">
				<div class="detail-columns"><?php echo $this->Form->text('Parcel.quantity.1');?></div>
				<div class="detail-columns"><?php echo $this->Form->text('Parcel.item_description.1');?></div>
				<div class="detail-columns"><?php echo $this->Form->input('Parcel.country_of_origin.1',array('options'=>array($destination_country),'label'=>''));?></div>
				<div class="detail-columns"><?php echo $this->Form->text('Parcel.weight.1');?></div>
				<div class="detail-columns"><?php echo $this->Form->text('Parcel.total_value.1');?></div>
			</div>
		</div>
		<div class="parcel-details">
			<?php echo $this->Form->input('compansion_cover',array('options'=>array('1'=>'Yes','0'=>'No'),'type'=>'radio','label'=>'','class'=>'abc'));?>
		</div>
		
		<div class="parcel-details">
			<h2>Reason for sending</h2>
		<?php echo $this->Form->input('sending_reason',array('options'=>array('Gift'=>'Gift','Sample'=>'Sample','Repair'=>'Repair','Document'=>'Document','intra_company_transfer'=>'intra_company_transfer','Personal_Effects'=>'Personal_Effects'),'type'=>'select','label'=>''));?>
		</div>
		<?php echo $this->Form->end('Save');?>
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
      <h5>£ <br>
        <span>£ (no vat)</span></h5>
    </div>


<?php }?>


<script type="text/javascript">
$(document).ready(function(){
	$('[id^=row]').live('click',function(){
		remove();
	});
})

var i = 2;
function more_fields(){
	//alert("jjj");
	if(i>10)return false;
	
var text_div = '<div class="parcel-row">'+
				'<div class="detail-columns"><input type="text" id="quantity'+i+'" name="data[Parcel][quantity]['+i+']"></div>'+
				'<div class="detail-columns"><input type="text" id="item_description'+i+'" name="data[Parcel][item_description]['+i+']"></div>'+
				'<div class="detail-columns"><div class="input select"><label for="country_of_origin1"></label>'+
						'<select id="country_of_origin'+i+'" name="data[country_of_origin]['+i+']"><option value="1">Australia</option>'+
						'<option value="2">canada</option><option value="3">china</option>'+
						'<option value="4">india</option><option value="5">japan</option></select></div></div>'+
				'<div class="detail-columns"><input type="text" id="weight'+i+'" name="data[Parcel][weight]['+i+']"></div>'+
				'<div class="detail-columns"><input type="text" id="total_value'+i+'" name="data[Parcel][total_value]['+i+']"><a id=row'+i+'><img  src="../img/ico-delete.gif"/></a></div>'+
			    '</div>';
$('.parcel-details').eq(0).append(text_div);
i++;
}

function remove()
{
  if(i>1)
  {
  	$('.parcel-details').eq(0).find('.parcel-row').eq(i-1).remove();
	i--;
  }
}

function del_fields(){

if(i>2){
i--;
j('#actorfield'+i).remove();

}

}

</script>

</div>
