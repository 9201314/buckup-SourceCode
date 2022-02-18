<?php 
/**
 * template name: 资源站搜索播放
 */

if(!$_GET['gourl']){
header("Location: ".home_url().""); 
}
get_header();
?>
<?php
$url = _hui('zy_so')."/?m=".$_GET['gourl'].'.html';
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.2; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$html = curl_exec($ch);
curl_close($ch);
$bofangurl = $html;
if(_hui('zy_so') == 'http://m.968sg.cn'){
if ($x=strpos($bofangurl,'<h3>来源：link</h3>')) $bofangurl=substr($bofangurl,$x);
if ($x=strpos($bofangurl,'<input type="checkbox" name="checkbox" value="checkbox" onclick="checkAll(\'copy_sel\',this.checked)" checked="" />')) $bofangurl=substr($bofangurl,0,$x);
$bofangurl = str_replace('link','互联网资源',$bofangurl);
}else{
if ($x=strpos($bofangurl,'<strong>影片点播：</strong>')) $bofangurl=substr($bofangurl,$x);
if ($x=strpos($bofangurl,'<div class="ibox playBox">')) $bofangurl=substr($bofangurl,0,$x);
if ($x=strpos($bofangurl,'<div  style="clear:both"></div> ')) $bofangurl=substr($bofangurl,0,$x);
}
$bofangurl = str_replace('<input type="checkbox" name="checkbox" value="checkbox" onclick="checkAll(\'copy_sel\',this.checked)" checked="" />全选 ',"",$bofangurl);
$bofangurl = str_replace('padding-left:10px;word-break: break-all; word-wrap:break-word',"padding:0 10px;word-break: break-all; word-wrap:break-word;padding-top: 7px;",$bofangurl);
$bofangurl = str_replace('<input type="button" name="Submit" value="直接复制链接" onclick="copy(\'copy_sel\')" />&nbsp;',"",$bofangurl);
$bofangurl = str_replace('<strong>影片点播：</strong>
    </div>',"",$bofangurl);
$bofangurl = str_replace('<div class="vodplayinfo">','<div><div class="vodplayinfo">',$bofangurl);
$bofangurl = str_replace('<li><input type="checkbox" name="copy_sel" value="','<li><a target="blank" id="',$bofangurl);
$bofangurl = str_replace('checked="" />','/>',$bofangurl);
$bofangurl = str_replace('</li> ','</span></a></li>',$bofangurl);
$bofangurl = str_replace('<strong>影片点播：</strong>','',$bofangurl);
$bofangurl = str_replace('播放类型','播放线路',$bofangurl);
$bofangurl = str_replace('：zuidayun','：最大云',$bofangurl);
$bofangurl = str_replace('：letv','：乐视',$bofangurl);
$bofangurl = str_replace('：mgtv','：芒果',$bofangurl);
$bofangurl = str_replace('：qiyi','：爱奇艺',$bofangurl);
$bofangurl = str_replace('：qq','：腾讯视频',$bofangurl);
$bofangurl = str_replace('$','<span style="display: none;">',$bofangurl);
$bofangurl = str_replace('<h3>','<div style="clear: both;"></div><h3 class="single-strong">',$bofangurl);
$bofangurl = str_replace('0 10px','0',$bofangurl);
$jieshao = $html;
if ($x=strpos($jieshao,'<strong>剧情介绍：</strong>')) $jieshao=substr($jieshao,$x);
if ($x=strpos($jieshao,'<div class="ibox playBox">')) $jieshao=substr($jieshao,0,$x);
$jieshao = str_replace('/upload','http://www.zuidazy.com/upload/',$jieshao);
$jieshao = str_replace('<strong>剧情介绍：</strong>
    </div>',"",$jieshao);
$jieshao = str_replace('</div>
   <!--结束-->
',"",$jieshao);
$jieshao = str_replace('</div>','',$jieshao);
$jieshao = str_replace('<strong>剧情介绍：</strong>','<strong class="single-strong">剧情介绍：</strong>',$jieshao);

$img = $html;
$pattern = '#<img class="lazy" src="(.*?)" alt="(.*?)" />#'; 
preg_match_all($pattern, $img, $matches);
$title = $matches[2][0];
?>

<style>
.vodplayinfo ul{width: 100%;margin: 0 auto;padding: 0;}
.vodplayinfo ul li{
	list-style: none;
    border: 1px solid #eee;
    padding: 9px;
    float: left;
    width: 66px;
    margin: 4px;
	text-align: center;
    border-radius: 2px;
}
#video{width:100%;height:587px;border:none;}

h3{font-size: 14px;padding: 0;margin: 0;}
.headimg{
	width: 14%;float: left;
}
@media only screen and (max-width:420px){
	#video{width:100%;height:240px;}

.headimg{
	width: 44%;
}
}
@media only screen and (max-width:375px){
.headimg{
    width: 100%;
}
}
.sptitle h2 {
    font-size: 18px;
}
#bofangurl ul{
	padding:0;
    margin: 10px auto;
}
#bofangurl ul li{
	background: #fff;
    padding: 5px 8px;
    font-size: 10px;
    border-radius: 10px;
    margin-bottom: 8px;
    border: 1px solid #FF7562;
    clear: both;
    display: inline-block;
    color: #FF7562;
}
</style>
<div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">

<div style="margin-top: 10px;">
<div class="headtitle">
<h2><?php echo $title?></h2>
<img id="addid" src="<?php echo _hui('logo_src_j')?>" style="display: none;width:100%;border: 2px solid #FF6651">
  <iframe id="video" src="/jiazai.html" style="width:100%;border:none"></iframe>
<div style="clear: both;"></div> 
<p style="text-align: center;color: #F00;font-size: 10px;background: #eee;padding: 6px 2px;border-radius: 2px;"><?php echo _hui('benzhants')?></p>
</div>
<?php if(_hui('zy_so') == 'http://www.zuidazy.com'){
echo '</div>';	
}?>
<div id="bofangurl">
<div>
<?php echo $bofangurl;?>
</div>
<?php if(_hui('zy_so') == 'http://m.968sg.cn'){
echo '</div>';	
}?>
<div style="clear: both;"></div>
<?php echo $jieshao?></div>
	<?php get_template_part( 'content', 'module-wechats' ); ?> 
<?php _the_ads('ad_video_footer', 'page-footer') ?>
<strong class="single-strong">剧情讨论</strong>
<div id="SOHUCS" sid="<?php echo $_GET[id]?>" ></div> 
<script type="text/javascript"> 
(function(){ 
var appid = '<?php echo _hui('cyappid')?>'; 
var conf = '<?php echo _hui('cyconf')?>'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
<?php get_template_part( 'content', 'module-share' ); ?> 
<?php _the_ads('ad_post_footer', 'post_footer');?>
	
</div>	
</div>	
</div>	
<?php get_sidebar(); ?>
</section>
</div>

<script>
var ifh=$('.sidebar');
if(ifh.height()<10){
$('.content').css("width","100%");
}else{
}</script>


<script type="text/javascript">
	var al = $('#bofangurl a');
	var ji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].id);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\')');
	};
