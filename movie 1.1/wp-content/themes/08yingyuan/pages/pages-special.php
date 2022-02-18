<?php 
/**
 * template name: 腾讯专题页面
 */

get_header();
?>

<style>.lipbtn{clear:both;display:inline-flex;margin:4px 0;padding:6px 13px;border-radius:2px;background:#C7C0B0}#video{width:100%;height:587px;border:none}.focusbox{height:582px;background:url(<?php echo get_post_meta($post->ID, 'special_pcimg', true); ?>);background-size:100%;background-repeat:no-repeat}@media only screen and (max-width:1300px){.focusbox{height:410px}}@media only screen and (max-width:1100px){.focusbox{height:380px}}@media only screen and (max-width:1000px){.focusbox{height:360px}}@media only screen and (max-width:900px){.focusbox{height:340px}}@media only screen and (max-width:800px){.focusbox{height:310px}}@media only screen and (max-width:700px){.lipbtn{padding:.3em .8em}.focusbox{height:15pc}}@media only screen and (max-width:600px){.focusbox{height:200px}}@media only screen and (max-width:500px){#video{width:100%;height:15pc}.focusbox{height:230px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;background:url(<?php echo get_post_meta($post->ID, 'special_mimg', true); ?>);background-size:100%;background-repeat:no-repeat}}@media only screen and (max-width:450px){.focusbox{height:210px}}@media only screen and (max-width:400px){.focusbox{height:180px}}@media only screen and (max-width:360px){.focusbox{height:200px}}@media only screen and (max-width:320px){.focusbox{height:180px}}.lipbtn{position:relative;clear:both;display:inline-block;margin-bottom:8px;padding:7px 13px;border:1px solid #C7C0B0;border-radius:10px;background:#C7C0B0;color:#fff;font-size:10px}._list{margin:10px 0;padding:0}._list li{float:left;margin:0 3px;list-style:none}._list li i{position:absolute;right:0;bottom:0;font-style:normal}.mark_text_new,.mark_text_trailer{background-color:hsla(0,0%,100%,.2)}.mark_text_vip{background-color:#90d643}._mid_trailer{display:none}#xlu{text-align:center}#xlu button{margin-top:6px;margin-bottom:6px;padding:8px 9pt;width:24%;border:none;border-radius:2px;background:#C7C0B0;font-size:11px}</style>
<style><?php echo get_post_meta($post->ID, 'special_style', true); ?></style>
<?php _the_focusbox( '', get_the_title() ); ?>
<div class="beij">
<section class="container">

	<?php while (have_posts()) : the_post(); ?>
<br/>

	<h2 class="single-strong">视频剧集（<?php echo get_post_meta($post->ID, 'special_gengxin', true); ?>）</h2>
	
	
	<?php
$url = get_post_meta($post->ID, 'special_href', true);;
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$html = curl_exec($ch);
curl_close($ch);
$str = $html;
if ($x=strpos($str,'<ul class="_list">')) $str=substr($str,$x);
if ($x=strpos($str,'</ul>')) $str=substr($str,0,$x);
$str = str_replace('<i class="mark_text_new">新</i>','',$str);
$str = str_replace('<i class="mark_text_vip">会员</i>','',$str);
$str = str_replace('/cover/','https://v.qq.com/x/cover/',$str);
$str = str_replace('<ul class="_list">','',$str);
echo '<ul class="_list">';
the_content();
echo $str;
echo '</ul>';
	?>
	
	<iframe id="video" src="/jiazai.html" style="width:100%;border:none;display:none"></iframe>
	<a style="display:none" id="videourlgo" href=""></a>
	<div id="xlu" style="display:none">
	<p>如无法播放请点击以下线路进行切换</p>
<button onclick="xldata('https://api.vparse.org/?url=')">线路一</button>
<button onclick="xldata('http://api.wlzhan.com/sudu/?url=')">线路二</button>
<button onclick="xldata('http://aikan-tv.com/?url=')">线路三</button>
<button onclick="xldata('http://j.zz22x.com/jx/?url=')">线路四</button>
</div>
	<div style="clear: both;"></div>
		<div class="jianjie">
		<h2 class="single-strong">简介</h2>
		<p class="item-desc"><?php echo get_post_meta($post->ID, 'special_jie', true); ?></p>
		</div>
		
		
	<?php endwhile; ?>

    <?php get_template_part( 'content', 'module-share' ); ?> 
	<h2 class="single-strong">剧情评论</h2>
	<br/>
    <?php comments_template('', true); ?>

</section>
</div>
	<script type="text/javascript">
	function xldata(urls){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
	};
	var al = $('._list a');
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
	function bofang(mp4url){
	document.getElementById('videourlgo').href=mp4url;
	document.getElementById('xlu').style.display='block';
	document.getElementById('video').style.display='block';
	document.getElementById('video').src='https://api.vparse.org/?url='+mp4url;
	};
</script>
<?php get_footer(); ?>