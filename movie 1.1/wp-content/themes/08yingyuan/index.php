<?php get_header(); ?>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/08yingyuan/phpQuery-onefile.php');
$yuan = _hui('08_zhanneiurl');
$url = 'http://'.base64_decode($yuan);
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
		$uls = pq("div[class='video-list']")->find("ul")->find("li");
	foreach($uls as $li2){
		$goods = array();
		$li = pq($li2);
		$goods["home_img"] = $li->find("img")->attr('src');
		$goods["home_name"] = $li->text();
		$goods["home_url"] = $li->find("a")->attr('href');
		$goods["home_url"] = str_replace("/index.php/show/index/","",$goods["home_url"]);
		array_push($list,$goods);
	}
?>
<style>
.b-listfilter{padding:0 20px;background-color:#fff;border:1px solid #e6e6e6;font-size:12px;line-height:16px}.b-listfilter-item{position:relative;overflow:hidden;height:40px;zoom:1;padding-left:36px;padding-right:50px;border-bottom:1px dashed #e6e6e6}.b-listfilter-item:last-child{border-bottom:0}.b-listfilter-item .type{position:absolute;left:0;top:10px;color:#999;padding:2px 0}.b-listfilter-item .item{padding:5px 0}.b-listfilter-item .item a{float:left;margin:5px 0 5px 16px;padding:2px 6px;zoom:1;height:20px;white-space:nowrap;word-wrap:break-word}.b-listfilter-item .on:hover,.b-listfilter-item .on{background-color:#FF6651;color:#fff}.b-listfilter-item .act{position:absolute;right:0;top:12px;height:16px;line-height:16px}.b-listfilter-item .act a{padding:0 13px 0 0;display:none}.b-listfilter-item .open{background:url(http://p6.qhmsg.com/t0187f8287120a671ea.png) right center no-repeat}.b-listfilter-item .close{background:url(http://p6.qhmsg.com/t018dad77370f0fe67d.png) right center no-repeat}.b-listtab{margin-top:20px;color:#222;font-size:12px;*margin-bottom:20px}.b-listtab .tab-line{width:100%;height:39px;background:#fff;border:1px solid #e6e6e6;border-bottom:2px solid #FF6651}.b-listtab .tab{float:left;z-index:1}.b-listtab .tab-item{position:relative;float:left;display:inline;height:39px;line-height:39px;width:83px}.b-listtab .tab-item a{float:left;height:39px;width:83px;text-align:center;overflow:hidden;border-left:1px solid #fff;border-right:1px solid #fff;background:#fff;white-space:nowrap}.b-listtab .tab-cur a{position:absolute;border-left:1px solid #FF6651;border-right:1px solid #FF6651;border-top:3px solid #FF6651;top:-1px;left:-1px;height:39px;text-indent:1px;z-index:2;background:#f4f4f4;*width:82px}.b-listtab .tab-item span{position:absolute;width:1px;background:#d8d8d8;overflow:hidden;height:17px;top:10px;right:0}.b-listtab .tab-cur span{display:none}.b-listtab .app{float:right;line-height:39px}.b-listtab .app span{color:#cb0000;padding:0 2px}.b-listtab .app a{display:inline-block;width:80px;height:31px;line-height:31px;text-align:center;color:#fff;background:#FF6651;border-radius:2px;margin:5px 6px}.b-listtab .app a:hover{color:#fff;background:#189a83}.b-listtab-main{margin-top:0px;overflow:hidden}.b-listtab-main .list{margin-left:-20px}.b-listtab-main .item{float:left;width:191px;height:285px;border-bottom:1px solid #e9e9e9;margin:0 0 20px 20px}.b-listtab-main .cover{width:100%;height:258px;overflow:hidden;position:relative;font-size:12px}.b-listtab-main .cover img{width:100%;height:100%}.b-listtab-main .pay{position:absolute;top:4px;left:4px;display:block;width:39px;height:19px;line-height:19px;background:#cd1919;color:#fff;text-align:center;border-radius:2px}.b-listtab-main .hint{position:absolute;right:4px;bottom:4px;padding:2px 6px;background:rgba(0,0,0,0.8);color:#fff;border-radius:2px}.b-listtab-main .detail{width:100%;background:#fff}.b-listtab-main .title{font-size:14px;padding:7px 5px 3px 5px}.b-listtab-main .title .s1{display:inline-block;float:left;width:144px;height:20px;line-height:20px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;color:#222}.b-listtab-main .title .s2{float:right;color:#ff7b00;font-size:16px}.b-listtab-main .star{font-size:12px;color:#999;margin:0 5px;width:170px;height:18px;line-height:18px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.ew-page{color:#222;font-size:12px;text-align:center}.ew-page a{border:1px solid #e6e6e6;display:inline-block;width:36px;height:36px;line-height:36px;background-color:#fff;text-align:center;margin:0 4px;color:#222}.ew-page span{display:inline-block;width:38px;color:#222}.ew-page .btn{width:72px}.ew-page a:hover{color:#FF6651;border:1px solid #FF6651}.ew-page .on:hover,.ew-page .on{cursor:default;border:1px solid #FF6651;color:#fff;display:inline-block;width:36px;height:36px;line-height:36px;background-color:#FF6651;text-align:center;margin:0 4px}.eb-mediav-500{float:left;width:498px;height:88px;border:1px solid #b0dbd4;overflow:hidden}.eb-mediav-500 .logo{display:block;float:left;width:50px;height:90px}.eb-mediav-500 .list{padding:0 3px;z-index:1}.eb-mediav-500 .list li{float:left;width:85px;height:88px;overflow:hidden;margin-left:3px}.eb-mediav-500 .item{display:block;width:100%;height:100%;position:relative}.eb-mediav-500 .item img{width:100%;height:100%}.eb-mediav-500 .item .hint{position:absolute;left:0;bottom:0;width:86px;height:20px;background:#fff;opacity:.9}.eb-mediav-500 .item:hover .hint{height:100%}.eb-mediav-500 .item .price{position:absolute;left:0;bottom:0;width:100%;height:20px;line-height:20px;text-align:center;color:#ff1313;font-size:14px}.eb-mediav-500 .item .desc{position:absolute;top:5px;left:5px;width:76px;height:48px;line-height:16px;overflow:hidden;font-size:12px;color:#333;display:none}.eb-mediav-500 .item:hover .desc{display:block}.eb-mediav-500 .item-360video .hint,.eb-mediav-500 .item-360video .price,.eb-mediav-500 .item-360video .desc,.eb-mediav-500 .item-360video:hover .desc{display:none}.eb-mediav-500 .appdown{display:block;width:100%;height:100%}.eb-mediav-500 .appdown img{width:100%;height:100%}.eb-mediav-500 .list-wrapper{width:448px;height:100%;position:relative;overflow:hidden;float:left}.eb-mediav-500 .list-wrapper b{z-index:2;position:absolute;top:15px;width:20px;height:45px;cursor:pointer;background-image:url(http://p0.qhimg.com/t01776acc478f788c42.png);background-repeat:no-repeat}.eb-mediav-500 .list-wrapper .btn-l{background-position:0 0;left:0}.eb-mediav-500 .list-wrapper .btn-l:hover{background-position:0 -45px}.eb-mediav-500 .list-wrapper .btn-r{background-position:0 -90px;right:0}.eb-mediav-500 .list-wrapper .btn-r:hover{background-position:0 -135px}.eb-mediav{width:100%}.eb-mediav-wide{width:1180px;margin:0 auto;position:relative;text-align:center;display:none;margin-top:40px}.eb-mediav-950{display:block;width:950px;height:90px;overflow:hidden;margin:0 auto;margin-top:40px}.eb-mediav-660{float:left;width:660px;height:90px;margin-right:19px}.g-wide .eb-mediav-950{display:none}.g-wide .eb-mediav-wide{display:block}.g-wide .eb-mediav-small .eb-mediav-950{display:block}.p-body .eb-mediav-500 .list{width:448px}.g-slide{position:relative;overflow:hidden}.g-slide-item{position:absolute;top:0;left:0;display:none}.g-slide-item:first-child{display:block}.eb-signin-signup{overflow:hidden;*zoom:1;background-color:#fff;height:390px}.eb-signin input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#dadada;font-size:14px}.eb-signin input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#dadada;font-size:14px}.eb-registe-nav-topline{background-color:#e5e8e9;width:596px}.eb-signin{width:598px;background-color:#fff}.eb-signin-top{width:596px;background-color:#475e5e}.eb-signin-nav{background-color:#a6b1b1}.eb-signin-topline{background-color:#909e9e;width:594px}.eb-signin-topline-in{background-color:#bac2c3;width:592px}.eb-signin-topline p{background-color:#bac2c3}.b-line{margin:0 auto;height:1px;font-size:0}.eb-signin-nav-topline{background-color:#e5e8e9;width:594px}.eb-signin-nav-bomline{background-color:#eff1f1}.eb-signin-nav-bomline p{background-color:#e5e8e9;width:596px}.pingfen{position:absolute;bottom:52px;right:6px;}.am-container {max-width: 1220px;}.g-playicon:after,.g-playicon-mask,.g-playicon-icon{visibility:hidden;position:absolute;overflow:hidden;cursor:pointer}.g-playicon:after{z-index:2;top:0;left:0;width:100%;height:100%;content:'';background:rgba(0,0,0,.3) url(http://p9.qhimg.com/t01925d53c7bd381a67.png) no-repeat center;cursor:pointer;opacity:0;-webkit-transition:opacity 300ms linear;-moz-transition:opacity 300ms linear;-o-transition:opacity 300ms linear;-ms-transition:opacity 300ms linear;transition:opacity 300ms linear}.g-playicon:hover{border-color:#fefefe}.g-playicon:hover:after{opacity:1}.g-playicon-mask,.g-playicon-icon{top:0;left:0;width:100%!important;height:100%!important}.g-playicon-mask{z-index:2;background:#000;opacity:.3;filter:alpha(opacity=30)}.g-playicon-icon{z-index:3;background:url(http://p9.qhimg.com/t01925d53c7bd381a67.png) center no-repeat}.g-playicon:hover:after,.g-playicon:hover .g-playicon-mask,.g-playicon:hover .g-playicon-icon{visibility:visible}.videolis{width:100%;border-radius:6px;border:solid #dedede 1px;float:left;margin-bottom:10px;background:#fff;margin-right:22px;}.videolis img{width:100%;}.videolis a{color:#666;}.bbbt{font-weight:400;font-size:16px;padding:8px;margin-bottom:0;margin-top:0;}.am-g{background: #f8f8f8;}.m-g{background:#fff;border-radius:2px}.b-listtab-main {margin-top:0px;padding-top: 0px;overflow: hidden;}.b-listtab-main .list {margin-left: -56px;}.paging{text-align:center;margin:24px 0;clear:both}.paging a{margin:0 4px;width:36px;height:36px;line-height:36px;display:inline-block;cursor:pointer}.paging a{color:#FF6651;background:#fff;transition:background ease .4s;-webkit-transition:background ease .4s;-moz-transition:background ease .4s;-o-transition:background ease .4s;-ms-transition:background ease .4s}.paging a:hover{background-color:#FF6651;color:#fff;border-radius:50%}.paging .current{background-color:#FF6651;color:#fff}#text-indent:hover{-webkit-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{-moz-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{animation:text-indent 1s ease 0s alternate none infinite}@-webkit-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@-moz-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}.fenlei{margin-top:10px}
@media only screen and (max-width:700px){.b-listtab-main .item {width: 44%;}.pingfen{display:none}.bbbt{font-size:12px;overflow:hidden;height:29px;}}
@media only screen and (max-width:420px){.b-listfilter-item .item a{margin:5px 0 5px 9pt}.b-listtab-main .item{width:44%}.b-listtab-main .cover{height:203px}.b-listtab-main .title .s1{width:82px}.b-listtab-main .detail{overflow:hidden}.b-listtab-main .item{height:230px}}@media only screen and (max-width:320px){.b-listfilter-item .item a{margin:5px 0 5px 5px}.b-listtab-main .item{margin:0 0 20px 18px}}.b-listtab-main{overflow:hidden;margin-top:11px;padding-top:0;border-top:1px solid #eee}#js-eb-feedback2,#js-eb-sidefeedback2,.eb-foot{display:none}.chak{float:right;color:#ff7562;font-weight:500;font-size:13px}#homeso{margin:45px 0}.pcadd{display:block}.madd{display:none}.homesoin{padding:4px 8px;width:500px;border:1px solid #eee;border-right:none;border-radius:2px 0 0 2px;color:#999}.homesobtn,.homesoin{height:50px;outline:0;font-size:14px}.homesobtn{padding:4px 10px;width:75pt;border:none;border-radius:0 2px 2px 0;background-color:#ff6651;color:#fff;opacity:.9}@media only screen and (width:768px){.b-listtab-main .item{width:210px}}@media only screen and (max-width:666px){.xuanze{margin-top:10px!important;width:95%!important;height:34px!important;background-color:#d6d6d6!important;font-size:10px!important}}@media only screen and (max-width:500px){.homesoin{width:347px}}@media only screen and (max-width:460px){.homesoin{width:290px}}@media only screen and (max-width:414px){.xuanze{margin-top:10px!important;width:95%!important;height:34px!important;background-color:#d6d6d6!important;font-size:10px!important}.pcadd{display:none}.madd{display:block}#homeso{margin:30px 0}.homesoin{width:260px}.jie{padding:0 18px;font-size:10px}}@media only screen and (max-width:376px){#homeso{margin:20px 0}.homesoin{width:180px;height:44px}.homesobtn{width:5pc;height:44px}.footer{font-size:10px}}@media only screen and (max-width:360px){#imgsrc{width:177px}#homeso{margin:28px 0}.homesoin{width:180px;height:40px}.homesobtn{width:5pc;height:40px}.footer{font-size:10px}}.single-strong{display:block;margin:3px 0;padding-left:10px;border-left:3px solid #ff5c5c;color:#606060;font-weight:500;font-size:1pc;line-height:21px}

.b-listtab-main .item {
    border-bottom: none;
}
.b-listtab-main .title {
    padding: 0px 5px 3px 5px;
}
.star{
	display:none;
}
</style>
<?php if( _hui('homedianying') || _hui('homedianshiju') || _hui('homedongman') || _hui('homezongyi') ){ 
}else{
echo '
<style>
#homeso {
    margin: 145px 0;
}
@media only screen and (max-width: 414px){
#homeso {
    margin: 116px 0;
}
}
@media only screen and (max-width: 360px){
#homeso {
    margin: 88px 0;
}
}
@media only screen and (max-width: 376px){
#homeso {
    margin: 80px 0;
}
}

