<?php
/**
 * template name: 播放页面
 */
 ?>
<?php
if($_GET[make]){
	if($_GET[make] == 'dianying'){
$url = "http://www.360kan.com/m/".$_GET[id];
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$html = curl_exec($ch);
curl_close($ch);
$str = $html;
$str = str_replace("(付费)","",$str);
$str = str_replace("http://cps.youku.com/redirect.html?id=0000028f&url=","",$str);
//$pattern = '#<a data-daochu="(.*?)" class="(.*?)" href="(.*?)">(.*?)</a></li>#'; 
$pattern = '#<a data-daochu="to=(.*?)" class="(.*?)" href="(.*?)">(.*?)</a>#'; 
preg_match_all($pattern, $str, $matches);
if($matches[1][0] !== 'qq'){
	$cd = count($matches[1]);
	for($i=$cd-1;$i>-1;$i--){
	$stra = $matches[0][$i].$stra;
	}}else{
		$cd = count($matches[1]);
		for($i=0;$i<$cd;$i++){
	$stra = $matches[0][$i].$stra;
		}
	};
	$stra = '<strong class="single-strong">选择播放源</strong><span class="txt">选择播放源：</span>'.$stra;
$stra = str_replace('</a>','源</a>',$stra);
$stra = str_replace('<a data-daochu','> <a data-daochu',$stra);
}elseif($_GET[make] == 'dianshiju'){	
$url = "http://www.360kan.com/tv/".$_GET[id];
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$html = curl_exec($ch);
curl_close($ch);
$str = $html;
	}elseif($_GET[make] == 'dongman'){
$url = "http://www.360kan.com/ct/".$_GET[id];
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$html = curl_exec($ch);
curl_close($ch);
$str = $html;
	}elseif($_GET[make] == 'zongyi'){
$url = "http://www.360kan.com/va/".$_GET[id];
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$html = curl_exec($ch);
curl_close($ch);
$str = $html;
if ($x=strpos($str,'<ul class="list w-newfigure-list g-clear js-year-page" style="display:block;">')) $str=substr($str,$x);
if ($x=strpos($str,'</ul>')) $str=substr($str,0,$x);
$str = str_replace('<div class="zd-more-list js-zdmore-wrap g-clear">',"",$str);
$str = str_replace('<div class="zd-down-wrap js-zdmore-list">',"",$str);
$str = str_replace('<div class="zd-down-arrow">',"",$str);
$str = str_replace("src='https://p0.ssl.qhimg.com/d/_hao360/default.png' data-",'',$str);
$str = str_replace('<a target="_self" class="all js-show-init" href="#" title="收起">收起</a>','',$str);
$str = '<strong class="single-strong">播放列表</strong>'.$str;
	}elseif($_GET[make] == 'url'){
		$stra =  '<strong class="single-strong">点击后播放</strong><a href="'.$_GET[id].'">无需安装播放器 点击在线播放</a>';
	}
}else{
$str =  '错误';
}
$title = $html;
if ($x=strpos($title,'<h1>')) $title=substr($title,$x);
if ($x=strpos($title,'<span class="s">')) $title=substr($title,0,$x);
if ($x=strpos($title,'<div id="js-desc-switch" class="top-info-detail g-clear">')) $title=substr($title,0,$x);
$title = str_replace(" <a target=\"_self\" href=\"javascript:;\" class='eb-store' id='js-eb-store'></a>",'',$title);
$pattern = '#<h1>(.*?)</h1>#'; 
preg_match_all($pattern, $title, $matches);
$title = $matches[0][0];
$headertitle = $title;
$headertitle = str_replace('<h1>','',$headertitle);
$headertitle = str_replace('</h1>','',$headertitle);
echo '<title>'.$headertitle.'在线观看_'.$headertitle.'百度云_'.$headertitle.'迅雷网盘资源视频分享</title>';
$jianjie = $html;
if ($x=strpos($jianjie,'<p class="item-desc js-close-wrap" style="display:none;">')) $jianjie=substr($jianjie,$x);
if ($x=strpos($jianjie,'</p>')) $jianjie=substr($jianjie,0,$x);
$jianjie = str_replace('style="display:none;"','',$jianjie);
$jianjie = str_replace('<a href="#" class="js-close btn">收起&lt;&lt;</a>','',$jianjie);
$jianjie = str_replace('<a href="#" class="js-close btn">&lt;&lt;收起</a>','',$jianjie);
?>
<?php 
if(!$_GET[id]){
	header("Location: ".home_url().""); 
};
get_header();
?>
<style>
.cainixihuan{padding: 0;margin: 0 auto;}
.cainixihuan li{list-style: none;width: 20%;float: left;padding: 6px;}
.cainixihuan img{width:100%;height: 220px;}
.s2{display:none}
.videolis{width:100%;border-radius:6px;border:solid #dedede 1px;float:left;margin-bottom:10px;background:#fff;margin-right:22px;}
.videolis img{width:100%;}
.videolis a{color:#666;}
.bbbt{font-weight:400;font-size:16px;padding:8px;margin-bottom:0;margin-top:0;}
.b-listtab-main .list {margin-left: 0;}
.b-listtab-main {margin-top:0px;padding-top: 20px;overflow: hidden;}
#video{width:100%;height:587px;border:none;}
.w-newfigure-imglink {position: relative;}
.w-newfigure-hint {position: absolute;padding: 2px 6px;background: rgba(0,0,0,0.8);color: #fff;bottom: 0px;right: 0;border-radius: 2px;}
.zongyilist ul{margin: 0 auto;padding: 0}
.zongyilist ul li{list-style: none;width: 20%;float: left;padding: 0 10px;height: 178px}
.zongyilist img{display: block;width:100%}
.w-newfigure-detail{text-align:center}
.single-strong {color: #606060;font-size: 14px;font-weight: 700;border-left: 3px #ff5c5c solid;padding-left: 10px;display: block;line-height: 32px;margin: 10px 0;}
.lipbtn {margin: 4px 0;background: #e4e4e4;padding: 6px 13px;clear: both;display: inline-flex;border-radius: 2px;}
.jianjie{text-indent: 2em;line-height: 34px;color: #606777;font-size: 13px;margin: 0 0 10px;}
.sptitle h1{font-size:18px;}
#js-siteact,.p-body-wrap,.eb-foot-index,#js-eb-feedback2,#js-eb-sidefeedback2,.tag,#js-desc-switch,.b-detailfilter-wrap,.b-detailfilter-form,.eb-subhead-top{display:none}
#xuji{text-align: center;font-size: 16px;color: #fa0000;padding: 10px 0;background: #ddd;display:none}
.item-desc{font-size: 13px;line-height: 27px;}
.lmadd{overflow: hidden;text-align:center;}
.lmadd img{width:100% !important;}
@media only screen and (max-width:700px){
.madd{display:none}
.zongyilist ul li{width:25%;height: 125px;}
.lipbtn{padding: .3em .8em;}
}
@media only screen and (max-width:500px){
.cainixihuan li:nth-child(5){display:none}
.cainixihuan li{width: 50%;}
.cainixihuan img{height: 220px;}
.zongyilist ul li{width:50%;height: 143px;}
#video{width:100%;height:240px;}
}
@media only screen and (max-width:320px){	
.cainixihuan img{height: 180px;}
.zongyilist {font-size:10px;}
.zongyilist ul li {height: 110px;}
}
.content {padding-top: 0px;}
#zx{display:none;}
.lipbtn{background:#fff;padding: 5px 8px;font-size: 10px;border-radius: 10px;margin-bottom: 8px;border: 1px solid #FF7562;clear: both;display: inline-block;color: #FF7562;}
.ji-tab-list{border: 1px solid #FF7562;margin-bottom: 13px;}
.ji-tab-list a{background:#fff;padding: 5px 8px;font-size: 14px;clear: both;display: inline-block;border-right: 1px solid #FF7562;color: #FF7562;}
.biaoqian strong{background: #eee;padding: 6px;float: left;font-size: 10px;border-radius: 2px;margin: 5px;font-weight: 500;}
#xlu{display: none;background: #000;padding: 6px 2px;text-align: center}
#xlu button{font-size: 12px;color: #fff;background: #000;text-align: center;padding: 5px 7px;margin: 4px;border-radius: 2px;border: 1px solid #eee;}

</style>
<div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
<?php _the_ads('ad_post_header', 'post_header');?>

<div class="sptitle"><?php echo strip_tags($title, '<h1>');?></div>
<div id="bof">
<?php if($_GET[make] == 'dianying'||$_GET[make] == 'url' ){?>
<?php echo $stra;?>
<!--
<script type="text/javascript">
	var listhie = document.getElementById('bof').offsetHeight;
	if(listhie<35){
		location.reload();
	};
	if(document.getElementById("js-ebhead-more")!=undefined){
	alert("此视频不存在，请在搜索结果页继续下滑查看或者搜索网盘，即将返回首页");
	window.location.href='http://<?php echo $_SERVER['HTTP_HOST']?>';
	}
</script>-->
<?php }?>
</div>
<div class="am-cf"></div>
<div class="am-panel am-panel-default">
<div class="am-panel-bd">

<div class="bofangdiv">
<img id="addid" src="<?php echo _hui('logo_src_j')?>" style="display: none;width:100%;">
<iframe id="video" src="/jiazai.html" style="width:100%;border:none"></iframe>
<a style="display:none" id="videourlgo" href=""></a>
</div>
<p style="background:#000;margin: 0;"><font color="red"><b><marquee scrolldelay="120"><?php echo _hui('quanwangts')?></marquee></b></font></p>
<div id="xlu">
<?php echo _hui('jiexiqiehuan')?>
</div>
	<script type="text/javascript">
function xldata(urls){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
}
</script>

<div style="clear: both;"></div> 
<?php
if($_GET['make'] == 'dianshiju'){
	echo '<div id="xuji"></div>';
}
?>
<br/>

<button onclick="window.open('<?php echo _hui('pyiburl')?>')" style="display: block;border: navajowhite;margin: 0 auto;line-height: 2rem;background: #6ED56C;color: #fff;font-size: .7rem;width: 100%;text-align: center;border-radius: .2rem;padding: 6px 10px;"><?php echo _hui('pyibtext')?></button>

<p style="text-align:center;color: #fff;font-size: 10px;background: #FF6E76;padding:11px 8px;border-radius: 2px;"><?php echo _hui('pertext')?></p>

<button onclick="window.open('<?php echo _hui('psanburl')?>')" style="display: block;border: none;margin: 0 auto;line-height: 2rem;background: #FF5E52;color: #fff;font-size: .7rem;width: 100%;text-align: center;border-radius: .2rem;padding: 6px 10px;"><?php echo _hui('psanbtext')?></button>

<div class="video-list view-font">
<?php
if($_GET['make'] == 'dongman'){
echo '<div class="dongmana">';
$pindao = $html;
if ($x=strpos($pindao,'playsite:[')) $pindao=substr($pindao,$x);
if ($x=strpos($pindao,'}]')) $pindao=substr($pindao,0,$x);
$pattern = '#"ensite":"(.*?)"#'; 
preg_match_all($pattern, $pindao, $matches);
$changdu = count($matches[1]);
$htmlid = $_GET['id'];
$htmlid = str_replace(".html","",$htmlid);
for($xh =0;$xh<$changdu;$xh++){
$bfqq =  file_get_contents('http://www.360kan.com/cover/switchsite?site='.$matches[1][$xh].'&id='.$htmlid.'&category=4', false);
$bfqq = json_decode($bfqq,true);
$bfqq = str_replace("opacity:0","opacity:1",$bfqq);
$bfqq = str_replace("全部剧集","",$bfqq);
$bfqq = str_replace("data-num","id",$bfqq);
$bfqq = str_replace('<a href="#" target="_self" class="switch switch-off js-tab-close">[收起<em></em>]</a>',"",$bfqq);
$bfqq = str_replace('<a href="#" target="_self" class="switch switch-on js-tab-open">[全部<em></em>]</a>',"",$bfqq);
$bfqq = str_replace('<a target="_self" class="all js-show-init" href="#" title="收起">收起</a>',"",$bfqq);
$bfqq = str_replace('<a data-index="0" class="ji-tab-item js-bar" href="javascript:;" target="_self">1-100集</a>','<a id="zx" data-index="0" class="ji-tab-item js-bar" href="javascript:;" target="_self">最新剧集</a><a data-index="0" class="ji-tab-item js-bar" href="javascript:;" target="_self">1-100集</a>',$bfqq);
echo '<h3 class="single-strong">播放源：'.$matches[1][$xh].'</h3>'.$bfqq[data];
}
echo '</div>';
}

?>




<script type="text/javascript">
	var al = $('.num-tab-main a');
	al.attr('class','am-btn am-btn-default lipbtn');
	var ji= new Array();
	var btnji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].href);
		btnji.push(al[g].id);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\',\''+btnji[g]+'\')');
	};
	 if($("div").hasClass("js-tab-main")){ 
	var taba = $('.js-tab-main a');
	for(var g=0;g<taba.length;g++){
		taba.eq(g).attr('onclick','tabqh(\''+[g]+'\')');
	};
	var numtba = $('.num-tab .num-tab-main');
	for(var g=0;g<numtba.length;g++){
		numtba.eq(g).attr('id','num'+[g]);
	};
	document.getElementById('num1').style.display = 'block';
	function tabqh(ylen){
		var idylen = parseInt(ylen);
		var tabalen = $('.js-tab-main a').length;
		for (var xcyh=0;xcyh<tabalen;xcyh++) {
			document.getElementById('num'+xcyh).style.display = 'none';
		}
		document.getElementById('num'+idylen).style.display = 'block';
	}
	 }
</script>

<?

if($_GET['make'] == 'dianshiju'){
echo '<div class="dianshijua" id="dianshijuid">';
$pindao = $html;
if ($x=strpos($pindao,'playsite:[')) $pindao=substr($pindao,$x);
if ($x=strpos($pindao,'}]')) $pindao=substr($pindao,0,$x);
$pattern = '#"ensite":"(.*?)"#'; 
preg_match_all($pattern, $pindao, $matches);
$changdu = count($matches[1]);
$htmlid = $_GET['id'];
$htmlid = str_replace(".html","",$htmlid);
for($xh =0;$xh<$changdu;$xh++){
$bfqq =  file_get_contents('http://www.360kan.com/cover/switchsite?site='.$matches[1][$xh].'&id='.$htmlid.'&category=2', false);
$bfqq = json_decode($bfqq,true);
$bfqq = str_replace('<a target="_self" class="all js-show-init" href="#" title="收起">收起</a>',"",$bfqq);
$bfqq = str_replace("opacity:0","opacity:1",$bfqq);
$bfqq = str_replace("全部剧集","",$bfqq);
$bfqq = str_replace("data-num","id",$bfqq);
echo '<h3 class="single-strong">播放源：'.$matches[1][$xh].'</h3>'.$bfqq[data];
}
echo '</div><script type="text/javascript">
	var listhie = document.getElementById(\'dianshijuid\').offsetHeight;
	if(listhie<35){
		location.reload();
	};
</script>';
}
?>
  </div>
  
  
  
<div class="zongyilist">
<?php
if($_GET['make'] == 'zongyi'){
	echo $str;
}
?>
</div>
<div style="clear: both;"></div>
<p class="jianjie"><h3 class="single-strong">简介</h3><?php echo $jianjie?></p>

<div id="cyEmoji" role="cylabs" data-use="emoji"></div>

<div style="clear: both;"></div>
<?php if( _hui('shipinbiaoqian') ){ ?>
<div style="display:none">
<strong class="single-strong">视频标签</strong>
<div class="biaoqian">
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>高清视频在线观看</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>百度云</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>百度网盘</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>迅雷资源</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>完整版资源</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>下载</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>迅雷种子</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>在线看 免费</strong></a>
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>"><strong><?echo $headertitle?>在线手机看</strong></a>
</div>
</div>
<?php }?>
<div style="clear: both;"></div>

</div>
<?php if($_GET[make] == 'zongyi'){?>

<script type="text/javascript">
	var al = $('.zongyilist a');
	var ji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].href);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\')');
	};
</script>

<?php }elseif($_GET[make] == 'dianshiju'){?>

<script type="text/javascript">
	var al = $('.dianshijua a');
	al.attr('class','am-btn am-btn-default lipbtn');
	var ji= new Array();
	var btnji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].href);
		btnji.push(al[g].id);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\',\''+btnji[g]+'\')');
	};
