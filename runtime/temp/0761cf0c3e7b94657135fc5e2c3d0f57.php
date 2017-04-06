<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:90:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\index\homepage.html";i:1487655880;s:87:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\public\base.html";i:1487559357;s:89:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\Public\header.html";i:1487571066;s:89:"E:\GratuateProject\phpStudy\WWW\AHalf\public/../application/index\view\Public\footer.html";i:1487571593;}*/ ?>
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





<div class="content" style="width:100%; height:100%;">

<ul id="myTab" class="nav nav-tabs">
    <li class="active">
        <a href="#hot" data-toggle="tab">
           热门
        </a>
    </li>
    <li><a href="#task" data-toggle="tab">任务</a></li>

</ul>

<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="hot">

    <div data-role="content" style="margin-left:8px;margin-right:8px;">
        <div class="row">
            <?php if(is_array($hotdata) || $hotdata instanceof \think\Collection): $i = 0; $__LIST__ = $hotdata;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$hotvo): $mod = ($i % 2 );++$i;?>
            <div class="col-xs-6 col-sm-6" style="float:left;padding:0 -10px 0 -10px;">
                <div class="thumbnail" style="width:100%;background-color: rgba(245, 245, 245, 0.69);border:none;">

                    <a href="http://localhost/AHalf/public/index.php/index/photo/index/id/<?php echo $hotvo['pid']; ?>"><img
                            src="/AHalf/public<?php echo $hotvo['pic']; ?>" class="img-rounded"
                            style="width:100%;height:23%"
                            data-toggle="tooltip" title="an image" data-placement="top">
                    </a>

                    <div class="panel-body" style="margin:-14px -20px -30px 10px;">
                        <p><?php echo $hotvo['title']; ?></p>

                        <div class="row" style="margin:-10px 0 0 -25px;">
                            <div class="col-xs-8 col-sm-8">
                                <img src="/AHalf/public<?php echo $hotvo['headimg1']; ?>" alt=""
                                     width="25px;" height="25px;">

                                <img src="/AHalf/public<?php echo $hotvo['headimg2']; ?>" alt=""
                                     width="25px;" height="25px;">
                                <p> <?php echo $hotvo['username1']; ?>&nbsp;&nbsp;&nbsp;<?php echo $hotvo['username2']; ?></p>

                            </div>
                            <!--<div class="col-xs-6 col-sm-7">-->
                                <!--<p>{hotvo.username1}&nbsp;&nbsp;-->
                                <!--{hotvo.username2}</p>-->
                            <!--</div>-->
                            <div class="col-xs-2 col-sm-2" style="margin:-10px 0 -5px 0;">
                                <a href="#" class="ui-btn ui-corner-all ui-icon-heart ui-btn-icon-notext ">图标</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>

            <!--<div class="col-xs-6 col-sm-6" style="float:left">-->
                <!--<div class="thumbnail" style="width:100%;">-->
                    <!--<a href="http://localhost/AHalf/public/index.php/index/photo/index/">-->
                        <!--<img src=" http://localhost/AHalf/application/index/view/dist/imags/s2.png" class="img-rounded"-->
                             <!--style="width:100%;height:25%"-->
                             <!--data-toggle="tooltip" title="an image" data-placement="top">-->
                    <!--</a>-->

                    <!--<div class="panel-body" style="margin:-10px 0 -10px 0;">-->
                        <!--<p> 创意寿司，美味一线牵</p>-->

                        <!--<div class="row" style="margin:-3px 0 0 -25px;">-->
                            <!--<div class="col-xs-2 col-sm-2">-->
                                <!--<img src=" http://localhost/AHalf/application/index/view/dist/imags/2012.jpg" alt=""-->
                                     <!--width="30px;" height="30px;">-->

                            <!--</div>-->
                            <!--<div class="col-xs-6 col-sm-7">-->
                                <!--<p>username</p>-->
                            <!--</div>-->
                            <!--<div class="col-xs-2 col-sm-2" style="margin:-10px 0 -5px 0;">-->
                                <!--<a href="#" class="ui-btn ui-corner-all ui-icon-heart ui-btn-icon-notext ">图标</a>-->
                            <!--</div>-->
                        <!--</div>-->


                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        </div>
    </div>
    </div>


    <div class="tab-pane fade " id="task">

        <div data-role="content" style="margin-left:8px;margin-right:8px;">
            <div class="row">
                <div class="col-xs-6 col-sm-6" style="float:left;padding:0 -10px 0 -10px;">
                    <div class="thumbnail" style="width:100%;background-color: rgba(245, 245, 245, 0.69);border:none;">

                        <a href="http://localhost/AHalf/public/index.php/index/photo/index/"><img
                                src=" http://localhost/AHalf/application/index/view/dist/imags/s1.png" class="img-rounded"
                                style="width:100%;height:25%"
                                data-toggle="tooltip" title="an image" data-placement="top">
                        </a>

                        <div class="panel-body" style="margin:-10px 0 -10px 0;">
                            <p>同城热恋在这里</p>

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
                    <div class="thumbnail" style="width:100%;background-color: rgba(245, 245, 245, 0.69);border:none;">
                        <a href="http://localhost/AHalf/public/index.php/index/photo/index/">
                            <img src=" http://localhost/AHalf/application/index/view/dist/imags/s2.png" class="img-rounded"
                                 style="width:100%;height:25%"
                                 data-toggle="tooltip" title="an image" data-placement="top">
                        </a>

                        <div class="panel-body" style="margin:-10px 0 -10px 0;">
                            <p> 创意寿司一线牵</p>

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
                <!--<div class="col-xs-6 col-sm-6" style="float:left">-->
                    <!--<div class="thumbnail" style="width:100%;background-color: rgba(245, 245, 245, 0.33);border-color: rgba(150, 139, 139, 0.6);">-->
                        <!--<a href="http://localhost/AHalf/public/index.php/index/photo/index/">-->
                            <!--<img src=" http://localhost/AHalf/application/index/view/dist/imags/s2.png" class="img-rounded"-->
                                 <!--style="width:100%;height:25%"-->
                                 <!--data-toggle="tooltip" title="an image" data-placement="top">-->
                        <!--</a>-->

                        <!--<div class="panel-body" style="margin:-10px 0 -10px 0;">-->
                            <!--<p> 创意寿司美味</p>-->

                            <!--<div class="row" style="margin:-3px 0 0 -25px;">-->
                                <!--<div class="col-xs-2 col-sm-2">-->
                                    <!--<img src=" http://localhost/AHalf/application/index/view/dist/imags/2012.jpg" alt=""-->
                                         <!--width="30px;" height="30px;">-->

                                <!--</div>-->
                                <!--<div class="col-xs-6 col-sm-7">-->
                                    <!--<p>username</p>-->
                                <!--</div>-->
                                <!--<div class="col-xs-2 col-sm-2" style="margin:-10px 0 -5px 0;">-->
                                    <!--<a href="#" class="ui-btn ui-corner-all ui-icon-heart ui-btn-icon-notext ">图标</a>-->
                                <!--</div>-->
                            <!--</div>-->


                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>

</div>
<style>
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        color: #d86a7d;
        cursor: default;
        background-color: rgba(118, 169, 210, 0.47);
        border: 1px solid rgba(221, 221, 221, 0.46);
        border-bottom-color: transparent;
    }
    .thumbnail {
        display: block;
        padding: 3px;
        margin-bottom: 5px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
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