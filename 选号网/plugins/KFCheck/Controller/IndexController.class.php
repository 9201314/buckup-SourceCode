<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\KFCheck\Controller; //KFCheck插件英文名，改成你的插件英文就行了
use Api\Controller\PluginController;//插件控制器基类

class IndexController extends PluginController{
	
	function index(){
		
		$this->display(":index");
	}
    public function query(){
		$qq=$_POST['qqnumber'];
		$kfqq=$_POST['qqnumber'];
		//判断客服qq在数据库中是否存在
		$yz=M("plugins_kfcheck");
		$where['qqnumber']=$qq;
		$arr=$yz->field('id')->where($where)->find();
		//dump($qq);
		//dump($arr);
		//exit;
		$this->qq ="$qq";
		if($arr){
		//存在 提示验证成功
    	$this->tip ='p1';
    	$this->tip1 ='该QQ号码是本平台客服或工作人员，请放心使用!';
    	$this->display(":index");
			}else{
    	$this->tip ='p';
    	$this->tip1 ='注意！该QQ号码不是本平台客服或工作人员，小心被骗！';
    	$this->display(":index");
      }
    }
}
