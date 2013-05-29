<div>
        		<article>
                    <header>
                        <h2>Franchise Approve Manager</h2>
					<div style="float:right;">	
				
								    </header>
									
                </article>
                <?php ?>        
                                <table >
										<tr>
											<th>&nbsp;</th>
											<th>SNo.</th>
											<th>Franchise Name</th>
                                            <th>Approve Status</th>
                                            <th>Change status</th>
                                            <th>Action</th>
										</tr>
										 <?php 
											//$i = $this->paginator->counter(array('format' => __('%start%', true)));
											$i=1;
											foreach ($Presss as $press){?>
                                            	
										<tr>
                                        <td>&nbsp;</td>
											<td><?php echo $i; ?></td>
											<td><?php echo $press['Franchise']['name']; ?></td>
                                            <td>
                                            <?php if($press['Franchise']['approve']==1){
												 
											 			echo $this->Html->image('admin/icons/icon_success.png');
											 }
											 else{
											echo $this->Html->image('admin/icons/icon_error.png'); 
												 }
											 ?>
                                            </td>
											<td><?php echo $this->Form->create('Franchise',array('name'=>'franchise','url'=>array('controller'=>'franchises','action'=>'admin_approve',$press['Franchise']['id'])))?>
												<?php if($press['Franchise']['approve']==0){
														echo $this->Form->hidden('approve',array('value'=>'1','label'=>''));
														echo $this->Form->hidden('id',array('value'=>$press['Franchise']['id']));
														 echo $this->Form->end('Approve');
	 
													}else{
														echo $this->Form->hidden('approve',array('value'=>'0','label'=>'')); 
														echo $this->Form->hidden('id',array('value'=>$press['Franchise']['id']));
														echo $this->Form->end('Not Approve');
													}?>

											</td>
                                            <td>
                                            <?php echo $this->Html->link('Delete',array('controller'=>'franchises','action'=>'delete',$press['Franchise']['id']));?>
                                            </td> 
										</tr>
                                        
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
							</form>
							
		</div>
