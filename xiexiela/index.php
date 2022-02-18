<?php
/*
 * 请勿使用windows下的记事本修改本文件。推荐使用 notepad++
 * 作者QQ：31997-31997
 */
 
 
 
 
 
 
 
$appId = '429050';  // 站点的APPID （请勿修改和泄漏）
$appKey = '0470D1DEFA911A285157A0643A9535C5';// 站点的APP KEY（请勿修改和泄漏）
$proxyVersion = 100;
$autoCleanCache = 200;


$taobao_putongpid = 'mm_102031157_25942148_105722181'; //网站普通PID 请填写PID ！
$taobao_queqiaopid = 'mm_102031157_12550597_63046643';//鹊桥PID 请填写PID ！ 鹊桥PID教程：https://jq.qq.com/?_wv=1027&k=5oCyL7n

$taobao_appkey = '23560249';//淘宝API的app key   教程：https://jq.qq.com/?_wv=1027&k=5oCyL7n
$taobao_secretKey = 'eda83b95a4b9106345606d0409c95e98';//淘宝API的app secret

//如果需要修改底部导航请阅读：http://www.taokecx.com/?id=13
//作者QQ:31997-31997













//===============================================================================
//===============================================================================
//===============================================================================
//================ 请勿修改以下程序 ====================
//===============================================================================
//===============================================================================
//===============================================================================


$host = "http://cms4.dataoke.com";


$test_env = strrpos(@$_SERVER['HTTP_USER_AGENT'], 'xiaochan')===false ? false : true;
$requestMethod = strtoupper(@$_SERVER["REQUEST_METHOD"]);
$requestUrl = @$_SERVER["REQUEST_URI"];
//debug
if ($test_env && isset($_GET['debug']) && $_GET['debug'] == 'php') {
 header("Content-type: text/html; charset=utf-8");
 echo 'cms 版本：' . $proxyVersion . '<br>';
 echo 'php 版本：' . PHP_VERSION . '<br>';
 if (function_exists('curl_init')) {
 echo 'curl 已经开启 ' . '<br>';
 } else {
 echo 'curl <span style="color: red">未开启</span>' . '<br>';
 }
 $test_dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache';
 $test_file=$test_dir.'/test.txt';
 if (!is_dir($test_dir)) {
 @mkdir($this->dir);
 }
 @file_put_contents($test_file,'test');
 if(file_exists($test_file)){
 echo 'cache：有效<br>';
 }else{
 echo 'cache <span style="color: red">无效</span>' . '<br>';
 }
 exit;
}

$cache = new CacheHelper();

if (isset($_REQUEST['clean'])) {
 $cache->clean();
 header("Content-type: text/html; charset=utf-8");
 echo '已清除缓存';
 exit;
}
if (mt_rand(0, $autoCleanCache) == 1) {
 $cache->clean();
}
$key = md5($requestUrl . CacheHelper::isMobile() . CacheHelper::isIPad() . CacheHelper::isIPhone() . CacheHelper::isMicroMessenger());
if ($requestMethod == 'GET') {
 if(!$test_env){
 $cacheData = $cache->Get($key);
 if ($cacheData !== false) {
 echo $cacheData;
 exit;
 }
 }
}

$documentUrl = @$_SERVER["PHP_SELF"];
if (empty($documentUrl)) {
 $documentUrl = @$_SERVER["SCRIPT_NAME"];
}
if (empty($documentUrl)) {
 $documentUrl = @$_SERVER["DOCUMENT_URI"];
}
if (empty($documentUrl)) {
 $documentUrl = $requestUrl;
 $str_pos = strpos($requestUrl, '?');
 if ($str_pos !== false) {
 $documentUrl = substr($requestUrl, 0, $str_pos);
 }
}

