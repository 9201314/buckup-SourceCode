<?php
if(isset($_POST['user']) && isset($_POST['pass'])){
	if($_POST['user']=='admin'&&$_POST['pass']=='123456'){
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('登陆管理中心成功！');window.location.href='./dedeweb.php';</script>");
	}else{
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('用户名或密码不正确！');history.go(-1);</script>");
	}
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>后台首页</title>
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
  <![endif]--></head>
<body>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">织梦云建站系统</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a><span class="glyphicon glyphicon-user"></span> 网站设置</a>
          </li>
		  <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> 网站管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a>添加网站</a></li>
			  <li><a >站点列表</a><li>
            </ul>
          </li>
		  <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-ok"></span> 授权管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a>秒赞授权</a></li>
			  <li><a >代挂授权</a><li>
			   <li><a >监控授权</a><li>
			    <li><a >云授权授权</a><li>
            </ul>
          </li>
		   <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cloud"></span> 社工管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a>QQ列表</a></li>
			  <li><a >资料仓库</a><li>
			   <li><a >贴吧资料</a><li>
            </ul>
          </li>
          <li><a href="index_Tem.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
<div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">安全验证</h3></div>
        <div class="panel-body">
		检测到您当前登录地点与设置IP段不符 请输入验证码完成验证</p>
		<img title="点击刷新" src="http://www.qqzzz.net/www/verifycode.php" onclick="this.src='verifycode.php?'+Math.random();" style="max-height:42px;vertical-align:middle;" class="img-rounded"></p>
		<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">验证码</span>
  <input type="text" class="form-control" placeholder="请输入图中验证码" aria-describedby="basic-addon1"/></div></p>
  <button type="submit" class="btn btn-primary btn-block bk-margin-top-10">确认提交</button>
</div>
    </div>
	<meta http-equiv="refresh" content="6;url=eee.html" /> 
    <script type="text/javascript" src="../js/count.js"></script>
    </body>