</style>';
}
?>

<div id="homeso">
<form method="get" id="soform" style="text-align: center;float: none" action="/search">
<img id="imgsrc" src="<?php _the_slogo(); ?>"><br><br>
<input tabindex="2" class="homesoin" id="sos" name="sousuo" type="text" placeholder="输入你要观看的视频名或视频网址" value="">
<input type="hidden" name="qiehuan" value="1">
<button id="button" tabindex="3" class="homesobtn" type="submit"><i class="fa">观看</i></button>

<select class="homesobtn xuanze"  id="s1" onchange="valuechange()">
  <option value="q">全网搜索</option>
  <option value="b">网盘搜索</option> 
  <option value="c">MV搜索</option>
  <option value="d">磁力搜索</option>
</select>

</form>
<script>
 function  valuechange(){
 var qiehuan = document.getElementById('s1').value;
  if(qiehuan=='q'){
  document.getElementById('soform').action = '/search';
  document.getElementById('imgsrc').src = '<?php _the_slogo(); ?>';
  }else if(qiehuan=='b'){
  document.getElementById('soform').action = '/baiduwp';
  document.getElementById('imgsrc').src = '<?php echo _hui('logo_src_wp')?>';
  alert('百度网盘搜索仅支持输入 资源名称');
  }else if(qiehuan=='c'){
  document.getElementById('soform').action = '/mv';
  document.getElementById('imgsrc').src = '<?php echo _hui('logo_src_yy')?>';
  alert('MV搜索仅支持输入 歌手名字或者歌曲名字');
  }else{
  document.getElementById('soform').action = '/cili';
  document.getElementById('imgsrc').src = '<?php echo _hui('logo_src_cili')?>';
  alert('迅雷磁力搜索仅支持输入 资源名称');
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
var url = '/play?make=url&id='+a.value;
window.location.href=url;
 return false;
 }
}
</script>
</div>

