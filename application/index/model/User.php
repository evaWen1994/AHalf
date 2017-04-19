<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 9:39
 */
namespace app\index\model;


use Think\Model;
use Db;
class User {
    public function index($usr,$pwd){
        $result = db('user')->where('username',$usr)->find();
        if($result['password']==$pwd) return $result;
        else return null;
    }
    public function userinfo($id){
        $result = db('user')->where('id',$id)->find();
        $data['headimg'] = $result['headimg'];
        $data['username'] = $result['username'];
        if($data){
            return $data;
        }
        else return false;
    }

}
