<script type="text/javascript">	

function formsubmit(action)
{
	//alert(action);
	var flag=true;
//	if(action=='Delete')
		//flag=confirm('Are You Sure, You want to Delete this Press(es)!');
	if(flag)
	{
		document.getElementById('action').value=action;
		if(validate())
			document.getElementById('QuotationDeleteForm').submit();
	}
}

function validate(){
		var ans="0";
		for(i=0; i<document.Quotation.elements.length; i++){
			if(document.Quotation.elements[i].type=="checkbox"){
				if(document.Quotation.elements[i].checked){
					ans="1";
					break;
				}
			}
		}
		if(ans=="0"){
			alert("Please select Quotation to "+document.getElementById('action').value);
			return false;
		}else{
			var answer = confirm('Are you sure you want to '+document.getElementById('action').value+' Quotation(s)');
			if(!answer)
				return false;
		}
		return true;
	}	


function CheckAll(chk)
{//alert(document.getElementById('EventsCheck').checked);
//alert(document.getElementsByTagName('checkbox').length);
	var fmobj=document.getElementById('QuotationDeleteForm');
	for (var i=0;i<fmobj.elements.length;i++) 
	{
		var e = fmobj.elements[i];
		if(e.type=='checkbox')
			fmobj.elements[i].checked=document.getElementById('QuotationCheck').checked;
	}
	
}
</script>
<div>
        		<article>
                    <header>
                        <h2>Manager Quotation</h2>
					<div style="float:right;">	
				
				<a href="javascript:" onClick="return formsubmit('Delete');" class="button">Delete</a>
				<?php echo $this->Html->link('New', array('controller'=>'quotations', 'action' => 'admin_add'), array('escape' => false,'class'=>'button'));?></div>
                    </header>
                </article>
				
				
					
				
                <?php 
			//	echo "<pre>kbmn";print_r($Events);die();
				echo $this->element('message');?>
                
				<?php echo $this->Form->create('Quotation', array('name'=>'Quotation','action' => 'delete','onSubmit'=>'return validate(this)','class'=>'table-form'));?>
				<?php echo $this->Form->hidden('action',array('id'=>'action','value'=>'')); ?>
                	
								
                                
                                <table >
										<tr>
											<th><?php echo $this->Form->checkbox('check',array('value'=>1,'onchange'=>"CheckAll(this.value)",'class'=>'check-all')); ?></th>
											<th>&nbsp;</th>
											<th>SNo.</th>
											<th>Company id</th>
											<th>Min weight</th>
											<th>Max weight</th>
											<th>Drop_of price</th>
											<th>collect price</th>
											<th>Actions</th>
										</tr>
										 <?php 
											//$i = $this->paginator->counter(array('format' => __('%start%', true)));
											$i=1;
											foreach ($Presss as $press){?>
                                            	
										<tr>
											<td><?php echo $this->Form->checkbox($press['Quotation']['id'],array('value'=>$press['Quotation']['id'])); ?></td>
											<td>
												<script type="text/javascript">
														j(document).ready(function() {
															j("#various<?php echo $press['Quotation']['id'];?>").fancybox({
														});
													});
												</script>
																							</td>
											<td><?php echo $i; ?></td>
											<td><?php echo $press['Quotation']['company_id']; ?></td>
                                            <td><?php echo $press['Quotation']['min_weight']; ?></td>
					     <td><?php echo $press['Quotation']['max_weight']; ?></td>
                                            <td><?php echo $press['Quotation']['drop_of_price']; ?></td>
                                            <td><?php echo $press['Quotation']['collect_price']; ?></td>
											<td>
												
												<ul class="actions">
													<li><?php echo $this->Html->link('edit', array('controller'=>'quotations', 'action' => 'admin_edit',$press['Quotation']['id']), array('escape' => false,'class'=>'edit','title'=>'Edit Project','rel'=>'tooltip'));?></li>
													<li><a href="#view<?php echo $press['Quotation']['id'];?>" id="various<?php echo $press['Quotation']['id'];?>"  class="view" title="View Project" rel="tooltip">view</a></li>
													<li style="">
														<?php //echo $html->link(__('Download'), array('controller'=>'Presses', 'action' => 'downloadpdf',$press['Press']['id']), array('escape' => false,'class'=>'download','title'=>'Download','rel'=>'tooltip'));?>
														</li>															
												</ul>
                                                 
                                        <div style="display: none;">
                                        <div id='view<?php echo $press['Quotation']['id'];?>' style="background:#f6f6f6; padding:8PX; max-height:550px; overflow-y:auto;">
                                            	<div style="padding:10px 0;">
							 <div style="float:left; width:110px;"><b>Quotation Name</b></div>
                                                      <div align="justify;" style="float:left; width:400px;"><?php echo $press['Quotation']['name'];?></div>
                                                <div style="clear:both;"></div>
                                                </div>
                                                                                  
                                            <div style="padding:10px 0;">
                                                      
						      
						                       
                                                                                   
                                            
						      
						            
						 						      
						                       </div>
                                       
                                                    
                                                 
                                          	</div>
                                            
                                            </div>
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
