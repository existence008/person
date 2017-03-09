<?php
namespace  app\index\controller;
use think\Controller;

class Auth extends  Controller
{
    public  function  __construct()
    {
        parent::__construct();
        if (empty(session("admin_name"))){
            $this->redirect("index/Admin/login");
        }
    }
}