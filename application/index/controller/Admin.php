<?php
namespace app\index\controller;
use think\Controller;
use think\Loader;
use think\Request;

class Admin extends Controller
{
    // 登陆模板渲染
    public  function  login(){
        return $this->fetch("Admin/login");
    }

    // 登陆检测
    public function  checkLogin()
    {

        $data = [
            "admin_name" => trim(Request::instance()->post('admin_name')),
            "admin_pwd" => trim(Request::instance()->post('admin_pwd'))
        ];
        $admin = Loader::model('Admin');
        $result = $admin->checkLogin($data);
        echo $result;
    }
	
	// 用户退出登陆
	public function loginOut()
	{
		session(null);
		$this->redirect("index/Admin/login");
	}
}