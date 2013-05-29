<?php //echo "<pre>";print_r($compare_result);die();?>
<br><br>
<table border="0" width="995px" cellpadding="0" cellspacing="0" style="margin-left: 180px; text-align: center">
	 <?php echo $this->Form->create('Quotation',array('url'=>array('controller'=>'quotations','action'=>'quotation_compare_price')))?>
	<tr>
		<th>Weight</th>
		<th>length</th>
		<th>width</th>
		<th>height</th>
		<th></th>
	</tr>
	<tr>
			<?php  echo $this->Form->hidden('country_id',array('value'=>$country_id));?>
		<td> <?php echo $this->Form->text('weight',array('value'=>$w));?></td>
		<td>  <?php echo $this->Form->text('length',array('value'=>$l));?></td>
		<td> <?php echo $this->Form->text('width',array('value'=>$b));?></td>
		<td><?php echo $this->Form->text('height',array('value'=>$h));?></td>
		<td> <?php echo $this->Form->input('unit',array('options'=>array('cm'=>'cm','in'=>'in'),'div'=>false, 'legend'=>false, 'label'=>false)); ?></td>
		<td><?php echo $this->Form->end('Refresh price');?></td>
	</tr>
	</table>
<br><br>
<table border="0" width="995px" cellpadding="0" cellspacing="0" style="margin-left: 180px; text-align: center">
	
	<tr>
		<th>Company name</th>
		<th>Discription</th>
		<th>Drop of price</th>
		<th>Collect price</th>
	</tr>
	<?php foreach($compare_result as $r){//echo "<pre>";print_r($r);?>
		
	<tr>
		<td><?php echo $r['Company']['name']?><br/><img src="/parcelpro/app/webroot/img/uploadfile/<?php echo  $r['Company']['image']?>" width="100" height="50"></td>
		<td><?php echo $r['Company']['description']?></td>
		<td> $ <?php  echo $r['Quotation']['drop_of_price']?><br>
			<?php echo $this->Html->link('Select Price',array('controller'=>'quotations','action'=>'parcel_delivery_quot_dropoff_pickup',$r['Quotation']['destination_country']));?>
		</td>
		<td> $ <?php  echo $r['Quotation']['collect_price']?><br>
		<?php echo $this->Html->link('Select Price',array('controller'=>'quotations','action'=>'parcel_delivery_quot_collectoff_pickup',$r['Quotation']['destination_country']));?></td>
	</tr>
	<?php }?>
</table>
