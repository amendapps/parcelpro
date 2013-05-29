 <article>
                    <header>
                        <h2>Comment Manager</h2>		
                    </header>
        </article>
<table>
    
<!-- Here's where we loop through our $posts array, printing out post info -->


<tr>
	<th>Name</th>
	<th>Comments</th>
	<th>Change Approve</th>
	<th>Status</th>
</tr>	
    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <b><?php echo $post['Post']['title'];?></b>
        </td>
	<td style="text-align: justify;padding:5px; width:400px;">
            <?php echo $post['Post']['body'];?>
        </td>
	<td>
		<?php echo $this->Form->create('Post',array('name'=>'post','url'=>array('controller'=>'posts','action'=>'comment_approve',$post['Post']['id'])))?>
		<?php if($post['Post']['status']==0){
				echo $this->Form->hidden('status',array('value'=>'1','label'=>''));
				echo $this->Form->hidden('id',array('value'=>$post['Post']['id']));
				 echo $this->Form->end('Approve');
	 
		}else{
				echo $this->Form->hidden('status',array('value'=>'0','label'=>'')); 
				echo $this->Form->hidden('id',array('value'=>$post['Post']['id']));
				echo $this->Form->end('Not Approve');
		}?>
		
	</td>
	<td>
		
		<?php if($post['Post']['status']==1){
												 
							echo $this->Html->image('admin/icons/icon_success.png');
							}
							else{
							echo $this->Html->image('admin/icons/icon_error.png'); 
							 }
						?>
	</td>
    </tr>
    <?php endforeach; ?>

    
   
</table><br><br>
<?php echo $this->Paginator->numbers();

// Shows the next and previous links
echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled'));
echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

