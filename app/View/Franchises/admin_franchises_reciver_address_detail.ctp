<script language="javascript">
function validatefields(val)
{
	
	
	if(document.getElementById('AddressName').value==''){
		alert("Please Enter Name");
		document.getElementById('AddressName').focus();
		return false;
	}
	if(document.getElementById('AddressFirstAddress').value==''){
		alert("Please enter first address");
		document.getElementById('PriceService').focus();
		return false;
	}
	if(document.getElementById('AddressSecondAddress').value==''){
		alert("Please enter second address");
		document.getElementById('AddressSecondAddress').focus();
		return false;
	}
	if(document.getElementById('AddressTown').value==''){
		alert("Please enter Town name");
		document.getElementById('AddressTown').focus();
		return false;
	}
	if(document.getElementById('AddressCountry').value==''){
		alert("Please enter country name");
		document.getElementById('AddressCountry').focus();
		return false;
	}
	if(document.getElementById('AddressPostcode').value==''){
		alert("Please enter a postcode");
		document.getElementById('AddressPostcode').focus();
		return false;
	}
	if(document.getElementById('AddressTelephone').value==''){
		alert("Please enter Telephone no");
		document.getElementById('AddressTelephone').focus();
		return false;
	}
	if(document.getElementById('AddressEmail').value==''){
		alert("Please enter Email");
		document.getElementById('AddressEmail').focus();
		return false;
	}
}

</script>
<div>
	  <article>
                <header>
                        <h2>
				    Recipient contact details:
                        </h2>
                </header>
        </article>
	
	  <?php //echo $this->Html->link('Back to Compare Price',array('Controller'=>'franchises','action'=>'#')); ?>
	
	 <?php echo $this->Form->create('Address',array('url'=>array('controller'=>'franchises','action'=>'franchises_reciver_address_detail'),'onsubmit'=>'return validatefields();'))?>
	 
		<?php echo $this->Form->hidden('id');?>
	  <?php echo $this->Form->input('type',array('options'=>array('H'=>'Home Address','B'=>'Business Address'),'style'=>'width:250px; height:25px;','type'=>'radio','label'=>'','lagend'=>false));?>
		 
         <fieldset>
		  <dl>
			
		 
			<dt> Name:</dt><dd><?php echo $this->Form->text('name');?></dd>
		 
		 
			<dt> Address 1:</dt><dd><?php echo $this->Form->text('first_address');?></dd>
		 
		  
			<dt> Address 2:</dt><dd><?php echo $this->Form->text('second_address');?></dd>
		 
		  
		         <dt>Town :</dt><dd><?php echo $this->Form->text('town');?></dd>
		 
		    
			 <dt>Country :</dt><dd><?php echo $this->Form->text('country');?></dd>
		 
		     
			 <dt>Postcode:</dt><dd><?php echo $this->Form->text('postcode');?></dd>
	 
			 <dt>Country :</dt><dd><?php echo $this->Form->text('source_country');?></dd>
		 
		       
			<dt>Telephone :</dt><dd><?php echo $this->Form->text('telephone');?></dd>
		 
		        
                         
			<dt> Email:</dt><dd><?php echo $this->Form->text('email');?></dd>
		  </dl>
	  <button type="submit">
			
					<?php echo'Save';?>
			
		</button>
	<?php $this->Form->end('');?>
	 </fieldset> 
</div>
