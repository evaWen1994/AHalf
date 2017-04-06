<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use Think\Request;
use think\View;

class Photo extends Controller
{
    public function index($id){
        $dj = db('doublejoin')->where(['pid'=>$id])->find();
        $view = new View();

        $view->assign('hotdata',$dj);
        return $view->fetch('photoInformation');
    }
    public function singlePhoto(){
        return View('singleInformation');
    }
    public function login(){
        return View('login');
    }
}