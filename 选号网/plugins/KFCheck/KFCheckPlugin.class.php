<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\KFCheck;//KFCheck插件英文名，改成你的插件英文就行了
use Common\Lib\Plugin;

/**
 * KFCheck
 */
class KFCheckPlugin extends Plugin{//KFCheck插件英文名，改成你的插件英文就行了

        public $info = array(
            'name'=>'KFCheck',//KFCheck插件英文名，改成你的插件英文就行了
            'title'=>'客服QQ验证',
            'description'=>'可用来验证查询QQ是否为平台客服或代理',
            'status'=>1,
            'author'=>'乐道菌',
            'version'=>'1.0'
        );
        
        public $has_admin=1;//插件是否有后台管理界面

        public function install(){//安装方法必须实现
            return true;//安装成功返回true，失败false
        }

        public function uninstall(){//卸载方法必须实现
            return true;//卸载成功返回true，失败false
        }
        


    }