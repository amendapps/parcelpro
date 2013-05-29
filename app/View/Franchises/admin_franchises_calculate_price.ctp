<script language="javascript">
function validatefields(val)
{
	
	
	if(document.getElementById('PriceDestinationCountry').value==''){
		alert("Please select Destination Country Name");
		document.getElementById('PriceDestinationCountry').focus();
		return false;
	}
	if(document.getElementById('PriceService').value==''){
		alert("Please Select a quotation service");
		document.getElementById('PriceService').focus();
		return false;
	}
	if(document.getElementById('PriceWeight').value==''){
		alert("Please enter a quotation weight");
		document.getElementById('PriceWeight').focus();
		return false;
	}
}

</script>	

<div>
        <article>
                <header>
                        <h2>
				<?php
					if ($this->data['Quotation']['id']):
						echo'Update Quotation';
					else:
						echo'Book Parcel';
					endif;
				?>
                        </h2>
                </header>
        </article>
	<?php echo $this->Form->create('Price',array('name'=>'price','url'=>array('controller'=>'franchises','action'=>'franchises_calculate_price'),'onsubmit'=>'return validatefields();'))?>
	<?php  $this->Form->input('id');?>
	
		<fieldset>
			
			<dl>
				
				
				<dt>
					<label>Destination Country<span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->input('destination_country',array('options'=>array(''=>'select_country',$destination_country),'class'=>'small','div'=>false, 'legend'=>false, 'label'=>false)); ?>
				</dd>
                
				 <dt>
					<label>Services<span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->input('service',array('options'=>array(''=>'Select_service','0'=>'Economy','1'=>'Express'),'class'=>'small','div'=>false, 'legend'=>false, 'label'=>false)); ?>
				</dd>
            
				<dt>
					<label> Weight <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('weight',array('class'=> 'small','size'=>'45')); ?>
				</dd>
					
				
			</dl>
			
		</fieldset>
	
		<button type="submit">
			
				
					<?php echo'Calculate Price';?>
				
			
		</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php //echo $this->Html->link('Cancel', array('controller'=>'quotations', 'action' => 'index'));?>
					
		<?php $this->Form->end();?>
		
		
		<span><?php if($price){?>
				<b>Your parcel sending Price is: </b><b><?php echo $price;?><b>
				
				<a href="<?php echo Configure::read('HTTP_PATH_IMAGE');?>/admin/franchises/franchises_sender_address_detail" style="padding-left: 10px;">Continue</a>
				<?php }?>
		</span>
		
</div>
 