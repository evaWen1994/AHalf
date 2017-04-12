<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"D:\phpStudy\WWW\AHalf\public/../application/index\view\photo\photoInformation.html";i:1491978087;s:71:"D:\phpStudy\WWW\AHalf\public/../application/index\view\public\base.html";i:1491978087;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\header.html";i:1491978087;s:73:"D:\phpStudy\WWW\AHalf\public/../application/index\view\Public\footer.html";i:1491978087;}*/ ?>
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

        <div class="thumbnail" style="background-color: rgba(245, 245, 245, 0.69);border:none;">
            <div class="row" style="margin-top:10px;width: 100%">
                <div class="col-xs-2 col-sm-2"style="margin:0 0 10px 10px;">
                    <img src=" http://localhost/AHalf/application/index/view/dist/imags/2012.jpg" alt="" width="50px;"height="50px;">

                </div>
                <div class="col-xs-6 col-sm-6">
                    <p>lenara</p>
                </div>

                <div class="col-xs-3 col-sm-3" style="margin:0 0 0 0;float: right">
                    <div class="ui-grid-a" >
                        <div class="ui-block-a">
                            <a href="#" class="ui-btn ui-corner-all ui-icon-heart ui-btn-icon-notext " >图标</a>

                        </div>
                        <div class="ui-block-b">
                            <a href="#" class="ui-btn ui-corner-all ui-icon-comment ui-btn-icon-notext " >图标</a>

                        </div>
                    </div>

                </div>
            </div>
            <img src="/AHalf/public<?php echo $hotdata['pic']; ?>" class="img-rounded" style="width:350px;height:230px"
                 data-toggle="tooltip" title="an image" data-placement="top">
            <br>
            <div class="panel panel-info" id="threeinnercon0">
                <div class="panel-heading">
                    <h5>趣味拼图，我在这里&nbsp;&nbsp;
                        <small>详情</small></h5></div>
                <!-- <hr width="95%" align="center" >-->
                <div class="panel-body">
                    <p>    &nbsp;&nbsp;&nbsp;&nbsp; 趣味，浪漫，我的最爱。拼图大联盟！</p>
                </div>

            </div>

        </div>
    </div>

    <div class="container" style="width:100%;margin-top: -35px;margin-bottom: -30px;">
        <h5 style="color:#6699CC" align="left">发表我的评论： </h5>
        <textarea class="form-control" rows="3" style="width:100%"align="left"placeholder="我来说一句..">

        </textarea>
        <div align="right">
            <p>
                <a href="#" class="btn btn-success" role="button"  data-toggle="modal" data-target="#myModal" >提交
                </a>
        </div>

        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset" class="btn btn-warning active">清&nbsp;除 </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-success active"  data-toggle="modal" data-target="#myModal" >提&nbsp;交</button> -->
        <table class="table table-condensed table-hover">
            <tr class="row">
                <td class="col-md-2">
                    <img src="http://localhost/AHalf/application/index/view/dist/imags/2012.jpg" alt="s" class="img-rounded" height="60px" width="60px"><br>

                </td>
                <td class="col-md-10">
                    <h5 style="color:#CC9933"> Annar：说话到底会不会闪到舌头呢</h5>
                    <p align="right">发表于： 2013-3-30 21:15</p>
                </td>
            </tr>



        </table>
        <ul class="pagination pagination-md pull-right">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div><!-- container -->
 
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