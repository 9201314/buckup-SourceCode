<?php 
/**
 * template name: 磁力搜索
 */

get_header();
?>
  <style>
.search-item{margin:0 0 25px}
.search-item .item-title{font-size:medium;line-height:1.2}
.search-item .item-list{color:#545454;line-height:1.4;font-size:13px;word-wrap:break-word}
.search-item .item-bar{color:#00802a;font-size:13px;line-height:1pc}
.search-item .item-bar .download,.search-item .item-bar span{margin-right:10px}
.highlight{color:red;margin-left:0!important}
.bottom-qiehuanr{margin:30px 0}
.bottom-qiehuanr a,.bottom-qiehuanr span{font:13px/1.22 arial,helvetica,clean,sans-serif;border:1px solid #e1e2e3;text-decoration:none;text-align:center;vertical-align:middle;margin:2px;padding:8px 9pt;display:inline-block;color:#1e0fbe}
.bottom-qiehuanr span{background-color:#eee;color:#888;font-weight:700}
.bottom-qiehuanr a:hover{background:#f2f8ff;border:1px solid #38f}
.bottom-qiehuanr a:visited{color:#1e0fbe}
.new{display:inline-block;padding:2px;text-align:center;vertical-align:text-bottom;font-size:9pt;line-height:100%;font-style:normal;color:#fff;overflow:hidden;background-color:#f13f40;position:relative;right:-4px;top:-4px}
.baidu-box,.bdSug_app,.bdsug_copy{display:none}
.bdSug_wpr td{padding-left:5px!important}
.push{height:40px;clear:both}
.res-title{font-size:20px}
.fileDetail{position:relative}
.fileDetail p{color:#444!important;font-size:1pc}
.thumb{position:absolute;top:0;left:25pc;max-width:230px}
.pill{padding:2px 4px;color:#d14;background-color:#f7f7f9;border:1px solid #e1e1e8}
.cpill,.pill{white-space:nowrap}
.cpill{padding-right:9px;padding-left:9px;border-radius:9px;color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,.25);vertical-align:baseline}
.blue-pill{background-color:#3a87ad}
.yellow-pill{background-color:#f89406}
ol{margin:0 0 15px}
ol li{line-height:1.5em;color:#444}
.order{background:#f8f8f8;margin-bottom:0;font-size:14px;margin-bottom:10px}
.order a.active{border-bottom:2px solid #38f;font-weight:700}
.order a.desc{background:url(arrowdown.png) 100% 50% no-repeat}
.order a.asc{background:url(arrowup.png) 100% 50% no-repeat}
.order a:visited{color:#1e0fbe}
.order a{text-decoration:none;padding:0 15px 0 8px;margin-right:6px;line-height:30px;display:inline-block}
.order a:hover{border-bottom:2px solid #38f}
.single-strong{color:#606060;font-size:14px;font-weight:700;border-left:3px solid #ff5c5c;padding-left:10px;display:block;line-height:2pc;margin:10px 0}
#wall,.order{padding:0;overflow:hidden}
.search-item {
    margin: 0px 0px 25px 0px;
    border-bottom: 1px solid #eee;
    padding-bottom: 22px;
}
.fileDetail p:nth-child(1){
	display: none;
}
.fileDetail p a{
word-wrap: break-word;
}
#wall ol{
margin: 0;
    padding: 0;
}
#wall ol li{
	line-height: 2.5em;
}
#homeso img{
	width:250px;
}
@media only screen and (max-width:720px){
.search-item .item-bar {
    line-height: 24px;
}
}

#homeso{margin:180px 0}
.pcadd{display:block}
.madd{display:none}
.homesoin{color:#999;border:1px solid #eee;width:500px;padding:4px 8px;border-right:none;border-radius:2px 0 0 2px}
.homesobtn,.homesoin{height:50px;font-size:14px;outline:0}
.homesobtn{color:#fff;background-color:#ff6651;width:75pt;border:none;padding:4px 10px;border-radius:0 2px 2px 0;opacity:.9}
@media only screen and (max-width:414px){.pcadd{display:none}
.madd{display:block}
#homeso{margin:130px 0}
.homesoin{width:260px}
.jie{padding:0 18px;font-size:10px}
}
@media only screen and (max-width:376px){#homeso{margin:110px 0}
.homesoin{width:180px;height:44px}
.homesobtn{height:44px;width:5pc}
.footer{font-size:10px}
}
@media only screen and (max-width:360px){#homeso{margin:58px 0}
.homesoin{width:180px;height:40px}
.homesobtn{height:40px;width:5pc}
.footer{font-size:10px}
}
.bottom-pager a, .bottom-pager span {
    font: 13px/1.22 arial,helvetica,clean,sans-serif;
    border: 1px solid #e1e2e3;
    text-decoration: none;
    text-align: center;
    vertical-align: middle;
    margin: 2px;
    padding: 8px 9pt;
    display: inline-block;
    color: #1e0fbe;
}
.bottom-pager span {
    background-color: #eee;
    color: #888;
    font-weight: 700;
}
em{
	font-style:normal;
}
.search-statu,.link_op{
	    display: none;
}
</style>
<section class="container">
<?php
if($_GET['sousuo']){
///////////////////////////////////////////
echo '<strong class="single-strong">磁力搜索</strong>';
//$url = "http://www.sobt8.com/search/".$_GET['sousuo']."-first-asc-".$_GET['qiehuan']."";
$url = "http://www.sobt8.com/q/".$_GET['sousuo']."_rel_".$_GET['qiehuan'].".html";
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$response = curl_exec($ch);
curl_close($ch);

if ($x=strpos($response,'<div id="wall">')) $response=substr($response,$x);
if ($x=strpos($response,'<ul class="pagination">')) $response=substr($response,0,$x);
$response = str_replace('/torrent/',"?main=",$response);
print_r($response);

///////////////////////////////////////////
}elseif($_GET['main']){

///////////////////////////////////////////

$url = "http://www.sobt8.com/torrent/".$_GET['main'];
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$response = curl_exec($ch);
curl_close($ch);

if ($x=strpos($response,'<div id="wall">')) $response=substr($response,$x);
if ($x=strpos($response,'<p>')) $response=substr($response,0,$x);
$response = str_replace('style="display:none"',"",$response);
$response = str_replace('magnet"',"磁力链接：magnet",$response);
$response = str_replace('/static/img','/wp-content/themes/tob/img/',$response);
print_r($response);
echo '</div><strong class="single-strong">使用说明</strong>
<p>手动复制以上磁力链接 打开迅雷新建下载链接即可。</p>';
///////////////////////////////////////////

}else{
	echo '<div id="homeso">
<form method="get" id="homeso" style="text-align: center;float: none" action="" >
<img src="'._hui('logo_src_cili').'"><br/><br/>
<input tabindex="2" class="homesoin" id="sos" name="sousuo" type="text" placeholder="输入你要搜索的资源名称" value="">
<input type="hidden" name="qiehuan" value="1" />
<button id="button" tabindex="3" class="homesobtn" type="submit"><i class="fa">磁力搜索</i></button>
</form>
<script>
	var a = document.getElementById(\'sos\');
	var btn = document.getElementById(\'button\');
btn.onclick = function(){
if(!a.value){
	alert(\'不能为空\');
	return false;    
	 }
}
</script>
</div>';
};
?>

</section>
<?php get_footer(); ?>