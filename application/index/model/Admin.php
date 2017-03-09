<?php
namespace app\index\model;
use think\Model;

class Admin extends Model
{
        public  function  checkLogin($data)
        {
            $admin_name = $data['admin_name'];
            $admin_pwd = $data['admin_pwd'];
            $res = Admin::get(["admin_name" => $admin_name]);
            if (empty($res)){
                return "用户名不正确!";
            }else{
                if (md5($admin_pwd) == $res->admin_pwd){
					if($res->admin_status == 1){
						session("admin_name", $admin_name);
						return "1";
					}else{
						echo "该用户暂无权限，请联系站长!";
					}
                }else{
                    return "0";
                }
            }
        }
		
		
}