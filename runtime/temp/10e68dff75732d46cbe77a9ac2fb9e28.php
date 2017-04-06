<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"D:\phpStudy\WWW\AHalf\public/../application/index\view\makedouble\makeDouble.html";i:1487595988;s:71:"D:\phpStudy\WWW\AHalf\public/../application/index\view\public\base.html";i:1487559357;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\header.html";i:1487571066;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\footer.html";i:1487571593;}*/ ?>
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
                        <div id="backimg" class="thumbnail screamBack" style="height: 260px;position:relative;">
                            <form action="http://localhost/AHalf/public/index.php/index/makedouble/upload/"   method="post">
                                <div class="row ">
                                    <div class="col-xs-6 col-sm-6 filec1" >
                                        <div id="picshow1" class="filec2">
                                            <br> <br><br>
                                            <!--<img style="width:50%;height:50%;"src="http://localhost/AHalf/application/index/view/dist/imags/photo.png" alt="">-->
                                            <span style="font-size:80px;color: whitesmoke">
                                                &nbsp;&nbsp;<img width="50" width="50" src="/AHalf/public/static/images/addpic1.png" alt="添加本地图片"style="margin-top: -30px;"></span>
                                        </div>
                                        <input type="file" class="inputstyle" name="image" id="uploadimg1"/>
                                            <button id="buttonCa1" style="margin-top: 130px;margin-left: 50px;width:65px;" onclick="activeCamera(1)">
                                            <img width="50" width="50" style="margin-left: -10px;" src="/AHalf/public/static/images/camera1.png" alt="拍照" >
                                            </button>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 filec1">
                                        <div id="picshow2" class="filec2">
                                            <br> <br><br>
                                            <!--<img style="width:50%;height:50%;"src="http://localhost/AHalf/application/index/view/dist/imags/photo.png" alt="">-->
                                            <span style="font-size:80px;color: whitesmoke">
                                                &nbsp;&nbsp;<img width="50" width="50" src="/AHalf/public/static/images/addpic1.png" alt="添加本地图片"style="margin-top: -30px;"></span>
                                        </div>
                                        <input type="file" class="inputstyle" name ="image" id="uploadimg2"/>

                                            <img width="50" width="50" src="/AHalf/public/static/images/camera1.png" alt="拍照" style="margin-top: 130px;margin-left: 50px;">

                                    </div>
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <div class="row">
                                        <div  class="col-xs-2 col-xs-offset-7 col-sm-2">
                                            <button type="button" class="btn btn-primary btn-lg" style="font-size: 5px">
                                                <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                            </button></div>
                                        <div  class="col-xs-2  col-sm-2">
                                            <button type="button" class="btn btn-primary btn-lg" style="font-size: 5px" onclick="combineImg()">
                                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                            </button></div>

                                        <div  class="col-xs-2 col-xs-offset-1 col-sm-1">
                                            <button type="button" class="btn btn-primary btn-lg" style="font-size: 5px">
                                                <span class="	glyphicon glyphicon-text-width"></span>
                                            </button></div>
                                        <div  class="col-xs-2  col-sm-2">
                                            <button type="button" class="btn btn-primary btn-lg" style="font-size: 5px">
                                                <span class="glyphicon 	glyphicon glyphicon-tint"></span>
                                            </button></div>
                                        <div  class="col-xs-2 col-sm-2">
                                            <button type="button" class="btn btn-success btn-lg" style="font-size: 5px">
                                                <span class="glyphicon 	glyphicon glyphicon-cloud-upload"></span>
                                            </button></div>

                                         </div>

                                </div>
                            </form>

                        </div>

                            <div id="drawimg1" style="display:none; ">
                                <video id="video1" width=100%" autoplay style="margin-top: 10px;"></video>
                                <canvas id="drawCanvas1"
                                        style="border:1px solid #000000;width: 100%;height: 100%;">
                                </canvas>
                            </div>
                            <div id="drawimg2" style="display:none;height: 260px;width: 50%;position:absolute; top: 0px; left: 50%; ">
                                <video id="video2" width=100%" autoplay style="margin-top: 10px;"></video>
                                <canvas id="drawCanvas2"
                                        style="border:1px solid #000000;width: 100%;height: 100%;">
                                </canvas>
                            </div>
                            <div id="drawimgTwo" style="display:none;height: 260px;width: 100%;position:absolute; top: 300px; left: 5px; ">
                                <canvas id="drawCanvasTwo"
                                        style="border:1px solid #98b1d3;display: block;width: 100%;height: 100%;">
                                </canvas>
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
    //window.alert(cax);
    ctx.drawImage(img,0,0,cax,cay);

