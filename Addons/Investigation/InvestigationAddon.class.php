<?php

namespace Addons\Investigation;
use Common\Controller\Addon;

/**
 * 调研插件
 * @author terry
 */

    class InvestigationAddon extends Addon{

        public $info = array(
            'name'=>'Investigation',
            'title'=>'调研',
            'description'=>'测试调研',
            'status'=>1,
            'author'=>'terry',
            'version'=>'0.1',
            'has_adminlist'=>1,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/Investigation/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Investigation/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }