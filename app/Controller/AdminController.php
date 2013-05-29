<?php

class AdminController extends AppController {

   
   
   public function admin_index()
   {
   
      
         $this->redirect(array('controller'=>'users','action'=>'login'));
      
   }
   
   
   
}
?>