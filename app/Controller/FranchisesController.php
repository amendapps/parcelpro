<?php

class FranchisesController extends AppController {
	
	var $helpers = array('Html', 'Form','Js' => array('Jquery'),'Session', 'Fck');

	var $components = array('Auth','Email','Session');
	var $uses = array('User');
   
   
   function register()
   {
         $this->loadModel('Country');
	  $country=$this->Country->find('list',array('fields'=>array('id','Country.country_name')));
	  $this->set('countryname',$country);
	   if(!empty($this->data))
	   {
		   //echo "<pre>";print_r($this->data);die();
		   if($this->data['Franchise']['user_type']=='U')
		   {
			
			$this->loadModel('User');
			
			$check_user=$this->User->find('first',array('conditions'=>array('User.username'=>$this->data['Franchise']['username'])));
			if(!empty($check_user))
			{
				$this->Session->setFlash('This Email is already exist');
			}
			else{
				
				$this->User->create();
				$username=$this->data['Franchise']['username'];
				$password=$this->data['Franchise']['password'];
				$role=$this->data['Franchise']['user_type'];
				$address=$this->data['Franchise']['address'];
				$firstname=$this->data['Franchise']['name'];		
				$this->User->query("INSERT INTO users (username, role, password,firstname,address) VALUES ('$username','$role', '$password','$firstname','$address')");
				$this->Session->setFlash('You are  registered successfully');
			
			}
			
			
			
		   }
		   else{
			
				
				$check_user=$this->Franchise->find('first',array('conditions'=>array('Franchise.username'=>$this->data['Franchise']['username'])));
				//echo "<pre>";print_r($check_user);die();
				if(!empty($check_user))
				{
					$this->Session->setFlash('This Email is already exist');
				}
				else{
			
					
					$this->Franchise->save($this->data);
					$this->Session->setFlash('Franchises has been registered successfully');
				}
		   }
		}
	   
   }
   
   ////////////////////////////////////////////////////////////////////
   
   function franchises_register()
   {
	
	  $this->loadModel('Country');
	  $country=$this->Country->find('list',array('fields'=>array('id','Country.country_name')));
	  $this->set('countryname',$country);
	
	if(!empty($this->data))
	{
		
		$check_user=$this->Franchise->find('first',array('conditions'=>array('Franchise.username'=>$this->data['Franchise']['username'])));
				//echo "<pre>";print_r($check_user);die();
				if(!empty($check_user))
				{
					$this->Session->setFlash('This Email is already exist');
				}
				else{
			
					
					$this->Franchise->save($this->data);
					$this->Session->setFlash('Franchises has been registered successfully');
				}
	}
   }
   
   
   
   
   ///////////////////////////////////////////////////////////////
   function signin()
   {
	   if(!empty($this->data))
	   {
		//echo "<pre>";print_r($this->data);die();
		if($this->data['Franchise']['user_type']=='F'){
				$result=$this->Franchise->find('first',array('conditions'=>array('Franchise.username'=>$this->data['Franchise']['username'],'Franchise.password'=>$this->data['Franchise']['password'],'Franchise.approve'=>1)));
				//echo "<pre>";print_r($result);die();
				if($result)
					{
						$this->Session->write('franchise_name',$this->data['Franchise']['username']);
						$this->Session->write('franchise_id',$result['Franchise']['id']);
						$this->params['admin'];
						$this->layout='franchiesadmin';
						$this->redirect('/admin/franchises/index');
					}
				else    {
					
		   				$this->Session->setFlash('Invalid user name or password or you are not approved by Admin');
				        }
		}
		else{
			//echo "hello";die();
			$this->loadModel('User');
			
			$user_detail=$this->User->find('first',array('conditions'=>array('User.username'=>$this->data['Franchise']['username'],'User.password'=>$this->data['Franchise']['password'])));
			//echo "<pre>";print_r($user_detail);die();
			if(!empty($user_detail))
			{
				//echo "<pre>";print_r($user_detail);die();
				$this->Session->write('loged_user_name',$user_detail['User']['username']);
				$this->Session->write('user_detail',$user_detail);
				
				if($this->Session->check('prev_url'))
				{
					$prv_path=$this->Session->read('prev_url');
					$this->redirect(array('controller'=>'quotations','action'=>$prv_path));
					$this->redirect(array('controller'=>'companies','action'=>'index'));
				}
				else{
				
						$this->redirect(array('controller'=>'companies','action'=>'index'));
					}
			}
			else{
				$this->Session->setFlash('Invalid user name or password');
			}
			
			
		}
		
		
		
		
	   }
    }
	
