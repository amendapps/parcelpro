<div>
        		<article>
                    <header>
                        <h2>Booking Tracker Manager</h2>
					<div style="float:right;" class="search_booking">	
						<?php echo $this->Form->create('Booking',array('url'=>array('controller'=>'trackers','action'=>'admin_booking_view')))?>
						<div  style="float:left;">Search:</div><div style="float:left;"><?php echo $this->Form->input('reference_no',array('label'=>'','placeholder'=>'Refrence no.'));?></div>
						<div style="float:left;"> <?php $this->Form->end('');?>&nbsp;&nbsp;<button type="submit">Search</button></div>
						</div>
					</div>
				
								    </header>
									
                </article>
                <?php ?>        
                                <table >
										<tr>
											<th>&nbsp;</th>
											<th>SNo.</th>
											<th>Booking Date</th>
                                            <th>Refrence No.</th>
                                            <th>Status</th>
                                            <th>Action</th>
										</tr>
										 <?php 
											//$i = $this->paginator->counter(array('format' => __('%start%', true)));
											$i=1;
											foreach ($bookingDetails as $detail){?>
                                            	
										<tr>
                                        <td>&nbsp;</td>
											<td><?php echo $i; ?></td>
											<td>
												<?php echo $detail['Booking']['date_of_booking']; ?>
											</td>
                                            <td>
												<?php echo $detail['Booking']['reference_no']; ?>                                           
                                            </td>
											<td>
												<?php echo $detail['Booking']['deliver_status'];?>
											</td>
                                            <td>
												<ul class="actions">
													<li><?php echo $this->Html->link('edit', array('controller'=>'trackers', 'action' => 'admin_booking_view',$detail['Booking']['id']), array('escape' => false,'class'=>'edit','title'=>'Edit Booking','rel'=>'tooltip'));?></li>				
																												
												</ul>                                             
                                            </td> 
										</tr>
                                        
										<?php $i++;}?>
									
                						<tfoot>
                    <tr>
                        <td colspan="7">
                        
                            <?php
						
							if(!$detail){?><div style='color:#FF0000'>No Record Found</div><?php }
                                else{
                            ?>
                            	<ul class="pagination">
                               <?php echo $this->Paginator->numbers();
		
								// Shows the next and previous links
								echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled'));
								echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php //echo $this->Paginator->counter();?>
                                  
                                  
                                </ul>
                            <?php } ?>
                            
                           
                            
                            
                        </td>
                    </tr>
                </tfoot>
	
								</table>
							</form>
							
		</div>
