<?php
namespace Ledao\Controller;
use Common\Controller\AdminbaseController;
use ZipArchive;
class UpdateController extends AdminbaseController{
	
	function index(){
		$files=scandir("./update/");
		array_shift($files);
		for($i=0;$i<count($files);$i++){
			if(preg_match('/(.*)(\.)zip$/i',$files[$i]))
			$arr[] = array(
                'zipname' => $files[$i],
            );
		}
		$this->assign(files,$arr);
		$this->display();
	}		
	
	function update(){
     	$zipname = I('get.name');
		$data = R('Update/unzip',array($zipname));
		$this->display();
	}
	
	function good(){
		
		$this->display(index);
	}	
		
	function backup(){
		$this->display();
	}
	
	public function upload(){
		$upload = new \Think\Upload();// 实例化上传类    
		$upload->maxSize   =     3145728 ;// 设置附件上传大小    
		$upload->exts      =     array('zip');// 设置附件上传类型
		$upload->rootPath  =     './';
		$upload->savePath  =     './update/'; // 设置附件上传目录    // 上传文件     
		$upload->saveName  =     ''; // 设置附件上传名称
		$upload->replace  =      true; // 附件重名时覆盖旧文件
		$upload->autoSub  =      false; // 不自动使用子目录保存上传文件		
		$info   =   $upload->upload();
		    if(!$info) {// 上传错误提示错误信息
			        $this->error($upload->getError());
		    }else{// 上传成功
			        $this->success('上传成功！');
		    }
	}

	public function delete(){
		 $zipname = I('get.name'); 
		 $file_delete = "./update/$zipname";
		 if (unlink($file_delete)) {
			 $this->success('该文件已被成功删除！',U('Update/index'));
			 }else{
			 $this->error('无法删除指定文件！');
		}
	}
	
    /* 
    * 解压zip*/  
    function unZip($name){
		header('Content-type: text/html;charset=utf-8');
		error_reporting(E_ALL);
		set_time_limit(0);
		$zip_filename = "$name";
		$zip_filename = key_exists('zip', $_GET) && $_GET['zip']?$_GET['zip']:$zip_filename;
		$zip_filepath = str_replace('\\', '/', (getcwd())) . '/' .  'update' . '/' . $zip_filename;
		if(!is_file($zip_filepath)){
			die('文件"'.$zip_filepath.'"不存在!');
		}
		$zip = new ZipArchive();
		$rs = $zip->open($zip_filepath);
		if($rs !== TRUE){
			die('升级失败!Error Code:'. $rs);
		}
		$zip->extractTo('./');
		$zip->close();
	} 						
}