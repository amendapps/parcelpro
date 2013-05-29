<script>
$(document).ready(function(){
	$('#new_quote').live('click',function(){
		$('.quotation_row').show();
		$('.company').html($('#QuotationCompanyName option:selected').html());
	});
	
	
	
})

function validateSearch() {
	if($('#QuotationCompanyName').val()=='')
	{
		alert("Please Select Company First.");
		return false;
	}
	return true;
}

function validateQuotation() {
	var error=false;
	if ($('#QuotationCompanyId').val()=="") {
		alert("Company Required");
		error=true;	
	}
	else if ( $('#QuotationMinWeight').val()=="") {
		alert("Greater than Weight required.");
		error=true;	
	}
	else if ( $('#QuotationMaxWeight').val()=="") {
		alert("Less than Weight required.");
		error=true;	
	}
	else if ( $('#QuotationDestinationCountry').val()=="") {
		alert("Destination country required.");
		error=true;	
	}
	else if ( $('#QuotationService').val()=="") {
		alert("Service required.");
		error=true;	
	}
	else if ( $('#QuotationCollectPrice').val()=="") {
		alert("Collect price required.");
		error=true;	
	}
	else if ( $('#QuotationFixedPrice').val()=="") {
		alert("Fixed price required.");
		error=true;	
	}
	else if ( $('#QuotationRate').val()=="") {
		alert("Rate required.");
		error=true;	
	}
	if (error) {return false;}
	return true;
}
</script>
<div>
        	<article>
                    <header>
                        <h2>Manager Quotation</h2>								
                    </header>
                </article>			
			<div>				
				<?php echo $this->Form->create('Quotation', array('name'=>'Quotation','action' => 'view_all','onsubmit'=>'return validateSearch();'));?>
				<?php echo $this->Form->input('company_name',array('options'=>array(''=>'Choose Company',$company_list),'div'=>false, 'legend'=>false, 'label'=>false));?>						
				<button type="submit" >Search</button>
				<a href="#" id="new_quote"> New Quote</a>
				<?php echo $this->Form->end('');?>					
			</div>
			<?php if(!empty($result)) { ?>			
				<table>
					<tr>
						<th>Company</th>
						<th>Weight Greater than</th> 
						<th>Weight Less than</th> 
						<th>Destination Country</th> 
						<th>Service</th>
						<!--th>Drop off Price</th--> 
						<th>Collection Price</th> 
						<th>Fixed Price</th>
						<th>Rate per Kg.</th>
						<th>Action</th>
					</tr>
					<?php foreach($result as $row) { ?>
					<tr>
						<td><?php echo $row['cmp']['name'];?></td>
						<td><?php echo $row['q']['min_weight'];?> kg</td>
						<td><?php echo $row['q']['max_weight'];?> kg</td>
						<td><?php echo $row['cty']['country_name'];?></td>
						<td><?php  $service= $row['q']['service']; if($service==0) echo "Economy";elseif($service==1) echo "Express";elseif($service==2) echo "EuroRoad";?></td>						
						<td><?php echo $row['q']['collect_price'];?></td>
						<td><?php echo $row['q']['fixed_price'];?></td>
						<td><?php echo $row['q']['rate'];?></td>						
						<td>
							<?php echo $this->Html->link('edit', array('controller'=>'quotations', 'action' => 'admin_edit',$row['q']['id']), array('escape' => false,'class'=>'edit','title'=>'Edit Quotation','rel'=>'tooltip'));?> | 
							<?php echo $this->Html->link('delete', array('controller'=>'quotations', 'action' => 'admin_delete_one',$row['q']['id']), array('escape' => false,'class'=>'edit','title'=>'Delete Quote','rel'=>'tooltip','onclick="return confirm(\'This will delete you record permanently.\')"'));?>
						</td>
					</tr>
					<?php }?>
					<?php echo $this->Form->create('Quotation', array('name'=>'Quotation','action' => 'add','onsubmit'=>'return validateQuotation()'));?>
					<tr class='quotation_row'>
					<td>
					<?php echo $this->Form->input('company_id',array('options'=>array(''=>'Choose Company',$company_list),'div'=>false, 'legend'=>false, 'label'=>false));?>										</td>
					<td><?php echo $this->Form->input('min_weight',array('label'=>''));?></td>										    
					<td><?php echo $this->Form->input('max_weight',array('label'=>''));?></td>										    
					<td><?php echo $this->Form->input('destination_country',array('options'=>array(''=>'Choose Destination',$country_list),'div'=>false, 'legend'=>false, 'label'=>false));?>			
					<td><?php echo $this->Form->input('service',array('label'=>'','options'=>array('0'=>'Economy','1'=>'Express','2'=>'EuroRoad')));?></td>
					<td><?php echo $this->Form->input('collect_price',array('label'=>''));?></td>
					<td><?php echo $this->Form->input('fixed_price',array('type'=>'text','label'=>''));?></td>
					<td><?php echo $this->Form->input('rate',array('type'=>'text','label'=>''));?></td>
					<td><button type="submit">Add</button></td>
					<?php $this->Form->end('');?>					
				 </tr>
					
				</table>                			 
</div>
				
<?php } ?>										