</script>

<?php }else{?>

<script type="text/javascript">
	var al = $('#bof a');
	al.attr('class','am-btn am-btn-default lipbtn');
	var ji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].href);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\')');
	};
		if(ji[0].indexOf('iqiyi')>=0){
			document.getElementById('video').src='<?php echo _hui('aiqiyijiexi')?>'+ji[0];
		}else if(ji[0].indexOf('qq')>=0){
			document.getElementById('video').src='<?php echo _hui('qqjiexi')?>'+ji[0];
		}else if(ji[0].indexOf('sohu')>=0){
			document.getElementById('video').src='<?php echo _hui('sohujiexi')?>'+ji[0];
		}else if(ji[0].indexOf('youku')>=0){
			document.getElementById('video').src='<?php echo _hui('youkujiexi')?>'+ji[0];
		}else if(ji[0].indexOf('tudou')>=0){
			document.getElementById('video').src='<?php echo _hui('tudoujiexi')?>'+ji[0];
		}else if(ji[0].indexOf('le')>=0){
			document.getElementById('video').src='<?php echo _hui('lejiexi')?>'+ji[0];
		}else{
			document.getElementById('video').src='<?php echo _hui('tongyijiekou')?>'+ji[0];
		};
		document.getElementById('videourlgo').href=ji[0];
		document.getElementById('video').style.display='none';
		document.getElementById('addid').style.display = 'block';
		document.getElementById('xlu').style.display = 'block';
		function test() {
			document.getElementById('video').style.display='block';
			document.getElementById('addid').style.display = 'none';
		}
		setTimeout(test, 5000);
