<style>
    .page-detail{
        
         border:2px solid #DC143C;
      width:1000px;
      height:auto;
      margin-left: 119px;
      padding: 10px;
    }
</style>

<div class="page-detail">
    
    
    <table>
        <?php foreach($page as $p){?>
        <tr>
            <td><h1><?php echo $p['Page']['page_name'];?></h1></td>
            
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><img src="<?php echo Configure :: read('HTTP_PATH_IMAGE').'/app/webroot/img/uploadfile/'.$p['Page']['image']?>" width="300px" height="200px"/></td>
            
        </tr>
         <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><?php echo $p['Page']['description'];?></td>
            
        </tr>
        <?php } ?>
    </table>
    
</div>