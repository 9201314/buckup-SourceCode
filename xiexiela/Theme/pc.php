<?php
$html = str_replace('https://img.alicdn.com/imgextra/i1/97012073/TB2mI97m8NkpuFjy0FaXXbRCVXa_!!97012073.jpg',"/Theme/images/TB2mI97m8NkpuFjy0FaXXbRCVXa_!!97012073.png",$html);
$htmlCss = '<link rel="stylesheet" href="/Theme/pc.css" />';
$html = str_ireplace('</head>', $htmlCss . '</head>', $html);
return $html;

/*
 * 请勿使用windows下的记事本修改本文件。推荐使用 notepad++
 * 作者QQ:31997-31997
 */
?>