$httpHelper = new HttpHelper($appId, $appKey, $proxyVersion, $documentUrl);
$html = $httpHelper->getHtml($host, $requestUrl, $requestMethod == 'POST' ? @$_POST : array(), $requestMethod);
if ($requestMethod == 'GET' &&  !empty($html)) {
        require_once "main/Taokl.php";
    $TklHelper = new TklHelper($taobao_appkey ,$taobao_secretKey,$taobao_putongpid, $taobao_queqiaopid);
    $html = $TklHelper->getHtml($html, $requestUrl, $requestMethod == 'POST' ? @$_POST : array(), $requestMethod);
    $cache->Set($key, $html, 60);
 $cache->Set($key, $html, 60);
}
if ($html !== false) {
 echo $html;
}


class HttpHelper
{
 protected $appId;
 protected $key;
 protected $documentUrl;
 protected $proxyVersion;
 protected $upgradeUrl = "http://www.dataoke.com/personSetCms/index.php?r=userApply/upgrade";

 public $httpCode = 200;

 public function __construct($appId, $key, $proxyVersion, $documentUrl)
 {
 $this->appId = $appId;
 $this->key = $key;
 $this->documentUrl = $documentUrl;
 $this->proxyVersion = $proxyVersion;
 }


 /**
 * @param $url
 * @param $requestUrl
 * @param array $param
 * @param string $method
 * @param bool $isAjax
 * @param string $cookie
 * @param string $refer
 * @param null $userAgent
 * @param bool $checkNewVersion
 * @return string
 */
 public function getHtml($url, $requestUrl, $param = array(), $method = 'GET', $isAjax = null, $cookie = NULL, $refer = null, $userAgent = null, $checkNewVersion = true)
 {
 if(substr_count($requestUrl,'auth')){
 $url.='/auth';
 }
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_HEADER, 1);
 empty($refer) && $refer = @$_SERVER['HTTP_REFERER'];
 $ua = $userAgent;
 empty($ua) && $ua = @$_SERVER['HTTP_USER_AGENT'];
 curl_setopt($ch, CURLOPT_TIMEOUT, 20);
 curl_setopt($ch, CURLOPT_USERAGENT, $ua);
 curl_setopt($ch, CURLOPT_REFERER, $refer);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $header = array(
 'APPID: ' . $this->appId,
 'APPKEY: ' . $this->key,
 'PROXY-VERSION: ' . $this->proxyVersion,
 'CMS-HOST: ' . @$_SERVER["HTTP_HOST"],
 'DOCUMENT-URL: ' . $this->documentUrl,
 'REQUEST-URL: ' . $requestUrl,
 );
 //debug
 global $test_env;
 if ($test_env && isset($_GET['debug']) && $_GET['debug'] == 'header') {
 echo 'CMS-HOST: ' . @$_SERVER["HTTP_HOST"] . '<br>';
 echo 'DOCUMENT-URL: ' . $this->documentUrl . '<br>';
 echo 'REQUEST-URL: ' . $requestUrl . '<br>';
 exit;
 }
 $_isAjax = false;
 if ($isAjax) {
 $_isAjax = true;
 }
 if (!$_isAjax && $isAjax === null) {
 $_isAjax = $this->getIsAjaxRequest();
 }
 if ($_isAjax) {
 $header[] = 'X-Requested-With: XMLHttpRequest';
 }
 $clientIp = $this->get_real_ip();
 if (!empty($clientIp)) {
 $header[] = 'CLIENT-IP: ' . $clientIp;
 $header[] = 'X-FORWARDED-FOR: ' . $clientIp;
 }
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 if (empty($cookie)) {
 $cookie = $_COOKIE;
 }
 if (is_array($cookie)) {
 $str = '';
 foreach ($cookie as $k => $v) {
 $str .= $k . '=' . $v . '; ';
 }
 $cookie = $str;
 }
 if (!empty($cookie)) {
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 }
 if (strtolower($method) == 'post') {
 curl_setopt($ch, CURLOPT_POST, TRUE);
 if ($param) {
 curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
 }
 curl_setopt($ch, CURLOPT_URL, $url);
 } else {
 curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
 if ($param) {
 $urlInfo = parse_url($url);
 $q = array();
 if (isset($urlInfo['query']) && !empty($urlInfo['query'])) {
 parse_str($urlInfo['query'], $q);
 }
 $q = array_merge($q, $param);
 $cUrl = sprintf('%s://%s%s%s%s',
 $urlInfo['scheme'],
 $urlInfo['host'],
 isset($urlInfo['port']) ? ':' . $urlInfo['port'] : '',
 isset($urlInfo['path']) ? $urlInfo['path'] : '',
 count($q) ? '?' . http_build_query($q) : '');
 curl_setopt($ch, CURLOPT_URL, $cUrl);
 } else {
 curl_setopt($ch, CURLOPT_URL, $url);
 }
 }

