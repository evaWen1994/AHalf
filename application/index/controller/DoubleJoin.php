<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class DoubleJoin extends Controller
{
    public function index(){
        return View('doubleJoin');
    }

}