</script>
<script type="text/javascript">
	function bofang(mp4url){
		if(mp4url.indexOf('iqiyi')>=0){
			document.getElementById('video').src='<?php echo _hui('aiqiyijiexi')?>'+mp4url;
		}else if(mp4url.indexOf('8000ke')>=0){
			document.getElementById('video').src= mp4url;
		}else if(mp4url.indexOf('qq')>=0){
			document.getElementById('video').src='<?php echo _hui('qqjiexi')?>'+mp4url;
		}else if(mp4url.indexOf('sohu')>=0){
			document.getElementById('video').src='<?php echo _hui('sohujiexi')?>'+mp4url;
		}else if(mp4url.indexOf('youku')>=0){
			document.getElementById('video').src='<?php echo _hui('youkujiexi')?>'+mp4url;
		}else if(mp4url.indexOf('tudou')>=0){
			document.getElementById('video').src='<?php echo _hui('tudoujiexi')?>'+mp4url;
		}else if(mp4url.indexOf('le')>=0){
			document.getElementById('video').src='<?php echo _hui('lejiexi')?>'+mp4url;
		}else{
			document.getElementById('video').src='http://api.suduniu.com/sudu/?url='+mp4url;
		};
		//点击之后
		document.getElementById('video').style.display='none';
		document.getElementById('addid').style.display = 'block';
		function test() {
			document.getElementById('video').style.display='block';
			document.getElementById('addid').style.display = 'none';
		}
		setTimeout(test, 5000);
	};
</script>
<?php get_footer(); ?>