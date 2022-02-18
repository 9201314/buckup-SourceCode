<?php
error_reporting(0);
if(empty($_GET["url"])){echo '缺少参数';exit();}
if(!empty($_COOKIE["vip_username"])&&!empty($_COOKIE["vip_password"])){
	$vip_username = $_COOKIE["vip_username"];
	$vip_password = $_COOKIE["vip_password"];
	$json_name = "vip_users.json";
	$json_string = file_get_contents($json_name);
	$obj = json_decode($json_string);
	$users = $obj->users;
	$users_num = count($users); 
	if($users_num!=0){
		for($i=0;$i<$users_num;$i++){
			if(($users[$i][0]==$vip_username)&&($users[$i][1]==$vip_password)){
				$data=file_get_contents($_GET["url"]);
				$file_size=strlen($data);
				header("Content-Description: File Transfer");
				header("Content-Type:application/force-download");
				header("Content-Length: {$file_size}");
				header('Content-Disposition:attachment; filename="index.html"');
				echo $data;
				break;
			}else if($i==$users_num-1){
				echo '<meta charset="utf-8"/><script type="text/javascript"> alert("对不起，源码下载功能为贵宾会员专享。");window.location.href=\'../zhuce.php\';</script>';
			}
		}
	}else{
		echo '<meta charset="utf-8"/><script type="text/javascript"> alert("对不起，源码下载功能为贵宾会员专享。");window.location.href=\'../zhuce.php\';</script>';
	}
}else{
	echo '<meta charset="utf-8"/><script type="text/javascript"> alert("对不起，源码下载功能为贵宾会员专享。");window.location.href=\'../zhuce.php\';</script>';
}
?>