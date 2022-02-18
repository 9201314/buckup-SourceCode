<?php if(!defined('APP_PATH')) {exit('error!');}?>
</div>
<div class="layui-footer">
    欢迎使用 &copy; <a href="<?php echo PATH_URL;?>" target="_black"><?php echo configGet('title');?></a><?php if($_SESSION['authen']['role'] == 'admin'):?> V1.0  <a href="JavaScript:void(0);" onclick="alert('你当前的版本已经是最新版了');">检查更新</a><?php endif;?>
</div>
</div>
<script>
layui.use('element', function(){
  var element = layui.element;
});
</script>
</body>
</html>