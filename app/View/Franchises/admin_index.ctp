<?php //echo "<pre>";print_r($Presss);die();?>
<div>
        <article>
                    <header>
                        <h2>Franchises Manager</h2>		
                    </header>
        </article>

                                <table border="1">
					<tr>
					
                                        <th>Date of booking</th>
										<th>destination</th>
                                        <th>Reference no</th>
                                        <th>Payment</th>
                                        <th>Change Collected status</th>
                                        <th>Collected status</th>						
					</tr>
						<?php 
						
						$i=1;
						foreach ($Presss as $press){//echo "<pre>";print_r($press);die();
                                            	foreach($press['Booking'] as $p){//echo "<pre>";print_r($p);?>
							<tr>				
							     <td><?php echo $p['date_of_booking']; ?></td>
								<td><?php echo $p['destination']; ?></td>
								<td><?php echo $p['reference_no']; ?></td>
								<td><?php echo $p['payment'];?></td>
								<?php $this->params['admin'];?>
                                             <td><?php echo $this->Form->create('Booking',array('name'=>'booking','url'=>array('controller'=>'franchises','action'=>'collect',$p['id'])))?>
              <?php //echo $this->Form->create('Booking',array('name'=>'booking','url'=>'/admin/franchises/collect',$p['id']));?>
	     
		<?php if($p['collected']==0){
				echo $this->Form->hidden('collected',array('value'=>'1','label'=>''));
				echo $this->Form->hidden('id',array('value'=>$p['id']));
				 echo $this->Form->end('Collect');
	 
		}else{
				echo $this->Form->hidden('collected',array('value'=>'0','label'=>'')); 
				echo $this->Form->hidden('id',array('value'=>$p['id']));
				echo $this->Form->end('Not Collect');
		}?>
                                             </td>
                                            
					<td><?php if($p['collected']==1){
												 
							echo $this->Html->image('admin/icons/icon_success.png');
							}
							else{
							echo $this->Html->image('admin/icons/icon_error.png'); 
							 }
						?>
                                             
                                             </td>
										</tr>
                                        <?php }?>
										<?php $i++;}?>
                						<tfoot>        
                    <tr>
                        <td colspan="7">
                        
                            <?php
						
							if(!$press){?><div style='color:#FF0000'>No Record Found</div><?php }
                                else{
                            ?>
                            	<ul class="pagination">
                                <?php if($this->paginator->hasPrev()){?>
                                    <li><span class="button gray"><?php echo $this->paginator->prev('Previous',$search_keyword, null, array('class'=>'disabled'));?></span></li>
                                <?php } ?>
                                
                                	                             
                                 <li><?php echo $this->paginator->numbers(); ?></li>
                                 
                                  <?php if($this->paginator->hasNext() or $this->paginator->hasPrev()){ ?>
                                  <li><?php  echo '...'; ?></li>
                                  <?php } ?>
                                  
								  <li><?php	  echo $this->paginator->last('',@$search_keyword); ?></li>
                                 
                                 
                                 
                                <?php if($this->paginator->hasNext()){?>
                                  <li><span class="button gray"><?php echo $this->paginator->next('Next',@$search_keyword, null, array('class'=>'button gray'));?></span></li>
                                  <?php } ?>
                                  
                                  
                                  
                                  
                                </ul>
                            <?php } ?>
                            
                           
                            
                            
                        </td>
                    </tr>
                </tfoot>
	
								</table>
												
		<?php //echo $this->Form->end('Update');?>

       
							
		</div>