//绘制上传的图片，生成base64
/**
 * 回调函数
 * @param image_base64
 */
var callback = function(image_base64) {
    $.post('http://localhost/AHalf/public/index.php/index/makedouble/upload/', {
        uploadImg: image_base64
    }, function (err, data) {
        if (err) {
            cb(err, null);
        } else {
            // 変更图片src
            $("#ImgId").attr("src", data.imgUrl);
        }
    });
}

/**
 * 头像选择触发事件
 */
$("body").on('change', '#uploadimg1', function () {
    fileUpload(this.files[0], callback,1);
});
$("body").on('change', '#uploadimg2', function () {
    fileUpload(this.files[0], callback,2);
});

/**
 * 将文件转成base64
 * @param obj
 * @param callback
 * @returns {boolean}
 */
var fileUpload = function(obj, callback,ty){
    var file = obj;
    //判断类型是不是图片
    if(!/image\/\w+/.test(file.type)){
        alert("请确保文件为图像类型");
        return false;
    }

    var reader = new FileReader();
    reader.readAsDataURL(file);
    tyCan='';
    if(ty==1){tyCan='drawCanvas1';}else tyCan='drawCanvas2';

    reader.onload = function (e) {
        var img = new Image,
                width = window.innerWidth*0.8,    //图片resize宽度
                quality = 1.0,  //图像质量
                canvas = document.getElementById(tyCan),
//                canvas = document.createElement("drawCanvas"),
                drawer = canvas.getContext("2d");
        img.src = this.result;
        canvas.width = width;
        canvas.height = width * (img.height / img.width);
        drawer.drawImage(img, 0, 0, canvas.width, canvas.height);
        img.src = canvas.toDataURL();
        var image_base64 = img.src.replace("data:image/png;base64,","");
        // 调用回调
        callback&&callback(image_base64);

    }
}
//end of 绘制上传的图片，生成base64

//合并画布
    function combineImg(){
        var canvas1 = document.getElementById("drawCanvas1");
        var content1 = canvas1.getContext("2d");
        var canvas2 = document.getElementById("drawCanvas2").getContext("2d") ;
        var canvasT = document.getElementById("drawCanvasTwo") ;
        var contentT = canvasT.getContext("2d") ;
        var width = window.innerWidth;
        var height = window.innerHeight;
        var iw = width/canvas1.width*0.5;

        content1.scale(iw,iw);

        var imgd1 = content1.getImageData(0,0,300,300);
        var imgd2 = canvas2.getImageData(0,0,300,300);
        contentT.putImageData(imgd1,0,0,0,0,width*0.5,height);
        contentT.putImageData(imgd2,width*0.5,0,0,0,width*0.5,height);

        //保存图片
        var img = new Image;
        img.src = this.result;
        img.src = canvasT.toDataURL();
        var image_base64 = img.src.replace("data:image/png;base64,","");
        $.post('http://localhost/AHalf/public/index.php/index/makedouble/combine/', {
            uploadImg: image_base64
        }, function (err, data) {
            if (err) {
                cb(err, null);
            } else {
                // 変更图片src
                $("#ImgId").attr("src", data.imgUrl);
            }
        });
    }

    //调用摄像头
//document.getElementById("buttonCa1").addEventListener("click", activeCamera(1));
function activeCamera(canv){
    //alert(1);
    var aVideo;
    var aCanvas;
    var div ='';
    if(canv==1){
        aVideo = document.getElementById('video1');
        aCanvas= document.getElementById('drawCanvas1');
        div=document.getElementById('drawImg1');
        alert(div);
    }
    else{
        aVideo = document.getElementById('video2');
        aCanvas= document.getElementById('drawCanvas2');
        div=document.getElementById('drawImg2');
    }

    div.style="display:inherit;height: 260px;width: 50%;position:absolute; top: 0px; left: 5px;";
//    dCanvas.style="display=inherit;border:1px solid #000000;display: block;width: 100%;height: 100%;";
    var ctx=aCanvas.getContext('2d');
    alert(2);

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

}

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

     .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
         color: #d86a7d;
         cursor: default;
         background-color: rgba(118, 169, 210, 0.47);
         border: 1px solid rgba(221, 221, 221, 0.46);
         border-bottom-color: transparent;
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