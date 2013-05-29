<?php

class TrackersController extends AppController {

public $paginate = array(
        'limit' => 10                
    );
	
	function index()
	{
	  $this->admin_booking_detail();
	}
	function admin_booking_detail()
	{
	   $this->loadModel('Booking');
//		$bookingDetails=$this->Booking->find('all');
		
		 $bookingDetails = $this->paginate('Booking');
		 
//   		 $this->set('posts', $data);
		$this->set('bookingDetails',$bookingDetails);
		
	}
	
	function admin_booking_view($view_id=null)
	{
 
		if(!empty($view_id))
  	    {
			$this->loadModel('Booking');	
			if(!empty($this->data))
			{				
				$this->request->data->Booking['id']=$this->data['id'];
				$this->request->data->Booking['status']=$this->data['deliver_status'];
				$this->Booking->save($this->data);
				$this->Session->setFlash('Status Changed Successfully.');
				
			}			
			$booking=$this->Booking->find('all',array('conditions'=>array('Booking.id'=>$view_id)));
			$lineup_id=$booking['0']['Booking']['lineup_id'];
			$refrence_no=$booking['0']['Booking']['reference_no'];
			$deliver_status=$booking['0']['Booking']['deliver_status'];			
			$booking_id=$booking['0']['Booking']['id'];
			
			$this->loadModel('Lineup');	
			$lineup=$this->Lineup->find('all',array('conditions'=>array('Lineup.id'=>$lineup_id)));

			$sender_address_id=$lineup['0']['Lineup']['sender_address'];
			$reciever_address_id=$lineup['0']['Lineup']['reciver_address'];
			$collection_address_id=$lineup['0']['Lineup']['collect_address'];

			$this->loadModel('Address');	
			$sender_address=$this->Address->find('all',array('conditions'=>array('Address.id'=>$sender_address_id)));
			$reciver_address=$this->Address->find('all',array('conditions'=>array('Address.id'=>$reciever_address_id)));
			$collect_address=$this->Address->find('all',array('conditions'=>array('Address.id'=>$collection_address_id)));
			
			$this->set('sender_address',$sender_address);
			
			$this->set('reciver_address',$reciver_address);
			$this->set('collect_address',$collect_address);			
			$this->set('reference_no',$refrence_no);						
			$this->set('deliver_status',$deliver_status);
			$this->set('booking_id',$booking_id);
		}
		else
		{
			if(!empty($this->data))		   			   			
			{
				$this->loadModel('Booking');	
				$booking=$this->Booking->find('all',array('conditions'=>array('Booking.reference_no'=>$this->data['Booking']['reference_no'])));
				$booking_id=$booking['0']['Booking']['id'];
				$this->redirect(array('action'=>'admin_booking_view',$booking_id)) ;				
			}
		}
	}
		
	
}

?>