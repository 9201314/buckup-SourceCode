<?php
/**
 * 基础函数库
 * @copyright (c) 幻想领域 All Rights Reserved
 */

/**
 * 消息对话框
 * @param string $msg   消息内容
 * @param string $type  消息类型
 * @param string $text  消息提示内容
 * 具体参数请参考sweetalert官方文档
 */
function Msg($msg,$type="success",$text=""){
    $title = $GLOBALS['appconfig']['title'];
	$weburl = getWebUrl();
	echo <<<EOT
	<!DOCTYPE html>
	<head>
        <link rel="icon" href="{$weburl}application/view/Home/images/favicon.ico">
    	<meta charset='utf-8'>
        <link href="https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script src="https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    	<title>提示信息 - {$title}</title>
	</head>
	<body>
    </body>
    <script type="text/javascript">
        swal({ 
            title: "{$msg}",
            text: "{$text}", 
            type: "{$type}",
        },
        function(){ 
            window.location.href="$weburl";
        });
    </script>
</html>
EOT;
exit;
}

/**
 * 获取随机文件名
 * @param   string  $ext    文件后缀名, 如".png"
 * @return  string          文件名
 */
function getRandName($ext=''){
    return md5(date('YmdHis').uniqid(true, true).mt_rand()) . $ext;
}

/**
 * 获取文件后缀
 * @param   string  $name   文件名
 * @return  string
 */
function getFileExt($name){
    return pathinfo($name, PATHINFO_EXTENSION);
}

/**
 * 获取站点地址
 */
function getWebUrl() {

	$http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';   
	$PHP_SELF=$_SERVER['SCRIPT_NAME'];

	$url = $http_type . $_SERVER['SERVER_NAME'] . substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);

	return $url;
}

/**
 * 验证email地址格式
 */
function checkMail($email) {
    if (preg_match("/^[\w\.\-]+@\w+([\.\-]\w+)*\.\w+$/", $email) && strlen($email) <= 60) {
        return true;
    } else {
        return false;
    }
}

/**
 * 验证密码合法性
 */
function checkPass($pass){
    if (preg_match("/^(\w){6,20}$/",$pass)) {
        return true;
    }else{
        return false;
    }
}

/**
 * 验证用户名合法性
 */
function checkNmae($name){
    if (preg_match("/^[a-zA-Z0-9\x{4e00}-\x{9fa5}]+$/u",$name)) {
        return true;
    }else{
        return false;
    }
}

/**
 * 获取用户ip地址
 */
function getIp() {
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        $ip = '';
    }
    return $ip;
}

/**
 * 页面跳转
 */
function Jump($directUrl) {
    header("Location: $directUrl");
    exit;
}

/**
 * 取本文中间
 */
function getSubstr($str,$leftStr,$rightStr){
    $left = strpos($str, $leftStr);
    //echo '左边:'.$left;
    $right = strpos($str, $rightStr,$left);
    //echo '<br>右边:'.$right;
    if($left <= 0 or $right < $left) return '';
    return substr($str, $left + strlen($leftStr), $right-$left-strlen($leftStr));
}

/**
 * 配置文件设置
 * @param  array $array  配置项名称=>配置项值
 * @return boot        成功返回true，失败返回false
 */
function configSet($array){
    $config = file_get_contents('application/config.php');
    foreach ($array as $key => $value) { 
        $v = getSubstr($config,"'$key' => '","',");
        $config = str_replace("'$key' => '$v',","'$key' => '$value',",$config);
    }
    return file_put_contents('application/config.php', $config);
}

/**
 * 获取配置文件信息
 * @param  [type] $name [description]
 * @return [type]       [description]
 */
function configGet($name){
    return $GLOBALS['appconfig'][$name];
}

/**
 * 转换HTML代码函数
 *
 * @param unknown_type $content
 * @param unknown_type $wrap 是否换行
 */
function htmlClean($content, $nl2br = true) {
    $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
    if ($nl2br) {
        $content = nl2br($content);
    }
    $content = str_replace('  ', '&nbsp;&nbsp;', $content);
    $content = str_replace("\t", '&nbsp;&nbsp;&nbsp;&nbsp;', $content);
    return $content;
}

/**
 * 使用get方式请求指定页面
 * @param  [type] $url [description]
 * @return [type]      [description]
 */
function curl_get_https($url){
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
    $tmpInfo = curl_exec($curl);
    curl_close($curl);
    return $tmpInfo;
}

/**
 * 时间转化函数
 *
 * @param $datetemp
 * @param $dstr
 * @return string
 */
function smartDate($datetemp, $dstr = 'Y-m-d H:i') {
    $op = '';
    $sec = time() - $datetemp;
    $hover = floor($sec / 3600);
    if ($hover == 0) {
        $min = floor($sec / 60);
        if ($min == 0) {
            $op = $sec . ' 秒前';
        } else {
            $op = "$min 分钟前";
        }
    } elseif ($hover < 24) {
        $op = "约 {$hover} 小时前";
    } else {
        $op = date($dstr, $datetemp);
    }
    return $op;
}
/**
 * 深度转义数据
 * @param array $input  待转义的数组，$_GET,$_POST
 * @return array        处理过的数组
 */
function deepEscape($input){
    foreach ($input as $key => $value) {
        if (is_array($value)) {
            //递归调用
            $input[$key] = deepEscape($value);
        }else{
            //转义
            $input[$key] = addslashes($value);
            // HTML实体
            $input[$key] = htmlClean($value);
        }
    }
    return $input;
}
/**
 * 判断是否为手机浏览器
 * @return boolean
 */
function is_mobile(){

    // returns true if one of the specified mobile browsers is detected
    // 如果监测到是指定的浏览器之一则返回true
    
    $regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
    
   $regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
    
    $regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
    
    $regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";   
    
    $regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
    
    $regex_match.=")/i";
    
    // preg_match()方法功能为匹配字符，既第二个参数所含字符是否包含第一个参数所含字符，包含则返回1既true
    return preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
}

