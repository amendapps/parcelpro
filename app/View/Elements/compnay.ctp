<script language="javascript">
function IsNumeric(strString){
        var strValidChars = "0123456789";
        var strChar;
        var blnResult = true;
        if (strString.length == 0) return false;
                for (i = 0; i < strString.length && blnResult == true; i++){
                        strChar = strString.charAt(i);
                                if (strValidChars.indexOf(strChar) == -1){
                                        blnResult = false;
                                }
                }
                return blnResult;
}
function is_valid_url(url)
{

        var
mat=/^(ht|f)tps?:\/\/[a-z0-9-\.]+\.[a-z]{2,4}\/?([^\s<>\#%"\,\{\}\\|\\\^\[\]`]+)?$/;
        if(!mat.test(url))
        return false;
}

function validatefields(val)
{
        if(document.getElementById('CompanyName').value==''){
                alert("Please Enter The Company Name");
                document.getElementById('CompanyName').focus();
                return false;
        }

        
        

}

</script>	

<div>
        <article>
                <header>
                        <h2>
				<?php
					if ($this->data['Compnay']['id']):
						echo'Update Compnay';
					else:
						echo'Add Company';
					endif;
				?>
                        </h2>
                </header>
        </article>
			
	<?php
		if($this->data['Company']['id'])
		{
			$act='admin_edit';
	        }
		else
		{
			$act='add';
		}
	?>
	<?php echo $this->Form->create('Company',array('name'=>'company','type'=>'file','url'=>array('controller'=>'companies','action'=>$act),'id'=>'CompnayCms','action'=>$act,'onsubmit'=>'return validatefields();'))?>
	<?php echo $this->Form->input('id');?>
	
		<fieldset>
			
			<dl>
				<dt>
					<label>Company name <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('name',array('class'=> 'small','size'=>'45')); ?>
				</dd>
				
				
				</dd>
				
					<dt><label>Description<span style="color:red;">*</span></label>
				</dt>
				<dd>
					<?php echo $this->form->textarea('description', array('class'=>'ckeditor')); ?>
				</dd>
				
				</dd>
				
					<dt><label>Image<span style="color:red;">*</span></label>
				</dt>
				<dd>
					<?php echo $this->form->file('image',array('class'=> '','size'=>'20')); ?>
				</dd>	
			</dl>
			
		</fieldset>                  
		<?php //e($form->hidden('status',array('value'=>'1'))); ?>
		<button type="submit">
			<?php
				if ($this->data['Company']['id']):
					echo'Update';
				else:
					echo'Add';
				endif;
			?>
		</button> or 
		<?php echo $this->Html->link('Cancel', array('controller'=>'companies', 'action' => 'index'));?>
					
		<?php $this->Form->end();?>
		
</div>
 