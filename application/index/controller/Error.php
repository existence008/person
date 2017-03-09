<?php
namespace app\index\controller;
use think\Controller;

class Error extends  Controller
{
    public  function  index()
    {
        // 当无控制器是直接跳转首页
        $this->redirect("index/Index/index");
    }
}