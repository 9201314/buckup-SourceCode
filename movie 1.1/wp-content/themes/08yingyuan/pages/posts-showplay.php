<?
/**
 * template name: 本站搜索播放页面
 */
?>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/08yingyuan/phpQuery-onefile.php');
$yuan = _hui('08_zhanneiurl');
$url = 'http://'.base64_decode($yuan).'/index.php/play/index/'.$_GET['mso'];
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

		$list = array();
		$list["play_name"] = pq("h3:eq(0)")->text();
		$list["play_jieshao"] = pq("div[id='A']")->text();
		$list["play_h5"] = pq("div[class='html5play']")->find('iframe')->attr('src');
		$list["play_h5"] = str_replace("/yunparse/?url=",_hui('tongyijiekou'),$list["play_h5"]);
		
		$uls = pq("div[class='video-list view-font']")->find("ul")->find("li");
	foreach($uls as $li2){
		$goods = array();
		$li = pq($li2);
		$goods["play_urlname"] = $li->find("a")->text();
		$goods["play_url"] = $li->find("a")->attr('href');
		$goods["play_url"] = str_replace("index.php/play/index/","showplay?mso=",$goods["play_url"]);
		array_push($list,$goods);
	}
?>
<title><?php echo $list["play_name"]?>在线观看_<?php echo $list["play_name"]?>百度云_<?php echo $list["play_name"]?>迅雷网盘资源视频分享</title>

<?php get_header(); ?>


<style>
.article-content h2 {
	padding: 0;
    margin: 0 !important;
    color: #444;
    font-size: 20px;
    font-weight: bold;
    margin: 30px 0;
    border-left: none;
    margin-left: 0;
}
.view-play img{
	float: left;
}
.video-text{
float: left;
margin-left: 20px;
}
.video-text a{
	border: 1px solid #eee;
    padding: 10px 20px;
    border-radius: 4px;
    background: #FF7562;
    color: #fff;
    text-decoration: inherit;
    display: block;
    margin-top: 20px;
    text-align: center;
}
.video-list{
	clear: both;
}
.article-content p{
	margin:0
}
#mode{
	margin-top: 20px;
    display: inline-block;
}
.video-list li{
	list-style: none;
	text-align:center;
    float: left;
    border: 1px solid #D8D8D8;
    margin: 6px;
    padding: 2px 6px;
    border-radius: 2px;
	font-size:13px;
}
.video-list li a{
	color: #696969;
	text-decoration: initial;
}
.video-list ul{
	margin: 0;
    background: #FBFBFB;
    display: inline-block;
    padding: 10px 0;
}
.article-content h3{
	padding-bottom: 0;
    margin-bottom: 10px;
    margin-top: 20px;
}
.html5play iframe{
	    height: 600px;
}
.single-strong {color: #606060;font-size: 14px;font-weight: 700;border-left: 3px #ff5c5c solid;padding-left: 10px;display: block;line-height: 32px;margin: 10px 0;}
#A span{
	line-height: 26px;
    font-size: 13px;
	padding: 10px 0;
}
#A{
	padding: 10px 0;
}
.article-content a{    text-decoration: inherit;}
@media only screen and (max-width:720px){
	.video-text{
		    margin-left: 0px;
	}
}
@media only screen and (max-width:420px){
.html5play iframe{
	    height: 260px;
}
}
.sptitle h1{font-size:18px;}
.lipbtn{background:#fff;padding: 5px 8px;font-size: 10px;border-radius: 10px;margin-bottom: 8px;border: 1px solid #FF7562;clear: both;display: inline-block;color: #FF7562;margin-right: 7px;}
@media only screen and (max-width:700px){
.lipbtn{padding: .3em .8em;}
}
.html5play iframe{
	background: url(<?php _hui('jiazaibg')?>);
    background-size: 100%;
}

</style>
<div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
		<div>
<?php _the_ads('ad_post_header', 'post_header');?>


<div class="sptitle"><h1><?php echo $list["play_name"]?></h1></div>

<div id="bof">
<strong class="single-strong">选择播放源</strong>选择播放源：&gt; 
<?php
$is = count($list)-3;
for($i=0;$i<$is;$i++){
echo '<a class="am-btn am-btn-default lipbtn" href="'.$list[$i]['play_url'].'">'.$list[$i]['play_urlname'].'</a>';
}
?>
</div>

<div class="html5play">
<iframe src="<?php echo $list["play_h5"]?>" marginwidth="0" marginheight="0" border="0" scrolling="no" frameborder="0" topmargin="0" width="100%" height="100%"></iframe>
</div>
<br/>
<button onclick="window.open('<?php echo _hui('pyiburl')?>')" style="display: block;border: navajowhite;margin: 0 auto;line-height: 2rem;background: #6ED56C;color: #fff;font-size: .7rem;width: 100%;text-align: center;border-radius: .2rem;padding: 6px 10px;"><?php echo _hui('pyibtext')?></button>

<p style="text-align:center;color: #fff;font-size: 10px;background: #FF6E76;padding:11px 8px;border-radius: 2px;"><?php echo _hui('pertext')?></p>

<button onclick="window.open('<?php echo _hui('psanburl')?>')" style="display: block;border: none;margin: 0 auto;line-height: 2rem;background: #FF5E52;color: #fff;font-size: .7rem;width: 100%;text-align: center;border-radius: .2rem;padding: 6px 10px;"><?php echo _hui('psanbtext')?></button>


<p class="jianjie"><h3 class="single-strong">简介</h3><p class="item-desc js-close-wrap" ><span><?php echo $list["play_jieshao"]?></span></p></p>
<div id="cyEmoji" role="cylabs" data-use="emoji"></div>

<strong class="single-strong">剧情讨论</strong>

<div id="SOHUCS" sid="<?php echo $_GET['mso']?>" ></div> 
<script type="text/javascript"> 
(function(){ 
var appid = '<?php echo _hui('cyappid')?>'; 
var conf = '<?php echo _hui('cyconf')?>'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
<script type="text/javascript" charset="utf-8" src="https://changyan.itc.cn/js/lib/jquery.js"></script>
<script type="text/javascript" charset="utf-8" src="https://changyan.sohu.com/js/changyan.labs.https.js?appid=cysDEMHcG"></script>
    <?php get_template_part( 'content', 'module-share' ); ?> 
	<?php _the_ads('ad_post_footer', 'post_footer');?>
    	</div>
	</div>
	</div>
	<?php get_sidebar(); ?>
	<script>
var ifh=$('.sidebar');
if(ifh.height()<10){
$('.content').css("width","100%");
}else{
}</script>
</div>
</section>
</div>
<?php get_footer(); ?>