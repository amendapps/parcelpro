 <div id="main_wapper"> 
  <div class="changepassword_box">
  <h4>User change password</h4>
  
  <?php echo $this->Form->create('User',array('name'=>'user','url'=>array('controller'=>'franchises','action'=>'user_change_password'),'onsubmit'=>'return validatefields();'))?>
 <?php echo $this->Form->hidden('id',array('value'=>$user_id));?>
 <div class="changepassword-message-form">
  <span style="color: #DC143C;"><?php echo $this->Session->flash();?></span>
  </div>
  <div class="changepassword-form">
  
  <label>Old Password</label>
 <?php echo $this->Form->input('password',array('label'=>'','type'=>'password'));?>
  </div>
  <div class="changepassword-form">
   <label>New Password</label>
  <?php echo $this->Form->input('new_password',array('label'=>'','type'=>'password'));?>
   </div>
   <div class="changepassword-form">
   <label>Confirm Password</label>
  <?php echo $this->Form->input('confirm_password',array('label'=>'','type'=>'password'));?> </div>
   <div class="changepassword-form">
   <label>&nbsp;</label>
   <input name="submit" type="submit" value="Change password">
  </div>
    <?php $this->Form->end('');?>
   
   </div>
   </div><!--sign in box-->
    <div class="clear"></div>
  </div>

 
