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
        if(document.getElementById('PagePageName').value==''){
                alert("Please Enter The Page Name");
                document.getElementById('PagePageName').focus();
                return false;
        }

        
        

}

</script>	

<div>
        <article>
                <header>
                        <h2>
				<?php
					if ($this->data['Page']['id']):
						echo'Update Page';
					else:
						echo'Add Page';
					endif;
				?>
                        </h2>
                </header>
        </article>
			
	<?php
		if($this->data['Page']['id'])
		{
			$act='admin_edit';
	        }
		else
		{
			$act='add';
		}
	?>
	<?php echo $this->Form->create('Page',array('name'=>'page','type'=>'file','url'=>array('controller'=>'pages','action'=>$act),'id'=>'PageCms','action'=>$act,'onsubmit'=>'return validatefields();'))?>
	<?php echo $this->Form->input('id');?>
	<?php echo $this->Form->hidden('name',array('value'=>$image));?>
	
		<fieldset>
			
			<dl>
				<dt>
					<label>Page name <span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->Form->text('page_name',array('class'=> 'small','size'=>'45')); ?>
				</dd>
				
				
				</dd>
				
					<dt><label>Description<span style="color:red;">*</span></label>
				</dt>
				<dd>
					<?php echo $this->Form->textarea('description', array('class'=>'ckeditor','label'=>'')); ?>
				</dd>
				
				</dd>
				
					<dt><label>Image<span style="color:red;">*</span></label>
				</dt>
				<dd>
					<?php echo $this->Form->input('image',array('class'=> '','size'=>'20','type'=>'file','label'=>'')); ?>
				</dd>	
			</dl>
			
		</fieldset>                  
		<?php //e($form->hidden('status',array('value'=>'1'))); ?>
		<button type="submit">
			<?php
				if ($this->data['Page']['id']):
					echo'Update';
				else:
					echo'Add';
				endif;
			?>
		</button> or 
		<?php echo $this->Html->link('Cancel', array('controller'=>'pages', 'action' => 'index'));?>
					
		<?php $this->Form->end();?>
		
</div>
 