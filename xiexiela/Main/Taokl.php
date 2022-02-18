<?php 
/*
 * 请勿使用windows下的记事本修改本文件。推荐使用 notepad++
 * 作者QQ:31997-31997
 */
error_reporting(0);
date_default_timezone_set('PRC');
class TklHelper
{
    protected $appkey;
    protected $secretKey;
    protected $html_dom;
    public function __construct($appkey, $secretKey)
    {
        $this->appkey = $appkey;
        $this->secretKey = $secretKey;
    }
    function getHtml($html, $requestUrl, $param = array())
    {        
         require_once 'simple_html_dom.php';
       

         if (strstr($requestUrl, "r=p/d")) {
           $this ->html_dom  = str_get_html($html);
            return  $this->setTKL($html);
        }else if (strstr($requestUrl, "?r=index/cat")) {
            return $this->Mtheme($html);
        }else if (strstr($requestUrl, "?r=index/classify")) {
            return $this->Mtheme($html);
        }else if (strstr($requestUrl, "r=index/wap") or  strstr($requestUrl, "r=p/wap") or  strstr($requestUrl, "r=ddq/wap") or  strstr($requestUrl,"r=index/9") or strstr($requestUrl,"r=index/r") or strstr($requestUrl, "r=index%2Fsearch") ) {
            return $this->Mtheme($html);
        }else{
			 return $this->PCtheme($html);
		}
        return $html ;
    }
	function PCtheme($html){
        require_once './Theme/pc.php';
        return $html;
	}
	function Mtheme($html){
        require_once './Theme/m.php';
        return $html;
	}
    function setTKL($shtml)
    {
		
function kouling($url, $neirong, $appkey, $secretKey)
{
    $c = new TopClient ();
    $c->appkey =$appkey;
    $c->secretKey = $secretKey;

    $req = new WirelessShareTpwdCreateRequest ();
    $tpwd_param = new IsvTpwdInfo ();
    $tpwd_param->ext = "{\"xx\":\"xx\"}";
	$tpwd_param->logo = "http://f.hiphotos.baidu.com/zhidao/pic/item/b8014a90f603738d4c5c2242b51bb051f819ecb8.jpg";
    if (!empty ($neirong)) {
        $tpwd_param->text = $neirong;
    } else {
        $tpwd_param->text = "粉丝福利购，立即领券~";
    }
    $tpwd_param->url = $url;
    $tpwd_param->user_id = "24234234234";
    $req->setTpwdParam(json_encode($tpwd_param));
    $resp = $c->execute($req);
    $koulong = $resp->model;
    return $koulong;
}
function html($html, $lianjie, $tupian, $neirong, $appkey, $secretKey)
{
    $kouling = kouling($lianjie["link"], $lianjie["title"], $appkey, $secretKey);
    $html = str_ireplace('<div class="recommend-wrapper">', '<style>.btn{display:inline-block;font-family:"微软雅黑";vertical-align:middle;font-weight:400;font-size:9pt;line-height:1.2;padding:9pt;border-radius:2px;cursor:pointer;outline:0;-webkit-appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:background-color .3s ease-out,border-color .3s ease-out;transition:background-color .3s ease-out,border-color .3s ease-out}.am-btn-danger{color:#fff;background-color:#dd514c;border-color:#dd514c}.detail-command-box{border:1px dashed #f60}.am-panel{margin:10px;background-color:#fff;border-radius:0;box-shadow:0 1px 1px rgba(0,0,0,.05)}.am-panel-bd{padding:7px}.kl-tkl{color:#ff6a6a}.detail-command-box textarea{width:100%;height:100%}.am-btn-success{background-color:#02ae69;border-color:#02ae69}.am-btn-default{background-color:#D49700;border-color:#D49700}.detail-command-box textarea{height: 37px;overflow:hidden;border:none;outline:0;resize:none;font-family:Arial,microsoft yahei}</style>
    <input style="display:none;" id="Tkl" value="'.$kouling.'">
	<div class="detail-command-box am-panel">
	<div class="am-panel-bd"><span id="code1_ios" class="kl-tkl" style="display: none;">复制框内整段文字，打开「手机淘宝」即可「领取优惠券」并购买'.$kouling.'</span><textarea class="kl-tkl" id="android1" onfocus="iptNum(this, true);" oninput="iptNum(this, false);">复制框内整段文字，打开「手机淘宝」即可「领取优惠券」并购买'.$kouling.'</textarea></div></div>
	<div style="text-align: center;"><button type="button" class="btn am-btn am-btn-danger am-round btn-kouling" data-clipboard-text="'.$kouling.'">一键复制淘口令</button></div>
	<script src="Taokl/js/clipboard.min.js"></script>
	<script>
    $(".btn-kouling").attr("data-clipboard-text", $("#Tkl").val())
    var clipboard = new Clipboard(\'.btn-kouling\')
    clipboard.on(\'success\', function(e) {
        $(".btn-kouling").text("复制成功,打开手机淘宝即可购买!")
        $(".btn-kouling").addClass("am-btn-success").removeClass("am-text-primary")
    });
    clipboard.on(\'error\', function(e) {
        $(".btn-kouling").text("浏览器阻止,复制失败,请手动复制淘口令，打开手机淘宝即可购买!")
        $(".btn-kouling").addClass("am-btn-default").removeClass("am-text-primary")
    });
	</script>
	<div class="recommend-wrapper">', $html);
    return $html;
}
        $lianjie = $this->getLianJie($shtml);
        if (!empty($lianjie) || strpos($lianjie, 'uland.taobao.com') !== false) {
            include "./topsdk/TopSdk.php";
            $tupian = "";
            $neirong = "";
            $appkey = $this->appkey;
            $secretKey = $this->secretKey;
            $ret = html($shtml, $lianjie, $tupian, $neirong, $appkey, $secretKey);
        } else {
            $ret = $shtml;
        }
        return $ret;
   }
    function getLianJie($html){
        try {
            $a = $this->html_dom->find('.img .ui-link', 0);
            $link = $a->href;
			if(!$link){
				$link = 'http://www.taobao.com';
				echo '<style>.detail-command-box{display:none}.am-btn{display:none !important}</style>';
			};
            $eTitle = $this->html_dom->find('.title-wrapper', 0);
            $eImage = $eTitle->prev_sibling();
            $title = trim($eTitle->plaintext);
        } catch (Exception $e) {
            $title = '';
            $link = '';
        }
        return   array("title" =>$title, "link" => $link );
}
}