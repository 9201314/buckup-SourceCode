<?php 
/**
 * template name: 不开心播放页面
 */
if(!$_GET[go]){
	header("Location: ".home_url().""); 
};
get_header();
?>
<style>
  .single-strong {color: #606060;font-size: 14px;font-weight: 700;border-left: 3px #ff5c5c solid;padding-left: 10px;display: block;line-height: 32px;margin: 10px 0;}
.html5play iframe{
	    height: 600px;
}
@media only screen and (max-width:420px){
.html5play iframe{
	    height: 260px;
}
}
</style>
<?php
$url = "http://www.yiledao.com/".$_GET[go];
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$html = curl_exec($ch);
curl_close($ch);
$response = $html;
if ($x=strpos($response,'<div style=\'float:left;display:none;\' id="tab2_content">')) $response=substr($response,$x);
if ($x=strpos($response,'</div>')) $response=substr($response,0,$x);
$response = str_replace('<div style=\'float:left;display:none;\' id="tab2_content">',"",$response);
$response = str_replace('&embedid=MTEzLjE0My4xNTkuOTYCMTUwNjk2NTE3AmkueW91a3UuY29tAi91L1VOakl6T1RjMk1UVXk%3D&isAutoPlay=true&isDebug=false&UserID=&playMovie=true&MMControl=false&MMout=false" pluginspage="http://www.macromedia.com/go/getflashplayer"  width="980" height="550"><img src="http://www.yiledao.com/images/bofangqi_kongbai.jpg" style="float:left;position:relative;margin: 440px 0 0 -180px;"><img src="http://www.yiledao.com/images/bofangqi_logo.jpg" style="float:left;position:relative;margin:440px 0 0 -55px;width:45px;"></embed>',"",$response);
$response = str_replace('<embed type="application/x-shockwave-flash" src="http://static.youku.com/v1.0.0423/v/swf/loader.swf" id="movie_player" name="movie_player" bgcolor="#FFFFFF" quality="high" allowfullscreen="true" wmode="Opaque" allowScriptAccess="always"  allownetworking="internal" flashvars="isShowRelatedVideo=false&VideoIDS=',"",$response);
$response = str_replace('==&embedid=MTEzLjE0My4xNTkuOTYCMTUwNjk2NTE3AmkueW91a3UuY29tAi91L1VOakl6T1RjMk1UVXk%3D&isAutoPlay=true&isDebug=false&UserID=&playMovie=true&MMControl=false&MMout=false" pluginspage="http://www.macromedia.com/go/getflashplayer"  width="980" height="550"><img src="http://www.yiledao.com/images/bofangqi_kongbai.jpg" style="float:left;position:relative;margin: 440px 0 0 -180px;"><img src="http://www.yiledao.com/images/bofangqi_logo.jpg" style="float:left;position:relative;margin:440px 0 0 -55px;width:45px;"></embed>',"",$response);
$response = 'http://v.youku.com/v_show/id_'.iconv("GBK","UTF-8//TRANSLIT",$response).'==.html';
$response = str_replace('
				',"",$response);
$response = str_replace('	',"",$response);

$title = $html;
if ($x=strpos($title,'<div id="area-title-view">')) $title=substr($title,$x);
if ($x=strpos($title,'</h1>')) $title=substr($title,0,$x);
$title = str_replace('<h1>',"",$title);
$title = strip_tags($title, '<h1>');
$title= str_replace(array("\r\n", "\r", "\n","	"), "", $title);
?>
<div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
<?php _the_ads('ad_post_header', 'post_header');?>
<strong class="single-strong"><?php echo iconv("GBK","UTF-8//TRANSLIT",$title);?></strong>
<div class="html5play">
<iframe src="<?php echo _hui('youkujiexi')?><?php echo $response?>" marginwidth="0" marginheight="0" border="0" scrolling="no" frameborder="0" topmargin="0" width="100%" height="100%"></iframe>
</div>
<hr/>
	<?php get_template_part( 'content', 'module-wechats' ); ?> 
<strong class="single-strong">剧情讨论</strong>

<!--PC版-->
<!--PC和WAP自适应版-->
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
	<?php get_sidebar(); ?>
	<script>
var ifh=$('.sidebar');
if(ifh.height()<10){
$('.content').css("width","100%");
}else{
}</script>
</section>
</div>
<?php get_footer(); ?>