<?php
namespace app\index\controller;
use think\Request;
use think\Loader;
class Bill extends Auth
{
	
	public function index()
	{
        $bill = Loader::model("Bill");
        $res  = $bill->selectAll();
        $this->assign("data", $res);
		return $this->fetch("Bill/index");
	}

	//添加頁面顯示
	public function add()
	{
        //select all type
        $type = Loader::model("Type");
        $res = $type->selectShow();
        $this->assign("data", $res);
		return $this->fetch("Bill/add");
	}

	//數據添加
    public function addBill(){
        $data = [
            "bill_title" => Request::instance()->post('bill_title'),
            "bill_desc" => Request::instance()->post('bill_desc'),
            "year" => Request::instance()->post('year')."年",
            "month" => Request::instance()->post('month')."月",
            "day" => Request::instance()->post('day')."日",
            "type_id" => Request::instance()->post('type_id'),
            "bill_money" => Request::instance()->post("bill_money")
        ];
        $bill = Loader::model("Bill");
        $res  = $bill->add($data);
        echo json_encode(['result' => 1]);
    }

    // 数据修改显示
    public function show(){
        echo "123456";
    }
    // 数据报表
    public function  report(){
        return $this->fetch("Bill/report");
    }

}