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

}

