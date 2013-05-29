<style type="text/css">
    .terms {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #B2E4FF;
    height: 75px;
    margin: 0 0 0.5em;
    overflow: auto;
    padding: 5px;
    width: 90%;
}
    
</style>


<?php foreach($sender_detail as $sender){
        
    }
    //echo "<pre>";print_r($sender);die();
    ?>

<div id="main_wapper">
	<div class="summary payment">
	<h1>Complete payment for your parcel delivery order</h1>
	<br>
	Confirm your billing address and review our Terms & Conditions:
	<br>	
	<br />	
		 <?php echo $this->Form->create('Payment',array('url'=>array('controller'=>'quotations','action'=>'payment')))?>
			<div class="summary-row"><div class="label">FirstName	</div><?php echo $this->Form->input('name',array('label'=>'','value'=>$sender['Address']['name']));?></div>
			<div class="summary-row"><div class="label">Surname</div><?php echo $this->Form->input('surname',array('label'=>''));?></div>
			<div class="summary-row"><div class="label">Address 1</div>	<?php echo $this->Form->input('first_address',array('label'=>'','value'=>$sender['Address']['first_address']));?></div>	
			<div class="summary-row"><div class="label">Address 2</div>
			<?php echo $this->Form->input('second_address',array('label'=>'','value'=>$sender['Address']['second_address']));?></div>
			<div class="summary-row"><div class="label">city</div>
			<?php echo $this->Form->input('city',array('label'=>'','value'=>$sender['Address']['town']));?></div>
			
			<div class="summary-row"><div class="label">Pincode</div><?php echo $this->Form->input('pincode',array('label'=>'','value'=>$sender['Address']['postcode']));?></div>
			<div class="summary-row"><div class="label">
			Country</div>
			<?php echo $this->Form->input('country',array('label'=>'','value'=>'United Kingdom', 'readonly' => 'readonly'));?>	</div>
			<div class="summary-row">
				<div class="label">VAT Status</div>
				<?php echo $this->Form->input('vat',array('options'=>array(''=>'Please select your vat status','Personal'=>'Personal individual','1'=>'Company-non vat registered','2'=>'Company vat registered'),'type'=>'select','label'=>''));?>
			</div>
		<div class="summary-row"><div class="label"></div>
			<div class="terms">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</div>
		</div>
		<div class="summary-row"><div class="label">
			<?php echo $this->Form->checkbox('check',array('type'=>'radio','label'=>''))?></div><br />I understand and agree to the yahooparcel.com terms and conditions. I confirm that I have packed the parcel(s) myself and that the contents do not include any Dangerous Goods or Prohibited items. I agree to pay any additional charges raised by Customs in the destination country (duties and taxes) and/or raised by the carrier if: the weight or dimensions of the parcel(s) declared are incorrect; and/or if subject to a carrier 'out of' or 'extended' area or 'residential delivery' surcharge and that these charges will be applied to my payment card.
			</div>
		<?php echo $this->Form->end('Continue');?>
	</div>
<!--/div-->