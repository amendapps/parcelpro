<?php
App::uses('AuthComponent', 'Controller/Component');
class Company extends AppModel {
	
	var $name = 'Company';
	
	
	var $hasMany = array('Quotation' => array(
            'className'  => 'Quotation',
            'conditions' => array('Quotation.company_id' => 'Company.id'),
            'order'      => 'Quotation.id ASC'
        )
	
    );
	}
?>