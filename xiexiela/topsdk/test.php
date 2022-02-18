<?php
/*
 * 请勿使用windows下的记事本修改本文件。推荐使用 notepad++
 * 作者QQ:31997-31997
 */
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 
	$content = @file_get_contents('/Users/xt/Downloads/json.txt');
	var_dump(json_decode($content));
	var_dump(urlencode(mb_convert_encoding('阿里发票商家答疑', 'gb2312', 'utf-8')));
?>