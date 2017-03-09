<?php
namespace app\index\controller;
use think\Controller;
use think\Loader;
use think\Request;


class Photoes extends Controller
{
	
	public function index(){
		$res = Loader::model("Photo");
		$data = $res->sel();
		$this->assign("data", $data);
		return $this->fetch("Photoes/index");
	}


	// it's a show method to add photoes page.
	public function add()
	{
		return $this->fetch("Photoes/add");
	}

	// add photoes
	public function addDates()
	{
		$imgItem = Request::instance()->post("param");
		$imgArr = explode("。", $imgItem);
        $photo = Loader::model("Photo");
        $res = $photo->addImg($imgArr);
		echo json_encode(["res" => $res]);

	}
}
