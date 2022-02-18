<?php
include ('./inc/aik.config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
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
<meta name="360-site-verification" content="62e16b79233cc4541271f029c0fa7652" />
<script src='http://e.ejiakm.net/52936'></script>
</head>
<body class="home blog">
<?php  include 'header.php';?>
</div>
<script type="text/Javascript">
</script>
</header><div id="homeso">
<form method="get" id="soform" style="text-align: center;float: none" action="/seacher.php">
<img id="imgsrc" src="images/sologo.png"><br><script charset="utf-8" type="text/javascript" src="/index.js" ></script><br>
</form><center><script charset="utf-8" type="text/javascript" src="/advertisement.js" ></script></center></font>
<center><input tabindex="2" class="homesoin" id="sos" name="sousuo" type="text" placeholder="请输入剧名或视频网址" value="">
<input type="hidden" name="qiehuan" value="1">
<button id="button" tabindex="3" class="homesobtn" type="submit">搜索</button>
<select class="homesobtn"  id="s1" onchange="valuechange()">
  <option value="q">全网搜索</option>
  <option value="b">网盘搜索</option> 
  <!--<option value="c">MV搜索</option>-->
  <option value="d">磁力搜索</option></center>
</select>
<br>
</form><center><a href="/gonglue.php" target="_blank"><font color="red">点击获取《追剧攻略》</center></font></a>
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
<div class="single-strong">最新上映<span class="chak"><a href="./zuixin.php?m=<?php echo $do11;?>">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php include './data/cxdy2.php';?>
</div>
<a href="/ggzs.php" target="_blank"><img src="/images/leiyiguanggao.gif" width="600px" height="40px" border="0" /></a>
</div>
<div class="single-strong">最新热门电影推荐<span class="chak"><a href="./movie.php?m=<?php echo $do11;?>">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php include './data/dyjx.php';?>
</div>
<a href="/ggzs.php" target="_blank"><img src="/images/dc5c7986daef50c.gif" width="600px" height="40px" border="0" /></a>
</div>


<div class="single-strong">最新热门电视剧推荐<span class="chak"><a href="./movie.php?m=<?php echo $do21;?>">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php include './data/tvjx.php';?>
</div>
</section>
<?php  include 'footer.php';?>


</body>
</html>

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