 $r = curl_exec($ch);
 $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
 $header = mb_substr($r, 0, $headerSize);
 $r = mb_substr($r, $headerSize);
 $this->httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 curl_close($ch);
 unset($ch);
 $headers = explode("\r\n", $header);

 if ($this->httpCode != 200) {
 $this->setHttpResponseCode($this->httpCode);
 }
 $expires=time()+300;
 foreach ($headers as $h) {
 $h = trim($h);
 if (empty($h) || preg_match('/^(HTTP|Connection|EagleId|Server|X\-Powered\-By|Date|Transfer\-Encoding|Content)/i', $h)) {
 continue;
 }
 if(substr_count($h,'expires:')){
 $temp_arr=explode(':',$h);
 if(!empty($temp_arr[1])&&is_numeric(trim($temp_arr[1]))){
 $expires=intval(trim($temp_arr[1]));
 }
 }
 if(substr_count($h,'Cookie')){

 $h=explode(':',$h);
 if(!empty($h[1])){
 $h=explode('=',$h[1]);
 if(!empty($h[0])&&!empty($h[1])){
 @setcookie(trim($h[0]),trim($h[1]),$expires);
 }
 }
 }else{
 header($h);
 }
 }
 //debug
 if ($test_env && isset($_GET['debug']) && $_GET['debug'] == 'res') {
 var_dump($r);
 exit;
 }
 //debug
 if ($test_env && isset($_GET['debug']) && $_GET['debug'] == 'resheader') {
 var_dump($headers);
 exit;
 }
 if ($this->httpCode != 200 &&$this->httpCode != 302 ) {
 return false;
 }

 foreach ($headers as $h) {
 if ($checkNewVersion && preg_match('/pv:\s*(?P<pv>\d+)/i', $h, $regs)) {
 $pv = $regs['pv'];
 if ($pv > $this->proxyVersion) {
 $this->upgrade();
 }
 }
 }

