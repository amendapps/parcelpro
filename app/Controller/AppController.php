<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $helpers = array('Html', 'Js' => array('Jquery'), 'Form');
	var $components = array('Auth','Cookie','Session', 'RequestHandler');
	var $publicControllers = array('pages');
	var $uses = array('User');
	
	function beforeFilter()
	{
			$destination_country=$this->Session->read('destination_country');
			$this->set('destination_country',$destination_country);
			
			$country=$this->Session->read('country');
			$this->set('country_id',$country);
			
			$country_name=$this->Session->read('country_name');
			$this->set('country_name',$country_name);
			
			 $user_detail=$this->Session->read('user_detail');
			 //echo "<pre>";print_r($user_detail);
			 $this->set('user_detail',$user_detail);
			
		$this->Auth->allow('login','admin_login','index','admin_index','admin_collect','register','signin','logout','quotation_compare_price','parcel_delivery_quot_dropoff_pickup','parcel_delivery_quot_collectoff_pickup','parcel_delivery_quot_collectoff_pickup_edit','sender_contact_detail','sender_contact_detail_edit','recipient_contact_detail','recipient_contact_detail_edit','parcel_content_compensation','parcel_content_compensation_edit','quotation_detail_review','payment','parcel_delivery_quot_dropoff_pickup_edit','user_logout','user_account','user_change_password','about_us','contact_us','help','collection','packaging','booking','vat','claim','send_confirmation_mail','forgotten_password','collect','franchises_register','add','track_parcel','nearest_parcels_store','show_page','admin_franchises_calculate_price','admin_franchises_sender_address_detail','admin_franchises_reciver_address_detail','admin_franchises_parcel_compansation','admin_franchies_payment','admin_user_logout');
		Configure::load('site_config');
		
		if(isset($this->Auth)) {
			
			$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
			$this->Auth->authorize = 'Controller';
			}	
		
		if (isset($this->params['admin'])) 
		{
			if (!$this->Auth->user('id') && ($this->Auth->User('role')!='admin'))
			{				
				$this->params['admin']='';
				$this->Auth->redirect(array('controller'=>'users','action'=>'login'));
			}
			else
			{
			
					$this->layout="admin";
			} 
		}
		else
		{
			$this->layout="default";
		}
		
		
	
	
	}
	function isAuthorized() {
		return true;
	}
	
	
}
?>