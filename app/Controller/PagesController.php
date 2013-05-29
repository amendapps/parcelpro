<?php

class PagesController extends AppController {
    public $helpers = array('Html', 'Form');




	function admin_index($parentId=0,$keyword=null)
	{
		Configure::load('site_config');
		$this->paginate['limit']=Configure::read('ADMIN_SIDE_PAGGING');
		//echo $this->paginate['limit'];die();
		$condition=null;
		if($parentId !=0)
		$condition['Page.id'] = $parentId;		
		$this->Page->recursive = 0;
		
		$Presss=$this->paginate("Page", $condition);
		//echo "<pre>";print_r($Presss);die();
		$this->set('Presss',$Presss);
	}
	
	////////////////////////////////////////////////////////////////////	
     
	public function add($id=null) 
	{
        
		if(!empty($this->data))
		{
		
			if(!empty($this->data['Page']['id']))
			{
					
						$this->Page->create();
						if($this->data['Page']['image']['name']=='')
						{
							$this->request->data['Page']['image']=$this->data['Page']['name'];
						}
						else
						{
						
						move_uploaded_file($this->data['Page']['image']['tmp_name'],WWW_ROOT."img/uploadfile/".$this->data['Page']['image']['name']);
							$this->request->data['Page']['image']=$this->data['Page']['image']['name'];
						}
            			if ($this->Page->save($this->request->data))
			 			{
						//echo "<pre>";print_r($this->data);die();
							
                			$this->Session->setFlash('Your page has been Updated.');
                			$this->redirect(array('action' => 'index'));
            			} 
						else 
						{
                			$this->Session->setFlash('Unable to Update your page.');
            			}
			
			}
			else
			{
				if ($this->request->is('post')) 
				{
					//echo "<pre>";print_r($this->data);die();
            		$this->Page->create();
					$this->request->data['Page']['image']=$this->data['Page']['image']['name'];
            		if ($this->Page->save($this->request->data))
			 		{
						move_uploaded_file($this->data['Page']['image']['tmp_name'],WWW_ROOT."img/uploadfile/".$this->data['Page']['image']['name']);
                		$this->Session->setFlash('Your page has been saved.');
                		$this->redirect(array('action' => 'index'));
            		} 
					else 
					{
                		$this->Session->setFlash('Unable to add your page.');
            		}
				
        		}
			}	
		}	
			if(!empty($id))
			{
				$this->data=$this->Page->read(null,$id);
				$image=$this->data['Page']['image'];
				$this->set('image',$image);
				//echo "<pre>";print_r($this->data);die();
			}
		
    }
	
	/////////////////////////////////////////////////////////////////////////
	
	function admin_add($id=null)
	{
	
	$this->add($id);
	}
	
   ////////////////////////////////////////////////////////////////////////
   
   function admin_edit($id=null)
   {
   //echo "<pre>";print_r($this->data);die();
   	$this->add($id);
   }
   
   /////////////////////////////////////////////////////////////////////////
   
   function show_page($id)
   {
   
  		 $page=$this->Page->find('all',array('conditions'=>array('Page.id'=>$id)));
		 //echo "<pre>";print_r($page);die();
		 $this->set('page',$page);
   
   
   }
   
}
?>