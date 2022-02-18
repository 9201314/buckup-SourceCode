<?php 
include('config.php'); 
$tips = '';
include('admincore.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('inc.php'); ?>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>


</head>

<body>
<?php $nav = 'setting';include('head.php'); ?>

<div id="hd_main">
  <div align="center"><?php echo $tips?></div>
 <form name="configform" id="configform" action="./setting.php?act=setting&t=<?php echo time()?>" method="post" onsubmit="return subck()">

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="tablecss">
<tr class="thead">
<td colspan="10" align="center">基本设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">网站名称：</td>
    <td width="690" valign="middle"><input name="edit" id="edit" type="hidden" value="1" /><input type="text" name="aik[sitename]" value="<?php echo $aik['sitename']?>" size="50">
      <span class="gray tips">如：雅心影院</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">网站域名：</td>
    <td width="690" valign="middle"><input type="text" name="aik[pcdomain]" id="aik_pcdomain" value="<?php echo $aik['pcdomain']?>" size="20"></br>
      <span class="gray tips">网站域名，如 http://vip.xiexie.la/ ,网站放二级目录，域名填写最后要加“/”，如http://vip.xiexie.la/1/</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页标题：</td>
    <td valign="top"><input type="text" name="aik[title]" value="<?php echo $aik['title']?>" size="50">
      <span class="gray tips">显示在首页标题上，一般不超过80个字符</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页关键字：</td>
    <td valign="top"><span class="gray tips">关键字请用英文逗号分开，一般不超过100个字符</span><br><textarea name="aik[keywords]" cols="80" rows="2"><?php echo $aik['keywords']?></textarea></td>
      
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页描述：</td>
    <td valign="top"><span class="gray tips">一般不超过200个字符</span><div class="cl5"></div><textarea name="aik[description]" cols="80" rows="3"><?php echo $aik['description']?></textarea></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页友情链接：</td>
    <td valign="top"><font color="red">公爵旗舰店友情链接，</font>仅授权用户可以去除！<div class="cl5"></div><textarea name="aik[homelink]" cols="80" rows="3"><?php echo $aik['homelink']?></textarea></td>
</tr>
<!--<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页顶部公告内容：</td>
    <td valign="top"><font color="red">没有可不填！支持代码改颜色</font><div class="cl5"></div><textarea name="aik[gonggao]" cols="80" rows="1"><?php echo $aik['gonggao']?></textarea></td>
</tr>-->
<tr>
    <td width="125" align="right" valign="middle" class="s_title">ICP备案号：</td>
    <td width="690" valign="middle"><input type="text" name="aik[icp]" id="aik_path" value="<?php echo $aik['icp']?>" size="20"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">版权说明：</td>
    <td valign="top"><textarea name="aik[foot]" cols="80" rows="5"><?php echo $aik['foot']?></textarea></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">统计信息：</td>
    <td valign="top"><textarea name="aik[tongji]" cols="80" rows="5"><?php $aik['tongji'] = str_replace("\\'","'",$aik['tongji']);echo htmlspecialchars($aik['tongji'])?></textarea>
      </td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">畅言配置（位置在播放页下方）：</td>
    <td valign="top"><textarea name="aik[changyan]" cols="80" rows="5"><?php $aik['changyan'] = str_replace("\\'","'",$aik['changyan']);echo htmlspecialchars($aik['changyan'])?></textarea>
      </td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">友情链接：</td>
    <td valign="top"><textarea name="aik[youlian]" cols="80" rows="5"><?php $aik['youlian'] = str_replace("\\'","'",$aik['youlian']);echo htmlspecialchars($aik['youlian'])?></textarea>
      </td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">授权码：</td>
    <td valign="top"><input type="text" name="aik[shouquan]" id="aik_shouquan" value="<?php echo $aik['shouquan']?>" size="80"></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">站外搜索设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">搜索来源：</td>
    <td valign="top"><input type="text" name="aik[zhanwai]" id="aik_zhanwai" value="<?php echo $aik['zhanwai']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">磁力搜索：</td>
    <td valign="top"><input type="text" name="aik[cilis]" id="aik_cilis" value="<?php echo $aik['cilis']?>" size="80"></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">解析设置</td>
</tr>
<!--


<tr>
    <td width="125" align="right" valign="middle" class="s_title">网站目录：</td>
    <td width="690" valign="middle"><input type="text" name="aik[path]" id="aik_path" value="<?php echo $aik['path']?>" size="20">
      <span class="gray tips">根目录请填写 / ，子目录请填写如：/dy/</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">PC版域名：</td>
    <td width="690" valign="middle"><input type="text" name="aik[pcdomain]" id="aik_pcdomain" value="<?php echo $aik['pcdomain']?>" size="20">
      <span class="gray tips">PC版域名，如 dy.aik.wang </span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">手机版域名：</td>
    <td width="690" valign="middle"><input type="text" name="aik[mobiledomain]" id="aik_mobiledomain" value="<?php echo $aik['mobiledomain']?>" size="20">
      <span class="gray tips">手机版域名，如 m.dy.aik.wang ，不开启手机版请留空</span></td>
</tr>-->


<tr>
    <td width="125" align="right" valign="middle" class="s_title">电影解析接口：</td>
    <td valign="top">请将解析接口分别填入下列空中<font color="red">（第一条是默认调用接口）</font><div class="cl5"></div>
	<textarea name="aik[jiekou1]" cols="80" rows="1"><?php echo $aik['jiekou1']?></textarea>
	<textarea name="aik[jiekou2]" cols="80" rows="1"><?php echo $aik['jiekou2']?></textarea>
	<textarea name="aik[jiekou3]" cols="80" rows="1"><?php echo $aik['jiekou3']?></textarea>
	<textarea name="aik[jiekou4]" cols="80" rows="1"><?php echo $aik['jiekou4']?></textarea>
	<textarea name="aik[jiekou5]" cols="80" rows="1"><?php echo $aik['jiekou5']?></textarea>
	<textarea name="aik[jiekou6]" cols="80" rows="1"><?php echo $aik['jiekou6']?></textarea>
	<textarea name="aik[jiekou7]" cols="80" rows="1"><?php echo $aik['jiekou7']?></textarea>
	<textarea name="aik[jiekou8]" cols="80" rows="1"><?php echo $aik['jiekou8']?></textarea>
	<textarea name="aik[jiekou9]" cols="80" rows="1"><?php echo $aik['jiekou9']?></textarea>
	<textarea name="aik[jiekou10]" cols="80" rows="1"><?php echo $aik['jiekou10']?></textarea>
      </td>
</tr>
<tr class="thead">
<td colspan="10" align="center">账号设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录账号：</td>
    <td valign="top"><input type="text" name="aik[admin_name]" value="<?php echo $aik['admin_name']?>" size="30">
      <span class="gray tips"></span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录密码：</td>
    <td valign="top"><input type="text" name="aik[admin_pass]" value="" size="30">
      <span class="gray tips">不修改请留空</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">管理员邮箱：</td>
    <td valign="top"><input type="text" name="aik[admin_email]" value="<?php echo $aik['admin_email']?>" size="30">
</tr>
<tr class="thead">
<td colspan="10" align="center">LOGO设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">导航栏LOGO：</td>
    <td valign="top">请投放133x40<div class="cl5"></div><textarea name="aik[logo_dh]" cols="80" rows="1"><?php echo $aik['logo_dh']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">搜索框LOGO：</td>
    <td valign="top">请投放240x80<div class="cl5"></div><textarea name="aik[logo_ss]" cols="80" rows="1"><?php echo $aik['logo_ss']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">列表页广告</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">电影列表广告：</td>
    <td valign="top">请投放1250x117<div class="cl5"></div><textarea name="aik[movie_ad]" cols="80" rows="3"><?php echo $aik['movie_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">电视剧列表广告：</td>
    <td valign="top">请投放1250x117<div class="cl5"></div><textarea name="aik[tv_ad]" cols="80" rows="3"><?php echo $aik['tv_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">综艺列表广告：</td>
    <td valign="top">请投放1250x117<div class="cl5"></div><textarea name="aik[zongyi_ad]" cols="80" rows="3"><?php echo $aik['zongyi_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">动漫列表广告：</td>
    <td valign="top">请投放1250x117<div class="cl5"></div><textarea name="aik[dongman_ad]" cols="80" rows="3"><?php echo $aik['dongman_ad']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">播放页广告</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">播放器上图片广告：</td>
    <td valign="top">请投放860x81<div class="cl5"></div><textarea name="aik[bofang_ad]" cols="80" rows="3"><?php echo $aik['bofang_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">播放器加载广告：</td>
    <td valign="top">请投放903x616<div class="cl5"></div><textarea name="aik[jiazai_ad]" cols="80" rows="3"><?php echo $aik['jiazai_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">播放器下绿条提示：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[tishi_ad]" cols="80" rows="3"><?php echo $aik['tishi_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">播放器下点播提示：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[dbts]" cols="80" rows="3"><?php echo $aik['dbts']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">播放页打赏二维码</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">支付宝：</td>
    <td valign="top">请投放860x81<div class="cl5"></div><textarea name="aik[zfb_ad]" cols="80" rows="3"><?php echo $aik['zfb_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">微信：</td>
    <td valign="top">请投放903x616<div class="cl5"></div><textarea name="aik[wx_ad]" cols="80" rows="3"><?php echo $aik['wx_ad']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">播放页侧边栏广告</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">侧边栏一</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian1_ad]" cols="80" rows="5"><?php echo $aik['cebian1_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">侧边栏二</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian2_ad]" cols="80" rows="5"><?php echo $aik['cebian2_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">侧边栏三</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian3_ad]" cols="80" rows="5"><?php echo $aik['cebian3_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">侧边栏四</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian4_ad]" cols="80" rows="5"><?php echo $aik['cebian4_ad']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">导航栏广告</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">电视直播：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[top1_ad]" cols="80" rows="3"><?php echo $aik['top1_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">客户端：</td>
    <td valign="top"></a><div class="cl5"></div><textarea name="aik[top2_ad]" cols="80" rows="3"><?php echo $aik['top2_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">电脑版导航菜单购物：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[top_ad]" cols="80" rows="3"><?php echo $aik['top_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">电脑版导航微信关注：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[weixin_ad]" cols="80" rows="3"><?php echo $aik['weixin_ad'];?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">手机版导航菜单购物：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[end_ad]" cols="80" rows="3"><?php echo $aik['end_ad'];?></textarea></td>
</tr>
<tr><!--此处为更新及重要补充，请保留-->
<td colspan="10" align="center"><input name="edit" type="hidden" value="1" /><input id="configSave" type="submit" onclick="return getsort()" value="保 存"></td>
</tr>
</table>
</form>
<script type="text/javascript">
	$(".sxlist:first").dragsort();
</script>
</div>
<?php include('foot.php'); ?>
</body>
</html>
