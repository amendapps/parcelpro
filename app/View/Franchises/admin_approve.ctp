<div>
        <article>
                <header>
                        <h2>
				<?php
					if ($this->data['Franchise']['id']):
						echo'Update Franchise approve';
					else:
						echo'Add Franchise approve';
					endif;
				?>
                        </h2>
                </header>
        </article>
			
	<?php
		if($this->data['Franchise']['id'])
		{
			$act='admin_approve_edit';
	        }
		else
		{
			$act='approve';
		}
	?>
	<?php echo $this->Form->create('Franchise',array('name'=>'franchises','url'=>array('controller'=>'franchises','action'=>$act)))?>
	<?php echo $this->Form->input('id');?>
	
		<fieldset>
			
			<dl>
				<dt>
					<label>Select Franchise<span style="color:red;">*</span></label>
				</dt>
								
				<dd>
					<?php echo $this->form->input('approve',array('options'=>array('Select_Frenchise'=>'Select_Frenchise',$franchise),'class'=>'small','div'=>false, 'legend'=>false, 'label'=>false)); ?>
				</dd>	
			</dl>
			
		</fieldset>                  
		<?php //e($form->hidden('status',array('value'=>'1'))); ?>
		<button type="submit">
			<?php
				if ($this->data['Franchise']['id']):
					echo'Update';
				else:
					echo'Approve';
				endif;
			?>
		</button> or 
		<?php echo $this->Html->link('Cancel', array('controller'=>'franchise', 'action' => 'index'));?>
					
		<?php $this->Form->end();?>
		
</div>
