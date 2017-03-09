<?php
namespace app\index\controller;

class Index extends  Auth
{
    public function index()
    {
        return $this->fetch("Index/index");
    }

    //初始页
    public function  index_v2()
    {
        return $this->fetch("Index/index_v2");
    }
    
    public  function  _empty()
    {
        echo "操作错误，点击!";
    }
}
