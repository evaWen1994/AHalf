<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/16
 * Time: 10:13
 */

namespace app\index\model;


use Think\Model;
use Db;
class DoubleJoin
{
    public function index()
    {
        $result = db('doublejoin')->field(['pid','pic','title','username1','headimg1','username2','headimg2'])->select();
        return $result;
    }
    public function picinfo(){
        $result = db('doublejoin')->select();
        return $result;
    }
    public function insert($id,$username,$headimg,$pic,$title,$content){
        $data = ['uid1'=>$id,'uid2'=>$id,'username1'=>$username,'headimg1'=>$headimg,'headimg2'=>$headimg,'username2'=>$username,'pic'=>$pic,'title'=>$title,'content'=>$content,'time'=>time()];
        $result =db('doublejoin')->insert($data);
    }

}

