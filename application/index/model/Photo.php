<?php
namespace  app\index\model;
use think\Model;
class Photo extends Model{

    // 添加函数
    public function addImg($data){
        $lists = [];
        $count = count($data)-1;
        for ($i=0;$i<$count;$i++){
            $lists[$i]['pp_img'] = $data[$i];
        }
        $res = Photo::saveAll($lists);
        return $res;
    }
    //查询所有图片信息
    public function  sel(){
        $res = Photo::all(['pp_status' => 1]);
        return $res;
    }
}