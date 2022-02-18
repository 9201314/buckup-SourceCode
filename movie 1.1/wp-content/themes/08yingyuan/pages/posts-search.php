<?php
/**
 * template name: 搜索结果页面
 */

if(!$_GET['sousuo']){
	header("Location: ".home_url().""); 
}
?>
<?php get_header(); ?>

<base target='_blank'> 
<style>
.actor{display: none;}
.b-mainpic-so{float:left}.b-mainpic-so img{width:245px;height:312px}.cont{display:block;margin:10px 0;padding-left:21%}.cont ul li{padding:10px!important}.js-b-fulldesc{line-height:30px}.b-tabview,.button-container,.index-dianshi-so{clear:both}.active{font-size:1pc;border-bottom:1px solid #eee;margin-bottom:6px}dd,dl,ul{margin:0!important;padding:0!important}li{list-style:none!important}.rating-site{display:none}.title{margin:5px 0;font-size:20px}.btn-icon-pc{margin-top:4px}.btn-phone{display:none}.b-series-number-container a,.btn-gray,.btn-play-icon,.play-button{display:inline-block;margin-bottom:0;padding:.5em 1em;vertical-align:middle;font-size:16px;font-weight:400;line-height:1.2;text-align:center;white-space:nowrap;background-image:none;border:1px solid transparent;border-radius:0;cursor:pointer;outline:0;-webkit-appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:background-color .3s ease-out,border-color .3s ease-out;transition:background-color .3s ease-out,border-color .3s ease-out;margin-right:10px;margin-bottom:4px;padding:6px 19px;color:#fff;background-color:#FF9788;border-color:#FF9788;border-radius:2px}.tabs-items{display: none;clear:both}.dropmenu a{margin:0 6px}.am-alert-secondary,.headh1{text-align:center}.headh1{font-size:200%;color:#4a4a4a;margin-top:30px;font-weight:400}.am-panel-title{font-size:14px;font-weight:400}.am-topbar{position:relative;min-height:50px;margin-bottom:1.6rem;border-width:0 0 1px;border-style:solid}.am-navbar-default .am-navbar-nav,.am-topbar{background:#222;border-color:#222;color:#ccc}.am-topbar a{color:#ccc}.am-topbar a,.am-topbar-nav>li.am-active>a,.am-topbar-nav>li.am-active>a:focus,.am-topbar-nav>li.am-active>a:hover{color:#fff}.am-nav>li>a:focus,.am-nav>li>a:hover{text-decoration:none;background-color:#222;color:#ccc}.am-topbar-nav>li.am-active>a,.am-topbar-nav>li.am-active>a:focus,.am-topbar-nav>li.am-active>a:hover{color:#fff}.am-topbar-nav>li.am-active>a:after{opacity:1;border-bottom-color:#666}.am-topbar .am-text-ir{display:block;margin-right:10px;height:50px;width:138px;background:url(http://51bbw.cn/tv/img/logo.png) no-repeat left center;background-size:138px 38px}.am-topbar-inverse .am-topbar-nav>li.am-active>a:after,.am-topbar-inverse .am-topbar-nav>li.am-active>a:focus:after,.am-topbar-inverse .am-topbar-nav>li.am-active>a:hover:after,.am-topbar-inverse .am-topbar-nav>li>a:focus:after,.am-topbar-inverse .am-topbar-nav>li>a:hover:after{border-bottom-color:#666}.am-topbar-right{margin-bottom:-4px}body{font-size:14px!important}body a{color:#555}.sk_search .sotxt{height:40px}.number-container{margin-left:0}@media only screen and (max-width:700px){.btn-play-icon{font-size:14px}.head h1{font-size:15px}.title{font-size:14px;margin-left:6px}.cont{padding-left:50%}.b-mainpic-so img{width: 145px;height: 214px;}.js-b-description{display:none}.btn-icon-pc,.number-container a{margin-right:8px;margin-bottom:4px;padding:4px 20px;color:#fff;background-color:#FF9788;border-color:#FF9788}.le-ul li{padding:4px 0}.w-star-content{float:left;margin-top:10px}.w-star-so dd,.w-star-so dt{display:block;overflow:hidden;clear:both}.tjbtn a{padding:6px;font-size:9pt}}.tengxun a{margin:5px}.item-longvideo{margin-bottom:10px}.noso{text-align:center;font-size:20px;color:#6b6b6b}#g-hd,#js-b-filter,#js-ew-page a,.a-engineso-ad,.a-engineso-mfigure-list-all,.b-footso,.b-sfigure-list,.b-tab-so,.dropmenu a,.gmodule,.star-bar-so{display:none}.am-btn-default{margin:4px}.am-footer-default .am-footer-miscs{color:#999;background:#fff;font-size:13px}.gico-more{display:none}.single-strong {color: #606060;font-size: 14px;font-weight: 700;border-left: 3px #ff5c5c solid;padding-left: 10px;display: block;line-height: 32px;margin: 10px 0;}
.excerpts {min-height: 0px;}
.view-item-zongyi{display:none}
.index-zongyi-so{margin-bottom: 90px;display: block;clear: both;}
.index-dianying{border-bottom: 1px solid #e4e4e4;overflow: hidden;clear: both;padding-bottom: 10px;}
.button-container{    display: initial;}
.js-series-content{    padding-top: 4px;}

.video-list h3{display: none}
.zhan ul{    padding:0px!important;}
.zhan li{width: 20%;float: left;padding-right: 10px;padding-bottom: 10px;}
.zhan b{
	position: absolute;
    background: #FF7562;
    padding: 6px;
    font-size: 10px;
    color: #fff;
    border-bottom-right-radius: 4px;
}
.zhan span{    
display: block;
    text-align: center;
	padding-top: 8px;
    color: #4E4E4E;
    font-size: 16px;}
.zhan img{width: 100%;height: 360px;}

@media only screen and (max-width:720px){
	.zhan li{width: 50%;float: left;padding-right: 10px;padding-bottom: 10px;}
	.zhan img{width: 100%;height: 260px;}
	.zhan ul{    padding: 0 15px!important;}
}

@media only screen and (max-width:420px){
	.b-series-number-container a{
    font-size: 10px;
    margin-right: 8px;
    margin-bottom: 4px;
    padding: 6px 12px;
}
	.zhan img{width: 100%;height: 220px;}
}
.title a,.title span{color:#FF9788}
.single-strong{clear: both;}
@media only screen and (max-width:1200px){
	.cont {
    display: block;
    margin: 10px 0;
    padding-left: 25%;
}
}
@media only screen and (max-width:1010px){
	.cont {
    display: block;
    margin: 10px 0;
    padding-left: 28%;
}
}

@media only screen and (max-width:900px){
	.cont {
    display: block;
    margin: 10px 0;
    padding-left: 30%;
}
.zhan img {
    height: 276px;
}
}

@media only screen and (max-width:800px){
.b-mainpic-so img {
    width: 218px;
}
.zhan img {
    height: 256px;
}
}

@media only screen and (max-width:720px){
.b-mainpic-so img {
    width: 180px;
    height: 219px;
}
.cont {
    padding-left: 28%;
}
.js-b-description{
	display: none;
}
.zhan li {
    width: 32%;
}
}

@media only screen and (max-width:650px){
.cont {
    padding-left: 30%;
}
}

@media only screen and (max-width:600px){
.b-mainpic-so img {
    width: 165px;
    height: 219px;
}
}
@media only screen and (max-width:500px){
.bdwp{
	padding: 0 15px;
}
.zhan img {
    height: 210px;
}
.b-mainpic-so img {
width: 172px;
    height: 253px;
}
.b-series-number-container a, .btn-gray, .btn-play-icon, .play-button {
    padding: 4px 16px;
}
}


@media only screen and (max-width:470px){
.cont {
    padding-left: 46%;
}
.zhan img {
    height: 185px;
}
}
}
@media only screen and (max-width:420px){
.zhan img {
    height: 165px;
}
}
@media only screen and (max-width:400px){
	.b-mainpic-so img {
width: 157px;
    height: 240px;
}
.zhan img {
    height: 155px;
}
}
@media only screen and (max-width:360px){
.b-mainpic-so img {
    width: 148px;
    height: 220px;
}
}
@media only screen and (max-width:345px){
.b-mainpic-so img {
    width: 115px;
    height: 168px;
}
.zhan img {
height: 135px;
}
}
@media only screen and (max-width:330px){
	.index-dianshi-ul,.index-dianying-ul{
		font-size:14px
	}
.b-mainpic-so img {
    width: 132px;
    height: 213px;
}
.cont ul li {
    padding: 7px!important;
}
.btn-play-icon {
    font-size: 10px;
}
.play-button{
	    padding: 4px 8px;
}
.zhan img {
height: 121px;
}
}

@media only screen and (max-width:300px){
.b-mainpic-so img {
	display: none;
}
.cont {
    padding-left: 0;
	margin-top:0;
}
}
.b-series-number-container,.index-dianying-playsite{
	display:none;
}
.mvul{width: 100%;margin: 0 auto;padding: 0;}
.mvul li{list-style: none;border: 1px solid #eee;padding: 9px;margin: 8px 0;border-radius: 2px;}
</style> 
<section class="container">
<?php _the_ads('ad_list_header', 'list-header');?>


<div style="text-align: center;padding: 10px 0;color: #FF7562;font-size: 12px;">温馨提示:请点击搜索结果的标题或封面图进行观看</div>
<strong class="single-strong">全网搜索(来自爱奇艺/优酷/腾讯/乐视等)</strong>
	<?php
echo '<div class="am-container main" style="padding:0">';
$url = 'https://video.so.com/v?ie=utf-8&src=360sou_home&q='.$_GET['sousuo'].'&_re=0';
$str = file_get_contents ($url);
if ($x=strpos($str,'<div class="a-engineso-body js-logger">')) $str=substr($str,$x);
if ($x=strpos($str,'<div class="index-others    js-others">')) $str=substr($str,0,$x);
if ($x=strpos($str,'<div  class="a-engineso-ad">')) $str=substr($str,0,$x);
$tihuan = str_replace("/index.php?kw","?",$str);
$tihuan = str_replace("http://www.360kan.com/m/","/play?make=dianying&id=",$tihuan);
$tihuan = str_replace("http://www.360kan.com/tv/","/play?make=dianshiju&id=",$tihuan);
$tihuan = str_replace("?ptag=360kan.tv.free","?ptag=08yingyuan",$tihuan);
$tihuan = str_replace("http://v.qq.com","/play?make=url&id=http://v.qq.com",$tihuan);
$tihuan = str_replace("http://www.tudou.com","/play?make=url&id=http://www.tudou.com",$tihuan);
$tihuan = str_replace("http://www.iqiyi.com","/play?make=url&id=http://www.iqiyi.com",$tihuan);
$tihuan = str_replace("http://www.letv.com","/play?make=url&id=http://www.letv.com",$tihuan);
$tihuan = str_replace("http://www.le.com","/play?make=url&id=http://www.le.com",$tihuan);
$tihuan = str_replace("http://cps.youku.com/redirect.html?id=0000028f&url=","/play?make=url&id=",$tihuan);
$tihuan = str_replace("http://www.mgtv.com","/play?make=url&id=http://www.mgtv.com",$tihuan);
$tihuan = str_replace("http://tv.sohu.com","/play?make=url&id=http://tv.sohu.com",$tihuan);
$tihuan = str_replace("http://v.pptv.com","/play?make=url&id=http://v.pptv.com",$tihuan);
$tihuan = str_replace("http://film.sohu.com","/play?make=url&id=http://film.sohu.com",$tihuan);
$tihuan = str_replace("http://www.wasu.cn","/play?make=url&id=http://www.wasu.cn",$tihuan);
$tihuan = str_replace("kan","",$tihuan);
$tihuan = str_replace("乐视</a>","乐视播放线路</a>",$tihuan);
$tihuan = str_replace("爱奇艺</a>","爱奇艺播放线路</a>",$tihuan);
$tihuan = str_replace("腾讯</a>","腾讯播放线路</a>",$tihuan);
$tihuan = str_replace("优酷</a>","优酷播放线路</a>",$tihuan);
$tihuan = str_replace("土豆</a>","土豆播放线路</a>",$tihuan);
$tihuan = str_replace("(付费)","播放线路",$tihuan);
$tihuan = str_replace("来源","切换线路",$tihuan);
$tihuan = str_replace('<h3 class="title">','<h3 class="title">标题：',$tihuan);
$tihuan = str_replace("立即播放","请点击视频标题进行观看",$tihuan);
$tihuan = str_replace('<span class="new-ico-jiao"></span><span class=\'new-ico-fufei\'></span><span class=\'new-ico-fufeitext js-fufeitext\'></span>',"",$tihuan);
$tihuan = str_replace("va/","play?make=zongyi&id=",$tihuan);
$tihuan = str_replace("ct/","play?make=dongman&id=",$tihuan);
$tihuan = str_replace("?vfm=","&vfm=",$tihuan);
$tihuan = str_replace("http://www.360.com","",$tihuan);
echo str_replace("http://v.youku.com","/play?make=url&id=http://v.youku.com",$tihuan);

echo "</div></div></div>"
?>	
<div style="clear: both;"></div>
<p id="more" style="text-align: center;height: 50px;background: #eee;line-height: 50px;font-size: 16px;cursor: pointer;" onclick="ckmore()"> 点击查看被隐藏的搜索结果>> </p> 
<?php if( _hui('zhanwaiss') ){ ?>
<strong class="single-strong">站外搜索列表(来自本站/公开云服务/资源站等)</strong>
<div class="excerpts-wrapper">
<div class="excerpts">
<?php 
$sourl = _hui('zy_so')."/index.php?m=vod-search";
$post_data = array("wd"=>$_GET['sousuo']);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $sourl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
$output = str_replace("/?m=vod-","/cinemaplay?m=vod-",$output);
$output = str_replace("?m","?gourl",$output);
$output = str_replace(".html","",$output);
$pattern = '#<span class="xing_vb4"><a href="(.*?)" target="_blank">(.*?)</a></span>#'; 
preg_match_all($pattern, $output, $matches);
$szlen = count($matches[0]);
echo '<ul class="mvul">';
for($xh =0;$xh<$szlen;$xh++){echo '<li>'.$matches[0][$xh].'</li>';}
echo '</ul>';
?>
</div></div></div>
<div style="clear: both;"></div>
<?php }?>

<strong class="single-strong">站内搜索列表</strong>

<div class="excerpts-wrapper">
<div class="excerpts">
<div class="zhan">
<?php 
$zyi = $_GET['sousuo'];
$zyi = urlencode($zyi);
$yuan = _hui('08_zhanneiurl');
$url = 'http://'.base64_decode($yuan)."/index.php/search?wd=".$zyi;
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.2; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$response = curl_exec($ch);
curl_close($ch);
if ($x=strpos($response,'<div class="video-list">')) $response=substr($response,$x);
if ($x=strpos($response,'</ul>')) $response=substr($response,0,$x);
$response = str_replace("index.php/show/index/","showplay?mso=",$response);
print_r($response);
?>
</ul></div></div>


<div style="clear: both;"></div>

<div class="bdwp">
<strong class="single-strong">百度网盘搜索列表</strong>
<ul class="mvul">
<li><span class="xing_vb4"><a href="/baiduwp/?sousuo=<?php echo $_GET['sousuo']?>" target="_blank"><?php echo $_GET['sousuo']?> 百度网盘搜索结果 点击查看</a></span></li>
</ul>
</div>


<?php _the_ads('ad_list_footer', 'list-footer');?>
</section>

<script>
if(document.getElementById("js-longvideo-container")!=undefined){
var more = 	document.getElementById('js-longvideo-container');
var cimore = 	document.getElementById('more');
more.style.display = 'none';
function ckmore(){
more.style.display = 'block';
cimore.style.display = 'none';
}
}else{
	var cimore = 	document.getElementById('more');
	cimore.style.display = 'none';
}

</script>
<?php get_footer(); ?>