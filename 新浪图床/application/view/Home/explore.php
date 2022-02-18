<?php if(!defined('APP_PATH')) {exit('error!');}?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $keywords;?>" />
    <meta name="description" content="<?php echo $description;?>" />
    <meta name="author" content="阿珏博客">
    <meta name="generator" content="幻想领域">
    <link rel="icon" href="<?php echo PATH_VIEW;?>Home/images/favicon.ico">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>探索 - <?php echo $GLOBALS['appconfig']['title'];?></title>
    <style>
	.jq22-container { 
        margin-top: 50px; 
    }
	#div1 { margin: auto; position: relative; }
	.box { float: left; padding: 10px; border: 1px solid #ccc; background: #f7f7f7; box-shadow: 0 0 8px #ccc; }
	.box:hover { box-shadow: 0 0 10px #999; }
	.box img { width: 240px; }
	</style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo PATH_URL;?>"><?php echo $GLOBALS['appconfig']['title'];?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo PATH_URL;?>Home/Index/ExploreAction.html"> <span class="glyphicon glyphicon-picture"></span> 探索 <span class="sr-only">(current)</span></a></li>
            <li><a href="javascript:volid(0);"><span class="glyphicon glyphicon-random"></span> 随机</a></li>
            <li><a href="javascript:volid(0);"><span class="glyphicon glyphicon-search"></span> 搜索</a></li>
          </ul>
          <!-- 他们将在未来的版本中被支持 -->
          <!-- <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">搜索</button>
          </form> -->
          <ul class="nav navbar-nav navbar-right">
        <?php foreach ($navbar as $v) :?>
            <li><a href="<?php echo $v['url'];?>"> <span class="<?php echo $v['icon'];?>"></span> <?php echo $v['naviname'];?></a></li>
        <?php endforeach;if($AUTH !=''):?>
            <li class="dropdown">
              <a href="javascript:volid(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $AUTH;?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo PATH_URL;?>Admin/Index/IndexAction.html">个人中心</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo PATH_URL;?>Home/User/LogoutAction.html">退出</a></li>
              </ul>
            </li>
        <?php else: ?>
            <li><a href="<?php echo PATH_URL;?>"> <span class="glyphicon glyphicon-send"></span> 注册 / 登录</a></li>
        <?php endif;?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="jq22-container">
        <div class="jq22-content bgcolor-3">
        	<div id="div1"><?php foreach ($rand as $value) :?>
             	<div class="box"><a href="https://ws3.sinaimg.cn/large/<?php echo $value['pid'];?>" target="_blank"><img src="https://ws3.sinaimg.cn/<?php echo $level;?>/<?php echo $value['pid'];?>" alt=""></a></div><?php endforeach; ?>
            </div>
      </div>
    </div>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo PATH_VIEW;?>Home/js/jquery.waterfall.js"></script> 
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $("#div1").waterfall({
        itemClass: ".box",
	    minColCount: 2,
	    spacingHeight: 10,
	    resizeable: true,
	    ajaxCallback: function(success, end) {
            $.ajax({
                url: 'RandomAction',
                dataType: 'json',
                success: function(res){
                    var str = "";
                    var templ = '<div class="box" style="opacity:0;filter:alpha(opacity=0);"><div class="pic"><a href="{{href}}" target="_blank"><img src="{{src}}" /></div></div>';
                    for(var i = 0; i < res.src.length; i++) {
                        temp2 = templ.replace("{{src}}", res.src[i]);
                        url = res.src[i];
                        str += temp2.replace("{{href}}",url.replace(url.match(/cn\/(.*)\//)[1],'large'));
                    }
                    $(str).appendTo($("#div1"));
                    success();
                    end();
                }
            });
	    }
	});
	</script>
  </body>
</html>
