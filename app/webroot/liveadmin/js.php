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






 include_once('include/core.php'); include_once('include/jspack.php'); $files = GetAdminPanelJavaScriptFiles(); if(LIVEADMIN_STANDALONE) $bdir = LIVEADMIN_AST; if(is_callable("gzcompress") && is_callable("gzuncompress")) { ob_start('ob_gzhandler'); } else { ob_start(); } header("Content-Type: application/javascript"); foreach($files as $file=>$strip) { print file_get_contents($bdir.'/'.$file); } ob_end_flush(); ?>