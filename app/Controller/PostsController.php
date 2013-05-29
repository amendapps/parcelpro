<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

     public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Post.title' => 'asc'
        )
    );


	public function add() 
	{
        
		
			if ($this->request->is('post')) 
			{
            	$this->Post->create();
            	if ($this->Post->save($this->request->data))
			 	{
                	$this->Session->setFlash('Your post has been saved.');
                	//$this->redirect(array('action' => 'add'));
            	} 
				else 
				{
                	$this->Session->setFlash('Unable to add your post.');
            	}
        	}
		
		 $this->paginate = array('conditions' => array('Post.status' =>'1'),'limit' => 10);
		 $data = $this->paginate('Post');
   		 $this->set('posts', $data);
		
    }
	
	
	function admin_comment_approve()
	{
	
		if(!empty($this->data))
		{
			//echo "<pre>";print_r($this->data);die();
			$this->request->data['Post']['id']=$this->data['Post']['id'];
			$this->request->data['Post']['status']=$this->data['Post']['status'];
			$this->Post->create();
			$this->Post->save($this->data);
			$this->Session->setFlash('Comment change sucessfully');
		}
		 $data = $this->paginate('Post');
   		 $this->set('posts', $data);
	
	}
   
   
   
}
?>