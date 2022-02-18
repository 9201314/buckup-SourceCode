<!--
**
 *   ┏┓　　　┏┓
 * ┏┛┻━━━┛┻┓
 * ┃　　　　　　　┃
 * ┃　　　━　　　┃
 * ┃　┳┛　┗┳　┃
 * ┃　　　　　　　┃
 * ┃　　　┻　　　┃
 * ┃　　　　　　　┃
 * ┗━┓　　　┏━┛
 *    ┃　　　┃   
 *    ┃　　　┃   
 *    ┃　　　┗━━━┓
 *    ┃　　　　　　　┣┓
 *    ┃　　　　　　　┏┛
 *    ┗┓┓┏━┳┓┏┛
 *      ┃┫┫　┃┫┫
 *      ┗┻┛　┗┻┛
 *                 请勿盗取代码
 *                 如需购买程序请联系QQ805500091
 *                 修改此处后无售后服务
 *
-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<?php if(is_page(array('paly','cinemaplay'))){?>
<?php }else{?>
<title><?php echo _title();	?></title>
<?php }?>
<?php wp_head(); ?>
<!--[if lt IE 9]><script src="<?php echo get_stylesheet_directory_uri() ?>/js/html5.js"></script><![endif]-->
</head>
<script>
if (top.location != location) {
document.write("<style>.header,.footer,#more,.sidebar,#homeso img,.action-rewards,.article-wechats{display: none!important}.content{width:100%}::-webkit-scrollbar-thumb{background-color:#fff;height:50px;outline-offset:-2px;outline:2px solid #fff;-webkit-border-radius:4px;border:2px solid #fff}::-webkit-scrollbar-thumb:hover{background-color:#FB4446;height:50px;-webkit-border-radius:4px}::-webkit-scrollbar{width:8px;height:18px}::-webkit-scrollbar-track-piece{background-color:#fff;-webkit-border-radius:0}body,.single-post .content{padding-top: 0px;}</style>");
}
</script>
<body <?php body_class(_bodyclass()) ?>>
<header class="header">
	<div class="container">
		<?php _the_logo(); ?>
		<div class="sitenav">
			<ul><?php _the_menu('nav'); ?></ul>
		</div>
		<span class="sitenav-on"><i class="fa">&#xe605;</i></span>
		<span class="sitenav-mask"></span>
		<?php if( _hui('ac_weixin') || _hui('ac_weibo') || _hui('ac_tqq') || _hui('ac_qzone') ){ ?>
			<div class="accounts">
				<?php if( _hui('ac_weixin') ): ?>
					<a class="account-weixin" href="javascript:;"><i class="fa">&#xe60e;</i>
						<div class="account-popover"><div class="account-popover-content"><img src="<?php echo _hui('ac_weixin') ?>"></div></div>
					</a>
				<?php endif; ?>
				<?php if( _hui('ac_weibo') ): ?><a class="account-weibo" target="_blank" href="<?php echo _hui('ac_weibo') ?>" tipsy title="关注微博"><i class="fa">&#xe608;</i></a><?php endif; ?>
				<?php if( _hui('ac_tqq') ): ?><a class="account-tqq" target="_blank" href="<?php echo _hui('ac_tqq') ?>" tipsy title="关注腾讯微博"><i class="fa">&#xe60c;</i></a><?php endif; ?>
				<?php if( _hui('ac_qzone') ): ?><a class="account-qzone" target="_blank" href="<?php echo _hui('ac_qzone') ?>" tipsy title="关注QQ空间"><i class="fa">&#xe607;</i></a><?php endif; ?>
			</div>
		<?php } ?>
		<?php if( _hui('nav_search') ){ ?>
			<span class="searchstart-on"><i class="fa">&#xe600;</i></span>
			<span class="searchstart-off"><i class="fa">&#xe606;</i></span>
			<form method="get" class="searchform" action="/search" >
				<button tabindex="3" class="sbtn" type="submit"><i class="fa">&#xe600;</i></button><input tabindex="2" class="sinput" name="sousuo" type="text" placeholder="输入关键字" value="<?php echo htmlspecialchars($s) ?>">
			</form>
		<?php } ?>
	</div>
</header>