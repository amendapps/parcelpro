 <div id="main_wapper"> 
  <div class="signin_box">
  <h4>Please Sign in</h4>
  
  <?php echo $this->Form->create('Franchise',array('name'=>'franchise','url'=>array('controller'=>'franchises','action'=>'signin'),'onsubmit'=>'return validatefields();'))?>
 
  <div class="signin-form">
  <label>Email</label>
 <?php echo $this->Form->text('username'); ?>
  </div>
  <div class="signin-form">
   <label>Password</label>
  <?php echo $this->Form->text('password',array('type'=>'password')); ?>
   </div>
   <div class="signin-form">
   <label>User type</label>
  <?php echo $this->Form->input('user_type',array('options'=>array('U'=>'User','F'=>'Franchise'),'type'=>'select','label'=>'','legend'=>false)); ?>
   </div>
   <div class="signin-form">
   <label>&nbsp;</label>
   <input name="submit" type="submit" value="Sign in">
   <!--<a href="#">Forgotten your password?</a>-->
   <?php echo $this->Html->link('Forgotten your password?',array('controller'=>'franchises','action'=>'forgotten_password'));?>
   </div>
    <?php $this->Form->end('');?>
   
   </div>
   </div><!--sign in box-->
    <div class="clear"></div>
  </div>

