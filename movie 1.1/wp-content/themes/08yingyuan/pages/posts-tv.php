<?php 
/**
 * template name: 电视直播
 */

get_header();
?>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/08yingyuan/phpQuery-onefile.php');
$tid = $_GET['tid'];
$token = $_GET['token'];
$area = $_GET['area'];
$act = $_GET['act'];
$vid = $_GET['vid'];
$gid = $_GET['gid'];
if($tid){
	$url = 'http://wb.ta03.cn/m/index.php?tid='.$tid.'&token='.$token.'';
}else if($area){
	$url = 'http://wb.ta03.cn/m/index.php?area='.$area.'&token='.$token.'';
}else if($act=='play'){
	if($gid){
	$url = 'http://wb.ta03.cn/m/?act=play&token='.$token.'&gid='.$gid.'';
	}else{
	$url = 'http://wb.ta03.cn/m/?act=play&token='.$token.'&vid='.$vid.'';
	}
}else{
	$url = 'http://wb.ta03.cn/m';
}

$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_ENCODING, '');
curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
$fileContent = curl_exec($curl); 
$doc = phpQuery::newDocumentHTML($fileContent);
phpQuery::selectDocument($doc);
phpQuery::newDocumentFile($url);
	if($act=='play'){
	$play = array();
	$uls = pq("div[data-role='content']")->find("ul")->find("option");
	foreach($uls as $li2){
	$goods = array();
	$op = pq($li2);
	$goods["play_t"] = $op->text();
	$goods["play_a"] = $op->attr('value');
	array_push($play,$goods);
	}
	}else{
	//非播放页面
	$list = array();
	$uls = pq("div[data-role='content']")->find("ul")->find("li");
	foreach($uls as $li2){
	$goods = array();
	$li = pq($li2);
	$goods["home_t"] = $li->find("a")->text();
	$goods["home_a"] = $li->find("a")->attr('href');
	$goods["home_a"] = str_replace("index.php","",$goods["home_a"]);
	$goods["home_a"] = str_replace("http://player.tll888.com/m/","",$goods["home_a"]);
	array_push($list,$goods);
	}	
	}
?>
<style>
.list{margin:10px auto!important;padding:0}.list li{list-style:none;text-align:center;background:#eee;margin:4px 0;width:48%;border-radius:2px;font-size:16px}.list li:nth-of-type(odd){float:left}.list li:nth-of-type(even){float:right}.list a{display:block;color:#444;text-decoration:inherit}.play{text-align:center;border:1px solid #333;background:#111;color:#fff;font-weight:700;text-shadow:0 -1px 0 #000;background-image:-webkit-gradient(linear,left top,left bottom,from(#3c3c3c),to(#111));background-image:-webkit-linear-gradient(#3c3c3c,#111);background-image:-moz-linear-gradient(#3c3c3c,#111);background-image:-ms-linear-gradient(#3c3c3c,#111);background-image:-o-linear-gradient(#3c3c3c,#111);background-image:linear-gradient(#3c3c3c,#111)}.play video{border-bottom:1px solid #6A6A6A}.se{border:none;cursor:pointer;height:2em;font-size:1.3rem;background:#131313;color:#FFF}
</style>
<div class="focusbox"><div class="container"><h1 class="focusbox-title">电视直播网-网络电视直播</h1><p style="margin: 0;">手机用户专享特权！</p></div></div>
<section class="container">
<article class="article-content">
<ul class="list">
<?php
if($act=='play'){
echo '<div class="play"><video name="vstPlayer" id="vstPlayer" width="100%" controls="controls" src="'.$play[0]['play_a'].'"></video><select class="se" id="se" onchange="valuechange()">';
$len = count($play);
for($i=0;$i<$len;$i++){
echo '<option value="'.$play[$i]['play_a'].'">'.$play[$i]['play_t'].' - 点击此处更换线路</option>';
}
echo '</select></div>';
}else{
$len = count($list);
for($i=0;$i<$len;$i++){
echo '<li><a href="'.$list[$i]['home_a'].'">'.$list[$i]['home_t'].'</a></li>';
}
}
if($_GET){
	echo '<button onclick="history.go(-1)" style="border: none;width: 100%;border-radius: 2px;font-size: 14px;margin-top: 8px;">返回上一页</button>';
}
?>
</ul>
<script>
 function  valuechange(){
 var qiehuan = document.getElementById('se').value;
 var vstPlayer = document.getElementById('vstPlayer');
 vstPlayer.src = qiehuan;
 }
</script>
</article>
		   <?php get_template_part( 'content', 'module-share' ); ?> 
		</section>
<?php get_footer(); ?>