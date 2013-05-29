<style type="text/css">
 .main-location{
  
      border:2px solid #DC143C;
      width:1000px;
      height:300px;
      margin-left: 119px;
      padding: 10px;
 }
</style>
<div class="main-location">
 
 <table>
 <?php echo $this->Form->create('Parcel');?>
      <tr>
       <td>Select country :</td>
       <td><?php echo $this->Form->input('country_id',array('options'=>array(''=>'select_country',$destination_country),'div'=>false, 'legend'=>false, 'label'=>false)); ?></td>
      </tr>
      <tr>
       <td>&nbsp;</td>
      </tr>
      <tr>
       <td>&nbsp;</td>
       <td><?php echo $this->Form->end('Search');?></td>
      </tr>
 
</table>
<table>
 <tr>
  <td><b>Parcel Drop-off Locations</b></td>
 </tr>
 <?php foreach($nearest_location as $l){?>
 <tr>
  <td><b><?php echo $l['Franchise']['name'];?></b></td>
 </tr>
 <tr>
  <td><?php echo $l['Franchise']['address'];?></td>
 </tr>
 <tr>
  <td>Tel:<?php echo $l['Franchise']['phoneno'];?></td>
 </tr>
 <tr>
  <td>Opening hours: 9:00 - 17:30</td>
 </tr>
 <?php }?>
 <tr>
  <td><?php echo $this->Session->flash();?></td>
 </tr>
</table>

 
 
</div>
