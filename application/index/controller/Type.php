<?php
namespace  app\index\controller;

use think\Loader;
use think\Request;

class Type extends  Auth
{

    // 类型显示
    public  function  index()
    {
        $type = Loader::model("Type");
        $res = $type->getAllDates();
        $this->assign("typeDates", $res);
        return $this->fetch("Type/index");
    }

    // 类型添加页面显示
    public  function  add()
    {
        return $this->fetch("Type/add");
    }

    // 类型添加
    public  function  addType()
    {
        $data = [
            "type_name" => Request::instance()->post('type_name'),
            "type_status" => Request::instance()->post('type_status')
        ];
        $type = Loader::model("Type");
        $res = $type->add($data);
        echo $res;

    }

    // 修改类型的状态
    public  function  editStatus(){
        $data = [
            "type_id" => Request::instance()->post('type_id'),
            "type_status" => Request::instance()->post('type_status')
        ];
        $type = Loader::model('Type');
        $res = $type->editStatus($data);
        echo $res;
        die();
    }

    // 修改数据
    public function editType(){
        $data = [
            "type_status" => Request::instance()->post("type_status"),
            "type_name" => Request::instance()->post("type_name"),
            "type_id" => Request::instance()->post("type_id")
        ];
        $type = Loader::model("Type");
        $result = $type->editType($data);
        echo json_encode(["result" => $result]);
    }

    // 删除数据
    public function del()
    {
        $data = ["type_id" => Request::instance()->post('type_id')];
        $type = Loader::model("Type");
        $res  = $type->del($data);
        echo json_encode(["result" => $res]);
    }

}