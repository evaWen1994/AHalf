<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 16:33
*/

namespace app\index\controller;

use app\index\model\DoubleJoin;
use think\Controller;
use think\Cookie;
use think\Request;



class Makedouble extends Controller
{
    public function index()
    {
        return View('makeDouble');
    }
    public function upload(){
        if(Request::instance()->isPost()){
            $title = input('post.title');
            $content = input('post.content');
            $base64 = input('post.uploadImg');
            $img1 = base64_decode($base64);
            $res0 = '\uploads\double\\'.date('Ymd');
            $res = ROOT_PATH .'public'.$res0;
            if (!file_exists($res)){ mkdir ($res);}
            $p = '\\'.time().rand(1,100).'.jpg';
                $a = file_put_contents($res.$p, $img1);//返回的是字节数
            //print_r($a);
            $doublejoin = new DoubleJoin();
            $name=Cookie::get('username','ahalf_');
            $himg = Cookie::get('headimg','ahalf_');
            $id = Cookie::get('uid','ahalf_');
            echo $title.' and '.$content;
            $doublejoin->insert($id,$name,$himg,$res0.$p,$title,$content);
            return $a;
        }


//        // 获取表单上传文件 例如上传了001.jpg
//        $file = request()->file('image');
//        // 移动到框架应用根目录/public/uploads/ 目录下
//        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
//        if($info){
//            // 成功上传后 获取上传信息
//            // 输出 jpg
//            echo $info->getExtension();
//            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getSaveName();
//            // 输出 42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getFilename();
//        }else{
//            // 上传失败获取错误信息
//            echo $file->getError();
//        }
    }

}
