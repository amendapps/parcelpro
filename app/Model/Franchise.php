<?php
App::uses('AuthComponent', 'Controller/Component');
class Franchise extends AppModel {
	
	var $name = 'Franchise';
	
	
	var $hasMany = array('Booking' => array(
         'className'  => 'Booking',
           'conditions' => array('Booking.franchise_id' => 'Franchise.id'),
           // 'order'      => 'Franchise.id ASC'
        )
	
    );
	}
?>