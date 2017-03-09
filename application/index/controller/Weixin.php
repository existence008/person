<?php
namespace app\index\controller;

class Weixin extends Auth {

    // 微信基本配置
    public  function  index(){
        return $this->fetch("Weixin/index");
    }

    // 微信菜单
    public  function  menu(){
        return $this->fetch("Weixin/menu");
    }

    // 微信关键词添加
    public function keywords()
    {
    	return $this->fetch("Weixin/keywords");
    }

    // 微信关键词显示
    public function keywordslist()
    {
    	return $this->fetch("Weixin/keywordslist");
    }

    //微信模板消息显示
    public function messagelist()
    {
    	return $this->fetch("Weixin/messagelist");	
    }

    //微信模板消息添加
    public function messages()
    {
    	return $this->fetch("Weixin/messages");
    }

    //微信用户管理
    public function userlist()
    {
    	return $this->fetch("Weixin/userlist");
    }
}