<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\wamp64\www\edu\public/../application/index\view\video\search.html";i:1478824219;s:60:"D:\wamp64\www\edu\public/../application/index\view\base.html";i:1478760512;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/muke.css">
<script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js"></script>
<style>
 #navname li a  {color: black;}
#navname li a:hover{color: red;}

</style>
</head>

<body class="backg_huibai">

<!-- 顶部 -->
<div class="width100 height80 ">
	<div class="width100 float_l height80 line_hei80">
        <!-- 顶部左边 -->
        <div class="float_l">
            <div class="float_l margin_l20">
            <!--logo-->
                 <img width="160" height="60" src="__IMGL__/uploads/20161108/7a528089aac176c8d3fcb8f6b70d043a.jpg">
            </div>
            <div class="float_l">
                <ul class="ul_li fon_siz16" id = "navname">
                    <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
					<li><a href="<?php echo url('ask/index'); ?>">问答</a></li>
                    <li><a href="<?php echo url('exam/index'); ?>">考试系统</a></li>
					 <li><a href="<?php echo url('About/index'); ?>" target="_blank">关于我们</a></li>

                </ul>
            </div>
        </div>

        <!-- 顶部右边 -->
         <div class="float_r">
            <div class="float_l top_input">
                 <form action="<?php echo url('Video/search'); ?>" method="post">
                    <input class="posi_relative" type="text" name="keywords" id="" placeholder="请输入想搜索的内容...">
                    <button type="button" class="btn btn-default btn-xs"> 搜索</button>
                </form>
            </div>
            <?php if(empty(session('username'))): ?>
            <div class="float_l margin_l20">
                <a href="<?php echo url('login/index'); ?>" class="btn btn-info" role="button">登录</a>
                <a href="<?php echo url('login/index'); ?>" class="btn btn-warning" role="button">注册</a>
            </div>
            <?php else: ?>
                <div class="float_l margin_l40">
                    <img src="__PUBLIC__/img/uiz3.png">
                </div>
                <div class="float_l margin_l35">
                    <img src="__PUBLIC__/img/uiz6.png">
                </div>
                <div class="float_l margin_l30 margin_r40">
                    <a href="<?php echo url('course/index'); ?>"><img width="32px" height="32px" src="<?php if($user['picture'] == '1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>"></a>
                </div>
                 <a href="<?php echo url('login/logout'); ?>" class="btn btn-danger" role="button">退出</a>
            <?php endif; ?>
        </div>
	</div>
</div>


