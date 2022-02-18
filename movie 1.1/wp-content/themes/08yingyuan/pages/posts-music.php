<?php 
/**
 * template name: 音悦台
 */

get_header();
?>

<?php if($_GET['play']){?>
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
.lipbtn {margin: 4px 0;background: #e4e4e4;padding: 6px 13px;clear: both;display: inline-flex;border-radius: 2px;}

.lipbtn{background:#fff;padding: 5px 8px;font-size: 10px;border-radius: 10px;margin-bottom: 8px;border: 1px solid #FF7562;clear: both;display: inline-block;color: #FF7562;}
#xiazai input{
	display: block;
    width: 100%;
	margin-bottom:4px;
    border: 1px solid #FF5C5C;
    padding: 6px 8px;
    font-size: 10px;
    border-radius: 2px;
}
</style>
<?php
$time=$_SERVER['REQUEST_TIME'];
$queryURL = "http://www.yinyuetai.com/api/info/get-video-urls?callback=callback&videoId=".$_GET['play']."&_=".$time;
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
$result = str_replace("callback(","",$result);
$result = str_replace('})','}',$result);
$result = json_decode($result, true); 
?>
<div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
		<?php echo _the_ads('ad_post_header', 'post_header');?>
		<strong class="single-strong">选择清晰度</strong>
		<span class="txt">默认为最高清晰度：</span>> 
<?php 
if($result['hcVideoUrl']){
	echo '<a class="am-btn am-btn-default lipbtn" onclick="bofang(\''.$result['hcVideoUrl'].'\')" href="javascript:()">标清</a>
	';
}
if($result['hdVideoUrl']){
	echo '<a class="am-btn am-btn-default lipbtn" onclick="bofang(\''.$result['hdVideoUrl'].'\')" href="javascript:()">高清</a>
	';
}
if($result['heVideoUrl']){
	echo '<a class="am-btn am-btn-default lipbtn" onclick="bofang(\''.$result['heVideoUrl'].'\')" href="javascript:()">超清</a>
	';
}
?>
	
<div class="html5play">
<iframe id="videourlgo" src="<?php if($_GET['type']=='sh'){
	echo $result['heVideoUrl'];
	}else if($_GET['type']=='hd'){
		echo $result['hdVideoUrl'];
		}else{
			echo $result['hcVideoUrl'];
			} ?>" marginwidth="0" marginheight="0" border="0" scrolling="no" frameborder="0" topmargin="0" width="100%" height="100%"></iframe>
</div>	

<strong class="single-strong">下载地址</strong>
<div id="xiazai">
<?php 
if($result['hcVideoUrl']){
	echo '标清：<input type="text" value="'.$result['hcVideoUrl'].'">';
}
if($result['hdVideoUrl']){
	echo '高清：<input type="text" value="'.$result['hdVideoUrl'].'">';
}
if($result['heVideoUrl']){
	echo '超清：<input type="text" value="'.$result['heVideoUrl'].'">';
}
?>
<p>如何下载？全选复制输入框内的下载链接，打开浏览器新建下载 将复制的下载地址粘贴即可。 </p>
</div>
<script type="text/javascript">
	function bofang(mp4url){
	document.getElementById('videourlgo').src = mp4url;
	}
</script>
		
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
	<?php get_sidebar(); ?>
	<script>
var ifh=$('.sidebar');
if(ifh.height()<10){
$('.content').css("width","100%");
}else{
}</script>
</section>
</div>


<?php }else{?>


<?php if($_GET['sousuo']){
$queryURL = 'http://soapi.yinyuetai.com/search/video-search?callback=jQuery110205966153280555879_1497770959887&keyword='.$_GET['sousuo'].'&pageIndex=1&pageSize=91&offset=1&orderType=&area=&property=&durationStart=0&durationEnd=&regdateStart=&regdateEnd=1497770974&clarityGrade=&source=&thirdSource=&_=1497770959909';
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
$result = str_replace("jQuery110205966153280555879_1497770959887(","",$result);
$result = str_replace('})','}',$result);
$result = json_decode($result, true);
}else{
if($_GET['pageno']){
	$pageon = $_GET['pageno'];
}else{
	$pageon = '1';
}
$queryURL = 'http://mvapi.yinyuetai.com/mvchannel/so?callback=success_jsonpCallback_so&sid=&tid=&a=&p=&c=&s=dayViews&pageSize=30&page='.$pageon;
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
$result = str_replace("success_jsonpCallback_so(","",$result);
$result = str_replace('logined":false})','logined":false}',$result);
$result = json_decode($result, true);
}
?>

<style>
.b-listfilter{padding:0 20px;background-color:#fff;border:1px solid #e6e6e6;font-size:12px;line-height:16px}.b-listfilter-item{position:relative;overflow:hidden;height:40px;zoom:1;padding-left:36px;padding-right:50px;border-bottom:1px dashed #e6e6e6}.b-listfilter-item:last-child{border-bottom:0}.b-listfilter-item .type{position:absolute;left:0;top:10px;color:#999;padding:2px 0}.b-listfilter-item .item{padding:5px 0}.b-listfilter-item .item a{float:left;margin:5px 0 5px 16px;padding:2px 6px;zoom:1;height:20px;white-space:nowrap;word-wrap:break-word}.b-listfilter-item .on:hover,.b-listfilter-item .on{background-color:#FF6651;color:#fff}.b-listfilter-item .act{position:absolute;right:0;top:12px;height:16px;line-height:16px}.b-listfilter-item .act a{padding:0 13px 0 0;display:none}.b-listfilter-item .open{background:url(http://p6.qhmsg.com/t0187f8287120a671ea.png) right center no-repeat}.b-listfilter-item .close{background:url(http://p6.qhmsg.com/t018dad77370f0fe67d.png) right center no-repeat}.b-listtab{margin-top:20px;color:#222;font-size:12px;*margin-bottom:20px}.b-listtab .tab-line{width:100%;height:39px;background:#fff;border:1px solid #e6e6e6;border-bottom:2px solid #FF6651}.b-listtab .tab{float:left;z-index:1}.b-listtab .tab-item{position:relative;float:left;display:inline;height:39px;line-height:39px;width:83px}.b-listtab .tab-item a{float:left;height:39px;width:83px;text-align:center;overflow:hidden;border-left:1px solid #fff;border-right:1px solid #fff;background:#fff;white-space:nowrap}.b-listtab .tab-cur a{position:absolute;border-left:1px solid #FF6651;border-right:1px solid #FF6651;border-top:3px solid #FF6651;top:-1px;left:-1px;height:39px;text-indent:1px;z-index:2;background:#f4f4f4;*width:82px}.b-listtab .tab-item span{position:absolute;width:1px;background:#d8d8d8;overflow:hidden;height:17px;top:10px;right:0}.b-listtab .tab-cur span{display:none}.b-listtab .app{float:right;line-height:39px}.b-listtab .app span{color:#cb0000;padding:0 2px}.b-listtab .app a{display:inline-block;width:80px;height:31px;line-height:31px;text-align:center;color:#fff;background:#FF6651;border-radius:2px;margin:5px 6px}.b-listtab .app a:hover{color:#fff;background:#189a83}.b-listtab-main{margin-top:0px;overflow:hidden}.b-listtab-main .list{margin-left:-20px}.b-listtab-main .item{float:left;width:191px;height:210px;border-bottom:1px solid #e9e9e9;margin:0 0 20px 20px}.b-listtab-main .cover{width:100%;height:156px;overflow:hidden;position:relative;font-size:12px}.b-listtab-main .cover img{width:100%;height:100%}.b-listtab-main .pay{position:absolute;top:4px;left:4px;display:block;width:39px;height:19px;line-height:19px;background:#cd1919;color:#fff;text-align:center;border-radius:2px}.b-listtab-main .hint{position:absolute;right:4px;bottom:4px;padding:2px 6px;background:rgba(0,0,0,0.8);color:#fff;border-radius:2px}.b-listtab-main .detail{width:100%;background:#fff}.b-listtab-main .title{font-size:14px;padding:7px 5px 3px 5px}.b-listtab-main .title .s1{display:inline-block;float:left;width:144px;height:20px;line-height:20px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;color:#222}.b-listtab-main .title .s2{float:right;color:#ff7b00;font-size:16px}.b-listtab-main .star{font-size:12px;color:#999;margin:0 5px;width:170px;height:18px;line-height:18px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.ew-page{color:#222;font-size:12px;text-align:center}.ew-page a{border:1px solid #e6e6e6;display:inline-block;width:36px;height:36px;line-height:36px;background-color:#fff;text-align:center;margin:0 4px;color:#222}.ew-page span{display:inline-block;width:38px;color:#222}.ew-page .btn{width:72px}.ew-page a:hover{color:#FF6651;border:1px solid #FF6651}.ew-page .on:hover,.ew-page .on{cursor:default;border:1px solid #FF6651;color:#fff;display:inline-block;width:36px;height:36px;line-height:36px;background-color:#FF6651;text-align:center;margin:0 4px}.eb-mediav-500{float:left;width:498px;height:88px;border:1px solid #b0dbd4;overflow:hidden}.eb-mediav-500 .logo{display:block;float:left;width:50px;height:90px}.eb-mediav-500 .list{padding:0 3px;z-index:1}.eb-mediav-500 .list li{float:left;width:85px;height:88px;overflow:hidden;margin-left:3px}.eb-mediav-500 .item{display:block;width:100%;height:100%;position:relative}.eb-mediav-500 .item img{width:100%;height:100%}.eb-mediav-500 .item .hint{position:absolute;left:0;bottom:0;width:86px;height:20px;background:#fff;opacity:.9}.eb-mediav-500 .item:hover .hint{height:100%}.eb-mediav-500 .item .price{position:absolute;left:0;bottom:0;width:100%;height:20px;line-height:20px;text-align:center;color:#ff1313;font-size:14px}.eb-mediav-500 .item .desc{position:absolute;top:5px;left:5px;width:76px;height:48px;line-height:16px;overflow:hidden;font-size:12px;color:#333;display:none}.eb-mediav-500 .item:hover .desc{display:block}.eb-mediav-500 .item-360video .hint,.eb-mediav-500 .item-360video .price,.eb-mediav-500 .item-360video .desc,.eb-mediav-500 .item-360video:hover .desc{display:none}.eb-mediav-500 .appdown{display:block;width:100%;height:100%}.eb-mediav-500 .appdown img{width:100%;height:100%}.eb-mediav-500 .list-wrapper{width:448px;height:100%;position:relative;overflow:hidden;float:left}.eb-mediav-500 .list-wrapper b{z-index:2;position:absolute;top:15px;width:20px;height:45px;cursor:pointer;background-image:url(http://p0.qhimg.com/t01776acc478f788c42.png);background-repeat:no-repeat}.eb-mediav-500 .list-wrapper .btn-l{background-position:0 0;left:0}.eb-mediav-500 .list-wrapper .btn-l:hover{background-position:0 -45px}.eb-mediav-500 .list-wrapper .btn-r{background-position:0 -90px;right:0}.eb-mediav-500 .list-wrapper .btn-r:hover{background-position:0 -135px}.eb-mediav{width:100%}.eb-mediav-wide{width:1180px;margin:0 auto;position:relative;text-align:center;display:none;margin-top:40px}.eb-mediav-950{display:block;width:950px;height:90px;overflow:hidden;margin:0 auto;margin-top:40px}.eb-mediav-660{float:left;width:660px;height:90px;margin-right:19px}.g-wide .eb-mediav-950{display:none}.g-wide .eb-mediav-wide{display:block}.g-wide .eb-mediav-small .eb-mediav-950{display:block}.p-body .eb-mediav-500 .list{width:448px}.g-slide{position:relative;overflow:hidden}.g-slide-item{position:absolute;top:0;left:0;display:none}.g-slide-item:first-child{display:block}.eb-signin-signup{overflow:hidden;*zoom:1;background-color:#fff;height:390px}.eb-signin input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#dadada;font-size:14px}.eb-signin input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#dadada;font-size:14px}.eb-registe-nav-topline{background-color:#e5e8e9;width:596px}.eb-signin{width:598px;background-color:#fff}.eb-signin-top{width:596px;background-color:#475e5e}.eb-signin-nav{background-color:#a6b1b1}.eb-signin-topline{background-color:#909e9e;width:594px}.eb-signin-topline-in{background-color:#bac2c3;width:592px}.eb-signin-topline p{background-color:#bac2c3}.b-line{margin:0 auto;height:1px;font-size:0}.eb-signin-nav-topline{background-color:#e5e8e9;width:594px}.eb-signin-nav-bomline{background-color:#eff1f1}.eb-signin-nav-bomline p{background-color:#e5e8e9;width:596px}.pingfen{position:absolute;bottom:52px;right:6px;}.am-container {max-width: 1220px;}.g-playicon:after,.g-playicon-mask,.g-playicon-icon{visibility:hidden;position:absolute;overflow:hidden;cursor:pointer}.g-playicon:after{z-index:2;top:0;left:0;width:100%;height:100%;content:'';background:rgba(0,0,0,.3) url(http://p9.qhimg.com/t01925d53c7bd381a67.png) no-repeat center;cursor:pointer;opacity:0;-webkit-transition:opacity 300ms linear;-moz-transition:opacity 300ms linear;-o-transition:opacity 300ms linear;-ms-transition:opacity 300ms linear;transition:opacity 300ms linear}.g-playicon:hover{border-color:#fefefe}.g-playicon:hover:after{opacity:1}.g-playicon-mask,.g-playicon-icon{top:0;left:0;width:100%!important;height:100%!important}.g-playicon-mask{z-index:2;background:#000;opacity:.3;filter:alpha(opacity=30)}.g-playicon-icon{z-index:3;background:url(http://p9.qhimg.com/t01925d53c7bd381a67.png) center no-repeat}.g-playicon:hover:after,.g-playicon:hover .g-playicon-mask,.g-playicon:hover .g-playicon-icon{visibility:visible}.videolis{width:100%;border-radius:6px;border:solid #dedede 1px;float:left;margin-bottom:10px;background:#fff;margin-right:22px;}.videolis img{width:100%;}.videolis a{color:#666;}.bbbt{font-weight:400;font-size:16px;padding:8px;margin-bottom:0;margin-top:0;}.am-g{background: #f8f8f8;}.m-g{background:#fff;border-radius:2px}.b-listtab-main {margin-top:0px;padding-top: 0px;overflow: hidden;}.b-listtab-main .list {margin-left: -56px;}
.paging{text-align:center;margin:24px 0;clear:both}.paging a{margin:0 4px;width:36px;height:36px;line-height:36px;display:inline-block;cursor:pointer}.paging a{color:#FF6651;background:#fff;transition:background ease .4s;-webkit-transition:background ease .4s;-moz-transition:background ease .4s;-o-transition:background ease .4s;-ms-transition:background ease .4s}.paging a:hover{background-color:#FF6651;color:#fff;border-radius:10px}.paging .current{background-color:#FF6651;color:#fff}#text-indent:hover{-webkit-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{-moz-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{animation:text-indent 1s ease 0s alternate none infinite}@-webkit-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@-moz-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}.fenlei{margin-top:10px}
@media only screen and (width:1024px){.b-listtab-main .item {width: 181px;}};
@media only screen and (width:768px){.b-listtab-main .item{width:230px}};
@media only screen and (max-width:700px){
.b-listtab-main .item {width: 44%;}
.pingfen{display:none}
.bbbt{font-size:12px;overflow:hidden;height:29px;}
}
@media only screen and (max-width:420px){
.b-listfilter-item .item a{margin: 5px 0 5px 12px;}
.b-listtab-main .item {width: 44%;}
.b-listtab-main .cover{height: 108px;}
.b-listtab-main .title .s1 {width: 82px;}
.b-listtab-main .detail {overflow: hidden;}
.b-listtab-main .item{height:156px;}
}
@media only screen and (max-width:320px){
.b-listfilter-item .item a{margin: 5px 0 5px 5px;}
.b-listtab-main .item {
    margin: 0 0 20px 18px;
}
}
.eb-foot,#js-eb-feedback2,#js-eb-sidefeedback2{display:none}

.paging a {
    margin: 0 4px;
    width: 100px;
    border-radius: 2px;
    height: 36px;
    line-height: 36px;
    display: inline-block;
    cursor: pointer;
}
</style>




<section class="container">
<?php _the_ads('ad_list_header', 'list-header');?>
<div class="m-g">
<div class="b-listtab-main">
<div>
<ul class="list g-clear">


<?php if($_GET['sousuo']){
$url = $result['videos']['data'][0]['id'];
$title = $result['videos']['data'][0]['title'];
$description = $result['videos']['data'][0]['description'];
$image = $result['videos']['data'][0]['headImg'];
$duration = $result['videos']['data'][0]['duration'];
$videoType = $result['videos']['data'][0]['videoType'];
$changdu = count($result['videos']['data']);
for($x=0;$x<$changdu;$x++){
	echo '
	<li class="item"><a class="js-tongjic" target="_blank" href="?play='.$result['videos']['data'][$x]['id'].'&type='.$result['videos']['data'][$x]['videoType'].'">
                            <div class="cover g-playicon">
                                <img src="'.$result['videos']['data'][$x]['headImg'].'">
                                <span class="hint">'.$result['videos']['data'][$x]['duration'].'</span>                            </div>
                            <div class="detail">
                                <p class="title g-clear">
                                    <span class="s1">'.$result['videos']['data'][$x]['title'].'</span>
                                </p>
                                <p class="star">发布时间：'.$result['videos']['data'][$x]['pubDate'].'</p>
                            </div>
                        </a>
</li>
	';
}
}else{
$url = $result['result'][0]['videoId'];
$title = $result['result'][0]['title'];
$description = $result['result'][0]['description'];
$image = $result['result'][0]['image'];
$duration = $result['result'][0]['duration'];
$videoType = $result['result'][0]['videoType'];
$changdu = count($result['result']);
for($x=0;$x<$changdu;$x++){
	echo '
	<li class="item"><a class="js-tongjic" target="_blank" href="?play='.$result['result'][$x]['videoId'].'&type='.$result['result'][$x]['videoType'].'">
                            <div class="cover g-playicon">
                                <img src="'.$result['result'][$x]['image'].'">
                                <span class="hint">'.$result['result'][$x]['duration'].'</span>                            </div>
                            <div class="detail">
                                <p class="title g-clear">
                                    <span class="s1">'.$result['result'][$x]['title'].'</span>
                                </p>
                                <p class="star">'.$result['result'][$x]['description'].'</p>
                            </div>
                        </a>
</li>
	';
}
}
?>

</ul>
</div>
<?php if($_GET['sousuo']){
	
}else{
	$pageon = $pageon+1;
	echo '<div class="paging"><a class="current" href="javascript:history.go(-1);">上一页</a><a class="current" href="?pageno='. $pageon .'">下一页</a></div>';
}
?>


</div></div>
<?_the_ads('ad_list_footer', 'list-footer');?>
</section>


<?php }?>


<?php get_footer(); ?>