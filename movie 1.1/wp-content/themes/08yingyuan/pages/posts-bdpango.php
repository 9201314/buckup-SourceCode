<?php 
/**
 * template name: 百度网盘搜索结果查看
 */

get_header();
?>
<section class="container">
<br/>

<?php
if($_GET['uk']){
$url = "http://pan.here325.com/ln?".$_SERVER['QUERY_STRING'];
$ch = curl_init($url); //初始化
curl_setopt($ch, CURLOPT_HEADER, 0); // 不返回header部分
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回字符串，而非直接输出
curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
curl_setopt($ch, CURLOPT_REFERER, "-");
$response = curl_exec($ch);
curl_close($ch);
$pattern = '#<iframe src="(.*?)" frameborder="0" scrolling="yes" width="100%;" style="border: 0px;" height="800px;">
			</iframe>
#'; 
preg_match_all($pattern, $response, $matches);
print_r($matches[0][0]);
}else{
	echo'你在找啥？';
};
?>


</section>
<?php get_footer(); ?>