<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\phpStudy\WWW\AHalf\public/../application/index\view\index\invite.html";i:1487599147;s:71:"D:\phpStudy\WWW\AHalf\public/../application/index\view\public\base.html";i:1487559357;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\header.html";i:1487571066;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\footer.html";i:1487571593;}*/ ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes" />
    <link rel="stylesheet" href="/AHalf/application/index/view/dist/css/jquery.mobile-1.4.5.css" />
    <script src="/AHalf/application/index/view/dist/js/jquery.js"></script>
    <script src="/AHalf/application/index/view/dist/js/jquery.mobile-1.4.5.js"></script>
    <script src="/AHalf/application/index/view/dist/js/jquery-1.6.4.min.js"></script>
    <link rel="stylesheet" href="/AHalf/application/index/view/dist/css/bootstrap.min.css" />
    <script src="/AHalf/application/index/view/dist/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 799px)" href="/AHalf/application/index/view/dist/css/mobile-tablet.css" />

</head>
<body style="width:100%; height:100%;background: url('/AHalf/public/static/images/bc1.jpg');background-size:100% 100%;">
<!--<div data-role="page" id="myone" style="padding-top: 35px;min-height:100%;background-color: rgba(245, 245, 245, 0.23);">-->
<div data-role="page" id="myone" style="border: none;box-shadow: none;background: none;">

<div data-role="header"data-position="fixed" style="border: none;box-shadow: none;background-color: rgba(245, 245, 245, 0.23);">
    <a href="/AHalf/public/index.php/index/index/index/"data-icon="home" style="border: none;box-shadow: none;background: none;height:30px;"></a>
    <h1 class="ui-title" style="border: none;box-shadow: none;background: none;">半对半   </h1>
</div>





    <div data-role="content" style="background-color: rgba(221, 221, 221, 0.46);margin: 12px;">
        <form method="post" action="">
            <div  style="font-size:18px;">
                <div align="center">
                    <!--<img width="70" width="70" style=""src="/AHalf/public/static/images/user.png" alt="">-->

                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6" style="float:left">
                        <img width="70" width="70" style=""src="/AHalf/public/static/images/user.png" alt="">
                    </div>
                    <div class="col-xs-6 col-sm-6" style="float:left">
                        <img width="70" width="70" style=""src="/AHalf/public/static/images/user.png" alt="">
                    </div>
                </div>
                <h2>邀请</h2>


                <label for="title" >标题</label>

                <div style="color:#DFDFDF;height:auto;">
                    <!--<input type="password" placeholder="请输入密码" name="password" id="password" onblur="checkPsd(this)"/>-->
                    <input type="text" placeholder="标题" name="title" id="title" style="background-color:#b8c5b2"/>
                </div>
                <label for="a" >内容</label>

                <div style="color:#DFDFDF;height:auto;">

                    <textarea name="" id="a" cols="30" rows="10"></textarea>
                </div>
               
                <input type="submit" style="background-color:#90b575;" value="确定"  style="background-color: #98b1d3"/>
                <!--<a href="#" style="background-color: #90b575;" data-role="button">登录</a>-->

                <!--<div style="height:inherit">-->
                    <!--<a href="#" data-role="content" class="ui-alt-icon" style="font-size:12px;color: #898989;">-->
                        <!--忘记密码-->
                    <!--</a>-->
                    <!--<a href="../index/register.html" data-role="content" style="font-size: 12px;color: #898989;">-->
                        <!--注册用户-->
                    <!--</a>-->
                <!--</div>-->
            </div>
            </form>
    </div>
<style>
    .ui-page-theme-a .ui-btn, html .ui-bar-a .ui-btn, html .ui-body-a .ui-btn, html body .ui-group-theme-a .ui-btn, html head + body .ui-btn.ui-btn-a, .ui-page-theme-a .ui-btn:visited, html .ui-bar-a .ui-btn:visited, html .ui-body-a .ui-btn:visited, html body .ui-group-theme-a .ui-btn:visited, html head + body .ui-btn.ui-btn-a:visited {
        background-color: #f6f6f6 /*{a-bup-background-color}*/;
        border: none;
        color: #555 /*{a-bup-color}*/;
        text-shadow: 0 /*{a-bup-shadow-x}*/ 1px /*{a-bup-shadow-y}*/ 0 /*{a-bup-shadow-radius}*/ #f3f3f3 /*{a-bup-shadow-color}*/;
    }
    .ui-input-text input, .ui-input-search input, textarea.ui-input-text {
        border: none;
    }
</style>
<script>
    //验证密码
    function checkPsd(object) {
        var psd = object.value;
        var patrn =/^(?=.{6,16}$)[0-9a-zA-Z_]+$/;
        if (psd.length == 0) {
            object.value = '';
            object.placeholder = "密码不能为空!";
            return false;
        } else if (0 <= psd.indexOf(' ')) {
            object.value = '';
            object.placeholder = "密码不能有空格!";
            return false;
        } else if (!patrn.exec(psd)) {
            object.value = '';
            object.placeholder = "6-16位数字、字母、下划线！";
            return false;
        } else {
            object.placeholder = '';
            return true
        }
    }

</script>

<div data-role="footer" data-position="fixed" style="border: none;box-shadow: none;background: none;margin-left: 35px;">
    <div data-role="navbar" class="row">
        <!--<ul>-->
            <a href="http://localhost/AHalf/public/index.php/index/index/home/"data-icon="calendar" style="width: 19%;border: none;box-shadow: none;background: none;"></a>
            <!--<a href="http://localhost/AHalf/public/index.php/index/index/index/"data-icon="home"></a>-->
            <a href="http://localhost/AHalf/public/index.php/index/makedouble/index/"data-icon="heart" style="width: 19%;border: none;box-shadow: none;background: none;"></a>
            <a href="http://localhost/AHalf/public/index.php/index/index/takePhoto/"data-icon="camera" style="width: 19%;border: none;box-shadow: none;background: none;"></a>
           <!-- <a href="http://localhost/AHalf/public/index.php/index/index/myChat/"data-icon="comment" style="width: 19%;border: none;box-shadow: none;background: none;"></a>-->
            <a href="http://localhost/AHalf/public/index.php/index/login/index/"data-icon="user" style="width: 19%;border: none;box-shadow: none;background: none;"></a>

        <!--</ul>-->
    </div>
</div>


</div>
</body>
</html>