<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="renderer" content="webkit"/>
<meta name="keywords" content=""/>
<meta name="description" content="">
<meta name="author" content="耿道平 <2391455790@qq.com>"/>
<link rel="icon" href="./images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="./resources/bootstrap3/css/bootstrap.min.css" />
<link rel="stylesheet" href="./resources/flat-ui-2.2.2-dist/css/flat-ui.min.css"/>
<link rel="stylesheet" href="./css/comm.css"/>
<title>搜索页</title>
    <style>
    .footer { margin:0px; background-color: #2a2a2a; text-align: center;padding:30px;margin-top:40px; clear: both;}
    .footer_nav_out {display:inline-block;border-bottom: 1px solid #4d4d4d;padding:0px 50px;}
    .footer_nav { display: inline-block; color: #9e9e9e;padding:10px 50px; vertical-align: top;}
    .footer_nav li{ font-size: 14px;text-align: left;line-height: 30px;}
    .footer_nav li a{ color: #9e9e9e;}
    .footer_nav li a:hover{ opacity: .9;}
    .footer_nav .title{ font-size: 18px;}
    .footer .copyright { color: #787878;font-size: 12px;margin-top: 30px;}
    .footer .copyright img { margin-left:6px;margin-right:6px;margin-top:-10px;}
    .footer .copyright span { color: #57dfc7;}
    .footer .copyright span.phone_large { font-size: 20px;}
        ul,ol{list-style: none;margin:0;padding:0}
        .navbar{
            margin-bottom: 0px;
        }
        .background-gradient{
            background:-webkit-linear-gradient(90deg, rgb(21, 37, 53),rgb(60, 175, 170));
            background:linear-gradient(90deg, rgb(21, 37, 53),rgb(60, 175, 170));
        }
        .content-title-1{
            padding:15px 0px 10px;
            font-size:16px;
            border-bottom:1px solid #d7dee0;
        }
        .tips{
            color:#ff0000;
        }
        .pagination-self>ul{display: inline-block;margin-top:20px;}
        .pagination-self>ul>li{display: inline-block;margin:0px 8px 0px 0px;}
        .pagination-self>ul>li>a{font-size:17px;display: inline-block;color:#bbb;padding:1px 8px;font-family: "Arial";}
        .pagination-self>ul>li>a:active,.pagination-self>ul>li>a:hover{color:#fff;background-color: #00d3d4}
        .pagination-self>ul>li>a.active{color:#fff;background-color: #00d3d4}
        .content-1-div-1{
            padding:0 0;
        }
        .content-1-div-2{
            padding:0;
        }
        .content-1-div-2>ul>li>h6,p{

            margin:0;padding:0;font-weight: normal;line-height:1;
        }
        .content-1-div-2>ul>li{

           padding:0px 0px 0px 30px;;
        }
        .content-1-div-2>ul>li>h6{
            color:#000000;
            font-size:16px;
            margin-bottom: 10px;
        }
        .content-1-div-2>ul>li>p{
            width:615px;
            text-overflow:ellipsis;
            overflow:hidden;
            line-height: 24px;
            max-height:48px;
            text-overflow:ellipsis;

        }
        .p1{
            font-size:15px;
            color:#777;
            height:48px;
        }
        .search-strong{
            color:#00d3d4;
        }
        .p2{
            color:#969696;
            font-size:15px;
        }
        .p3{
            color:#ff0000;
            font-size:15px;
        }
        .content{
            overflow:hidden;border-bottom:1px solid #d7dee0;padding-bottom:27px;padding-top:27px;
        }
        .content:last-child{
            overflow:hidden;padding-bottom:20px;border:none
        }
        .list-inline>li{
            margin-bottom:8px;
        }
        .list-inline>li>a{
            border:1px solid #ddd;padding:2px 15px;background-color: #fff;color:#969696;border-radius:16px;font-size:14px;
        }
    </style>
</head>

<body>
<div class="background-gradient">
    <div class="container">
       <div class="row">
           <div class="col-lg-12" style="padding:108px 0px">
               <form action="<?php echo url('Video/search'); ?>" method="post">
               <div class="input-group form-group-lg" style="width:700px;margin:0 auto;border:none">
                   <input type="text" name="keywords" value="<?php echo $keywords; ?>" class="form-control input-lg" placeholder="请输入您要搜索的内容" style="border:none;">
                   <span class="input-group-btn">
                       <button class="btn btn-default" type="button" style="height:45px;padding-right:50px;padding-left:50px;background-color:#FF5454;border:none">搜索</button>
                   </span>
               </div>
               </form>
           </div>
       </div>
   </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <ul class="content-title-1">
                <li>
                    为您找到相关课程<span class="tips"><?php echo $videocount; ?></span>个
                </li>
            </ul>
            <ul >
            <?php if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a  href="<?php echo url('Details/index',['id' => $vo['id']]); ?>" target="_blank">
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img width="228" height="128"  src="__IMG__/<?php echo $vo['picname']; ?>">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>

                            <li>
                                <h6>
                                    <span class="search-strong"><?php echo $vo['videoname']; ?></span>
                                </h6>
                                <p class="p1">
                                    课程简介：<?php echo $vo['descr']; ?>
                                </p>
                                <p class="p2">
                                    上传时间：<?php echo date( 'Y-m-d',$vo['create_time'] ); ?>&nbsp;|&nbsp;&nbsp;&nbsp;<?php if($vo['good'] == 1): ?>推荐<?php endif; ?>
                                </p>
                                <p class="p3">
                                    <span>
                                    <?php echo $vo['clicknum']; ?>人浏览
                                    </span>
                                </p>
                            </li>

                        </ul>
                    </div>
                </li>
                </a>
                 <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
<!-- 热门课程 -->
        <div class="col-md-3">
            <ul class="content-title-1" style="margin-bottom: 11px;">
                <li>热门课程</li>
            </ul>
            <ul class="list-inline">
            <?php if(is_array($hotvideo) || $hotvideo instanceof \think\Collection): $i = 0; $__LIST__ = $hotvideo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php echo url('Details/index',['id' => $vo['id']]); ?>" target="_blank"><?php echo $vo['videoname']; ?></a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- 分页 -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pagination-self">
                <ul >
                <li><?php echo $result->render(); ?></li>

                </ul>
            </div>
        </div>
    </div>
</div>

</body>


<!-- 页脚 -->
<div class="width100 float_l padding_t30 height193">
    <div class="width_1200 margin_auto">
        <div class="width100 float_l text_c yejiao color_gray">
        <?php if(is_array($flink) || $flink instanceof \think\Collection): $i = 0; $__LIST__ = $flink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a href = "<?php echo $vo['url']; ?>"><?php echo $vo['webname']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <div class="width100 float_l text_c border_t margin_t20 padding_t20 color_gray fon_siz12">
            <span>© 2016 chensenlin.cn 渝ICP备16010775号-1</span>
        </div>
    </div>
</div>

</body>
</html>

