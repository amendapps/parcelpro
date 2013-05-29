<div id="main_wapper">
    <div class="top_heading">
      <h1>Sign up for your own YahooParcle.com account</h1>
    </div>
    <div class="signup-form-wrap">
		<label style="color: red;"><h1><?php echo $this->Session->flash();?></h1></label>
       <?php echo $this->Form->create('Franchise',array('name'=>'franchise','url'=>array('controller'=>'franchises','action'=>'register'),'onsubmit'=>'return frenchiseRegister();'))?>
      <div class="signup-form-wrap-left">

        <label>Your name :</label>
       <?php echo $this->Form->text('name'); ?>
        <label>Email :</label>
       <?php echo $this->Form->text('username');?>
       <label>Country :</label>
         <?php echo $this->Form->input('country_name',array('options'=>array($countryname),'div'=>false, 'legend'=>false, 'label'=>'','class'=>'select_field'));?>
	 <!--<label>User Type :</label>-->
         <?php echo $this->Form->hidden('user_type',array('value'=>'U'));?>
        <label>Password :</label>
        <?php echo $this->Form->text('password',array('type'=>'password')); ?>
	
        <label>Confirm Password :</label>
        <?php echo $this->Form->text('confirm_password',array('type'=>'password'));?>
	<label>Address :</label>
        <?php echo $this->Form->text('address');?>
	
        <input type="submit" value="Create my account" name="submit">
       <?php $this->Form->end();?>
      </div>
      <div class="form_divider"></div>
      <div class="signup-form-wrap-right">
        <h4>Why create a Yahoo Parcels.com account?</h4>
        <p><span>Save money</span><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor et dolore magna aliqua.</p>
        <p><span>Save money</span><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor et dolore magna aliqua.</p>
        <p><span>Save money</span><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor et dolore magna aliqua.</p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!--sign in box-->
  <div class="clear"></div>
</div>