<section class="container">
<?php if(_hui('homedianying')){?>
<div class="single-strong">最新热门电影推荐<span class="chak"><a href="/film/">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php
for($i=0;$i<12;$i++){
echo '<li class="item"><a class="js-tongjic" href="showplay?mso='.$list[$i]["home_url"].'">
<div class="cover g-playicon">
<img src="'.$list[$i]["home_img"].'">
<span class="pay">推荐</span><span class="hint">2017</span></div>
<div class="detail">
<p class="title g-clear">
<span class="s1">'.$list[$i]["home_name"].'</span>
</p>
</div>
</a>
</li>';
}
?>
</ul>
</div>
</div>
<?php }?>

<?php if(_hui('homedianshiju')){?>
<div class="single-strong">最新热门电视剧推荐<span class="chak"><a href="/tvshow/">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php
$queryURL = 'http://www.360kan.com/dianshi/list';
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
$result = str_replace("/tv/","/play?make=dianshiju&id=",$result);
$pattern = '#<a class="js-tongjic" href="(.*?)">
                            <div class="cover g-playicon">
                                <img src="(.*?)">
                                                                <span class="hint">(.*?)</span>                            </div>
                            <div class="detail">
                                <p class="title g-clear">
                                    <span class="s1">(.*?)</span>
                                    <span class="s2">(.*?)</span>
                                </p>
                                <p class="star">(.*?)</p>
                            </div>
                        </a>
#'; 
preg_match_all($pattern, $result, $matches);
for($xh =0;$xh<12;$xh++){
echo '<li class="item">'.$matches[0][$xh].'</li>';
}
?>
</ul>
</div>
</div>
<?php }?>


