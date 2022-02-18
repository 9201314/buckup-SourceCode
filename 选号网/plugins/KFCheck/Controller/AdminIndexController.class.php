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

class AdminIndexController extends PluginController{
	
	function _initialize(){
		$adminid=sp_get_current_admin_id();//获取后台管理员id，可判断是否登录
		if(!empty($adminid)){
			$this->assign("adminid",$adminid);
		}else{
			//TODO no login
		}
	}


	function index(){
		//查询插件数据表扩展是否开启
		$DB_HOST = C('DB_HOST');
		$DB_NAME = C('DB_NAME'); 
		$DB_USER = C('DB_USER'); 
		$DB_PWD = C('DB_PWD'); 
		$DB_PREFIX = C('DB_PREFIX'); 
		$conn = mysql_connect("$DB_HOST","$DB_USER","$DB_PWD") or die("Cannot connect to the database.");
		$db = mysql_select_db("$DB_NAME" ,$conn) or die ("Cannot find the data source.");
		$sql = "select table_name from `INFORMATION_SCHEMA`.`TABLES` where table_name ='{$DB_PREFIX}plugins_kfcheck' and TABLE_SCHEMA='$DB_NAME'";
		$result = mysql_query($sql); 
		$row = mysql_fetch_array($result);
		if(!$row){
		}else{
			$db_type = '已开启';
			$this->assign('db_type',$db_type);
			$User = M('plugins_kfcheck');
		    $users = $User->select();
		    $count = count($users);
		};
		$this->assign("count",$count);	
		$this->assign("users",$users);		
		$this->display(":admin_index");
	}
    public function add(){
		$qquser=$_POST['qquser'];
		$qqnumber=$_POST['qqnumber'];
        $User = M('plugins_kfcheck');
		 // 实例化User对象
		 $data['qquser'] = $qquser;
		 $data['qqnumber'] = $qqnumber;
		 $data['time'] = date('y-m-d h:i:s',time());
		 if($User->add($data)){
			echo '<p>QQ客服添加成功<a href="index.php?g=api&m=plugin&a=execute&_plugin=KFCheck&_controller=AdminIndex&_action=index">&gt;&gt;点此&lt;&lt;</a>返回</p>';;
		 }else{
			echo '<p>QQ客服添加失败<a href="index.php?g=api&m=plugin&a=execute&_plugin=KFCheck&_controller=AdminIndex&_action=index">&gt;&gt;点此&lt;&lt;</a>返回</p>';
		 }
    }	
    public function delete(){
		$id    =  $_GET['id']; // 获取get变量
	    $Form = M('plugins_kfcheck');
		if($Form->delete($id)){
			echo '<p>QQ客服删除成功<a href="index.php?g=api&m=plugin&a=execute&_plugin=KFCheck&_controller=AdminIndex&_action=index">&gt;&gt;点此&lt;&lt;</a>返回</p>';
		 }else{
			echo '<p>QQ客服删除失败<a href="index.php?g=api&m=plugin&a=execute&_plugin=KFCheck&_controller=AdminIndex&_action=index">&gt;&gt;点此&lt;&lt;</a>返回</p>';
		 }
    }	
	
	function db(){	
		$DB_HOST = C('DB_HOST');
		$DB_NAME = C('DB_NAME'); 
		$DB_USER = C('DB_USER'); 
		$DB_PWD = C('DB_PWD'); 
		$DB_PREFIX = C('DB_PREFIX'); 
		$conn = mysql_connect("$DB_HOST","$DB_USER","$DB_PWD") or die("Cannot connect to the database.");
		$db = mysql_select_db("$DB_NAME" ,$conn) or die ("Cannot find the data source.");
		$sql = "CREATE TABLE `{$DB_PREFIX}plugins_kfcheck` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `qquser` varchar(20) CHARACTER SET utf8 NOT NULL,
 `qqnumber` varchar(10) CHARACTER SET utf8 NOT NULL,
 `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1";
        $db_true = mysql_query($sql);
		if(mysql_error()){
			echo '<p>插件数据表扩展失败<a href="index.php?g=api&m=plugin&a=execute&_plugin=KFCheck&_controller=AdminIndex&_action=index">&gt;&gt;点此&lt;&lt;</a>关闭此窗口!</p><p>提示：付费版用户请联系QQ:158756302</p>';
		}else{
			echo '<p>插件数据表扩展成功<a href="index.php?g=api&m=plugin&a=execute&_plugin=KFCheck&_controller=AdminIndex&_action=index">&gt;&gt;点此&lt;&lt;</a>关闭此窗口!</p><p>提示：卸载插件后对应插件数据表需手动删除！</p>';
			};
	}
	
}
