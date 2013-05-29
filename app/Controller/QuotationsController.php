<?php

class QuotationsController extends AppController {
	
	var $helpers = array('Html', 'Form','Js' => array('Jquery'),'Session', 'Fck');

	var $components = array('Auth','Email','Session');
	var $uses = array('Company','Quotation','Country','Address','Lineup');
   
   
	function quotation_compare_price($back)
	{
		if(!empty($this->data))
		{
			//echo "<pre>";print_r($this->data);die();
			$l=$this->data['Quotation']['length'];
			$b=$this->data['Quotation']['width'];
			$h=$this->data['Quotation']['height'];
			$dimension=($l*$b*$h)/5000;
			$weight=$this->data['Quotation']['weight'];
			$country=$this->data['Quotation']['country_id'];			
			 if($dimension>$weight)
			    $higher_weight=$dimension;
			  else
			  	$higher_weight=$weight;
			$country_name=$this->Country->find('first',array('conditions'=>array('Country.id'=>$country)));
			$this->set('country_name',$country_name);
			$this->set('higher_weight',$higher_weight);
			/*
			$compare_result=$this->Quotation->find('all',array('conditions'=>array('Quotation.min_weight <='=>$weight,'Quotation.max_weight >='=>$weight,'Quotation.destination_country'=>$country,'Quotation.min_dimension <='=>$dimension,'Quotation.max_dimension >'=>$dimension)));*/
			
			$compare_result=$this->Quotation->find('all',array('conditions'=>array('Quotation.min_weight <='=>$higher_weight,'Quotation.max_weight >='=>$higher_weight,'Quotation.destination_country'=>$country)));
			
			//print_r($compare_result);die();
				
				//echo "<pre>";print_r($compare_result);die();
				$this->Session->write('compare_result',$compare_result);
				$this->Session->write('w',$weight);
				$this->Session->write('l',$l);
				$this->Session->write('b',$b);
				$this->Session->write('h',$h);
				$this->Session->write('country',$country);
				$this->Session->write('country_name',$country_name);
				
				$compare_result=$this->Session->read('compare_result');
					
	
				if(!empty($compare_result))
					{
						
						$this->set('compare_result',$compare_result);
						
					}
				else
				{
					//echo "<pre>";print_r($compare_result);die();
					$this->Session->setFlash('No Record found');
					$this->redirect(array('controller'=>'companies','action'=>'index'));
				}	
			
		}
		if(!empty($back))
		{
					$compare_result=$this->Session->read('compare_result');
					$l=$this->Session->read('l');
					$b=$this->Session->read('b');
					$h=$this->Session->read('h');
					$w=$this->Session->read('h');
					$country=$this->Session->read('country');
					$country_name=$this->Session->read('country_name');
	
			if(!empty($compare_result))
					{
						
						$this->set('compare_result',$compare_result);
						$this->set('w',$w);
						$this->set('l',$l);
						$this->set('b',$b);
						$this->set('h',$h);
						$this->set('country_id',$country);
						$this->set('country_name',$country_name);
					}
				else
				{
					//echo "<pre>";print_r($compare_result);die();
					$this->Session->setFlash('No Record found');
					$this->redirect(array('controller'=>'companies','action'=>'index'));
				}
			
		}
		
		
	}
   
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function parcel_delivery_quot_dropoff_pickup($country_id=null,$drop_off_price)
	{
		
		if($this->Session->check('loged_user_name'))
		{
			
			$this->set('drop_off_price',$drop_off_price);
			$this->loadModel('Franchise');
			$destination_address=$this->Franchise->find('list',array('conditions'=>array('Franchise.country_name'=>$country_id),'fields'=>array('Franchise.address')));
			//echo "<pre>";print_r($destination_address);die();
			$this->set('destination_address',$destination_address);
			$this->Session->write('destination_address',$destination_address);
				    
				if(!empty($this->data))
				{
					//echo "<pre>";print_r($this->data);die();
					$message='Drop off your parcel before 3pm on &nbsp;'.date('d',strtotime($this->data['Address']['day'])).'&nbsp;'.date('M/Y');
					$location=$this->Franchise->find('all',array('conditions'=>array('Franchise.id'=>$this->data['Quotation']['destination_address'])));
					//echo "<pre>";print_r($location);die();
					foreach($location as $l){
					//echo "<pre>";print_r($l);
				}
					$this->loadModel('Lineup');
					$this->request->data['Lineup']['franchise_id']=$l['Franchise']['id'];
					$this->request->data['Lineup']['date_of_booking']=$this->data['Address']['day'];
					//echo "<pre>";print_r($this->request->data['Lineup']['franchise_id']);die();
					$this->Lineup->save($this->data);
					$drop_off_lineup_id=$this->Lineup->getLastInsertId();
					$dropoff_detail=$this->Lineup->find('all',array('conditions'=>array('Lineup.id'=>$drop_off_lineup_id)));
					foreach($dropoff_detail as $d)
				{
					//echo "<pre>";print_r($d);
					$this->Session->write('lineup_id',$d['Lineup']['id']);
				}
		
				//For Review detail
				$this->Session->write('drop_of_location',$l['Franchise']['address']);
				$this->Session->write('drop_of_message',$message);
				$this->Session->write('drop_off_review','1');
			
				$this->set('location_id',$drop_off_lineup_id);
				$this->set('location',$l['Franchise']['address']);
				$this->set('message',$message);
			
				}
		}
		else
			{
				$this->Session->setFlash('You are not login please login first');
				$this->Session->write('prev_url','parcel_delivery_quot_dropoff_pickup/'.$country_id.'/'.$drop_off_price);
				$this->redirect(array('controller'=>'franchises','action'=>'signin'));
			}		
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function parcel_delivery_quot_dropoff_pickup_edit($dropoff_edit_id=null)
	{
		
		if(!empty($this->data))
		{
			//echo "<pre>";print_r($this->data);die();
			$this->loadModel('Franchise');
			$message='Drop off your parcel before 3pm on &nbsp;'.date('d',strtotime($this->data['Address']['day'])).'&nbsp;'.date('M/Y');
			$location=$this->Franchise->find('all',array('conditions'=>array('Franchise.id'=>$this->data['Quotation']['destination_address'])));
			//echo "<pre>";print_r($location);die();
			foreach($location as $l){
				//echo "<pre>";print_r($l);
			}
			$this->loadModel('Lineup');
			
			$this->request->data['Lineup']['id']=$this->data['Quotation']['id'];
			$this->request->data['Lineup']['franchise_id']=$l['Franchise']['id'];
			$this->request->data['Lineup']['date_of_booking']=$this->data['Address']['day'];
			
			$this->Lineup->save($this->data);
			$drop_off_lineup_id=$this->data['Quotation']['id'];
			
			$dropoff_detail=$this->Lineup->find('all',array('conditions'=>array('Lineup.id'=>$drop_off_lineup_id)));
			foreach($dropoff_detail as $d)
			{
				//echo "<pre>";print_r($d);
				$this->Session->write('lineup_id',$d['Lineup']['id']);
			}
		
			//For Review detail
			$this->Session->write('drop_of_location',$l['Franchise']['address']);
			$this->Session->write('drop_of_message',$message);
			$this->Session->write('drop_off_review','1');
			
			$this->set('location_id',$drop_off_lineup_id);
			$this->set('location',$l['Franchise']['address']);
			$this->set('message',$message);
			
		}
		
		if(!empty($dropoff_edit_id))
		{
			//echo $dropoff_edit_id;die();
			$this->loadModel('Lineup');
		        $this->data=$this->Lineup->read(null,$dropoff_edit_id);
			$this->set('id',$dropoff_edit_id);
			$day=date('Y-m-d',strtotime($this->data['Lineup']['date_of_booking']));
			$this->set('day',$day);
			//echo "<pre>";print_r($this->data);die();
		}
	}
	
	
	
	///////////////////////////////////////////////////////////////////////////////////////////////
	
	function parcel_delivery_quot_collectoff_pickup($country_id=null,$collect_off_price)
	{
		
		if($this->Session->check('loged_user_name'))
		{
			$this->set('collect_off_price',$collect_off_price);
			if(!empty($this->data))
			{
				$this->loadModel('Address');
				//echo "<pre>";print_r($this->data);die();
				$this->Address->save($this->data);
			
				$tomorrow =date('Y-m-d',strtotime($this->data['Address']['day']));
				//echo $tomorrow;die();
				$this->loadModel('Lineup');
				$this->request->data['Lineup']['date_of_booking']=$tomorrow;
				$this->request->data['Lineup']['collect_address']=$this->Address->getLastInsertId();
				$this->Lineup->create();
				$this->Lineup->saveall($this->data);
			
			
				$detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->Address->getLastInsertId())));
				$collect_detail=$detail;
				$this->Session->write('collect_detail',$collect_detail);
						//echo "<pre>";print_r($detail);die();
						foreach($detail as $d)
						{
							$this->Session->write('lineup_id',$d['CollectAddress']['0']['id']);
						}
						
				$this->set('detail',$detail);
				//foe destroying session of drop of parcel
				$this->Session->delete('drop_off_review');
			}
		}
		else
		{
			$this->Session->setFlash('You are not login please login first');
			$this->Session->write('prev_url','parcel_delivery_quot_collectoff_pickup/'.$country_id.'/'.$collect_off_price);
			$this->redirect(array('controller'=>'franchises','action'=>'signin'));
		
		}
		
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
   function parcel_delivery_quot_collectoff_pickup_edit($id=null)
   {
	if($this->data)
	{
		//echo "<pre>";print_r($this->data);die();
		$this->loadModel('Address');
			//echo "<pre>";print_r($this->data);die();
			$this->Address->save($this->data);

			$this->loadModel('Lineup');
			$this->request->data['Lineup']['date_of_booking']=$this->data['Address']['day'];
			$this->request->data['Lineup']['collect_address']=$this->data['Address']['id'];
			$this->Lineup->create();
			$this->Lineup->saveall($this->data);
			
			
			$detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->data['Address']['id'])));
			$collect_detail=$detail;
			$this->Session->write('collect_detail',$collect_detail);
						//echo "<pre>";print_r($detail);die();
						foreach($detail as $d)
						{
							$this->Session->write('lineup_id',$d['CollectAddress']['0']['id']);
						}
			
			
			$this->set('detail',$detail);
	}
	if(!empty($id))
	{
		
		$this->data=$this->Address->read(null,$id);
		//echo "<pre>";print_r($this->data);die();
		$lineup_id=$this->data['CollectAddress']['0']['id'];
		$day=date('Y-m-d',strtotime($this->data['CollectAddress']['0']['date_of_booking']));
		$this->data['Address']['day']=$day;
		$this->set('day',$day);
		$this->set('lineup_id',$lineup_id);
		
	}
   }
   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
   function sender_contact_detail()
   {
	if(!empty($this->data))
	{
		//echo "<pre>";print_r($this->data);die();
				
		$this->loadModel('Address');
		$this->Address->save($this->data);
		
		$this->loadModel('Lineup');
			$lineupid=$this->Session->read('lineup_id');
			$sender_address=$this->Address->getLastInsertId();
			$this->Lineup->create();
		
			$this->request->data['Lineup']['id']=$lineupid;
			$this->request->data['Lineup']['sender_address']=$sender_address;
			$this->Lineup->create();
			$this->Lineup->saveall($this->data);
		
		$sender_detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->Address->getLastInsertId())));
		$this->Session->write('sender_detail',$sender_detail);
		//echo "<pre>";print_r($sender_detail);die();
		$this->set('detail',$sender_detail);
		
	}
	
   }
   
   ///////////////////////////////////////////////////////////
   
   function sender_contact_detail_edit($edit_id=null)
   {
	if(!empty($this->data))
	{
		//echo "<pre>";print_r($this->data);die();
		$this->loadModel('Address');
		$this->Address->save($this->data);
		
		$sender_detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->data['Address']['id'])));
		$this->Session->write('sender_detail',$sender_detail);
		//echo "<pre>";print_r($sender_detail);die();
		$this->set('detail',$sender_detail);
		
	}
	
	if(!empty($edit_id))
	{
		
		$this->data=$this->Address->read(null,$edit_id);
		
	}
   }
   
   
   //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
   function recipient_contact_detail()
   {
	   
	 		if(!empty($this->data))
	 		{
				//echo "<pre>";print_r($this->data);die();
				$this->loadModel('Address');
				$this->Address->save($this->data);
				
				$this->loadModel('Lineup');
				$lineupid=$this->Session->read('lineup_id');
				$sender_address=$this->Address->getLastInsertId();
				$this->Lineup->create();
		
				$this->request->data['Lineup']['id']=$lineupid;
				$this->request->data['Lineup']['reciver_address']=$sender_address;
				$this->Lineup->create();
				$this->Lineup->saveall($this->data);
	
				$reciver_detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->Address->getLastInsertId())));
				$this->Session->write('reciver_detail',$reciver_detail);
				//echo "<pre>";print_r($reciver_detail);die();
				$this->set('detail',$reciver_detail); 
	  		}
	   
	 }
   
   
   
   //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   function recipient_contact_detail_edit($reciprent_edit_id=null)
   {
	
		if(!empty($this->data))
		{
			//echo "<pre>";print_r($this->data);die();
				$this->loadModel('Address');
				$this->Address->save($this->data);
	
				$reciver_detail=$this->Address->find('all',array('conditions'=>array('Address.id'=>$this->data['Address']['id'])));
				$this->Session->write('reciver_detail',$reciver_detail);
				//echo "<pre>";print_r($reciver_detail);die();
				$this->set('detail',$reciver_detail);
		}
		if(!empty($reciprent_edit_id))
		{
	  		 $this->data=$this->Address->read(null,$reciprent_edit_id);
		}
   
   }
   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
   
  function parcel_content_compensation()
   {
     
          if(!empty($this->data))
        {
           
           
           
            for($i=1;$i<=2;$i++){
            $this->request->data['Parcel']['quantity']=$this->data['Parcel']['quantity'][$i];
            $this->request->data['Parcel']['item_description']=$this->data['Parcel']['item_description'][$i];
            $this->request->data['Parcel']['country_of_origin']=$this->data['Parcel']['country_of_origin'][$i];
            $this->request->data['Parcel']['weight']=$this->data['Parcel']['weight'][$i];
            $this->request->data['Parcel']['total_value']=$this->data['Parcel']['total_value'][$i];
           
            //echo "<pre>";print_r($this->request->data);
            $this->loadModel('Parcel');
            $this->Parcel->create();
            $lineupid=$this->Session->read('lineup_id');
            $this->request->data['Parcel']['lineup_id']=$lineupid;
            $this->Parcel->saveall($this->request->data);   
            }
            //die();

            $compansion=$this->Parcel->find('all',array('conditions'=>array('Parcel.lineup_id'=>$lineupid)));
            $this->Session->write('compansion',$compansion);
            $this->set('compansion',$compansion);
           
           
        }
    }
   ////////////////////////////////////////////////////////////////////////////////////////////////
   
   
   function parcel_content_compensation_edit($parcel_id)
   {
	//echo $parcel_id;
	
   }
   
   /////////////////////////////////////////////////////////////////////////
   
   
   function quotation_detail_review()
   {
	$compansion=$this->Session->read('compansion');
	$this->set('compansion',$compansion);
	
	$sender_detail=$this->Session->read('sender_detail');
	$this->set('sender_detail',$sender_detail);
	$reciver_detail=$this->Session->read('reciver_detail');
	$this->set('reciver_detail',$reciver_detail);
	
	$collect_detail=$this->Session->read('collect_detail');
	$this->set('collect_detail',$collect_detail);
	
	$drop_of_location=$this->Session->read('drop_of_location');
	$this->set('location',$drop_of_location);
	$drop_of_message=$this->Session->read('drop_of_message');
	$this->set('message',$drop_of_message);
   }
   
   //////////////////////////////////////////////////////////////////////////////////////////////
   
   function payment()
   {
	$sender_detail=$this->Session->read('sender_detail');
	$this->set('sender_detail',$sender_detail);
	
	if(!empty($this->data))
	{
	//echo "<pre>";print_r($sender_detail);die();	
		
	}
	
	
   }
   
   
   ////////////////////////////////////////////////////////////////////////////////////////////////
	function add($id=null)
	{
		 $data = $this->Company->find('list',array('fields'=>array('id','Company.name')));
		 $this->set('name',$data);
		 $this->loadModel('Country');
		 $country=$this->Country->find('list',array('fields'=>array('id','Country.country_name')));
		 $this->set('country',$country);	
		 
		 if(!empty($this->data))
		 	{
				if($this->data['Quotation']['id']!='')
				{
					$this->Session->setFlash('Quotation has been Updated successfully');
				}
				else
				{
						$this->Session->setFlash('Quotation has been added successfully');
				}
				$this->Quotation->create();
				$this->request->data['quotation']['company_id']=$this->data['company_id'];
				$this->Quotation->saveAll($this->data);
				$this->redirect(array('action'=>'admin_view_all'));
			}
		
		if(empty($this->data) and $id)
		{	
			$this->data=$this->Quotation->read(null,$id);	
		}
		
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_add($id=null)
	{

		
		$this->add($id);
		
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_edit($id=null)
	{
		$this->add($id);
	}
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function admin_index($parentId=0,$keyword=null)
	{
		/*Configure::load('site_config');
		$this->paginate['limit']=Configure::read('ADMIN_SIDE_PAGGING');
		//echo $this->paginate['limit'];die();
		$condition=null;
		if($parentId !=0)
		$condition['Quotation.id'] = $parentId;		
		$this->Quotation->recursive = 0;
		
		$Presss=$this->paginate("Quotation", $condition);
		//echo "<pre>";print_r($Presss);die();
		$this->set('Presss',$Presss);*/
		$this->redirect(array('action'=>'admin_view_all'));
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	function admin_delete()
	{
		$data=$this->data['Quotation'];
		array_splice($data,0,1);
		array_splice($data,0,1);		
		$ans="0";
		foreach($data as $value)
		{
			if($value!='0')
			{
				if($this->data['Quotation']['action']=='Delete')
				{
					$this->Quotation->delete($value);
					$ans="2";
				}
			}
		}

		if($ans=="1"){
			$this->Session->setFlash(__('Quotation has been '.$this->data['Quotation']['action'].'ed successfully', true));
		}

		else if($ans=="2"){

			$this->Session->setFlash(__('Quotation has been '.$this->data['Quotation']['action'].'d successfully', true));

		}else{

			$this->Session->setFlash(__('Please Select any Quotation', true),'default','','error');

		}

		$this->redirect(array('action'=>'admin_view_all'));			
	}
	
	function admin_delete_one($id=null)
	{
		if(!empty($id))
		{
		  $this->loadModel('Quotation');
		  $this->Quotation->delete($id);
		  $this->Session->setFlash("Quotation has been deleted.");
		  $this->redirect(array('action'=>'admin_view_all'));			
		}
	}
	
	
	function admin_view_all()
	{
		$this->loadModel('Company');
		$this->loadModel('Country');		
		$company_list=$this->Company->find('list',array('fields'=>array('name')));
		$country_list=$this->Country->find('list',array('fields'=>array('country_name')));
		
		$this->set('country_list',$country_list);				
		$this->set('company_list',$company_list);		
		$this->loadModel('Quotation');
		
		if(!empty($this->data))
		{
			//$result=$this->Quotation->find('all',array('conditions'=>array('company_id'=>$this->data['Quotation']['company_name'])));
			$query="SELECT * FROM quotations AS q ,companies as cmp, countries as cty where q.company_id=".$this->data['Quotation']['company_name']." and q.company_id=cmp.id and q.destination_country=cty.id order by cmp.name";
			$result=$this->Quotation->query($query);
			$this->set('company_id',$this->data['Quotation']['company_name']);
			$this->set('result',$result);
		}
		else
		{
			$query="SELECT * FROM quotations AS q ,companies as cmp, countries as cty where  q.company_id=cmp.id and q.destination_country=cty.id order by cmp.name";
			$result=$this->Quotation->query($query);
			$this->set('result',$result);
		}
		
	}
	
	function admin_view_by_company()
	{
		if(!empty($this->data))
		{
			$this->loadModel('');
		}
	}
	
}
?>