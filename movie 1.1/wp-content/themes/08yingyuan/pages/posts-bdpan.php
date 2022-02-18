<?php 
/**
 * template name: 百度网盘搜索
 */

get_header();
?>
<style type="text/css">
	.icon-folder {
		background-image: url(http://pan.here325.com/img/folders.png);
		width: 56px;
	   	height: 56px;
	   	background-repeat: no-repeat;
	   	vertical-align: middle;
	   	position: relative;
	   	top: 2px;
	   	display: block;
	   	background-position: -340px 0;
	   	background-size: 454px 56px;
	}
	.data-item>a {
		float: left;
		margin-left: 10px;
	}
	.item-title {
		display: block; 
		color: #333; 
		font-size: 15px; 
		text-decoration: none; 
		line-height: 24px;
		margin-left: 5px;
	}
	.item-title:hover {
		cursor: pointer;
		color: #20dc14;
	}
	.video {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -198px 0;
	}
	.torrent {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -58px 0;
	}
	.rar {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -343px 0;
	}
	.music {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -171px 0;
	}
	.doc {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -46px 0;
	}
	.exe {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -148px 0;
	}
	.txt {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -400px 0;
	}
	.pdf {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: -298px 0;
	}
	.apk {
		background-image: url(http://pan.here325.com/img/folders.png);
		background-position: 5px 0;
	}
	
	#kwform input:focus {
		border: 1px solid #ccc;
	}
</style>
  <style>
.search-item{margin:0 0 25px}
.search-item .item-title{font-size:medium;line-height:1.2}
.search-item .item-list{color:#545454;line-height:1.4;font-size:13px;word-wrap:break-word}
.search-item .item-bar{color:#00802a;font-size:13px;line-height:1pc}
.search-item .item-bar .download,.search-item .item-bar span{margin-right:10px}
.highlight{color:red;margin-left:0!important}
.bottom-pager{margin:30px 0}
.bottom-pager a,.bottom-pager span{font:13px/1.22 arial,helvetica,clean,sans-serif;border:1px solid #e1e2e3;text-decoration:none;text-align:center;vertical-align:middle;margin:2px;padding:8px 9pt;display:inline-block;color:#1e0fbe}
.bottom-pager span{background-color:#eee;color:#888;font-weight:700}
.bottom-pager a:hover{background:#f2f8ff;border:1px solid #38f}
.bottom-pager a:visited{color:#1e0fbe}
.new{display:inline-block;padding:2px;text-align:center;vertical-align:text-bottom;font-size:9pt;line-height:100%;font-style:normal;color:#fff;overflow:hidden;background-color:#f13f40;position:relative;right:-4px;top:-4px}
.baidu-box,.bdSug_app,.bdsug_copy{display:none}
.bdSug_wpr td{padding-left:5px!important}
.push{height:40px;clear:both}
.res-title{font-size:20px}
.fileDetail{position:relative}
.fileDetail p{color:#444!important;font-size:1pc}
.thumb{position:absolute;top:0;left:25pc;max-width:230px}.pill�padding:2px 4px;color:#d14;background-color:#f7f7f9;border:1px solid #e1e1e8}
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
.sidebar{
	display:none
}
#resultList{
	width:100% !important
}
}

#homeso{margin:120px 0}
.pcadd{display:block}
.madd{display:none}
.homesoin{color:#999;border:1px solid #eee;width:500px;padding:4px 8px;border-right:none;border-radius:2px 0 0 2px}
.homesobtn,.homesoin{height:50px;font-size:14px;outline:0}
.homesobtn{color:#fff;background-color:#ff6651;width:75pt;border:none;padding:4px 10px;border-radius:0 2px 2px 0;opacity:.9}



#resultList{
	width: 500px;
    overflow: hidden;
	float: left;
}

.sidebar {
float: right;}

@media only screen and (max-width:414px){
.pcadd{display:none}
.madd{display:block}
#homeso{margin:70px 0}
.homesoin{width:260px}
.jie{padding:0 18px;font-size:10px}
}
@media only screen and (max-width:376px){
	#homeso{margin:60px 0}
.homesoin{width:180px;height:44px}
.homesobtn{height:44px;width:5pc}
.footer{font-size:10px}
}
@media only screen and (max-width:360px){#homeso{margin:50px 0}
.homesoin{width:180px;height:40px}
.homesobtn{height:40px;width:5pc}
.footer{font-size:10px}
}


.page-ul{text-align:center;margin:24px 0;clear:both}.page-ul li{margin:0 4px;width:36px;height:36px;line-height:36px;display:inline-block;cursor:pointer}.page-ul li{color:#FF6651;background:#fff;transition:background ease .4s;-webkit-transition:background ease .4s;-moz-transition:background ease .4s;-o-transition:background ease .4s;-ms-transition:background ease .4s}.page-ul a:hover{background-color:#FF6651;color:#fff;border-radius:50%}.page-ul .current{background-color:#FF6651;color:#fff}#text-indent:hover{-webkit-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{-moz-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{animation:text-indent 1s ease 0s alternate none infinite}@-webkit-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@-moz-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}.fenlei{margin-top:10px}


.wprm{
	padding:0;
	margin:0 auto;
	border-top: 1px solid #eee;
}
.wprm li{
    list-style: none;
    text-align: center;
    float: left;
    border: 1px solid #D8D8D8;
    margin: 6px;
    padding: 2px 6px;
    border-radius: 2px;
    font-size: 13px;
}
</style>
<section class="container">
<div><div>
<?php if($_GET['sousuo']){?>

<?php
echo '<strong class="single-strong">百度网盘搜索</strong>';
$url = "http://pan.here325.com/s?q=".$_GET['sousuo']."&p=".$_GET['qiehuan']."";
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$response = curl_exec($ch);
curl_close($ch);

if ($x=strpos($response,'<div id="resultList">')) $response=substr($response,$x);
if ($x=strpos($response,'<div class="result-right">')) $response=substr($response,0,$x);

$response = str_replace('http://pan.here325.com/ln?',"/bdwpgo?",$response);
$response = str_replace('上一页',"<",$response);
$response = str_replace('下一页',">",$response);
$response = str_replace('<div class="data-item" style="height: 114px;">',"<div>",$response);
$response = str_replace('<div id="sougouAd1" style="padding: 15px;">',"<div>",$response);
$response = str_replace('<script type="text/javascript" src="http://images.sohu.com/cs/jsfile/js/c.js"></script>',"",$response);
$response = str_replace('<script type="text/javascript">
									var sogou_ad_id=775036;
									var sogou_ad_height=90;
									var sogou_ad_width=640;
								</script>
',"",$response);
echo $response;
}else{?>
<div id="homeso">
<form method="get" id="homeso" style="text-align: center;float: none" action="" >
<img src="<?php echo _hui('logo_src_wp')?>"><br/><br/>
<input tabindex="2" class="homesoin" id="sos" name="sousuo" type="text" placeholder="输入你要搜索的资源名称" value="">
<input type="hidden" name="qiehuan" value="1" />
<button id="button" tabindex="3" class="homesobtn" type="submit"><i class="fa">网盘搜索</i></button>
</form>
<script>
	var a = document.getElementById('sos');
	var btn = document.getElementById('button');
btn.onclick = function(){
if(!a.value){
	alert('不能为空');
	return false;    
	 };
}
</script>
</div>



<?php if(_hui('baiduwprm')){
echo '<div class="single-strong">百度网盘热门电影搜索</div>';
echo '<ul class="wprm">';
$queryURL = 'http://top.baidu.com/buzz?b=26&c=1&fr=topcategory_c1';
$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";   
$header = array('Accept-Language: zh-cn','Connection: Keep-Alive','Cache-Control: no-cache');    
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_REFERER, $queryURL);   
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);   
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_URL,$queryURL);    
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
$result = curl_exec($ch);  
$result = mb_convert_encoding($result, 'utf-8', 'gb2312');
$result = str_replace("/ct/","/play?make=dongman&id=",$result);
$pattern = '#<a class="list-title" target="_blank" href="(.*?)" href_top="(.*?)">(.*?)</a>#'; 
preg_match_all($pattern, $result, $matches);
for($xh =0;$xh<50;$xh++){
echo '<li><a target="_blank" href="/baiduwp/?sousuo='.$matches[3][$xh].'">'.$matches[3][$xh].'</a></li>';
};
echo '</ul>';
}
?>

<?php }?>





<?php if($_GET['sousuo']){?>

<script>
	function switch2Page(page) {
		if (page < 1) return;
		window.location.href='?sousuo=<?echo $_GET['sousuo']?>&qiehuan='+page;
	}

	</script>
	<?php get_sidebar(); ?>
<?php }else{?>


<?php }?>

</section>
<?php get_footer(); ?>