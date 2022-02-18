<?php if(_hui('qieop')){?>
 <style>.qqanimate{display:block;position:fixed;left:150px;bottom:130px;z-index:99999999999999999;}</style>
 <div class="indexpingbi" style="display:none;z-index:999999999999;width:100%;height:100%;position:fixed;top:0px;left:0px;background:#000;filter: alpha(opacity=70);-moz-opacity: 0.7;-khtml-opacity: 0.7;opacity: 0.7;"></div>
	 <div class="indextanchu" style="cursor:pointer;display:none;position: fixed;left:80px;bottom: 20px;width:560px;height:250px;z-index:9999999999999999;background:url(<?php echo get_stylesheet_directory_uri() ?>/img/ui-v5-guide.png)no-repeat;"></div>
	 <a href="<?php echo _hui('qieopurl')?>" target="_blank" class="qqanimate">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/qq.gif" width="172px" height="120px" />
	 </a>
<?php }?>

	 
<?php if(_hui('mshouji')){?>
	<div class="foornav">
	<a href="/"><span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/index.png"/>首页</span></a>
	<a href="/film"><span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/video.png"/>电影</span></a>
	<a href="/tvshow"><span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/dianshiju.png"/>电视剧</span></a>
	<a href="/va"><span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/dianshi.png"/>综艺</span></a>
	<a href="/xiao"><span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/zongyi.png"/>搞笑</span></a>
</div>
<?php }?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/view-history.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/add-history.js"></script>
<footer class="footer">
<?php if( _hui('footts') ){ ?>
<div class="branding branding-black">
	<div class="container" style="text-align: center;">
		<h2><?php echo _hui('foottitle')?></h2>
		<?php if( _hui('footbtn') ){ ?>
		<a target="blank" class="gobtn" href="<?php echo _hui('footbtnhref')?>"><?php echo _hui('footbtntitle')?></a>	
		<?php }?>
		<?php if( _hui('footbtns') ){ ?>
		<a target="blank" class="gobtn" href="<?php echo _hui('footbtnhrefs')?>"><?php echo _hui('footbtntitles')?></a>	
		<?php }?>
	</div>
</div>
<?php }?>

<?php if( _hui('yqlj') ){ ?>
<style>
.yqlj{padding-top: 8px;}
.yqljul li{float: left;padding: 0 4px;list-style: none;font-size: 14px}
</style>
<div class="container yqlj">
<div class="single-strong">友情链接<span class="chak" style="color:#777777">广告位联系QQ：31997-31997</span></div>
  <ul class="yqljul">
  <?php echo _hui('yqljurl');?>
  </ul>
</div>
<?php }?>

<p style="padding: 0 4px;"><?php echo _hui('footerp')?><br/>
<?php if( _hui('footcode') ) echo _hui('footcode') ?>
    &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &nbsp; 
    <?php echo get_option('zh_cn_l10n_icp_num') ? get_option('zh_cn_l10n_icp_num').' &nbsp; ' : ''; ?>
    <?php echo _hui('themecopyright') ? '本站主题由 <a href="http://www.晚安.我爱你" target="_blank">公爵旗舰店</a> 提供 &nbsp; ' : ''; ?>
    <?php echo _hui('trackcode') ?>
</footer>

<?php get_template_part( 'content', 'module-rewards' ); ?> 

<script>
	<?php  
		$ajaxpager = '0';
		if( ((!wp_is_mobile() &&_hui('ajaxpager_s')) || (wp_is_mobile() && _hui('ajaxpager_s_m'))) && _hui('ajaxpager') ){
			$ajaxpager = _hui('ajaxpager');
		}

		$shareimage = _hui('share_base_image') ? _hui('share_base_image') : '';
		if( is_single() || is_page() ){
			$thumburl = _get_post_thumbnail_url(false, '');
			if( $thumburl ){
				$shareimage = $thumburl; 
			}
		}

		$shareimagethumb = _hui('share_post_image_thumb') ? 1 : 0;

		$fullgallery = 0;
		if( (is_single() && _hui('full_gallery')) || (is_page() && _hui('page_full_gallery')) ){
			$fullgallery = 1;
		}

		$fullimage = 0;
		if( (is_single() && _hui('full_image')) || (is_page() && _hui('page_full_image')) ){
			$fullimage = 1;
		}

	?>
	window.TBUI = {
		uri             : '<?php echo get_stylesheet_directory_uri() ?>',
		ajaxpager       : '<?php echo $ajaxpager ?>',
		pagenum         : '<?php echo get_option('posts_per_page', 20) ?>',
		shareimage      : '<?php echo $shareimage ?>',
		shareimagethumb : '<?php echo $shareimagethumb ?>',
		fullgallery     : '<?php echo $fullgallery ?>',
		fullimage       : '<?php echo $fullimage ?>'
	}
</script>
<?php wp_footer(); ?>
</body>
</html>