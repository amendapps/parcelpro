  <div id="main_wapper"> 
  <div class="forgot_box">
  <h4>Forgotten your password?</h4>
  
  <?php echo $this->Form->create('User',array('name'=>'user','url'=>array('controller'=>'franchises','action'=>'forgotten_password'),'onsubmit'=>'return validatefields();'))?>
 <?php echo $this->Form->hidden('id',array('value'=>$user_id));?>
 <div class="forgot-message-form">
  <span style="color: #DC143C;"><?php echo $this->Session->flash();?></span>
  </div>
 
  <div class="forgot-form">
   <label>Email</label>
 <?php echo $this->Form->input('email',array('label'=>'','type'=>'email'));?>
   </div>
   <div class="forgot-form">
   <label>User Type</label>
  <?php echo $this->Form->input('user_type',array('options'=>array('U'=>'User','F'=>'Franchise'),'type'=>'select','label'=>'','legend'=>false,'class'=>'selectbox')); ?> </div>
   <div class="forgot-form">
   <label>&nbsp;</label>
   <input name="submit" type="submit" value="Submit">
     <?php $this->Form->end('');?>
  </div>
   
   
   </div>
   </div><!--sign in box-->
    <div class="clear"></div>
  </div>

 
 
 
 
 
 
 
 
 