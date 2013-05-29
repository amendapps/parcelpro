<?php
	class ResizeComponent extends Object {
		var $_file;
		var $_filepath;
		var $_destination;

		// -- add a message to stack (for outside checking)
		function image ($file, $destination, $size, $output = NULL, $quality = NULL) {
		
			if (is_null($type)) $type = 'resizeamin';
			if (is_null($size)) $size = 100;
			if (is_null($output)) $output = 'png';
			if (is_null($quality)) $quality = 75;
			// -- format variables
			$type = strtolower($type);
			$output = strtolower($output);
			if (is_array($size)) {
				$maxW = intval($size[0]);
				$maxH = intval($size[1]);
			} else {
				$maxScale = intval($size);
			}

			// -- check sizes
			if (isset($maxScale)) {
				if (!$maxScale) {
					$this->error("Max scale must be set");
				}
			} else {
				if (!$maxW || !$maxH) {
					$this->error("Size width and height must be set");
					return;
				}
				
			}

			// -- check output
			if ($output != 'jpg' && $output != 'png' && $output != 'gif') {
				$this->error("Cannot output file as " . strtoupper($output));
			}

			if (is_numeric($quality)) {
				$quality = intval($quality);
				if ($quality > 100 || $quality < 1) {
					$quality = 75;
				}
			} else {
				$quality = 75;
			}

			// -- get some information about the file
			$uploadSize = getimagesize($file['src_name']);
			$uploadWidth  = $uploadSize[0];
			$uploadHeight = $uploadSize[1];
			$uploadType = $uploadSize[2];
//echo "<pre>";print_r($uploadSize);die();
			if ($uploadType != 1 && $uploadType != 2 && $uploadType != 3) {
				$this->error ("File type must be GIF, PNG, or JPG to resize");
			}
//echo $file['src_name'];
			

			$ratioX = $maxW / $uploadWidth;
			$ratioY = $maxH / $uploadHeight;

			if (($uploadWidth == $maxW) && ($uploadHeight == $maxH)) {
				$newX = $uploadWidth;
				$newY = $uploadHeight;
			} else if (($ratioX * $uploadHeight) > $maxH) {
				$newX = $maxW;
				$newY = ceil($ratioX * $uploadHeight);
			} else {
				$newX = $maxW;
				$newY = ceil($ratioX * $uploadHeight);
				/*$newX = ceil($ratioY * $uploadWidth);
				$newY = $maxH;*/
			}
			//$output,' newx =>'.$newX,' new y => '.$newY.'<br>'.$destination ;
			//header("Content-type: image/png");
			$dstImg = imagecreatetruecolor($newX,$newY);
			switch ($uploadType) {
				case 1: $srcImg = imagecreatefromgif($file['src_name']); break;
				case 2: $srcImg = imagecreatefromjpeg($file['src_name']); break;
				case 3: $srcImg = imagecreatefrompng($file['src_name']); break;
				default: $this->error ("File type must be GIF, PNG, or JPG to resize");
			}
			imagecopyresampled($dstImg, $srcImg, 0, 0, 0, 0, $newX, $newY, $uploadWidth, $uploadHeight);
			// -- try to write
			switch ($output) {
				case 'jpg':
					$write = imagejpeg($dstImg, $destination);
					break;
				case 'png':
					$write = imagepng($dstImg,$destination );
					break;
				case 'gif':
					$write = imagegif($dstImg, $destination);
					break;
			}

			// -- clean up
			imagedestroy($dstImg);
			//return;

			if ($write) {
				$this->result = basename($this->_name);
			} else {
				$this->error("Could not write " . $this->_name . " to " . $this->_destination);
			}
		}
	}

?>