 return $r;
 }

 protected function upgrade()
 {
 $php = $this->getHtml($this->upgradeUrl, '', array(), 'GET', false, null, null, null, false);
 if ($php === false || strlen($php) < 500) {
 return;
 }
 $php=@json_decode($php,true);
 if(empty($php['appid'])||empty($php['appkey'])||empty($php['content'])||$php['appid']!==$this->appId){
 return ;
 }
 $file = @$_SERVER["DOCUMENT_ROOT"] . $this->documentUrl;
 if (!defined("DTK_TYPE")) {
 @file_put_contents($file, $php['content'], LOCK_EX);
 }else{
 $file .= 'req.php';
 @file_put_contents($file, $php['content'], LOCK_EX);
 }
 }


 function get_real_ip()
 {
 if (@$_SERVER["HTTP_X_FORWARDED_FOR"]) {
 $ip = @$_SERVER["HTTP_X_FORWARDED_FOR"];
 } elseif (@$_SERVER["HTTP_CLIENT_IP"]) {
 $ip = @$_SERVER["HTTP_CLIENT_IP"];
 } elseif (@$_SERVER["REMOTE_ADDR"]) {
 $ip = @$_SERVER["REMOTE_ADDR"];
 } elseif (getenv("HTTP_X_FORWARDED_FOR")) {
 $ip = getenv("HTTP_X_FORWARDED_FOR");
 } elseif (getenv("HTTP_CLIENT_IP")) {
 $ip = getenv("HTTP_CLIENT_IP");
 } elseif (getenv("REMOTE_ADDR")) {
 $ip = getenv("REMOTE_ADDR");
 } else {
 $ip = "";
 }
 return $ip;
 }

 public function getIsAjaxRequest()
 {
 return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
 }

 public function setHttpResponseCode($code){
 switch ($code) {
 case 100: $text = 'Continue'; break;
 case 101: $text = 'Switching Protocols'; break;
 case 200: $text = 'OK'; break;
 case 201: $text = 'Created'; break;
 case 202: $text = 'Accepted'; break;
 case 203: $text = 'Non-Authoritative Information'; break;
 case 204: $text = 'No Content'; break;
 case 205: $text = 'Reset Content'; break;
 case 206: $text = 'Partial Content'; break;
 case 300: $text = 'Multiple Choices'; break;
 case 301: $text = 'Moved Permanently'; break;
 case 302: $text = 'Moved Temporarily'; break;
 case 303: $text = 'See Other'; break;
 case 304: $text = 'Not Modified'; break;
 case 305: $text = 'Use Proxy'; break;
 case 400: $text = 'Bad Request'; break;
 case 401: $text = 'Unauthorized'; break;
 case 402: $text = 'Payment Required'; break;
 case 403: $text = 'Forbidden'; break;
 case 404: $text = 'Not Found'; break;
 case 405: $text = 'Method Not Allowed'; break;
 case 406: $text = 'Not Acceptable'; break;
 case 407: $text = 'Proxy Authentication Required'; break;
 case 408: $text = 'Request Time-out'; break;
 case 409: $text = 'Conflict'; break;
 case 410: $text = 'Gone'; break;
 case 411: $text = 'Length Required'; break;
 case 412: $text = 'Precondition Failed'; break;
 case 413: $text = 'Request Entity Too Large'; break;
 case 414: $text = 'Request-URI Too Large'; break;
 case 415: $text = 'Unsupported Media Type'; break;
 case 500: $text = 'Internal Server Error'; break;
 case 501: $text = 'Not Implemented'; break;
 case 502: $text = 'Bad Gateway'; break;
 case 503: $text = 'Service Unavailable'; break;
 case 504: $text = 'Gateway Time-out'; break;
 case 505: $text = 'HTTP Version not supported'; break;
 default: $text = '';break;
 }
 $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
 header($protocol . ' ' . $code . ' ' . $text);
 }
}

class CacheHelper
{
 protected $dir = '';

 public function __construct()
 {
 $this->dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache';
 if (is_dir($this->dir)) {
 return;
 }
 @mkdir($this->dir);
 }

 public function Set($key, $value, $expire = 360)
 {
 $data = array(
 'time' => time(),
 'expire' => $expire,
 'value' => $value
 );
 @file_put_contents($this->dir . DIRECTORY_SEPARATOR . md5($key) . 'cache', serialize($data));
 }

 public function Get($key)
 {

 $file = $this->dir . DIRECTORY_SEPARATOR . md5($key) . 'cache';
 if (!file_exists($file)) {
 return false;
 }
 $str = @file_get_contents($file);
 if (empty($str)) {
 return false;
 }
 $data = @unserialize($str);
 if (!isset($data['time']) || !isset($data['expire']) || !isset($data['value'])) {
 return false;
 }
 if ($data['time'] + $data['expire'] < time()) {
 return false;
 }
 return $data['value'];
 }

 static function isMobile()
 {
 $ua = @$_SERVER['HTTP_USER_AGENT'];
 return preg_match('/(iphone|android|Windows\sPhone)/i', $ua);
 }

 public function clean()
 {
 if (!empty($this->dir) && is_dir($this->dir)) {
 @rmdir($this->dir);
 }
 $files = scandir($this->dir);
 foreach ($files as $file) {
 @unlink($this->dir . DIRECTORY_SEPARATOR . $file);
 }
 }


 static function isMicroMessenger()
 {
 $ua = @$_SERVER['HTTP_USER_AGENT'];
 return preg_match('/MicroMessenger/i', $ua);
 }

 static function isIPhone()
 {
 $ua = @$_SERVER['HTTP_USER_AGENT'];
 return preg_match('/iPhone/i', $ua);
 }

 static function isIPad()
 {
 $ua = @$_SERVER['HTTP_USER_AGENT'];
 return preg_match('/(iPad|)/i', $ua);
 }
}