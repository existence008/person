<?php
namespace app\index\model;
use think\Model;

class Type extends  Model
{

    // 查询所有类型
    public  function  getAllDates(){
        $res = Type::all(["type_show" => 1]);
        return $res;
    }

    // 添加类型
    public  function  add($data = ""){
        $type = new Type();
        $type->type_name = $data['type_name'];
        $type->type_status = $data['type_status'];
        $type_name = Type::get(["type_name" => $data['type_name']]);
        if (!$type_name){
            $res = $type->save();
            if ($res){
                return "1";
            }else{
                return "0";
            }
        }else{
            return "2";
        }

    }

    // 修改消费类型显示状态
    public function  editStatus($data){
        $type = new Type();
        if ($data['type_status'] == 0){
            $res = $type->save(['type_status' => 1], ['type_id' => $data['type_id']]);
            return $res;
        }else{
            $res = $type->save(['type_status' => 0], ['type_id' => $data['type_id']]);
            return $res;
        }
    }

    // 修改数据
    public function editType($data){
        $type_name = $data['type_name'];
        $type_status = $data['type_status'];
        $type_id = $data['type_id'];
        // 检查名字是否存在
        $chkName = Type::get(['type_name' => $type_name]);
        if ($chkName) {
            return "该类型名称已存在!";
        }else{
            // 当名称不存在时
            $type = new Type;
            $res = $type->save(["type_name" => $type_name, "type_status" => $type_status],["type_id" => $type_id]);
            if ($res) {
                return "修改成功";
            }else{
                return "修改失败!";
            }
        }
    }

    // 删除失败
    public function del($data)
    {
        $type = new Type;
        $res = $type->save(["type_show" => 0],["type_id" => $data['type_id']]);
        if ($res) {
            return $res;
        }
    }

    // 查询啟用數據
    public  function  selectShow(){
        $res = Type::all(["type_show" => 1, "type_status" => 1]);
        return $res;
    }
}