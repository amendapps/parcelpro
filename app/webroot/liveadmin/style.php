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






 include_once('include/core.php'); $dir = ArrayMember($_REQUEST,'dir','ltr'); header("Content-Type: text/css"); $files = GetAdminPanelStyleFiles($dir); if(LIVEADMIN_STANDALONE) $bdir = LIVEADMIN_AST; foreach($files as $file=>$strip) { $css = file_get_contents($bdir.'/'.$file); if($strip) { $css = preg_replace('/\r\n/',"\n",$css); $css = preg_replace('/\n[\s\t]*/','',$css); $css = preg_replace('/<!--.*-->/ismU','',$css); print $css."\n"; } else print $css; } ?>