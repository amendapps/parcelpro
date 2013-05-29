<?php

/***************************************************************
* Live Admin Lite
* Copyright 2008-2011 Dayana Networks Ltd.
* All rights reserved, Live Admin  is  protected  by  Canada and
* International copyright laws. Unauthorized use or distribution
* of  Live Admin  is  strictly  prohibited,  violators  will  be
* prosecuted. Live Admin Lite is a free software with absolutely
* no warranty. NO alternation  or  change to  the following code
* will  be  allowed  *except*  for  configuration   proposes  in
* config.php file.
*
* For more information please refer to Live Admin official site:
*    http://www.liveadmin.net
*
* Translation service provided by Google Inc.
***************************************************************/










if(!defined('LIVEADMIN'))
	exit;


// Ansolute path to home folder where LiveAdmin installed
// LiveAdmin will find the path automatically, but in case
// of problems you can uncomment this line and define it.


define('LIVEADMIN_B','<%value absolute_path%>');


// Site URL
// Internet address of LiveAdmin without tailing slash
// example: http://www.my_site_domain.com/liveadmin


define('LIVEADMIN_W','<%value web_address%>');



// Database information
// Database Host - usually localhost

define('LIVEADMIN_DB_HOST','<%value lv_db_host%>');

// Database name

define('LIVEADMIN_DB_DATABASE','<%value lv_db_name%>');

// Username - this username should have access to
// database name

define('LIVEADMIN_DB_USER','<%value lv_db_user%>');

// Password - this is the password of above username

define('LIVEADMIN_DB_PASS','<%value lv_db_pass%>');

// Table prefix - if you have no idea what it is simply
// set it to lvad_

define('LIVEADMIN_DB_PREFIX','<%value lv_db_prefix%>');



// Do not change anything bellow this line

define('LIVEADMIN_UNIQ','<%value lv_uniq%>');


define('LIVEADMIN_MASTER',false);
define('LIVEADMIN_SLAVE',false);
include_once(dirname(__FILE__).'/config_const.php');
?>