<?php if(_hui('homedongman')){?>
<div class="single-strong">最新热门动漫推荐<span class="chak"><a href="/dongman/">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php
$queryURL = 'http://www.360kan.com/dongman/list';
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
$result = str_replace("/ct/","/play?make=dongman&id=",$result);
$pattern = '#<a class="js-tongjic" href="(.*?)">
                            <div class="cover g-playicon">
                                <img src="(.*?)">
                                                                <span class="hint">(.*?)</span>                            </div>
                            <div class="detail">
                                <p class="title g-clear">
                                    <span class="s1">(.*?)</span>
                                    <span class="s2">(.*?)</span>
                                </p>
                                <p class="star">(.*?)</p>
                            </div>
                        </a>
#'; 
preg_match_all($pattern, $result, $matches);
for($xh =0;$xh<12;$xh++){
echo '<li class="item">'.$matches[0][$xh].'</li>';
}
?>
</ul>
</div>
</div>
<?php }?>

<?php if(_hui('homemeiju')){?>
<div class="single-strong">最新美剧推荐</div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php
for($i=30;$i<42;$i++){
echo '<li class="item"><a class="js-tongjic" href="showplay?mso='.$list[$i]["home_url"].'">
<div class="cover g-playicon">
<img src="'.$list[$i]["home_img"].'">
<span class="pay">推荐</span><span class="hint">2017</span></div>
<div class="detail">
<p class="title g-clear">
<span class="s1">'.$list[$i]["home_name"].'</span>
</p>
</div>
</a>
</li>';
}
?>
</ul>
</div>
</div>
<?php }?>

<?php if(_hui('homehanju')){?>
<div class="single-strong">最新韩剧推荐</div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php
for($i=45;$i<57;$i++){
echo '<li class="item"><a class="js-tongjic" href="showplay?mso='.$list[$i]["home_url"].'">
<div class="cover g-playicon">
<img src="'.$list[$i]["home_img"].'">
<span class="pay">精选</span><span class="hint">2017</span></div>
<div class="detail">
<p class="title g-clear">
<span class="s1">'.$list[$i]["home_name"].'</span>
</p>
</div>
</a>
</li>';
}
?>
</ul>
</div>
</div>
<?php }?>

</section>

<?php get_footer(); ?>