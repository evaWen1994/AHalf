<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:88:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\login\myhome.html";i:1487658490;s:87:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\public\base.html";i:1487559357;s:89:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\Public\header.html";i:1487571066;s:89:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\Public\footer.html";i:1487571593;}*/ ?>
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



<div data-role="content">
    <div>
        <ul data-role="listview"data-inset="true">
            <li><a href="#"data-role="button"><img style="width: 75px;" src="/AHalf/public/uploads/headimg/h1.png" class="img-circle"/><h2>用户昵称</h2>
                <p>照片2张，拼照1次，赞3次</p>
            </a>
            </li>
        </ul>
    </div>
    <div>
        <ul data-role="listview" data-inset="true">
            <li><a href="message.html" data-role="button" data-icon="audio">任务通知</a></li>
            <li><a href="friends.html"data-role="button" data-icon="location">我参与的</a></li>
            <li><a href="friends.html"data-role="button" data-icon="comment">我的好友</a></li>
        </ul>
    </div>
    <div>
        <ul data-role="listview" data-inset="true">
            <li><a href="focuson.html"data-role="button" data-icon="recycle">摇一摇</a></li>
            <li><a href="fans.html"data-role="button" data-icon="calendar">我的时间轴</a></li>
            <li><a href="fans.html"data-role="button" data-icon="cloud">我的关系网</a></li>

        </ul>
    </div>
    <!--<div>-->
        <!--<ul data-role="listview"data-inset="true">-->
            <!--<li><a href="setting.html"data-role="button" data-icon="gear">设置</a></li>-->
        <!--</ul>-->
    <!--</div>-->
    <div>
        <ul data-role="listview"data-inset="true">
          <button type="button" class="btn btn-danger">退出</button>
        </ul>
    </div>



</div>
<style>
    .a{
        border:none;
    }
</style>

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