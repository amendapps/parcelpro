<?php
App::uses('AuthComponent', 'Controller/Component');
class Address extends AppModel {
	
	var $name = 'Address';
	
			public $hasMany = array(
							'CollectAddress' => array(
							'className' => 'Lineup',
							'foreignKey' => 'collect_address',
							'conditions' =>array('CollectAddress.collect_address' => 'Address.id')
							),
							
							'SenderAddress' => array(
							'className' => 'Lineup',
							'foreignKey' => 'sender_address',
							'conditions' =>array('SenderAddress.sender_address' => 'Address.id')
							),
							
							'RecipentAddress' => array(
							'className' => 'Lineup',
							'foreignKey' => 'reciver_address',
							'conditions' =>array('RecipentAddress.reciver_address' => 'Address.id')
							),
							
														
						);
        

	}
?>