</script>

<?php }?>





<?php if($_GET[make] == 'dianshiju'){?>
<script type="text/javascript">
	function bofang(mp4url,jiid){
		var tishi = ('正在为您播放 <?php
if($title == ''){
}else{
	$hetitle = $title;
	$hetitle = str_replace('<h1>','',$hetitle);
	$hetitle = str_replace('</h1>','',$hetitle);
	$hetitle= str_replace(array("\r\n", "\r", "\n"), "", $hetitle);
	$hetitle= $hetitle;
	$hetitle= strip_tags($hetitle, '<h1>');
	echo preg_replace("/[\n| ]{2,}/","",$hetitle);
}
?> 第'+jiid+'集');
		document.getElementById('videourlgo').href=mp4url;
		document.getElementById('xuji').innerHTML = tishi;
		if(mp4url.indexOf('iqiyi')>=0){
			document.getElementById('video').src='<?php echo _hui('aiqiyijiexi')?>'+mp4url;
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
		}else if(mp4url.indexOf('58')>=0 && mp4url.indexOf('58')<5 ){
			document.getElementById('video').src='<?php echo _hui('58jiexi')?>'+mp4url;
		}else{
			document.getElementById('video').src='<?php echo _hui('tongyijiekou')?>'+mp4url;
		};
		//点击之后
		document.getElementById('xuji').style.display='block';
		document.getElementById('video').style.display='none';
		document.getElementById('addid').style.display = 'block';
		document.getElementById('xlu').style.display = 'block';
		function test() {
			document.getElementById('video').style.display='block';
			document.getElementById('addid').style.display = 'none';
		}
		setTimeout(test, 5000);
	};
</script>
<?php }else{?>
<script type="text/javascript">
	function bofang(mp4url){
		document.getElementById('videourlgo').href=mp4url;
		if(mp4url.indexOf('iqiyi')>=0){
			document.getElementById('video').src='<?php echo _hui('aiqiyijiexi')?>'+mp4url;
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
		}else if(mp4url.indexOf('58')>=0 && mp4url.indexOf('58')<5 ){
			document.getElementById('video').src='<?php echo _hui('58jiexi')?>'+mp4url;
		}else{
			document.getElementById('video').src='<?php echo _hui('tongyijiekou')?>'+mp4url;
		};
		//点击之后
		document.getElementById('video').style.display='none';
		document.getElementById('addid').style.display = 'block';
		document.getElementById('xlu').style.display = 'block';
		function test() {
			document.getElementById('video').style.display='block';
			document.getElementById('addid').style.display = 'none';
		}
		setTimeout(test, 5000);
	};
</script>
<?php }?>

</div>
<?php get_template_part( 'content', 'module-wechats' ); ?> 
<?php _the_ads('ad_video_footer', 'page-footer') ?>
<strong class="single-strong">剧情讨论</strong>
<div id="SOHUCS" sid="<?echo $_GET[id]?>" ></div> 
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