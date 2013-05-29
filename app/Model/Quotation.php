<?php
App::uses('AuthComponent', 'Controller/Component');
class Quotation extends AppModel {
	
	var $name = 'Quotation';
	
	var $belongsTo = array('Company');
    
	}
?>