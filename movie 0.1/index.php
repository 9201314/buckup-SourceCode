<?php
include ('./inc/aik.config.php');
$link=$aik['pcdomain'];
?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function is_mobile() {
var regex_match = /(nokia|iphone|android|motorola|^mot-|softbank|foma|docomo|kddi|up.browser|up.link|htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte-|longcos|pantech|gionee|^sie-|portalmmm|jigs browser|hiptop|^benq|haier|^lct|operas*mobi|opera*mini|320x320|240x320|176x220)/i;
var u = navigator.userAgent;
if (null == u) {
return true;
}
var result = regex_match.exec(u);
if (null == result) {
return false
} else {
return true
}
}
if (is_mobile()) {
document.location.href = '/shouji.php';
}
</script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title><?php echo $aik['title'];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/index.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="<?php echo $aik['keywords'];?>">
<meta name="description" content="<?php echo $aik['description'];?>">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="JS代码,焦点图,JS广告代码,JS特效代码" />
<meta name="description" content="此代码内容为自适应横向宽屏幻灯片代码，属于站长常用代码，更多焦点图代码请访问懒人图库JS代码频道。" />
<link rel="stylesheet" type="text/css" href="css/jquery.jslides.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jquery.jslides.js"></script>
<title>雅心有限公司 版权所有</title>
</head>
<body>



<body class="home blog">
<?php  include 'header.php';?>

<!-- 代码 开始 -->
<div id="full-screen-slider">
	<ul id="slides">
	    <li style="background:url('dh/1.jpg') no-repeat center top"><a href="/play.php?make=tv/QbZpc07kTzbtMn.html" target="_blank"></a></li>
		<li style="background:url('dh/2.jpg') no-repeat center top"><a href="/play.php?make=va/ZsUpaXNx8Zg5Ez.html" target="_blank"></a></li>
		<li style="background:url('dh/3.jpg') no-repeat center top"><a href="/play.php?make=va/aMIncXNx7ZkCFT.html" target="_blank"></a></li>
		<li style="background:url('dh/4.jpg') no-repeat center top"><a href="/play.php?make=va/YcclbXNx7pM3DD.html" target="_blank"></a></li>
		<li style="background:url('dh/5.jpg') no-repeat center top"><a href="/play.php?make=tv/Q4JuaH7kTzbpMn.html" target="_blank"></a></li>
		<li style="background:url('dh/6.jpg') no-repeat center top"><a href="/play.php?make=tv/R4NtbH7kTG0pNH.html" target="_blank"></a></li>
		<li style="background:url('dh/7.jpg') no-repeat center top"><a href="/play.php?make=va/ZcYlanNx8ZY8FT.html" target="_blank"></a></li>
		<li style="background:url('dh/8.jpg') no-repeat center top"><a href="/play.php?make=tv/PbNvb07kTzblOH.html" target="_blank"></a></li>
		<li style="background:url('dh/9.jpg') no-repeat center top"><a href="/play.php?make=tv/Q4hpcH7kTzbsOH.html" target="_blank"></a></li>
		<li style="background:url('dh/10.jpg') no-repeat center top"><a href="/play.php?make=m/fqvmYRH4R0n0Sx.html" target="_blank"></a></li>
	</ul>
</div>
<!-- 代码 结束 -->
<script type="text/Javascript">
//2017 leiyi666.com
document.oncontextmenu=function(e){return   false;};
document.onselectstart=function(e){return   false;};
</script>
</header><div id="homeso">
<form method="get" id="soform" style="text-align: center;float: none" action="/seacher.php">
<a href="/gonglue.php" target="_blank"><font color="red">点击获取《追剧攻略》</a>
<input tabindex="2" class="homesoin" id="sos" name="sousuo" type="text" placeholder="请输入剧名或视频网址" value="">
<input type="hidden" name="qiehuan" value="1">
<select class="homesobtn"  id="s1" onchange="valuechange()">
  <option value="q">全网搜索</option>
  <option value="b">网盘搜索</option> 
  <!--<option value="c">MV搜索</option>-->
  <option value="d">磁力搜索</option>
</select>
<button id="button" tabindex="3" class="homesobtn" type="submit">搜索</button><br><br>
</form><center><script charset="utf-8" type="text/javascript" src="/advertisement.js" ></script></center></font>
<script>
 function  valuechange(){
 var qiehuan = document.getElementById('s1').value;
  if(qiehuan=='q'){
  document.getElementById('soform').action = '<?php echo $link;?>seacher.php';
  document.getElementById('imgsrc').src = 'images/sologo.png';
  }else if(qiehuan=='b'){
  document.getElementById('soform').action = '<?php echo $link;?>bdpan.php?sousuo=';
  document.getElementById('imgsrc').src = 'images/wp.png';
  }else if(qiehuan=='c'){
  document.getElementById('soform').action = '/mv';
  document.getElementById('imgsrc').src = '';
  }else{
  document.getElementById('soform').action = '<?php echo $link;?>cili.php?sousuo=';
  document.getElementById('imgsrc').src = 'images/cili.png';
  }
  
  }
	var a = document.getElementById('sos');
	var btn = document.getElementById('button');
btn.onclick = function(){
 var reg = /^((https|http|ftp|rtsp|mms)?:\/\/)[^\s]+/;
 if(!reg.test(a.value)){
	 if(!a.value){
		 alert('不能为空');
	 }else{
	 }
 }
 else{
var url = '<?php echo $link;?>splay.php?play='+a.value;
window.location.href=url;
 return false;
 }
}
</script>
</div>
<section class="container">

<div class="single-strong">最新上映<span class="chak"><a href="./movie.php?m=<?php echo $do11;?>">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php include './data/cxdy2.php';?>
</ul>
</div>
</div>


<div class="single-strong">最新热门电影推荐<span class="chak"><a href="./movie.php?m=<?php echo $do11;?>">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php include './data/dyjx.php';?>
</ul>
</div>
</div>


<div class="single-strong">最新热门电视剧推荐<span class="chak"><a href="./movie.php?m=<?php echo $do21;?>">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php include './data/tvjx.php';?>
</ul>
</div>
</div>


</section>
<?php  include 'footer.php';?>
</body>
</html>

<?php  include 'rightad.html';?>

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>