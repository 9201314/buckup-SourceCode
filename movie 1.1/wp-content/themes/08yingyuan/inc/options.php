<?php
function optionsframework_option_name() {
	return '08yingyuan';
}

function optionsframework_options() {

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'face' => 'yahei',
		'style' => 'normal',
		'color' => '#383121' );
		
	$typography_content = array(
		'size' => '13px',
		'face' => 'yahei',
		'style' => 'normal',
		'color' => '#000000' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => false
	);

	// Pull all the categories into an array

	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	// $options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}


	// If using image radio buttons, define a directory path
	$adsdesc =  '可添加任意广告联盟代码或自定义代码';


	$qrcode = get_stylesheet_directory_uri() . '/img/qrcode.png';
	$logo = get_stylesheet_directory_uri() . '/img/logo.png';
	$slogo = get_stylesheet_directory_uri() . '/img/sologo.png';
	$bdlogo = get_stylesheet_directory_uri() . '/img/wp.png';
	$ylogo = get_stylesheet_directory_uri() . '/img/yinyue.png';
	$clogo = get_stylesheet_directory_uri() . '/img/cili.png';
	$jlogo = get_stylesheet_directory_uri() . '/img/1280jiazai.jpg';
	$jiazai = get_stylesheet_directory_uri() . '/img/145fbc6d3e05ebd9.jpg';

	$options = array();




	
	$options[] = array(
		'name' => '基本',
		'type' => 'heading');


	$options[] = array(
		'name' => "主题风格",
		'desc' => "13种颜色供选择，点击选择你喜欢的颜色，保存后前端展示会有所改变。",
		'id' => "theme_skin",
		'std' => "#FF6651",
		'type' => "colorradio",
		'options' => array(
			'#FF6651' => 1,
			'#2CDB87' => 2,
			'#00D6AC' => 3,
			'#16C0F8' => 4,
			'#EA84FF' => 5,
			'#FDAC5F' => 6,
			'#FD77B2' => 7,
			'#76BDFF' => 8,
			'#C38CFF' => 9,
			'#FF926F' => 10,
			'#8AC78F' => 11,
			'#C7C183' => 12,
			'#384047' => 13
		)
	);

	$options[] = array(
		'id' => 'theme_skin_custom',
		'std' => "",
		'desc' => '不喜欢上面提供的颜色，你好可以在这里自定义设置，如果不用自定义颜色清空即可（默认不用自定义）',
		'type' => "color");



	$options[] = array(
		'name' => 'Logo',
		'id' => 'logo_src',
		'desc' => 'Logo 最大高：40px；建议尺寸：180*40px 格式：png',
		'std' => $logo,
		'type' => 'upload');

	$options[] = array(
		'name' => '搜索LOGO',
		'id' => 'logo_src_s',
		'desc' => 'Logo 最大高：30px；建议尺寸：180*60px 格式：png',
		'std' => $slogo,
		'type' => 'upload');

	$options[] = array(
		'name' => '网盘搜索logo',
		'id' => 'logo_src_wp',
		'desc' => 'Logo 最大高：30px；建议尺寸：180*60px 格式：png',
		'std' => $bdlogo,
		'type' => 'upload');

	$options[] = array(
		'name' => '磁力搜索logo',
		'id' => 'logo_src_cili',
		'desc' => 'Logo 最大高：30px；建议尺寸：180*60px 格式：png',
		'std' => $clogo,
		'type' => 'upload');

	$options[] = array(
		'name' => 'MV搜索logo',
		'id' => 'logo_src_yy',
		'desc' => 'Logo 最大高：30px；建议尺寸：180*60px 格式：png',
		'std' => $ylogo,
		'type' => 'upload');

	$options[] = array(
		'name' => '加载图片',
		'id' => 'logo_src_j',
		'desc' => 'Logo 最大高：30px；建议尺寸：180*60px 格式：png',
		'std' => $jlogo,
		'type' => 'upload');


	$options[] = array(
		'name' => '加载时背景',
		'id' => 'jiazaibg',
		'std' => $jiazai,
		'type' => 'upload');

	$options[] = array(
		'name' => '全站连接符',
		'id' => 'connector',
		'desc' => '一经选择，切勿更改，对SEO不友好，一般为“-”或“_”',
		'std' => _hui('connector') ? _hui('connector') : '-',
		'type' => 'text',
		'class' => 'mini');

	$options[] = array(
		'name' => 'JS文件托管（可大幅提速JS加载）',
		'id' => 'js_outlink',
		'std' => "no",
		'type' => "radio",
		'options' => array(
			'no' => '不托管',
			'baidu' => '百度',
			'360' => '360'
		));

	$options[] = array(
		'name' => '导航栏显示搜索框',
		'id' => 'nav_search',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

	$options[] = array(
		'name' => '网站整体变灰',
		'id' => 'site_gray',
		'type' => "checkbox",
		'std' => false,
		'desc' => '开启'.'（支持IE、Chrome，基本上覆盖了大部分用户，不会降低访问速度）');

	$options[] = array(
		'name' => '开启百度网盘热门搜索',
		'id' => 'baiduwprm',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
		
	$options[] = array(
		'name' => '开启手机端底部导航',
		'id' => 'mshouji',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
		
	$options[] = array(
		'name' => '开启播放页面【猜你喜欢】',
		'id' => 'cainixihuan',
		'type' => "checkbox",
		'std' => false,
		'desc' => '开启');

	$options[] = array(
		'name' => '分类url去除category字样',
		'id' => 'no_categoty',
		'type' => "checkbox",
		'std' => false,
		'desc' => '开启'.'（该功能和no-category插件作用相同，可停用no-category插件）');

	$options[] = array(
		'name' => '上传文件重命名',
		'id' => 'newfilename',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启'.'（该功能会针对上传的文件和图片重命名，如：2ab6537935def43.jpg）');

	$options[] = array(
		'name' => '网站底部“由08影院提供”',
		'id' => 'themecopyright',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启'.'（开启不会对你的站有任何影响，促进主题发展和更新，感谢支持）');

	$options[] = array(
		'name' => '自动将文章的第一张图片缩略图设为特色图像',
		'id' => 'set_postthumbnail',
		'type' => "checkbox",
		'std' => false,
		'desc' => '开启'.'（如果没有添加文章缩略图，将自动获取文章中的第一张图片的缩略图设置为特色图像，开启后只在保存和发布文章时有效）');

	$options[] = array(
		'name' => '微博地址',
		'id' => 'ac_weibo',
		'std' => home_url(),
		'type' => 'text');

	$options[] = array(
		'name' => '腾讯微博地址',
		'id' => 'ac_tqq',
		'std' => home_url(),
		'type' => 'text');

	$options[] = array(
		'name' => 'QQ空间地址',
		'id' => 'ac_qzone',
		'std' => home_url(),
		'type' => 'text');

	$options[] = array(
		'name' => '微信二维码',
		'id' => 'ac_weixin',
		'desc' => '用于：网站顶部社交账号区域的微信展示。建议图片尺寸为：200*200',
		'std' => $qrcode,
		'type' => 'upload');


	$options[] = array(
		'name' => '被分享时默认图片',
		'id' => 'share_base_image',
		'desc' => '主要用于：分享到微信朋友圈、分享到微信好友、收藏到微信。建议图片尺寸为：200*200',
		'type' => 'upload');

	

	












	
	$options[] = array(
		'name' => 'SEO',
		'type' => 'heading');


	$options[] = array(
		'name' => '首页关键字(keywords)',
		'id' => 'keywords',
		'std' => '123,12345',
		'desc' => '关键字有利于SEO优化，建议个数在5-10之间，用英文逗号隔开',
		'settings' => array(
			'rows' => 4
		),
		'type' => 'textarea');

	$options[] = array(
		'name' => '首页描述(description)',
		'id' => 'description',
		'std' => '123 一个高端大气上档次的网站',
		'desc' => '描述有利于SEO优化，建议字数在30-70之间',
		'settings' => array(
			'rows' => 4
		),
		'type' => 'textarea');

	$options[] = array(
		'name' => '网站自动添加关键字和描述',
		'id' => 'site_keywords_description_s',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启'.'（开启后所有页面将自动使用主题配置的关键字和描述，具体规则可以自行查看页面源码得知）');

	$options[] = array(
		'name' => '文章关键字和描述自定义',
		'id' => 'post_keywords_description_s',
		'type' => "checkbox",
		'std' => false,
		'desc' => '开启'.'（开启后你需要在编辑文章的时候书写关键字和描述，如果为空，将自动使用主题配置的关键字和描述；开启这个必须开启上面的“网站自动添加关键字和描述”开关）');

	$options[] = array(
		'name' => '开启视频标签',
		'id' => 'shipinbiaoqian',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启'.'（开启后为了不误导用户点击，视频标签处于隐藏状态，针对搜索引擎优化）');









	




	$options[] = array(
		'name' => '文章列表',
		'type' => 'heading');


	$options[] = array(
		'name' => "列布局",
		'desc' => '检测到本站缩略图尺寸为：'. get_option('thumbnail_size_w') .' x '. get_option('thumbnail_size_h') .'，请根据缩略图尺寸（设置-多媒体中可设置）合理选择列布局',
		'id' => "list_cols",
		'std' => "5",
		'type' => "radio",
		'options' => array(
			'5' => '5列布局（建议缩略图宽小于300）',
			'4' => '4列布局（建议缩略图宽介于300-399之间）',
			'3' => '3列布局（建议缩略图宽介于400-619之间）',
			'2' => '2列布局（建议缩略图宽大于620）',
		)
	);

	$options[] = array(
		'name' => '列布局：图文一体',
		'id' => 'list_imagetext',
		'type' => "checkbox",
		'std' => false,
		'desc' => '开启 （开启后文字会显示在图片上方）');

	$options[] = array(
		// 'name' => '列布局：小部件触显',
		'id' => 'list_hover_plugin',
		'type' => "checkbox",
		'std' => false,
		'desc' => 'PC端开启小部件触显 （开启后鼠标触发的时候显示小部件）');

	$options[] = array(
		'name' => '列布局：小部件开启',
		'id' => 'post_plugin',
		'std' => array(
			'view' => 1,
			'like' => 1,
			'comm' => 1
		),
		'type' => "multicheck",
		'options' => array(
			'view' => ' 阅读量（无需安装插件） ',
			'like' => ' 点赞（无需安装插件） ',
			'comm' => ' 评论数 '
		));


	$options[] = array(
		'name' => '默认文章缩略图',
		'id' => 'post_default_thumb',
		'std' => get_stylesheet_directory_uri() . '/img/thumb.png',
		'desc' => '用于：文章默认缩略图的展示。图片尺寸为：'. get_option('thumbnail_size_w') .' x '. get_option('thumbnail_size_h'),
		'type' => 'upload');


	$options[] = array(
		'name' => '新窗口打开列表文章',
		'id' => 'target_blank',
		'type' => "checkbox",
		'std' => false,
		'desc' => '开启');

	

	$options[] = array(
		'name' => '分页模式',
		'id' => 'paging_type',
		'std' => "next",
		'type' => "radio",
		'options' => array(
			'next' => ' 上一页 和 下一页',
			'multi' => ' 显示页码，如：上一页 1 2 3 4 5 下一页'
		));

	

	$options[] = array(
		'name' => 'PC端分页无限加载',
		'id' => 'ajaxpager_s',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

	$options[] = array(
		'name' => '手机端分页无限加载',
		'id' => 'ajaxpager_s_m',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

	$options[] = array(
		'name' => '分页无限加载页数',
		'id' => 'ajaxpager',
		'std' => 10,
		'desc' => '为0时表示不开启分页无限加载功能，默认为10',
		'type' => 'text');


	


	













	
	$options[] = array(
		'name' => '接口',
		'type' => 'heading');

	$options[] = array(
		'name' => '解析切换接口列表',
		'id' => 'jiexiqiehuan',
		'std' => "<button onclick=\"xldata('http://api.wlzhan.com/sudu/?url=')\">线路一</button>
<button onclick=\"xldata('https://api.47ks.com/webcloud/?v=')\">线路二</button>
<button onclick=\"xldata('http://www.efunfilm.com/yunparse/index.php?url=')\">线路三</button>
<button onclick=\"xldata('http://api.nepian.com/ckparse/?url=')\">线路四</button>
<button onclick=\"xldata('http://aikan-tv.com/?url=')\">线路五</button>
<button onclick=\"xldata('http://j.zz22x.com/jx/?url=')\">线路六</button>
<button onclick=\"xldata('http://jiexi.071811.cc/jx2.php?url=')\">线路七</button>
<button onclick=\"xldata('http://api.wlzhan.com/sudu/?url=')\">线路八</button>
<button onclick=\"xldata('http://api.xfsub.com/index.php?url=')\">线路九</button>
<button onclick=\"xldata('https://api.flvsp.com/?url=')\">线路十</button>",
		'type' => 'textarea');


	$options[] = array(
		'name' => '统一接口',
		'id' => 'tongyijiekou',
		'std' => 'http://www.08yingyuan.com/jiexi?url=',
		'type' => 'text');


	$options[] = array(
		'name' => '爱奇艺解析',
		'id' => 'aiqiyijiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=iqiyi&url=',
		'type' => 'text');


	$options[] = array(
		'name' => '腾讯解析',
		'id' => 'qqjiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=qq&url=',
		'type' => 'text');
		
		
	$options[] = array(
		'name' => '搜狐解析',
		'id' => 'sohujiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=sohu&url=',
		'type' => 'text');


	$options[] = array(
		'name' => '优酷解析',
		'id' => 'youkujiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=youku&url=',
		'type' => 'text');


	$options[] = array(
		'name' => '土豆解析',
		'id' => 'tudoujiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=tudou&url=',
		'type' => 'text');


	$options[] = array(
		'name' => '乐视解析',
		'id' => 'lejiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=le&url=',
		'type' => 'text');

	$options[] = array(
		'name' => '58C值解析',
		'id' => '58jiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=58&url=',
		'type' => 'text');


	$options[] = array(
		'name' => '土豆值解析',
		'id' => 'tdyunjiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=tdyun&url=',
		'type' => 'text');


	$options[] = array(
		'name' => '优酷值解析',
		'id' => 'ykyunjiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=ykyun&url=',
		'type' => 'text');

	$options[] = array(
		'name' => '乐视值解析',
		'id' => 'letvjiexi',
		'std' => 'http://www.08yingyuan.com/jiexi?type=letv&url=',
		'type' => 'text');








	
	$options[] = array(
		'name' => '文章',
		'type' => 'heading');




	$options[] = array(
		'name' => '文章阅读数',
		'id' => 'post_post_views',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");


	$options[] = array(
		'name' => '文章页尾版权',
		'id' => 'post_copyright_s',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

	$options[] = array(
		'name' => '文章页尾版权：提示字符',
		'id' => 'post_copyright',
		'std' => '未经允许不得转载：',
		'type' => 'text');


	$options[] = array(
		'name' => '全屏查看相册模式',
		'id' => 'full_gallery',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");


	$options[] = array(
		'name' => '全屏查看图片模式',
		'id' => 'full_image',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");



	$options[] = array(
		'name' => '文章标签',
		'id' => 'post_tags_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");



	$options[] = array(
		'name' => '公众号',
		'id' => 'post_wechats_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");

	$options[] = array(
		'name' => '公众号：二维码',
		'id' => 'post_wechat_1_image',
		'desc' => '',
		'std' => $qrcode,
		'type' => 'upload');

	$options[] = array(
		'name' => '公众号：标题',
		'id' => 'post_wechat_1_title',
		'std' => '微信公众号：这是个测试',
		'type' => 'text');

	$options[] = array(
		'name' => '公众号：描述',
		'id' => 'post_wechat_1_desc',
		'std' => '关注我们，每天分享更多有趣的事儿，有趣有料！',
		'type' => 'text');

	$options[] = array(
		'name' => '公众号：关注数',
		'id' => 'post_wechat_1_users',
		'std' => '12000人已关注',
		'type' => 'text');




	$options[] = array(
		'name' => '分享',
		'id' => 'post_share_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");


	$options[] = array(
		'name' => '打赏',
		'id' => 'post_rewards_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");

	$options[] = array(
		'name' => '打赏：显示文字',
		'id' => 'post_rewards_text',
		'std' => '打赏',
		'type' => 'text');

	$options[] = array(
		'name' => '打赏：弹出层标题',
		'id' => 'post_rewards_title',
		'std' => '觉得文章有用就打赏一下文章作者',
		'type' => 'text');

	$options[] = array(
		'name' => '打赏：支付宝收款二维码',
		'id' => 'post_rewards_alipay',
		'desc' => '',
		'std' => $qrcode,
		'type' => 'upload');

	$options[] = array(
		'name' => '打赏：微信收款二维码',
		'id' => 'post_rewards_wechat',
		'desc' => '',
		'std' => $qrcode,
		'type' => 'upload');


	$options[] = array(
		'name' => '点赞',
		'id' => 'post_like_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");


	$options[] = array(
		'name' => '上一篇和下一篇文章',
		'id' => 'post_prevnext_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");


	$options[] = array(
		'name' => '相关文章',
		'id' => 'post_related_s',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

	$options[] = array(
		'name' => '相关文章：标题',
		'id' => 'related_title',
		'std' => '相关推荐',
		'type' => 'text');

	$options[] = array(
		'name' => '相关文章：显示数量',
		'id' => 'post_related_n',
		'std' => 8,
		'type' => 'text');


	$options[] = array(
		'name' => '被分享时优先选择文章特色图像',
		'id' => 'share_post_image_thumb',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');









	$options[] = array(
		'name' => '页面',
		'type' => 'heading');

	$options[] = array(
		'name' => '全屏查看相册模式',
		'id' => 'page_full_gallery',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");

	$options[] = array(
		'name' => '全屏查看图片模式',
		'id' => 'page_full_image',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");


	$options[] = array(
		'name' => '分享',
		'id' => 'page_share_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");

	$options[] = array(
		'name' => '点赞',
		'id' => 'page_like_s',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");







	
	$options[] = array(
		'name' => '评论',
		'type' => 'heading');

	$options[] = array(
		'name' => '评论标题',
		'id' => 'comment_title',
		'std' => '评论',
		'type' => 'text');

	$options[] = array(
		'name' => '评论框默认字符',
		'id' => 'comment_text',
		'std' => '你的评论可以一针见血',
		'type' => 'text');

	$options[] = array(
		'name' => '评论提交按钮字符',
		'id' => 'comment_submit_text',
		'std' => '提交评论',
		'type' => 'text');

	$options[] = array(
		'name' => '畅言APPID',
		'id' => 'cyappid',
		'std' => 'cysDEMHcG',
		'desc' => 'http://changyan.kuaizhan.com/install/code/pc 获取',
		'type' => 'text');

	$options[] = array(
		'name' => '畅言APPCyconf',
		'id' => 'cyconf',
		'std' => 'prod_7e11c97c49dde9f9473710e95fe9a695',
		'desc' => 'http://changyan.kuaizhan.com/install/code/pc 获取',
		'type' => 'text');


	$options[] = array(
		'name' => '心情评论',
		'id' => 'xinqing',
		'desc' => '开启',
		'std' => true,
		'type' => "checkbox");














	$options[] = array(
		'name' => '广告位',
		'type' => 'heading' );

	$ads = array(
		'ad_list_header' => '列表头部',
		'ad_list_footer' => '列表底部',
		'ad_post_header' => '文章内容上',
		'ad_post_footer' => '文章内容下',
		'ad_post_comment' => '文章评论上',
		'ad_page_header' => '页面内容上',
		'ad_page_footer' => '页面内容下',
		'ad_video_footer' => '视频播放下',
	);

	foreach ($ads as $key => $adtit) {
		$options[] = array(
			'name' => $adtit,
			'id' => $key.'_s',
			'std' => false,
			'desc' => '开启',
			'type' => 'checkbox');
		$options[] = array(
			'desc' => '非手机端'.' '.$adsdesc,
			'id' => $key,
			'std' => '',
			'settings'=>array('rows'=>6),
			'type' => 'textarea');
		$options[] = array(
			'id' => $key.'_m',
			'std' => '',
			'desc' => '手机端'.' '.$adsdesc,
			'settings'=>array('rows'=>6),
			'type' => 'textarea');
	}




	$options[] = array(
		'name' => '自定义代码',
		'type' => 'heading' );


	$options[] = array(
		'name' => '本站视频播放页下方提示',
		'desc' => '如不能正常播放请切换尝试，使用全网搜索资源观看，欢迎加入QQ交流群：97443118',
		'id' => 'benzhants',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => '自定义CSS样式',
		'desc' => '位于&lt;/head&gt;之前，直接写样式代码，不用添加&lt;style&gt;标签',
		'id' => 'csscode',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => '自定义头部代码',
		'desc' => '位于&lt;/head&gt;之前，这部分代码是在主要内容显示之前加载，通常是CSS样式、自定义的<meta>标签、全站头部JS等需要提前加载的代码',
		'id' => 'headcode',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => '自定义底部代码',
		'desc' => '位于&lt;/body&gt;之前，这部分代码是在主要内容加载完毕加载，通常是JS代码',
		'id' => 'footcode',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => '网站统计代码',
		'desc' => '位于底部，用于添加第三方流量数据统计代码，如：Google analytics、百度统计、CNZZ、51la，国内站点推荐使用百度统计，国外站点推荐使用Google analytics',
		'id' => 'trackcode',
		'std' => '',
		'type' => 'textarea');
		
		
		
	$options[] = array(
		'name' => '首页设置',
		'type' => 'heading' );

	$options[] = array(
		'name' => '首页显示电影推荐',
		'id' => 'homedianying',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
		
	$options[] = array(
		'name' => '首页显示电视剧推荐',
		'id' => 'homedianshiju',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
		
	$options[] = array(
		'name' => '首页显示动漫推荐',
		'id' => 'homedongman',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
		
	$options[] = array(
		'name' => '首页显示韩剧推荐',
		'id' => 'homehanju',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

	$options[] = array(
		'name' => '首页显示美剧推荐',
		'id' => 'homemeiju',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

		
		
	$options[] = array(
		'name' => '底部设置',
		'type' => 'heading' );

	$options[] = array(
		'name' => '是否启用底部横幅',
		'id' => 'footts',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启（总开关，如关闭,将除【底部说明】以外在本页全部设置无效）');
		
	$options[] = array(
		'name' => '横幅标题',
		'id' => 'foottitle',
		'std' => '08影院 - 海量高清VIP视频免费观看',
		'type' => 'text');
	
	$options[] = array(
		'name' => '是否启用第一个按钮',
		'id' => 'footbtn',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');

	$options[] = array(
		'name' => '按钮名称',
		'id' => 'footbtntitle',
		'std' => '联系客服',
		'type' => 'text');
		
	$options[] = array(
		'name' => '按钮链接',
		'id' => 'footbtnhref',
		'std' => 'http://www.baidu.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => '是否启用第二个按钮',
		'id' => 'footbtns',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
		
	$options[] = array(
		'name' => '按钮名称',
		'id' => 'footbtntitles',
		'std' => '加入Q群',
		'type' => 'text');
		
	$options[] = array(
		'name' => '按钮链接',
		'id' => 'footbtnhrefs',
		'std' => 'http://www.baidu.com',
		'type' => 'text');
		

	$options[] = array(
		'name' => '底部说明',
		'id' => 'footerp',
		'std' => '本站提供的最新电影和电视剧资源均系收集于各大视频网站,本站只提供web页面服务,并不提供影片资源存储,也不参与录制、上传',
		'type' => 'text');

	$options[] = array(
		'name' => '友情链接',
		'type' => 'heading' );
		
	$options[] = array(
		'name' => '是否启用友情链接',
		'id' => 'yqlj',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
	
	$options[] = array(
		'name' => '友情链接站点',
		'desc' => '格式：&lt;li&gt;&lt;a href="http://www.baidu.com" target="blank"&gt;百度&lt;/a&gt;&lt;/li&gt;',
		'id' => 'yqljurl',
		'std' => '<li><a href="http://www.08yingyuan.com" target="_blank">08影院</a><li><li><a href="http://www.xiaodao.la" target="_blank">小刀娱乐网</a><li>',
		'type' => 'textarea');

	$options[] = array(
		'name' => '资源站搜索',
		'type' => 'heading' );
		
	$options[] = array(
		'name' => '站内资源码',
		'id' => '08_zhanneiurl',
		'desc' => '如站内资源失效，请联系QQ805500091索要站内码',
		'std' => 'eWZkLnhpYW9zaG91emhhbmdiZW4uY29t',
		'type' => 'text');
	
	$options[] = array(
		'name' => '开启站外搜索',
		'id' => 'zhanwaiss',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
	
		$options[] = array(
		'name' => "选择目标资源站",
		'desc' => '目前提供以上资源站搜索，如需提供资源站可联系QQ805500091',
		'id' => "zy_so",
		'std' => "http://m.968sg.cn",
		'type' => "radio",
		'options' => array(
			'http://www.zuidazy.com' => '最大资源网 http://www.zuidazy.com',
			'http://www.cziyuan.cc' => 'C资源 http://www.cziyuan.cc',
			'http://m.968sg.cn' => '八千客资源站 http://m.968sg.cn',
			'http://www.ziyuanpian.com' => 'C值资源站 http://www.ziyuanpian.com',
		)
	);
	
	$options[] = array(
		'name' => '播放页设置',
		'type' => 'heading');
		
	$options[] = array(
		'name' => '第一排按钮的链接',
		'id' => 'pyiburl',
		'std' => 'http://shang.qq.com/wpa/qunwpa?idkey=63efb18ab3b5bafc5fdd86cbaeac72773d8f8f5415791c795d2d2aa3f17ae31f',
		'type' => 'text');
		
	$options[] = array(
		'name' => '第一排按钮的文字',
		'id' => 'pyibtext',
		'std' => '点我加入QQ群，使用08机器人！看视频，不迷路！',
		'type' => 'text');
		
	$options[] = array(
		'name' => '第二排的文字',
		'id' => 'pertext',
		'std' => '如等待10秒以上还未播放,请切换播放源或线路即可观看!',
		'type' => 'text');
		
	$options[] = array(
		'name' => '第三排按钮的链接',
		'id' => 'psanburl',
		'std' => 'http://www.soquan.win/aqq/',
		'type' => 'text');
		
	$options[] = array(
		'name' => '第三排按钮的文字',
		'id' => 'psanbtext',
		'std' => '点击下载【爱券券】一款可以让你爱不释手的省钱购物APP',
		'type' => 'text');
		
		
			
	$options[] = array(
		'name' => '淘宝客设置',
		'type' => 'heading');

	$options[] = array(
		'name' => '淘宝客：开启全站小企鹅',
		'id' => 'qieop',
		'type' => "checkbox",
		'std' => true,
		'desc' => '开启');
		
	$options[] = array(
		'name' => '淘宝客：小企鹅点击链接',
		'id' => 'qieopurl',
		'std' => 'http://www.taobao.com',
		'type' => 'text');
		
		
		
			
	$options[] = array(
		'name' => '赞助',
		'type' => 'heading');
		
	$options[] = array(
		'name' => '支付宝',
		'id' => 'zhifubao',
		'desc' => '18769732815@qq.com'
		
		);
	$options[] = array(
		'name' => '微信/QQ',
		'id' => 'zhifubao',
		'desc' => '805500091'
		
		);
	return $options;
}