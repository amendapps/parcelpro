<?php 
class ProgressHelper extends AppHelper {
	
	function upload($http_path,$real_path){
		$_SESSION['REAL_PATH']=$real_path;
		require_once 'progress/ubr_file_upload.php';
	}
}?>