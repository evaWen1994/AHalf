<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"D:\phpStudy\WWW\AHalf\public/../application/index\view\index\takePhoto.html";i:1491978087;s:71:"D:\phpStudy\WWW\AHalf\public/../application/index\view\public\base.html";i:1491978087;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\header.html";i:1491978087;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\footer.html";i:1491978087;}*/ ?>
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




<div class="container">
    <div style="width:100%;height:40%;position: relative">
        <div style="position:absolute;top:10px;left:10px;">
            <video id="video" width=100%" autoplay style="margin-top: 10px;"></video>
            <div style="position:absolute;top:10px;left:130px;background-color:rgba(242, 222, 222, 0.38)" width="50%"height=""100%>
           <canvas width="250" height="192" id="mengCanvas"></canvas>
            </div>
            <div id="mengdiv" style="display:none;position:absolute;top:10px;left:130px;background-color:rgba(242, 222, 222, 0.38)" width="50%"height=""100%>
                <canvas width="250" height="192" ></canvas>
            </div>

        </div>
        <button id="snap" style="margin-top: 10px;position:absolute;top:280px;left:10px;">Snap Photo</button>


       <div class="row" width=100%" >
            <div class="col-xs-12 col-md-12">
                <canvas id="canvas" width="260%" height="280" style="margin-top: 10px;margin-left: 5px;""></canvas>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        var aVideo=document.getElementById('video');
        var aCanvas=document.getElementById('canvas');
        var ctx=aCanvas.getContext('2d');

        navigator.getUserMedia  = navigator.getUserMedia ||
                navigator.webkitGetUserMedia ||
                navigator.mozGetUserMedia ||
                navigator.msGetUserMedia;//获取媒体对象（这里指摄像头）
        navigator.getUserMedia({video:true}, gotStream, noStream);//参数1获取用户打开权限；参数二成功打开后调用，并传一个视频流对象，参数三打开失败后调用，传错误信息

        function gotStream(stream) {
            video.src = URL.createObjectURL(stream);
            video.onerror = function () {
                stream.stop();
            };
            stream.onended = noStream;
            video.onloadedmetadata = function () {
               // alert('摄像头成功打开！');
            };
        }
        function noStream(err) {
            alert(err);
        }

        document.getElementById("snap").addEventListener("click", function() {
            var h = window.innerWidth*1.6;
            var hv = document.getElementById('video').clientWidth;

            ctx.scale(hv/h,hv/h);
            ctx.drawImage(aVideo, 0, 0);//将获取视频绘制在画布上

//            var meng = getElementById('mengCanvas');
//            ctx.drawImage(meng, 100, 100);//将获蒙版绘制在画布上

            document.getElementById('video').display="none";

            aVideo.style="display:none";
            document.getElementById("snap").style="display:none";
           // alert(1);
            document.getElementById('mengdiv').style="display:inherit";




        });
             </script>
</div>



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