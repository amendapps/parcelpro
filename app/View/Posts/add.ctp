
<script language="javascript">
function validatefields(val)
{
	
	if(document.getElementById('PostTitle').value==''){
		alert("Please Enter Name");
		document.getElementById('PostTitle').focus();
		return false;
	}
	if(document.getElementById('PostBody').value==''){
		alert("Please enter Comments");
		document.getElementById('PostBody').focus();
		return false;
	}
	
}

</script>	
<style type="text/css">
.comment{
    border: 2px solid  	#DC143C;
    width: 974px;
    height:auto;
    margin-left: 123px;
    padding: 10px;
}
</style>

<div class="comment">
    <h1><B>customer reviews!</B></h1><br><br>
    
    <table border="0px">
    
<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <b><?php echo $post['Post']['title'];?></b>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $post['Post']['body'];?>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <?php endforeach; ?>

    
   
</table><br><br>
<?php echo $this->Paginator->numbers();

// Shows the next and previous links
echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled'));
echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<?php //echo $this->Paginator->counter();?>

<!-----------------Add Comments--->
   <br><br>
   <h1>Post a comment</h1><br><br>
<table>
    
    
            <?php echo $this->Form->create('Post',array('onsubmit'=>'return validatefields();'));?>
    
    <tr>
            <td><b>Name</b></td>
             <td> <?php echo $this->Form->input('title',array('label'=>''));?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        
    </tr>
    <tr>
        <td><b>Comment</b></td>
        <td><?php echo $this->Form->input('body', array('rows' => '4','label'=>''));?></td>
    </tr>
     <tr>
        <td>&nbsp;</td>
        
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><?php echo $this->Form->end('Save Post');?></td>
    </tr>

</table> 
</div>




