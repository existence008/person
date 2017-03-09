<?php
namespace  app\index\model;
use think\Model;

class Bill extends  Model{

    // 查询全部数据
    public function selectAll(){
        $res = Bill::all(['bill_status' => 1]);
        return $res;
    }

    // 添加数据
    public  function add($data){
        $bill = new Bill;
        $bill->bill_title = $data['bill_title'];
        $bill->bill_desc  = $data['bill_desc'];
        $bill->bill_addtime = $data['year'].$data['month'].$data['day'];
        $bill->bill_creatime = date("Y-m-d H:i:s", time());
        $bill->type_id = $data['type_id'];
        $bill->bill_money = $data['bill_money'];
        $res = $bill->save();
        if ($res){
            return "1";
        }else{
            return "0";
        }
    }
}
