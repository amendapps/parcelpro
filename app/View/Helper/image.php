<?php 
class ImageHelper extends Helper {

    var $helpers = array('Html');
    
    var $cacheDir = 'imagecache'; // relative to IMAGES_URL path
    
/**
 * Automatically resizes an image and returns formatted IMG tag
 *
 * @param string $path Path to the image file, relative to the webroot/img/ directory.
 * @param integer $width Image of returned image
 * @param integer $height Height of returned image
 * @param boolean $aspect Maintain aspect ratio (default: true)
 * @param array    $htmlAttributes Array of HTML attributes.
 * @param boolean $return Wheter this method should return a value or output it. This overrides AUTO_OUTPUT.
 * @return mixed    Either string or echos the value, depends on AUTO_OUTPUT and $return.
 * @access public
 */
    function resize($path, $width, $height, $aspect = true, $htmlAttributes = array(), $return = false) {
        $types = array(1 => "gif", "jpeg", "png", "swf", "psd", "wbmp"); // used to determine image type
        
        $fullpath = ROOT.DS.APP_DIR.DS.WEBROOT_DIR.DS.$this->themeWeb.IMAGES_URL;
    
        $url = $fullpath.$path;
        
        if (!($size = getimagesize($url))) 
            return; // image doesn't exist
            
        if ($aspect) { // adjust to aspect.
            if (($size[1]/$height) > ($size[0]/$width))  // $size[0]:width, [1]:height, [2]:type
                $width = ceil(($size[0]/$size[1]) * $height);
            else 
                $height = ceil($width / ($size[0]/$size[1]));
        }
        
        
        $relfile = $this->webroot.$this->themeWeb.IMAGES_URL.'/'.basename($path); // relative file
        $cachefile = $fullpath.basename($path);  // location on server
        
        if (file_exists($cachefile)) {
            $csize = getimagesize($cachefile);
            $cached = ($csize[0] == $width && $csize[1] == $height); // image is cached
            if (@filemtime($cachefile) < @filemtime($url)) // check if up to date
                $cached = false;
        } else {
            $cached = false;
        }
        
        if (!$cached) {
            $resize = ($size[0] > $width || $size[1] > $height) || ($size[0] < $width || $size[1] < $height);
        } else {
            $resize = false;
        }
        
        if ($resize) {
            $image = call_user_func('imagecreatefrom'.$types[$size[2]], $url);
            if (function_exists("imagecreatetruecolor") && ($temp = imagecreatetruecolor ($width, $height))) {
                imagecopyresampled ($temp, $image, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
              } else {
                $temp = imagecreate ($width, $height);
                imagecopyresized ($temp, $image, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
            }
            call_user_func("image".$types[$size[2]], $temp, $cachefile);
            imagedestroy ($image);
            imagedestroy ($temp);
        }         
        
        return $this->output(sprintf($this->Html->tags['image'], $relfile, $this->Html->parseHtmlOptions($htmlAttributes, null, '', ' ')), $return);
    }
	
	
function manualresize($path, $width, $height, $aspect = true, $htmlAttributes = array(), $return = false) {

        $fullpath = ROOT.DS.APP_DIR.DS.WEBROOT_DIR.DS.$this->themeWeb.IMAGES_URL;
        $url = $fullpath.$path;        
		$relfile = $this->webroot.$this->themeWeb.IMAGES_URL."noimgae.jpg";
        if (!($size = getimagesize($url))){
			 $htmlAttributes['width']= $width;		
       		 $htmlAttributes['height']=$height; 
            return $this->output(sprintf($this->Html->tags['image'], $relfile, $this->Html->parseHtmlOptions($htmlAttributes, null, '', ' ')), $return); // image doesn't exist
		}		
		
		/*echo $width."=".$height."<br>";
		echo "<pre>";
		print_r($size);*/
        if ($aspect) { // adjust to aspect.
			$max_width=$width;
			$max_height=$height;
			$image_arr=$size;
			if($image_arr[0] > $max_width){
				$image_arr[1] = (int)(($image_arr[1]/$image_arr[0]) * $max_width);
				$image_arr[0] = $max_width;
			}
			
			if($image_arr[1] > $max_height){
				$image_arr[0] = (int)(($image_arr[0]/$image_arr[1]) * $max_height);
				$image_arr[1] = $max_height;
			}
        }
		
		//echo "<pre>";
		
		
		
		$htmlAttributes['width']= $image_arr[0];		
        $htmlAttributes['height']=$image_arr[1];
		//print_r($htmlAttributes);
		//die();
		
			
		$relfile = $this->webroot.$this->themeWeb.IMAGES_URL.''.$path; // relative file    
        return $this->output(sprintf($this->Html->tags['image'], $relfile, $this->Html->parseHtmlOptions($htmlAttributes, null, '', ' ')), $return);
		
    }
	
}
?> 