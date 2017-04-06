<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:92:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\index\doubleJoin.html";i:1487214903;s:87:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\public\base.html";i:1484106897;s:89:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\Public\header.html";i:1484106783;s:89:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\Public\footer.html";i:1486956389;}*/ ?>
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
<body>


<div data-role="header"data-position="fixed">
    <a href=""data-icon="home"></a>
    <h1 class="ui-title">半对半</h1>
    <a href=""data-icon="home"></a>
</div>



<ul id="myTab" class="nav nav-tabs">
    <li class="active">
        <a href="#invite" data-toggle="tab">
            邀请
        </a>
    </li>
    <li><a href="#double" data-toggle="tab">对对拼</a></li>

</ul>

<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="invite">
        <div data-role="content" style="margin-left:8px;margin-right:8px;">
            <div class="row">
                <div class="col-xs-6 col-sm-6" style="float:left;padding:0 -10px 0 -10px;">
                    <div class="thumbnail" style="width:100%;">

                        <a href="http://localhost/AHalf/public/index.php/index/photo/singlePhoto/"><img
                                src=" http://localhost/AHalf/application/index/view/dist/imags/q1.png" class="img-rounded"
                                style="width:100%;height:25%"
                                data-toggle="tooltip" title="an image" data-placement="top">
                        </a>

                        <div class="panel-body" style="margin:-10px 0 -10px 0;">
                            <p>同城热恋，我在这里</p>

                            <div class="row" style="margin:-3px 0 0 -25px;">
                                <div class="col-xs-2 col-sm-2">
                                    <img src=" http://localhost/AHalf/application/index/view/dist/imags/2012.jpg" alt=""
                                         width="30px;" height="30px;">

                                </div>
                                <div class="col-xs-6 col-sm-7">
                                    <p>username</p>
                                </div>
                                <div class="col-xs-2 col-sm-2" style="margin:-10px 0 -5px 0;">
                                    <a href="#" class="ui-btn ui-corner-all ui-icon-heart ui-btn-icon-notext ">图标</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-6" style="float:left">
                    <div class="thumbnail" style="width:100%;">
                        <a href="http://localhost/AHalf/public/index.php/index/photo/singlePhoto/">
                            <!--<img src=" http://localhost/AHalf/application/index/view/dist/imags/s2.png" class="img-rounded"-->
                                 <!--style="width:100%;height:25%"-->
                                 <!--data-toggle="tooltip" title="an image" data-placement="top">-->
                            <canvas id="myCanvas" class="img-rounded"
                                    style="border:1px solid #000000;display: block;width: 100%;height: 25%;">
                            </canvas>
                            <img id="screamBack1"src="http://localhost/AHalf/application/index/view/dist/imags/q2.png" style="display:none;width:100%;height:25%"alt="">

                        </a>

                        <div class="panel-body" style="margin:-10px 0 -10px 0;">
                            <p> 创意寿司，美味一线牵</p>

                            <div class="row" style="margin:-3px 0 0 -25px;">
                                <div class="col-xs-2 col-sm-2">
                                    <img src=" http://localhost/AHalf/application/index/view/dist/imags/2012.jpg" alt=""
                                         width="30px;" height="30px;">


                                </div>
                                <div class="col-xs-6 col-sm-7">
                                    <p>username</p>
                                </div>
                                <div class="col-xs-2 col-sm-2" style="margin:-10px 0 -5px 0;">
                                    <a href="#" class="ui-btn ui-corner-all ui-icon-heart ui-btn-icon-notext ">图标</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="tab-pane fade" id="double">
            <div data-role="content" style="margin-left:8px;margin-right:8px;">
                <div class="row" style="height:400px;">
                    <div class="col-xs-12 col-sm-12" style="float:left;">
                        <div id="" class="thumbnail screamBack" style="height: 260px;">
                            <div class="row ">
                                <div class="col-xs-6 col-sm-6 filec1">
                                    <div id="picshow1" class="filec2">
                                        <br> <br><br>
                                        <!--<img style="width:50%;height:50%;"src="http://localhost/AHalf/application/index/view/dist/imags/photo.png" alt="">-->
                                        <span style="font-size:80px;color: whitesmoke">&nbsp;&nbsp;+</span>
                                    </div>
                                    <input type="file" class="inputstyle"/>
                                </div>
                                <div class="col-xs-6 col-sm-6 filec1">
                                    <div id="picshow2" class="filec2">
                                        <br> <br><br>
                                        <!--<img style="width:50%;height:50%;"src="http://localhost/AHalf/application/index/view/dist/imags/photo.png" alt="">-->
                                        <span style="font-size:80px;color: whitesmoke">&nbsp;&nbsp;+</span>
                                    </div>
                                    <input type="file" class="inputstyle"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
        <!--<div class="container" style="width:100%;">-->
            <!--<div class="row" >-->
                <!--<div class="col-xs-12"style="background-image:url('http://localhost/AHalf/application/index/view/dist/imags/s3.jpg');">-->

                <!--</div>-->
            <!--</div>-->

        <!--</div>-->
             <!--<canvas id="myCanvas" width="400px"height="300px"-->
                    <!--style="border:1px solid #000000;display: block;width: 100%;height: 60%;">-->
            <!--</canvas>-->
            <!--<img id="screamBack1" src="http://localhost/AHalf/application/index/view/dist/imags/s3.png" alt="">-->

    <!--<script>-->

        <!--var c=document.getElementById("myCanvas");-->
        <!--var ctx=c.getContext("2d");-->
        <!--var img=document.getElementById("screamBack");-->

        <!--img.onload = function() {-->

<script>

//    function upimg(imgFile)
//    {
//        var picshow = document.getElementById("picshow");
//        picshow.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgFile.value;
//        picshow.style.width = "88px";
//        picshow.style.height = "125px";
//    }
    window.addEventListener("resize", resizeCanvas, false);

    function resizeCanvas() {
        w = ctx.width = window.innerWidth;
        h = ctx.height = window.innerHeight;
    }
    var c=document.getElementById("myCanvas");
    var ctx=c.getContext("2d");
    var img=document.getElementById("screamBack1");
    cax= window.innerWidth;
    cay= window.innerHeight/3;
    window.alert(cax);
    ctx.drawImage(img,0,0,cax,cay);

</script>
<style type="text/css">
    .screamBack {
        background: url("http://localhost/AHalf/application/index/view/dist/imags/s3.jpg") fixed center center no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }
    .filec1{


    }
    .filec2{
        font-size:12px; overflow:hidden; position:absolute

    }
    .inputstyle{
        position:absolute; z-index:100; margin-left:-180px; font-size:60px;opacity:0;filter:alpha(opacity=0); margin-top:-5px;
    }
</style>

<div data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="http://localhost/AHalf/public/index.php/index/index/index/"data-icon="home"></a></li>
            <li><a href="http://localhost/AHalf/public/index.php/index/index/doubleJoin/"data-icon="heart"></a></li>
            <li><a href="http://localhost/AHalf/public/index.php/index/index/takePhoto/"data-icon="camera"></a></li>
            <li><a href="http://localhost/AHalf/public/index.php/index/index/myChat/"data-icon="comment"></a></li>
            <li><a href="http://localhost/AHalf/public/index.php/index/login/index/"data-icon="user"></a></li>

        </ul>
    </div>
</div>


</body>
</html>