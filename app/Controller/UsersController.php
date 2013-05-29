<?php

class UsersController extends AppController {
	
	var $name = 'Users';

	var $helpers = array('Html', 'Form','Js' => array('Jquery'),'Session', 'Fck');

	var $components = array('Auth','Email','Session');
	
	var $uses = array('User');

    
	
	 function login()
	{
		$this->layout='';
		if ($this->request->is('post'))
		{
			
			if ($this->Auth->login())
			{
				if($this->Auth->User('role')=='author')
					{
						$this->redirect(array('controller'=>'presses','action'=>'index'));
					}
				elseif($this->Auth->User('role')=='admin')
				{
					$this->layout="admin";
					$this->redirect('/admin/users/welcome');
				

				}
				
				
				//$this->redirect($this->Auth->redirect());
		
			}
			else
				{
					 $this->Session->setFlash(__('Invalid username or password, try again'));
				 }
		}
	}
	
	
	
	function admin_login()
	{
		$this->layout='';
		$this->login();
	}
	
	

public function logout()
	{
		
	$this->Session->destroy();
	$this->redirect($this->Auth->logout());
    
	}
	
	function admin_logout()
	{
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}
	
	

    public function index()
    {
	 
	
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
		
		
        if ($this->request->is('post')) {
		//echo "<pre>";print_r($this->request->data);die();
           $this->User->create();
           if ($this->User->save($this->request->data))
	    {
               $this->Session->setFlash(__('The user has been saved'));
               $this->redirect(array('action' => 'admin_index'));
           }
	    else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
      }

		
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
		//echo "<pre>";print_r($this->request->data);die();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'admin_index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    
	
	public function admin_index()
	{
		$this->paginate['limit']=Configure::read('ADMIN_SIDE_PAGGING');
		 $this->paginate = array('conditions' => array('User.role' => 'author'));
		$users=$this->paginate('User');
		$this->set('users',$users);
		
	}
	
	 public function admin_add()
			{
		
				$this->add();
			}
			
	public function admin_edit($id=null)
	{
		$this->edit($id);
	}
	
	
	
	function delete()

	{		

		$data=$this->data['User'];

		array_splice($data,0,1);

		array_splice($data,0,1);		

		$ans="0";

		foreach($data as $value)

		{

			if($value!='0')

			{

				if($this->data['User']['action']=='Publish')

				{

					$user=$this->User->read(null,$value);

					$user['User']['status']=1;

					$this->User->create();

					$this->User->save($user);

					$ans="1";

				}

				if($this->data['User']['action']=='Unpublish')

				{

					$user=$this->User->read(null,$value);

					$user['User']['status']=0;

					$this->User->create();

					$this->User->save($user);

					$ans="1";

				}

				if($this->data['User']['action']=='Delete')

				{

					$this->User->delete($value);

					//$this->Permission->deleteAll(array('Permission.user_id'=>$value));

					$ans="2";

				}

				

			}

		}

		if($ans=="1"){

			$this->Session->setFlash(__('Member has been '.$this->data['User']['action'].'ed successfully', true));

		}

		else if($ans=="2"){

			$this->Session->setFlash(__('Member has been '.$this->data['User']['action'].'d successfully', true));

		}else{

			$this->Session->setFlash(__('Please Select any Member', true),'default','','error');

		}

		$this->redirect(array('action'=>'admin_index'));			

	}		

	
	
	function admin_changepassword()
	{

                $this->set('manager', "admin");
                if (!empty($this->data))
		{
                        
                        $user = $this->User->read(null, $this->Auth->user('id'));
			$user=$user['User'];
			$this->User->id = $user['id'];
			$encryptedPassword =Security::hash(Configure::read('Security.salt') .
			$this->data['User']['oldpassword']);
                
			$someone = $this->User->findById($this->User->id);
                        if($encryptedPassword != $someone['User']['password'])
			{
                                $this->User->invalidate('oldpassword', 'Your old password is invalid');
                        }
			else
			{
                                $this->request->data['User']['id'] = $this->User->id;
                                 $this->User->create();
                                if ($this->User->save($this->request->data))
				{
                                        $this->Session->setFlash(__('Password Changed successfully',true));
                                        $this->redirect(array('action'=>'admin_changepassword'));
                                }
				else
				{
                                        $this->render();
                                }
                        }
                }
        }

	function admin_welcome()
	{
		
	}
	
	
	
	
}
?>