<?php

class CompaniesController extends AppController {
	
	var $helpers = array('Html', 'Form','Js' => array('Jquery'),'Session', 'Fck');

	var $components = array('Auth','Email','Session');
	var $uses = array('User');
	
	
	
	function index()
	{
		 $this->loadModel('Country');
		 $destination_country=$this->Country->find('list',array('fields'=>array('id','Country.country_name'),'order'=>array('Country.country_name'=>'asc')));
		 $this->Session->write('destination_country',$destination_country);
		 $this->set('destination_country',$destination_country);
		 $this->set('home_page','true');
		
	}
	
	
	function contact_us()
	{
	
				if(!empty($this->data))
					{
					
					$sender_email=$this->data['Contact']['sender_email'];
					$subject=$this->data['Contact']['subject'];
					$body=$this->data['Contact']['body'];
					$name=$this->data['Contact']['name'];
					$phoneno=$this->data['Contact']['phoneno'];
					$body=$name.$phoneno.$body;		
								
					App::uses('CakeEmail', 'Network/Email');
				    $Email = new CakeEmail('smtp');
				    $Email->viewVars(array('value' =>$body));
				    //$Email->viewVars(array('value2' =>$link));
				    //$Email->attachments(WWW_ROOT."img/uploadfile/".$this->data['Update']['upload_file']['name']);
				   // $Email->template('welcome')
					    $Email->emailFormat('html')
					     ->to('deepakgiri@amendapps.com')
					     ->from($sender_email)
					     ->subject($subject)
					     
					->send();
	
	
					}
	
	}
   
   ////////////////////////////////////////////////////////////////////////
   
	function add($id=null)
	{
		 if(!empty($this->data))
		 	{
				//echo "<pre>";print_r($this->data);die();
				if($this->data['Company']['id']!='')
				{
					$this->Session->setFlash('Company has been Updated successfully');
				}
				else
				{
						$this->Session->setFlash('Company has been added successfully');
				}
				$this->Company->create();
				$this->request->data['Company']['description']=$this->data['Company']['description'];
				if($this->data['image']['name']=='')
				{
				$this->request->data['Company']['image']=$this->data['Company']['img_name'];
				}
				else
				{
				$this->request->data['Company']['image']=$this->data['image']['name'];
				move_uploaded_file($this->data['image']['tmp_name'],WWW_ROOT."img/uploadfile/".$this->data['image']['name']);
				}
				$this->Company->saveAll($this->data);
				$this->redirect(array('action'=>'admin_index'));
			}
		if(empty($this->data) and $id)
		{	
			$this->data=$this->Company->read(null,$id);
			$img_name=$this->data['Company']['image'];
			$this->set('img_name',$img_name);
			//echo "<pre>";print_r($this->data);die();
			
		}
		
	}
	
	////////////////////////////////////////////////////////////
	function admin_add($id=null)
	{
		$this->add($id);
		
	}
	
	///////////////////////////////////////////////////////////
	function admin_edit($id=null)
	{
		$this->add($id);
	}
	
	///////////////////////////////////////////////////////////
	
	function admin_index($parentId=0,$keyword=null)
	{
		Configure::load('site_config');
		$this->paginate['limit']=Configure::read('ADMIN_SIDE_PAGGING');
		//echo $this->paginate['limit'];die();
		$condition=null;
		if($parentId !=0)
		$condition['Company.id'] = $parentId;		
		$this->Company->recursive = 0;
		
		$Presss=$this->paginate("Company", $condition);
		//echo "<pre>";print_r($Presss);die();
		$this->set('Presss',$Presss);
	}
	
	///////////////////////////////////////////////////////////////////
	
	function admin_delete()
	{
		$data=$this->data['Company'];

		array_splice($data,0,1);

		array_splice($data,0,1);		

		$ans="0";

		foreach($data as $value)

		{

			if($value!='0')

			{

				
				if($this->data['Company']['action']=='Delete')

				{
					//echo $value;die();
					$this->Company->delete($value);
					$this->loadModel('Quotation');
					 $this->Quotation->query(" DELETE FROM quotations WHERE company_id=$value");
					

					$ans="2";

				}

				

			}

		}

		if($ans=="1"){

			$this->Session->setFlash(__('Member has been '.$this->data['Company']['action'].'ed successfully', true));

		}

		else if($ans=="2"){

			$this->Session->setFlash(__('Member has been '.$this->data['Company']['action'].'d successfully', true));

		}else{

			$this->Session->setFlash(__('Please Select any Member', true),'default','','error');

		}

		$this->redirect(array('action'=>'admin_index'));			

	}
	
	function about_us()	{	}
	
	function policy(){}	
	
	
	function help(){}	
	
	function collection(){}
	
	function packaging(){}
	
	function booking(){}
	
	function vat(){}
	
	function claim(){}
	
	function admin_add_country()	
	{
		if(!empty($this->data))
		{
			$this->loadModel('Country');
			$val=$this->Country->find('first',array('conditions'=>array('Country.country_name'=>$this->data['Country']['country_name'])));
			if(empty($val))
			{
				$this->Country->create();
				$this->Country->save($this->data);
				$this->Session->setFlash('Country Added Successfully.');
			}
			else
			{
				$this->Session->setFlash('Country Already Exist.');
			}
			$this->redirect(array('action'=>'add_country'));
		}
	}
	
	function track_parcel()
	{
		if(!empty($this->data))
		{
			$this->loadModel('Booking');
			$booking=$this->Booking->find('all',array('conditions'=>array('Booking.reference_no'=>$this->data['Booking']['reference_no'])));			
			$status=$booking['0']['Booking']['deliver_status'];
			$this->set('status',$status);
		}
	}
	
}
?>