<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>直播</title>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,minimal-ui">
    <meta name="keywords" content="直播,电视直播,网络电视,乐视网络电视,卫星电视" />
    <meta name="description" content="直播网,提供网络电视直播,湖南卫视,浙江卫视,东方卫视,北京卫视,河南卫视,江苏卫视,上海第一财经,体育频道,卫视节目表,免费视频直播,本港台在线观看高清回放。" />
    <meta name="applicable-device"content="mobile">
    
    
    <link rel="stylesheet" href="/tv/css/aui.css" />
	<link rel="stylesheet" href="/tv/css/main.css" />
	<script type="text/javascript" src="/tv/css/iconfont.js" ></script>
    <script>var SitePath='/',SiteAid='17',SiteTid='2',SiteId='6930';</script>
    <style type="text/css">
    .icon {
     width: 1em; height: 0.8em;
     font-size: 1.6rem;
     vertical-align: -0.15em;
     fill: currentColor;
     overflow: hidden;
}
    .icono {
     width: 1em; height: 0.8em;
     font-size: 1.6rem;
      color:#212121;
     vertical-align: -0.15em;
     fill: currentColor;
     overflow: hidden;
}
</style>
</head>
<body>
    
<!-- 头部  -->
<section class="header">
	<header class="aui-bar aui-bar-nav" id="aui-header">
		<a class="aui-pull-left aui-btn" onclick="back();">
			<span class="aui-iconfont aui-icon-left"></span>
		</a>
		<div class="aui-title">直播</div>
	   	<a href="/" class="aui-pull-right aui-btn" aui-popup-for="top-right" tapmode="">
		<svg class="icono" aria-hidden="true">
             <use xlink:href="#icon-imac1"></use>
        </svg>
		</a>
	    <a onclick="openSearch()" class="aui-pull-right aui-btn">
	       <svg class="icono" aria-hidden="true">
             <use xlink:href="#icon-search"></use>
        </svg>
	    </a>
	</header>
</section>
<section class="aui-content">
    
<!-- 信息条  -->
    <div class="aui-tips" id="tips-1">
	    <i class="aui-iconfont aui-icon-info"></i>
	    <div class="aui-tips-title">正在播放：河南卫视&nbsp;&nbsp;高清</div>
	    <i class="aui-iconfont aui-icon-close" tapmode onclick="closeTips()"></i>
	</div>
<!-- 播放器  -->	
   <section class="video-box">
    <video width="100%" height="230" controls="controls" autoplay="autoplay" src="http://ivi.bupt.edu.cn/hls/hntv.m3u8"></video>
   </section>

<!-- 播放来源  -->
	<section class="col-head" style="margin-top: 2.2rem;">
	<div class="title">
		<svg class="icon" aria-hidden="true">
           <use xlink:href="#icon-zhibo"></use>
        </svg>清晰度</div>
		<p style="margin-left: 1rem;float: left;font-size: 12px;color: #FF6666;">秒开的电视更清爽</p>
	</section>
	<section class="col-main ">
	<div class="numBox">
			<div class="hd">
				<ul>
					<li  class="active" ><a href="javascript:;">JOEV</a></li>
				</ul>
			</div>
			<div class="bd">
				<div id="tabs-container" class="swiper-container">
					<div class="swiper-wrapper">
				        <div class="swiper-slide">
							<div class="numList">
								<ul>
								 <li class="active"><a href="http://ivi.bupt.edu.cn/hls/hntv.m3u8" rel="nofollow">高清<i class="iNewIcon"></i></a></li>
								</ul>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</section>

<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="aui-bar-tab-item" tapmode>
        <a href="/" rel="nofollow" ><svg class="icon" aria-hidden="true">
             <use xlink:href="#icon-imac1"></use>
        </svg></a>
        <div class="aui-bar-tab-label">首页</div>
    </div>
    <div class="aui-bar-tab-item aui-active" tapmode>
       <a href="" rel="nofollow" ><svg class="icon" aria-hidden="true">
             <use xlink:href="#icon-radio"></use>
        </svg></a>
        <div class="aui-bar-tab-label">直播</div>
    </div>
   <div class="aui-bar-tab-item" tapmode>
        <a href="/music/" rel="nofollow" ><svg class="icon" aria-hidden="true">
             <use xlink:href="#icon-bird1"></use>
        </svg></a>
        <div class="aui-bar-tab-label">音乐</div>
    </div>
    <div class="aui-bar-tab-item" tapmode>
         <a href="/index.php?m=user-index.html" rel="nofollow" ><svg class="icon" aria-hidden="true">
             <use xlink:href="#icon-avatar"></use>
        </svg></a>
        <div class="aui-bar-tab-label">我的</div>
    </div>
</footer>




<!-- 搜索  -->
<div id="search" class="search">
	<form class="form" action="/index.php?m=vod-search" method="post">
	
		<input type="search" class="input" placeholder="想要搜点什么呢？" name="wd"  autocomplete="off">
		<button type="submit" class="aui-iconfont aui-icon-search"></button>
	</form>
	<div onclick="closeSearch()" class="search-cancel">取消</div>
</div>


<script type="text/javascript" src="/tv/css/zepto.min.js"></script>
<script type="text/javascript" src="/tv/css/common.js" ></script>
<script type="text/javascript" src="/tv/css/main.js" ></script>	
<script type="text/javascript">
    /*导航条*/
    var topNav = new Swiper('#header-nav',{freeMode : true,slidesPerView : 'auto', });
    /*图片懒加载初始化*/
    Echo.init({
		offset: 0,
		throttle: 0
	});
	/*影片列表TAB初始化*/
	var tabsSwiper = new Swiper('#tabs-container',{
	    speed:500,
	    onSlideChangeStart: function(swiper){
		    $(".numBox .hd .active").removeClass('active');
		    $(".numBox .hd li").eq(swiper.activeIndex).addClass('active');
	    }
	})
	$(".numBox .hd li").on('touchstart mousedown',function(e){
	    e.preventDefault()
	    $(".numBox .hd .active").removeClass('active')
	    $(this).addClass('active')
	    tabsSwiper.slideTo( $(this).index() )
	})
	$(".numBox .hd li").click(function(e){
    	e.preventDefault()
  	});
  	function closeTips(){
		$("#tips-1").remove();
	}
</script>






</body>
</html>

