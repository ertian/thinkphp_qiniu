<?php
namespace Home\Controller;
use Think\Controller;
class UploaderController extends Controller {
    public function index(){
    	$this->display();
    }

    public function one_uploader(){
    	$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$info = $Upload->upload();
		dump($info);
		if(!$info) {
        	dump($Upload->getError());
	    }else{
	        echo '上传成功<br/>';
	    }
    }

    public function more_uploader(){
    	$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$info = $Upload->upload();
		dump($info);
		if(!$info) {
        	dump($Upload->getError());
	    }else{
	        echo '上传成功<br/>';
	    }

	    //通过foreach获取七牛文件路径
	    foreach($info as $val){
	    	echo $val['url'].'<br/>';
	    }
    }

	
    
}