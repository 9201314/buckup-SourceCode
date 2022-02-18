<?php
error_reporting(0);
header("Content-Type: text/html;charset=utf-8");
include("plugin/config.php");
$siteurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].'/';

if(empty($_GET["id"])){echo '缺少参数';exit();}
$data=json_decode(file_get_contents('plugin/pingbi.json'),1);
for ($i= 0;$i< count($data); $i++){
	if('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']==$data[$i]){
		echo '<script language="javascript"> alert("'.urldecode($pbinfo).'");window.location.href=\'./\';</script> ';exit();
	}
}

$id = $_GET["id"];
if(!preg_match('/^[a-zA-Z0-9]{5,10}+$/',$id))exit('ID ERROR!');

$file_name = './data/'.$id.'.json';
if(!file_exists($file_name))exit('Not Found!');
$data = file_get_contents($file_name);
$arr = json_decode($data, true);
$temid = $arr['temid'];
$content = $arr['content'];

$array = array();
for ($x = 1; $x <= 55; $x++) {
    if (!empty($content["con{$x}"])) {
		${'con'.$x} = $content["con{$x}"];
    }
}
$baseurl = $siteurl;
$tongji = '<div style="display:none">'.urldecode($tonji).'</div>';
include('./'.$temid.'/demo.html');
?>