 <?php 
class FckHelper extends Helper {

    var $helpers = Array('Html', 'Javascript');
   

    function load($id,$options_=array()) {
        $options = array(
                    'language'=>'en',
                    'uiColor'=>'#e3e3e1',
                    'toolbar'=>'Full',
		    'filebrowserBrowseUrl'=>Configure::read('FCK_HTTP_PATH').'/js/ckfinder/ckfinder.html',
		    'filebrowserImageBrowseUrl'=>Configure::read('FCK_HTTP_PATH').'/js/ckfinder/ckfinder.html?type=Images',
		    'filebrowserFlashBrowseUrl'=>Configure::read('FCK_HTTP_PATH').'/js/ckfinder/ckfinder.html?type=Flash',
		    'filebrowserFileBrowseUrl'=>Configure::read('FCK_HTTP_PATH').'/js/ckfinder/ckfinder.html?type=Files',
		    
		    'filebrowserUploadUrl'=>Configure::read('FCK_HTTP_PATH').'/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		    'filebrowserImageUploadUrl'=>Configure::read('FCK_HTTP_PATH').'/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		    'filebrowserFlashUploadUrl'=>Configure::read('FCK_HTTP_PATH').'/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		    );
        if(!empty($options_)) array_merge($options,$options_);
        $did = '';
        foreach (explode('.', $id) as $v) {
            $did .= Inflector::camelize($v);
        }
        $did = Inflector::humanize($did);
        
        $code = " if (CKEDITOR.instances['".$did."']) {
                    CKEDITOR.remove(CKEDITOR.instances['".$did."']);
                    cckeditor".$did.".destroy();
                    cckeditor".$did." = null;
                 }\n";
        $code .= " cckeditor".$did." = CKEDITOR.replace( '".$did."',".$this->Javascript->object($options).");\n";
        return $this->Javascript->codeBlock($code); 
    }
}
?> 