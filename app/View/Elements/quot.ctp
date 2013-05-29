<script language="javascript">
function validatefields(val)
{
	
	if(document.getElementById('QuotationCompanyId').value==''){
		alert("Please select Company Name");
		document.getElementById('QuotationCompanyId').focus();
		return false;
	}
	if(document.getElementById('QuotationDestinationCountry').value==''){
		alert("Please select Destination Country Name");
		document.getElementById('QuotationDestinationCountry').focus();
		return false;
	}
	if(document.getElementById('QuotationService').value==''){
		alert("Please Select a quotation service");
		document.getElementById('QuotationService').focus();
		return false;
	}
	if(document.getElementById('QuotationWeight').value==''){
		alert("Please enter a quotation weight");
		document.getElementById('QuotationWeight').focus();
		return false;
	}
	if(document.getElementById('QuotationDimension').value==''){
		alert("Please enter a quotation Dimension");
		document.getElementById('QuotationDimension').focus();
		return false;
	}
	if(document.getElementById('QuotationDropOfPrice').value==''){
		alert("Please enter a quotation drop_of_price");
		document.getElementById('QuotationDropOfPrice').focus();
		return false;
	}
	if(document.getElementById('QuotationCollectPrice').value==''){
		alert("Please enter a quotation collectPrice");
		document.getElementById('QuotationCollectPrice').focus();
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
						echo'Add Quotation';
					endif;
				?>
                        </h2>
                </header>
        </article>
			
	<?php
		if($this->data['Quotation']['id'])
		{
			$act='admin_edit';
	        }
		else
		{
			$act='add';
		}
	?>
	<?php echo $this->Form->create('Quotation',array('name'=>'quotation','type'=>'file','url'=>array('controller'=>'quotations','action'=>$act),'id'=>'QuotationCms','action'=>$act,'onsubmit'=>'return validatefields();'))?>
	<?php echo $this->Form->input('id');?>
	<?php //e($form->hidden('parentId', array('value'=>$parentId))); ?>
		<fieldset>
			
			<dl>
				<dt>
					<label>Select Company <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->input('company_id',array('options'=>array(''=>'select_company',$name),'class'=>'small','div'=>false, 'legend'=>false, 'label'=>false)); ?>
				</dd>
				
				<dt>
					<label>Destination Country<span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->input('destination_country',array('options'=>array(''=>'select_country',$country),'class'=>'small','div'=>false, 'legend'=>false, 'label'=>false)); ?>
				</dd>
                
				 <dt>
					<label>Services<span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->input('service',array('options'=>array(''=>'Select_service','0'=>'Economy','1'=>'Express'),'class'=>'small','div'=>false, 'legend'=>false, 'label'=>false)); ?>
				</dd>
            
				<dt>
					<label>Min Weight <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('min_weight',array('class'=> 'small','size'=>'45')); ?>
				</dd>
				
				<dt>
					<label>Max Weight <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('max_weight',array('class'=> 'small','size'=>'45')); ?>
				</dd>
				
				<dt>
					<label>Fixed Price <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('fixed_price',array('class'=> 'small','size'=>'45')); ?>
				</dd>
				<dt>
					<label>Rate /Kg.<span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('rate',array('class'=> 'small','size'=>'45')); ?>
				</dd>
                <!--dt>
					<label>Drop of price <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('drop_of_price',array('class'=> 'small','size'=>'45')); ?>
				</dd-->
                
                <dt>
					<label> Collection Cost <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('collect_price',array('class'=> 'small','size'=>'45')); ?>
				</dd>	
				
			</dl>
			
		</fieldset>
		
	
                                
		<?php //e($form->hidden('status',array('value'=>'1'))); ?>
		<button type="submit">
			<?php
				if ($this->data['Quotation']['id']):
					echo'Update';
				else:
					echo'Add';
				endif;
			?>
		</button> or 
		<?php echo $this->Html->link('Cancel', array('controller'=>'quotations', 'action' => 'index'));?>
					
		<?php $this->Form->end();?>
		
</div>
 