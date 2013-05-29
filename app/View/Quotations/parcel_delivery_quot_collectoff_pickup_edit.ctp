<script>
	 $(document).ready(function(){
	   $val='<?php echo $day;?>';
	    $("input[value="+$val+"]").attr('checked','checked');
	    
	 })
</script>

<?php //echo "<pre>";print_r($detail);die();?>
<?php if($detail){?>

<div id="main_wapper" class="collect-detail">
	 
       <?php foreach($detail as $d){?>        
	  
    <div class="top_heading">
      <span><?php echo $this->Html->link('Change dropoff/collection detail',array('controller'=>'quotations','action'=>'parcel_delivery_quot_collectoff_pickup_edit',$d['Address']['id']));?></span>
	<span class="continue"><?php echo $this->Html->link('Continue',array('controller'=>'quotations','action'=>'sender_contact_detail'))?></span>
    </div>
    <div class="sender_form">
	
	 
      <div class="sender_row">
        <label>Address 1:</label>
       <?php echo $d['Address']['first_address']?>
      </div>
      <div class="sender_row">
        <label>Address2 :</label>
	 <?php echo $d['Address']['second_address']?>
       </div>
      <div class="sender_row">
        <label>Town :</label>
	<?php echo $d['Address']['town']?>
         </div>
      
      <div class="sender_row">
        <label>Postcode :</label>
       <?php echo $d['Address']['postcode']?>
      </div>
      <div class="sender_row">
        <label>Country :</label>
       <?php echo $d['Address']['country']?>
      </div>
      <div class="sender_row">
        <label>Telephone :</label>
	<?php echo $d['Address']['telephone']?>
         </div>
      <div class="sender_row">
        <label>Notes :</label>
        <?php echo $d['Address']['notes']?>
      </div>
     <?php }?>
      <div class="clear"></div>
    
      <span>*Yahoo Parcels.com offer delivery services from United Kingdom addresses only.</span>
	 
      <div class="clear"></div>
    </div>
    <div class="sender_right">
      <h3>Quote Summary</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
      <h4>Features of UPS Express Saver:</h4>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
      </ul>
      <div class="clear"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
      <h4>Subtotal:</h4>
      <h5>&pound;<?php echo $collect_off_price;?> <br>
        <span>&pound;<?php echo $collect_off_price;?> (no vat)</span></h5>
    </div>
  </div>
  <!--sign in box-->
  <div class="clear"></div>
</div>

	
	<?php }else{?>



<div id="main_wapper">
	  <h1><?php echo $this->Html->link('Back to Compare Price',array('Controller'=>'quotations','action'=>'quotation_compare_price',T)); ?></h1>
	  <?php echo $this->Form->create('Address',array('url'=>array('controller'=>'quotations','action'=>'parcel_delivery_quot_collectoff_pickup_edit')))?>
	   <label><h1><b>Which day suits you?</b></h1></label><br>
	  <?php 

			function getWeekDays(){
   				 $days = 7;
   				 $d = new DateTime();
   				 $t = $d->getTimestamp();
				 $days_arr=Array();
 				 $j=0;

					     for($i=0; $i<$days; $i++){
					     $addDay = 86400;
					      $nextDay = date('w', ($t+$addDay));
  	   					 $weekend=false;
					     if($nextDay == 0 || $nextDay == 6) {
							       $i--;
							       $weekend=true;
							       }
						      $t = $t+$addDay;
		
		
   	  			 if(!$weekend) {
	 					  $day=$d->setTimestamp($t)->format( 'D ,d ,M' );
						  $day_val=$d->setTimestamp($t)->format( 'Y-m-d' );?>
	    			<?php echo "<input type='radio' name='data[Address][day]' value='".$day_val."'/><label>$day<lable>";?>
		<?php  $j=$j+1;
		}		
    }
}

getWeekDays();

?>
               
	  
    <div class="top_heading">
      <h1>Where should we collect your parcel?</h1>
      <h1><?php //echo $this->Html->link('Back to Compare Price',array('Controller'=>'quotations','action'=>'quotation_compare_price',T)); ?></h1>
    </div>
    <div class="sender_form">
	
	 <?php echo $this->Form->hidden('id');?>
	 <?php echo $this->Form->hidden('Lineup.id',array('value'=>$lineup_id));?>
     
      <div class="sender_row">
        <label>Address 1:</label>
        <?php echo $this->Form->text('first_address');?>
      </div>
      <div class="sender_row">
        <label>Address2 :</label>
       <?php echo $this->Form->text('second_address');?>      </div>
      <div class="sender_row">
        <label>Town :</label>
       <?php echo $this->Form->text('town');?>      </div>
      <div class="sender_row">
        <label>Country :</label>
        <?php echo $this->Form->text('country');?>
      </div>
      <div class="sender_row">
        <label>Postcode :</label>
        <?php echo $this->Form->text('postcode');?>
      </div>
      <div class="sender_row">
        <label>Country :</label>
        <?php echo $this->Form->text('source_country');?>
      </div>
      <div class="sender_row">
        <label>Telephone :</label>
        <?php echo $this->Form->text('telephone');?>    </div>
      <div class="sender_row">
        <label>Notes :</label>
        <?php echo $this->Form->text('notes');?>
      </div>
      <div class="clear"></div>
      <input type="submit" value="Save" name="submit">
	 <?php $this->Form->end('');?>
      <span>*Yahoo Parcels.com offer delivery services from United Kingdom addresses only.</span>
	 
      <div class="clear"></div>
    </div>
    <div class="sender_right">
      <h3>Quote Summary</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
      <h4>Features of UPS Express Saver:</h4>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
      </ul>
      <div class="clear"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
      <h4>Subtotal:</h4>
      <h5>&pound;<?php echo $collect_off_price;?> <br>
        <span>&pound;<?php echo $collect_off_price;?> (no vat)</span></h5>
    </div>
  </div>
  <!--sign in box-->
  <div class="clear"></div>
</div>



<?php }?>
