<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 16:33
*/

namespace app\index\controller;

use think\Controller;
use think\Request;


class Makedouble extends Controller
{
    public function index()
    {
        return View('makeDouble');
    }
    public function upload(){
        if(Request::instance()->isPost()){
            $base64 = input('post.uploadImg');
            $img1 = base64_decode($base64);
            $res = ROOT_PATH .'public\uploads\single\\'.date('Ymd');
            if (!file_exists($res)){ mkdir ($res);}
                $a = file_put_contents($res.'\\'.time().rand(1,100).'.jpg', $img1);//返回的是字节数
            print_r($a);
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
    public function combine(){
        if(Request::instance()->isPost()){
            $base64 = input('post.uploadImg');
            $img1 = base64_decode($base64);
            $res = ROOT_PATH .'public\uploads\double\\'.date('Ymd');
            if (!file_exists($res)){ mkdir ($res);}
            $a = file_put_contents($res.'\\'.time().rand(1,100).'.jpg', $img1);//返回的是字节数
            print_r($a);
        }
    }
}
