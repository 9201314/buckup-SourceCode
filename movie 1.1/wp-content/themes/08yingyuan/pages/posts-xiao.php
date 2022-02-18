<?php 
/**
 * template name: 不开心页面
 */

get_header();
?>
  <style>
.hele-text{
	    display: table-footer-group;
		font-size: 10px;
}
.mod-pic{
	padding:0
}
.mod-pic li{
	height: 160px;
    word-spacing: normal;
    overflow: hidden;
    position: relative;
    width: 15%;
    margin: 0 0 10px 20px;
    padding-bottom: 8px;
    float: left;
    display: inline-table;
}

.mod-pic img{
	background:url(<?php _the_logo(); ?>);
	    background-size: 100%;
	width: 100%;
    height: 103px;
    border-radius: 2px;
}
.mod-pic em{display:inline-block;vertical-align:baseline;text-align:left;cursor:pointer;line-height:24px;color:#0C212A;font-size:12px;padding-top:3px;}

.mod-pic span {
	display:none;
    position: absolute;
    left: 0;
    height: 23px;
    line-height: 23px;
    color: #fff;
    padding: 0 8px;
    font-size: 12px;
    background-color: transparent;
    background-color: rgba(56, 64, 71, 0.48);
    zoom: 1;
}

.mod-page2 li:nth-child(3),.mod-page2 li:nth-child(4),.mod-page2 li:nth-child(5),.mod-page2 li:nth-child(6),.mod-page2 li:nth-child(7),.mod-page2 li:nth-child(8),.mod-page2 li:nth-child(9),.mod-page2 li:nth-child(10),.mod-page2 li:nth-child(11),.mod-page2 li:nth-child(12),.mod-page2 li:nth-child(13){
	    display: none;
}
.mod-page2{
	clear: both;
    display: block;
}
.center{
	text-align:center;
}
.thisclass{
	background-color: #FF6651;
    color: #fff;
	margin: 0 4px;
    width: 36px;
    height: 36px;
    line-height: 36px;
    display: inline-block;
    cursor: pointer;
}
.mod-page2 li{
    display: inline-block;
	    list-style: none;
	}
.mod-page2{
	font-size: 14px;
}
.mod-page2 a {
    color: #FF6651;
    background: #fff;
    transition: background ease .4s;
    -webkit-transition: background ease .4s;
    -moz-transition: background ease .4s;
    -o-transition: background ease .4s;
    -ms-transition: background ease .4s;
}
.mod-page2 a {
    margin: 0 4px;
    width: 50px;
    height: 36px;
    line-height: 36px;
    display: inline-block;
    cursor: pointer;
}
@media only screen and (width:768px){
	.mod-pic li{
    width: 22%;
}
	};

@media only screen and (max-width:570px){
	.mod-pic li{
	height: 158px;
    width: 50%;
	margin: 0;
    padding: 0 3px 10px 0px;
}
}
@media only screen and (max-width:420px){
	.mod-pic img {
    height: 150px;
}
	.mod-pic li{
	height: 189px;
    width: 100%;
	margin: 0;
    padding: 0 3px 10px 0px;
}
}


.fenlei{margin-top:10px}
.b-listfilter{padding:0 20px;background-color:#fff;border:1px solid #e6e6e6;font-size:12px;line-height:16px}.b-listfilter-item{position:relative;overflow:hidden;height:40px;zoom:1;padding-left:36px;padding-right:50px;border-bottom:1px dashed #e6e6e6}.b-listfilter-item:last-child{border-bottom:0}.b-listfilter-item .type{position:absolute;left:0;top:10px;color:#999;padding:2px 0}.b-listfilter-item .item{padding:5px 0}.b-listfilter-item .item a{float:left;margin:5px 0 5px 16px;padding:2px 6px;zoom:1;height:20px;white-space:nowrap;word-wrap:break-word}.b-listfilter-item .on:hover,.b-listfilter-item .on{background-color:#FF6651;color:#fff}.b-listfilter-item .act{position:absolute;right:0;top:12px;height:16px;line-height:16px}.b-listfilter-item .act a{padding:0 13px 0 0;display:none}.b-listfilter-item .open{background:url(http://p6.qhmsg.com/t0187f8287120a671ea.png) right center no-repeat}.b-listfilter-item .close{background:url(http://p6.qhmsg.com/t018dad77370f0fe67d.png) right center no-repeat}

@media only screen and (max-width:420px){
.b-listfilter-item .item a{margin: 5px 0 5px 12px;}
.b-listtab-main .item {width: 44%;}
.b-listtab-main .cover{height:203px;}
.b-listtab-main .title .s1 {width: 82px;}
.b-listtab-main .detail {overflow: hidden;}
.b-listtab-main .item{height:262px;}
}
@media only screen and (max-width:320px){
.b-listfilter-item .item a{margin: 5px 0 5px 5px;}
.b-listtab-main .item {
    margin: 0 0 20px 18px;
}
}


<?php
if(!$_GET[page]){
	echo '.mod-page2 li:nth-child(13){display:initial;}';
}elseif($_GET[page] == './'){
	echo '.mod-page2 li:nth-child(13){display:initial;}';
}
?>
</style>
<section class="container">
<?php _the_ads('ad_list_header', 'list-header');?>
<div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">
<style>
#no<?php
if(!$_GET['make']){
	echo 'all';
}else{
	echo $_GET['make'];
}
?>{
	background-color: #FF6651;
    color: #fff;
}
</style>
<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">
<a class="js-tongjip" id="noall" href="?make=all" target="_self">网络短剧</a>
<a class="js-tongjip" id="nogaoxiaoniuren" href="?make=gaoxiaoniuren" target="_self">搞笑牛人</a>
<a class="js-tongjip" id="noyouxi" href="?make=youxi" target="_self">搞笑游戏</a>
<a class="js-tongjip" id="nodongman" href="?make=dongman" target="_self">搞笑动画</a>
<a class="js-tongjip" id="noxiaopinxiangsheng" href="?make=xiaopinxiangsheng" target="_self">相声小品</a>
<a class="js-tongjip" id="nozongyi" href="?make=zongyi" target="_self">搞笑综艺</a>
<a class="js-tongjip" id="nopeiyin" href="?make=peiyin" target="_self">恶搞配音</a>
</dd>
</dl>
</div>
</div>


<?php


if(!$_GET['make']){
	$url = "http://www.yiledao.com/lianzai/".$_GET[page];
}else{
	if($_GET['make'] == 'all'){
	$url = "http://www.yiledao.com/lianzai/".$_GET[page];
	}else{
	$url = "http://www.yiledao.com/".$_GET['make']."/".$_GET[page];
	}
}
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$response = curl_exec($ch);
curl_close($ch);

if ($x=strpos($response,'<div class="box-bd">')) $response=substr($response,$x);
if ($x=strpos($response,"<li><select name='sldd' style='width:54px' onchange='location.href=this.options[this.selectedIndex].value;'>")) $response=substr($response,0,$x);
if ($x=strpos($response,"<li><select name='sldd' style='width:66px' onchange='location.href=this.options[this.selectedIndex].value;'>")) $response=substr($response,0,$x);

$response = str_replace('<img src=\'/uploads/',"<img src='http://www.yiledao.com/uploads/",$response);
$response = str_replace('/pics/',"http://www.yiledao.com/pics/",$response);
$response = str_replace('<img src="/images/navigation/new.gif" style="width:25px;height:16px;margin:-143px 0px 0px -39px;">',"",$response);
$response = str_replace('<a class="hele-text" href="/20','<a class="hele-text" href="/xiaoplay/?go=20',$response);
$response = str_replace('<a href="/20','<a href="/xiaoplay/?go=20',$response);
$response = str_replace("<li><a target='_self' href='","<li><a target='_self' href='?make=".$_GET['make']."&page=",$response);
$response = str_replace("<style>
							.mod-page2 li{
								float: left;
								display: inline;
								white-space: nowrap;
								height: 32px;
								padding: 0 5px;
								margin: 2px;
								color: #333;
								font: 14px/40px tahoma;
								overflow: hidden;
							}
						</style>
","",$response);

echo iconv("GBK","UTF-8//TRANSLIT",$response);
?>
</div></div>
<?php _the_ads('ad_list_footer', 'list-footer');?>
</section>

<?php get_footer(); ?>