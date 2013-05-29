<div id="main_wapper">
	<div class="top_heading">

	</div>

	<div class="summary">
		<?php if(!empty($status)){?>
		<h2>Pracel Tracking Details:</h2>
		<div class="summary-row"><div class="label"> Booking:     </div>	BOOKed</div>
		<div class="summary-row"><div class="label"> Status:</div>	 <?php echo $status?> </div>
		<div class="summary-row"><div class="label"> Telephone:</div>	 &nbsp;+44-</div>
		<div class="summary-row"><div class="label">    </div>	&nbsp;<b>live chat </b></div>
		<?php }else
	{?>
	<h2>Sorry no Parcel found with this referenc no;</h2>
	<?php }?>
	</div>
	
</div>	