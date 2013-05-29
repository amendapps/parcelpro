
<style type="text/css">
.user-account{
                margin-top:40px;
                margin-left: 150px;
                border: 0px solid;
                width:935px;height: 509px;
                padding: 10px;
                
               }
.left-overview{
 border: 2px solid #DC143C;
 float:left;
 width: 208px;
 height: 110px;
 border-right:none;
 background-color:#FFF8DC;
 
}
.left-overview ul{padding-left:20px;padding-top: 30px;}
.right-overview{
  border: 2px solid #DC143C;
 float:left;
 width: 671px;
 height: 481px;
 margin-left: 0px;
padding: 10px;
 
}

hr {
  border-top: 1px dotted #f00;
  color: #fff;
  background-color: #fff;
  height: 1px;
  width:100%;
}
.order-detail th{width:150px;
 
 
}

</style>
<div class="user-account">
 <h1>Your Account</h1>
  <div class="left-overview">
         <ul>
             <li><a href="#">Overview</a></li>
             <li><a href="#">Order History</a></li>
             <li><?php echo $this->Html->link('Change password',array('controller'=>'franchises','action'=>'user_change_password',$user['id']));?></li>
         </ul>
  </div>
  <div class="right-overview">
   <h2>Welcome Back <?php foreach($user_detail as $user){echo $user['firstname'];}?></h2><br><br>
   <h3>Your Profile</h3><br>
          <div>
       
                           <table border='0px' cellpadding='6px' cellspacing='6px'>
        
                              <?php foreach($user_detail as $user){?>
                              <tr>
                                   <td style="width:200px;">Your Name:</td>
                                   <td style="width:400px;"><?php echo $user['firstname'];?></td>
                              </tr>
                              <tr>
                                   <td colspan='2'><hr></td>
                              </tr>
                               <tr>
                                   <td>Email</td>
                                   <td><?php echo $user['username'];?></td>
                               </tr>
                                <tr>
                                   <td colspan='2'><hr></td>
                              </tr>
                               <tr>
                                     <td>Address</td>
                                     <td ><?php echo $user['address'];?></td>
                               </tr>
                                <tr>
                                   <td colspan='2'><hr></td>
                              </tr>
                              <?php }?>
        
                             </table><br><br>
       
       
       
          <h2>Recent Orders</h2>
          <p>Click on an order number to view full details:</p><br><br>
                     <table>
                      
                      <tr></tr>
                     <table border='0' class="order-detail">
                            <tr>
                            <th>Order No.</th>
                            <th>Destination</th>
                            <th>Summary</th>
                            <th>Date</th>
                            <th>Cost</th>
                            </tr>
                            
                            <tr>
                             <td colspan='5'><hr></td>
                            </tr>
                            
                     
                     </table>
      </div>   
      
  </div>
 
</div>






















 