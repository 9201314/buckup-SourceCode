<?php

/*
 * 请勿使用windows下的记事本修改本文件。推荐使用 notepad++
 * 作者QQ:31997-31997
 */
$htmlCss = '<link rel="stylesheet" href="/Theme/m.css" />';
$html = str_ireplace('</head>', $htmlCss . '</head>', $html);
$icon='
<style>.index-wrapper .icon-link-wrapper{height:auto!important}.index-wrapper .icon-link-wrapper .icon-url-list li{margin:2px 0;width:20%!important}.icon-url-list a{color:#000}.icon-url-list li strong{font-weight:400;display:block;text-align:center;padding-top:5px;font-size:12px}</style>

<ul class="icon-url-list clearfix">
<li><a href="?r=index/cat&amp;cid=1"><span><img src="./Theme/images/1.png" alt="女装"></span><strong>女装</strong></a></li>
<li><a href="?r=index/cat&amp;cid=9"><span><img src="./Theme/images/2.png" alt="男装"></span><strong>男装</strong></a></li>
<li><a href="?r=index/cat&amp;cid=10"><span><img src="./Theme/images/4.png" alt="内衣"></span><strong>内衣</strong></a></li>
<li><a href="?r=index/cat&amp;cid=2"><span><img src="./Theme/images/5.png" alt="母婴"></span><strong>母婴</strong></a></li>
<li><a href="?r=index/cat&amp;cid=3"><span><img src="./Theme/images/6.png" alt="化妆品"></span><strong>化妆品</strong></a></li>
<li><a href="?r=index/cat&amp;cid=4"><span><img src="./Theme/images/7.png" alt="居家"></span><strong>居家</strong></a></li>
<li><a href="?r=index/cat&amp;cid=5"><span><img src="./Theme/images/3.png" alt="鞋包配饰"></span><strong>鞋包配饰</strong></a></li>
<li><a href="?r=index/cat&amp;cid=6"><span><img src="./Theme/images/8.png" alt="美食"></span><strong>美食</strong></a></li>
<li><a href="?r=index/cat&amp;cid=7"><span><img src="./Theme/images/9.png" alt="文体车品"></span><strong>文体车品</strong></a></li>
<li><a href="?r=index/cat&amp;cid=8"><span><img src="./Theme/images/10.png" alt="数码家电"></span><strong>数码家电</strong></a></li>
</ul>';
$html = str_replace('<ul class="icon-url-list clearfix">',$icon.'<ul class="icon-url-list clearfix" style="display: none">',$html);

$footer = '<style>.footer{position:fixed;bottom:0;z-index:99999999999999;border-top:1px solid #eee;padding:6px 0;background:#fff;width:100%}.footer ul{text-align:center;padding:0;margin:0 auto}.footer ul li{font-size:10px;float:left;width:20%}.footer ul li a{color:#444}.footer ul li img{width:22px}.footer ul li span{display:block}</style>
<div class="footer">
<ul>
<li><a href="index.php"><img src="./Theme/images/home.png"><span>首页</span></a></li>
<li><a href="?r=index/9"><img src="./Theme/images/9.9.png"><span>九块九</span></a></li>
<li><a href="?r=ddq/wap"><img src="./Theme/images/qiang.png"><span>咚咚抢</span></a></li>
<li><a href="?r=index/r"><img src="./Theme/images/jian.png"><span>小编推荐</span></a></li>
<li><a href="?r=p/wap"><img src="./Theme/images/top.png"><span>疯狂排行</span></a></li>
</ul>
</div>';
$html = str_ireplace('</head>',$footer.'</head>', $html);
return $html;
/*
 * 请勿使用windows下的记事本修改本文件。推荐使用 notepad++
 * 作者QQ:31997-31997
 */
?>