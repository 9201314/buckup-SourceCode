<?php
error_reporting(0);
$siteurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].'/';

$array = array();
for ($x = 1; $x <= 55; $x++) {
    if (!empty($_POST["con{$x}"])) {
		$array["con{$x}"] = htmlspecialchars($_POST["con{$x}"]);
    }
}
$hash = gethash();
$temid = gettemid();

if(!preg_match('/^[a-zA-Z0-9\_]+$/',$temid))exit('temid error!');

$vip = vip($temid);
if (!$vip) {
	$data['id'] = $hash;
	$data['temid'] = $temid;
	$data['content'] = $array;

	$file_name = './data/'.$hash.'.json';
	file_put_contents($file_name, json_encode($data));

    $resurl = $siteurl.'web.php?id='.$hash;
    $resjg = '成功';
}else{
	$resjg = '失败';
}
function gethash($len = 7)
{
	$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$strlen = strlen($str);
	$randstr = "";
	for ($i = 0; $i < $len; $i++) {
		$randstr .= $str[mt_rand(0, $strlen - 1)];
	}
	return $randstr;
}
function gettemid()
{
	$urldz = $_SERVER['HTTP_REFERER'];
    $urllength = strlen($urldz) - 2;
    for ($i = $urllength; $i >= 0; $i--) {
        if (substr($urldz, $i, 1) == '/') {
            $temid = substr($urldz, $i + 1, $urllength - $i);
            break;
        }
    }
	return $temid;
}
function vip($temid)
{
    include "config.php";
    
    $viptem = urldecode($viptem);
    $viptem = json_decode($viptem, 1);
    $array = array();
    for ($i = 0; $i < count($viptem['geren']); $i++) {
        $array[] = $viptem['geren'][$i];
    }
    for ($i = 0; $i < count($viptem['biaobai']); $i++) {
        $array[] = $viptem['biaobai'][$i];
    }
    for ($i = 0; $i < count($viptem['quwei']); $i++) {
        $array[] = $viptem['quwei'][$i];
    }
    $viptem = $array;
    $viptem_num = count($viptem);
    for ($i = 0; $i < $viptem_num; $i++) {
        if ($viptem[$i] == $temid) {
            if (!empty($_COOKIE["vip_username"]) && !empty($_COOKIE["vip_password"])) {
                $vip_username = $_COOKIE["vip_username"];
                $vip_password = $_COOKIE["vip_password"];
                $json_name = "plugin/vip_users.json";
                $json_string = file_get_contents($json_name);
                $obj = json_decode($json_string);
                $users = $obj->users;
                $users_num = count($users);
                if ($users_num != 0) {
                    for ($i = 0; $i < $users_num; $i++) {
                        if ($users[$i][0] == $vip_username && $users[$i][1] == $vip_password) {
                            return false;
                            break;
                        } else {
                            if ($i == $users_num - 1) {
                                return true;
                            }
                        }
                    }
                } else {
                    return true;
                }
            } else {
                return true;
            }
            break;
        } else {
            if ($i == $viptem_num - 1) {
                return false;
            }
        }
    }
}