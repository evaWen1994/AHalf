<?php
namespace app\index\controller;
error_reporting(E_ALL ^ E_NOTICE);
require_once APP_PATH.'../extend/sdk/qcloudapi/src/QcloudApi/QcloudApi.php';

use think\Controller;
use think\Request;
use think\View;
use QcloudApi;

class Index extends Controller
{
    public function index()
    {



        $config = array('SecretId'       => 'AKID4IPfpuKY6FHF3fqUilhbQ4PhmiWACuHW',
            'SecretKey'      => 'LbgZKuEVbZMyTnpoghcNwKXYOUSHwQiq',
            'RequestMethod'  => 'POST',
            'DefaultRegion'  => 'gz');

        $wenzhi = QcloudApi::load(QcloudApi::MODULE_WENZHI, $config);

        //$package = array(title=>"旅游心得",content=>"俗话说：恋上一个人，恋上一座城，鼓浪屿就像是那个人，因为它的动人，而让人对厦门这座城市久久难忘。鼓浪屿是厦门岛西南方向的一个小岛，属于厦门市思明区管辖范围。它以前叫做元洲仔，听说是因为过去这里因为受海水腐蚀而成的岩洞在被海洋冲击的时候声音就如同敲鼓一样，鼓的形状又是圆形的，因此得名，而到了明朝人们为它的名字“升级换代”，就成了更文雅的鼓浪屿。");
        $package = array(text=>"鼓浪屿旅行");
        //$a = $wenzhi->TextKeywords($package);
        $a = $wenzhi->LexicalSynonym($package);
        // $a = $cvm->generateUrl('DescribeInstances', $package);
        echo "!!!!!!!!!!!!!";
        if ($a === false) {
            $error = $wenzhi->getError();
            echo "Error code:" . $error->getCode() . ".\n";
            echo "message:" . $error->getMessage() . ".\n";
            echo "ext:" . var_export($error->getExt(), true) . ".\n";
        } else {
            var_dump($a);
            echo "&&&&&&&&&&&&&";
        }

        echo "\nRequest :" . $wenzhi->getLastRequest();
        echo "$$$$$$$$$$$$$";
        echo "\nResponse :" . $wenzhi->getLastResponse();
        echo "$$$$$$$$$$$$$";
        echo "\n";

//        $b = array(3) {
//        ["codeDesc"]=> string(7) "Success"
//        ["query"]=> NULL
//        ["syns"]=> array(1) {
//            [0]=> array(2) {
//                ["word_ori"]=> array(3)
//                { ["idx_beg"]=> int(1)
//                ["idx_end"]=> int(2)
//                ["text"]=> string(6) "旅行" }
//                ["word_syns"]=> array(2) {
//                    [0]=> array(2) {
//                        ["conf"]=> float(0.21254801750183)
//                        ["text"]=> string(9) "自助游" }
//                    [1]=> array(2) {
//                        ["conf"]=> float(0.37813213467598)
//                        ["text"]=> string(6) "旅游" } } } } } &&&&&&&&&&&&&

        $view = new View();
        return  $view->fetch('index');

    }

    public function home()
    {

        $view = new View();
        $dou = new \app\index\model\DoubleJoin();
        $result = $dou->index();
        $view->assign('hotdata',$result);
        return  $view->fetch('homepage');

    }
    public function makeDouble(){
        return View('makeDouble');
    }
    public function takePhoto(){
        return View('takePhoto');
    }
    public function myChat(){
        return View('myChat');
    }
    public function myHome(){
        return View('myHome');
    }
    public function invite(){
        return View('invite');
    }
    public function photo(){
        return View('photoInformation');
    }
	public function timeaxis(){
	
	return View('timeaxis');
	}
	public function shake(){
	
	return View('shake');
	}
	public function relationNetwork(){
	
	return View('relationNetwork');
	}
}
