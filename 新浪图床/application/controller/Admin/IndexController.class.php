<?php
namespace application\controller\Admin;
use framework\core\Controller;
use framework\core\Factory;
/**
* 后台首页控制器
*/
class IndexController extends Controller{

    public function __construct(){
        $this->checksession();
    }

	// 显示后台首页
	public function IndexAction(){
		$result = Factory::M('IndexModel');
		if (function_exists("imagecreate")) {
            if (function_exists('gd_info')) {
                $ver_info = gd_info();
                $gd_ver = $ver_info['GD Version'];
            } else{
                $gd_ver = '支持';
            }
        } else{
            $gd_ver = '不支持';
        }
        $this->assign('username',$_SESSION['authen']['role']=='admin'?'管理员':$_SESSION['authen']['username']);
        $this->assign('prefix',$result->getPrefix());
        $this->assign('gd_ver',$gd_ver);
        $this->assign('version',$result->getVersion());
		$this->display('application/view/Admin/header.php');
		$this->display('application/view/Admin/index.php');
		$this->display('application/view/Admin/footer.php');
	}
}
