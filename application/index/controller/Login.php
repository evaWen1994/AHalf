<?php
namespace app\index\controller;


use app\index\model\User;
use think\Controller;
use think\Cookie;
use think\Request;
use think\View;

class Login extends Controller
{

    public function index(){
           if(Request::instance()->isPost()) {
               $username = input('post.username');
               $password = input('post.password');
               $User= new User();
//               $Userm->index('eva','1234');
                if($User->index($username,$password)){
                   cookie(['prefix' => 'ahalf_', 'expire' => 3600]);
                   cookie('username',$username);
                   //$this->success('µÇÂ½³É¹¦','http://localhost/AHalf/public/index.php/index/login/index/');
                    return View('myhome');

               }else{
                    return View('login');
                   //$this->error('µÇÂ¼Ê§°Ü£¬ÕËºÅ»òÃÜÂë´íÎó');
               }
               //return View('myhome');

            }
            else if (Cookie::has('username','ahalf_')) {
            return View('myhome');
            }
            else {
                return View('login');
            }

    }
    public function login(){

    }
}