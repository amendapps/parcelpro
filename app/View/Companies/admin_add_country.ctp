<script language="javascript">

function validatefields(val)
{
        if(document.getElementById('CountryCountryName').value==''){
                alert("Please Enter The Country Name");
                document.getElementById('CountryCountryName').focus();
                return false;
        }      
}

</script>	

	<?php echo $this->Form->create('Country',array('name'=>'country','url'=>array('controller'=>'companies','action'=>'add_country'),'id'=>'countrycms','action'=>$act,'onsubmit'=>'return validatefields();'))?>
	<?php echo $this->Form->input('id');?>
	
		<fieldset>
			
			<dl>
				<dt>
					<label>Country name <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('country_name',array('class'=> 'small','size'=>'45')); ?>
				</dd>												
			</dl>
			
		</fieldset>                  
		<button type="submit">
			<?php				
					echo'Add';
			?>
		</button> or
		<?php echo $this->Html->link('Cancel', array('controller'=>'companies', 'action' => 'index'));?>
					
		<?php echo $this->Form->end();?>
		

 