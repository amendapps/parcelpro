<?php
App::uses('AuthComponent', 'Controller/Component');
class Booking extends AppModel {
	
	var $name = 'Booking';
	
	public $hasmany=array(
							'LineUp' => array(
							'className' => 'Lineup',
							'foreignKey' => 'collect_address',
							'conditions' =>array('CollectAddress.collect_address' => 'Address.id')
							)
							);
	
	
	
	}
?>