	////////////////////////////////////////////////////////////////////////////
	
	function logout()
	{
		$this->Session->destroy();
		$this->redirect('/companies/index');
	}
	
	////////////////////////////////////////////////////////////////////////////////
	
	function user_logout()
	{
		$this->Session->delete('user_detail');
		$this->Session->delete('prev_url');
		$this->Session->delete('loged_user_name');
		$this->redirect(array('controller'=>'companies','action'=>'index'));
		
	}
	
	function admin_user_logout()
	{
		$this->user_logout();
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	function user_account()
	{
		$user_detail=$this->Session->read('user_detail');
		$this->set('user_detail',$user_detail);
		//echo "<pre>";print_r($user_detail);die();
		
	}
	
	////////////////////////////////////////////////////////////////////////
	
	function forgotten_password()
	{
		
		if(!empty($this->data))
		{
			$this->loadModel('User');
			//echo "<pre>";print_r($this->data);die();
			$email_id=$this->data['User']['email'];
			$type=$this->data['User']['type'];
			if($type=='U')
			{
				$result=$this->User->find('first',array('conditions'=>array('User.username'=>$email_id)));
				if(!empty($result))
				{
				
					$this->Session->setFlash('Your password information will be send to your email please check');
				}
				else
				{
				//echo "<pre>";print_r($result);die();
				$this->Session->setFlash('Sorry, that email address could not be found.Please try again.');
				}
			
			}
			else
			{
				
				$result=$this->Franchise->find('first',array('conditions'=>array('Franchise.username'=>$email_id)));
				if(!empty($result))
				{
				
					$this->Session->setFlash('Your password information will be send to your email please check');
				}
				else
				{
				//echo "<pre>";print_r($result);die();
				$this->Session->setFlash('Sorry, that email address could not be found.Please try again.');
				}	
			}
		}
	}
	
	
	////////////////////////////////////////////////////////////////////////////////
	function user_change_password($change_password_id=null)
	{
		$this->set('user_id',$change_password_id);
		
		if(!empty($this->data))
		{
			//echo "<pre>";print_r($this->data);die();
			$this->loadModel('User');
			
			$check_password=$this->User->find('first',array('conditions'=>array('User.password'=>$this->data['User']['password'],'User.id'=>$this->data['User']['id'])));
			if(!empty($check_password))
			{
			$this->request->data['User']['id']=$this->data['User']['id'];
			$this->request->data['User']['password']=$this->data['User']['new_password'];
			$pass=$this->data['User']['new_password'];
			$id=$this->data['User']['id'];
			$this->User->create();
			$this->User->query("UPDATE users set password=$pass where id=$id");
			$this->Session->setFlash('You sucessfully change your password');
				        
			//$this->User->saveall($this->data);
			}
			else
			{
				$this->Session->setFlash('Invalid Password please enter correct password');
				        
			}
			
		}
		
	}
	
	
	///////////////////////////////////////////////////////////////////////////
	
	public function admin_index($parentId=0,$keyword=null)
	{
		$name=$this->Session->read('franchise_name');
		$this->layout='franchiesadmin';
		Configure::load('site_config');
		$this->paginate['limit']=Configure::read('ADMIN_SIDE_PAGGING');
		//echo $this->paginate['limit'];die();
		//$condition=null;
//		if($parentId !=0)
//		$this->paginate = array(
//        'conditions' => array('Franchise.username'=>'abc'),
//        'limit' => 10
//    );
//		$condition['Franchise.id'] = $parentId;		
//		$this->Franchise->recursive = 0;
//		
//		$Presss=$this->paginate("Franchise");
//		echo "<pre>";print_r($Presss);die();
//		$this->set('Presss',$Presss);
		
		
		$this->paginate = array(
        'conditions' => array('Franchise.username' => $name),
        'limit' => 10
    );
    $Presss = $this->paginate('Franchise');
    $this->set(compact('Presss'));
		
		
		
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_collect($id)
	{
		$this->params['admin'];
		if(!empty($this->data))
		{
	//echo "<pre>";print_r($this->data);die();
		$this->loadModel('Booking');
		$this->request->data['Booking']['id']=$this->data['Booking']['id'];
			$this->request->data['Booking']['collected']=$this->data['Booking']['collected'];
			$this->Booking->create();
			$this->Booking->saveAll($this->data);
			$this->redirect(array('action'=>'admin_index'));
		}
	}
	
	////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_approve($id=null)
	{
		
		if(!empty($this->data))
		{
			$this->request->data['Franchise']['id']=$this->data['Franchise']['id'];
			$this->request->data['Franchise']['approve']=$this->data['Franchise']['approve'];
			$this->Franchise->save($this->data);
				if($this->data['Franchise']['approve']=='1')
				{
			 		$this->Session->setFlash('Franchises has been Approved successfully');
				}
				else{
						$this->Session->setFlash('Franchises Status changed to not Approved');
				}
			$this->redirect(array('action'=>'admin_showapprove'));
		
		}
		

		
	}
	////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_showapprove($parentId=0,$keyword=null)
	{
		
	Configure::load('site_config');
		$this->paginate['limit']=Configure::read('ADMIN_SIDE_PAGGING');
		$condition=null;
		if($parentId !=0)
		$condition['Franchise.id'] = $parentId;		
		$this->Franchise->recursive = 0;
		$Presss=$this->paginate("Franchise", $condition);
		$this->set('Presss',$Presss);	
		
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_delete($id=null)
	{
		
				$this->Franchise->delete($id);
				$this->loadModel('Booking');
				$this->Booking->query(" DELETE FROM bookings WHERE franchise_id=$id");
				$this->Session->setFlash('Franchises has been Deleted successfully');
				$this->redirect(array('action'=>'admin_showapprove'));
	}
	
	function collect($id)
	{
		$this->params['admin'];
		if(!empty($this->data))
		{
			$this->loadModel('Booking');
			$this->request->data['Booking']['id']=$this->data['Booking']['id'];
			$this->request->data['Booking']['collected']=$this->data['Booking']['collected'];
			$this->Booking->create();
			$this->Booking->saveAll($this->data);
			$this->redirect('/admin/franchises/index');
		}
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////
	
	function nearest_parcels_store()
	{
		
		if(!empty($this->data))
		{
			
			//echo "<pre>";print_r($this->data);die();
			$id=$this->data['Parcel']['country_id'];
			$nearest_location=$this->Franchise->find('all',array('conditions'=>array('Franchise.country_name'=>$id)));
			if(!empty($nearest_location))
			{
				$this->set('nearest_location',$nearest_location);
			}
			else
			{
				$this->Session->setFlash('No Dropoff Locations found for This Country');
			}
		}
	}
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_franchises_calculate_price()
	{
	
		 $this->layout="franchiesadmin";
		 $this->params['admin']='admin';
	 	 $this->loadModel('Country');
		 $destination_country=$this->Country->find('list',array('fields'=>array('id','Country.country_name'),'order'=>array('Country.country_name'=>'asc')));
		 $this->Session->write('destination_country',$destination_country);
		 $this->set('destination_country',$destination_country);
	 if(!empty($this->data))
	 {
	 	$country=$this->data['Price']['destination_country'];
		$service=$this->data['Price']['service'];
		$weight=$this->data['Price']['weight'];
		//echo "<pre>";print_r($weight);die();
		 $this->loadModel('Quotation');
		 
	 	$compare_result=$this->Quotation->find('all',array('conditions'=>array('Quotation.min_weight <='=>$weight,'Quotation.max_weight >='=>$weight,'Quotation.destination_country'=>$country,'Quotation.service'=>$service)));
			
			$rate=$compare_result['0']['Quotation']['rate'];
			$fixed_price=$compare_result['0']['Quotation']['fixed_price'];
			$price=(($weight-1)*($rate + $fixed_price));
	 	
			$this->Session->write('price',$price);
			$this->set('price',$price);
	 }
		
	
	}
	
	/////////////////////////////////////////////////////////////////////////////
	
	function admin_franchises_sender_address_detail()
	
	{
	 $this->params['admin']='admin';
	 $this->layout="franchiesadmin";
		if(!empty($this->data))
		{
		
				//echo "<pre>";print_r($this->data);die();	
				$this->loadModel('Address');
				$this->Address->save($this->data);
		
			$this->loadModel('Lineup');
			$lineupid=$this->Session->read('lineup_id');
			$sender_address=$this->Address->getLastInsertId();
			$this->Lineup->create();
		
			//$this->request->data['Lineup']['id']=$lineupid;
			$franchise_id=$this->Session->read('franchise_id');
			$this->request->data['Lineup']['sender_address']=$sender_address;
			$this->request->data['Lineup']['franchise_id']=$franchise_id;
			$this->Lineup->create();
			$this->Lineup->saveall($this->data);
			$lineup_id=$this->Lineup->getLastInsertId();
			$this->Session->write('lineup_id',$lineup_id);
		$sender_detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->Address->getLastInsertId())));
		//$this->Session->write('sender_detail',$sender_detail);
		//$this->set('detail',$sender_detail);
		$this->redirect(array('controller'=>'franchises','action'=>'franchises_reciver_address_detail'));		
		}
	
	}
	
	///////////////////////////////////////////
	
	function admin_franchises_reciver_address_detail()
	{
		 $this->params['admin']='admin';
		 $this->layout="franchiesadmin";
		 if(!empty($this->data))
		 {
		 
		 	//echo "<pre>";print_r($this->data);die();
			$this->loadModel('Address');
				$this->Address->save($this->data);
				
				$this->loadModel('Lineup');
				$lineupid=$this->Session->read('lineup_id');
				$sender_address=$this->Address->getLastInsertId();
				$this->Lineup->create();
				$lineupid=$this->Session->read('lineup_id');
				$this->request->data['Lineup']['id']=$lineupid;
				$this->request->data['Lineup']['reciver_address']=$sender_address;
				$this->Lineup->create();
				$this->Lineup->saveall($this->data);
	
				$reciver_detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->Address->getLastInsertId())));
				//$this->Session->write('reciver_detail',$reciver_detail);
				//echo "<pre>";print_r($reciver_detail);die();
				$this->set('detail',$reciver_detail); 
				$this->redirect(array('controller'=>'franchises','action'=>'franchises_parcel_compansation'));	
		 }
			
	}
	
	function admin_franchises_parcel_compansation()
	{
		 $this->params['admin']='admin';
		 $this->layout="franchiesadmin";
		 if(!empty($this->data))
		 {
		 
			//echo "<pre>";print_r($this->data);die();	
			
            $this->request->data['Parcel']['quantity']=$this->data['Parcel']['quantity']['1'];
            $this->request->data['Parcel']['item_description']=$this->data['Parcel']['item_description']['1'];
            $this->request->data['Parcel']['country_of_origin']=$this->data['Parcel']['country_of_origin']['1'];
            $this->request->data['Parcel']['weight']=$this->data['Parcel']['weight']['1'];
            $this->request->data['Parcel']['total_value']=$this->data['Parcel']['total_value']['1'];
           
            //echo "<pre>";print_r($this->request->data);
            $this->loadModel('Parcel');
            $this->Parcel->create();
            $lineupid=$this->Session->read('lineup_id');
            $this->request->data['Parcel']['lineup_id']=$lineupid;
            $this->Parcel->saveall($this->request->data);   
            
            //die();

            $compansion=$this->Parcel->find('all',array('conditions'=>array('Parcel.lineup_id'=>$lineupid)));
            $this->Session->write('compansion',$compansion);
            $this->set('compansion',$compansion);
           	 
		 }
	
	}
	
	///////////////////////////////////////////////////////////////////////
	function admin_franchies_payment()
	{
			
			echo "payment";die();
	
	}
	
	
}
?>
