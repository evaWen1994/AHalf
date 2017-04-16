<?php
namespace app\index\controller;

use think\Controller;
use think\View;

class MyHome extends Controller
{
     public function index(){
		 return View('myHome');
	 }
}