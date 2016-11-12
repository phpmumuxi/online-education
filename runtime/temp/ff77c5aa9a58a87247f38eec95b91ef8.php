<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\wamp64\www\edu\public/../application/index\view\video\index.html";i:1478616036;s:60:"D:\wamp64\www\edu\public/../application/index\view\base.html";i:1478760512;}*/ ?>
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
<meta name="author" content=" "/>
<link rel="icon" href="__PUBLIC__/img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" />
<link rel="stylesheet" href="__PUBLIC__/css/flat-ui.min.css"/>
<link rel="stylesheet" href="__PUBLIC__/css/comm.css"/>
<title>课程列表</title>
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
     ol,ul{list-style: none;margin:0;padding:0;}.page{font-size:14px;}.content-label{margin:0px 5px 8px 5px;clear:both;}
    .content-label>ul{overflow:hidden;}.content-label>ul>li{float:left;margin-right:10px;margin-bottom:15px;}
    .content-label>ul>li>a{color:#777;border-radius:16px;padding:2px 15px;}.content-label-span{color:#bbb;width:56px;float:left;}
    .content-label>ul>li>a:active,.content-label>ul>li>a:hover{background-color: #00d3d4;border-radius:16px;color:#fff;padding:2px 15px 4px 15px;}
    .content-label>ul>li>a.active{background-color: #00d3d4;border-radius:16px;color:#fff;padding:2px 15px 4px 15px;}
    .content-title{font-size:16px;;color:#00d3d4;margin:-10px 5px 20px 5px;padding-bottom:5px;border-bottom:1px solid #ddd;}
    .content-divider{height:50px;background-color:#F5F5F5;border:1px solid #ddd;margin:0px 5px 20px 5px;line-height: 45px;}
    .content-divider>a.active{color:#00d3d4 !important;}
    .content-divider>a{margin:0px 5px 0px 40px;color:#777} .content-divider>a:active,.content-divider>a:hover{color:#00d3d4;}
    .thumbnail{border:1px solid #fff;border-bottom:1px solid #ddd;border-radius:0px;padding:12px 10px 12px 10px;margin:2px;}
    a.thumbnail:hover{border-radius:0px;border:1px solid #fff;-webkit-box-shadow:0 0 10px rgba(63, 63, 63, .5);-moz-box-shadow:0 0 10px rgba(63, 63, 63, .5);box-shadow:0 0 10px rgba(63, 63, 63, .5);}
    .thumbnail .caption{padding:0px;}.caption>h6{white-space:nowrap; overflow:hidden; text-overflow:ellipsis;font-size:14px;margin:9px 0px 2px 0px;font-weight:400;padding-top:1px;padding-bottom: 1px;}
    .subhead{font-size:13px !important;color:#bbb;}.col-xs-6.col-md-3.edit{ padding:0px;margin-bottom:30px;}
    .subhead-titie{font-size: 12px ;color:#FA6441;margin:0px;} .subhead-content{ font-size: 12px;color:#bbb;} .pagination-self{text-align: center;font-size:15px;margin-top:10px;}
    .pagination-self>ul{display: inline-block}
    .pagination-self>ul>li{display: inline-block;margin:0px 4px;}
    .pagination-self>ul>li>a{display: inline-block;color:#bbb;padding:1px 8px;font-family: "Arial";}
    .pagination-self>ul>li>a:active,.pagination-self>ul>li>a:hover{color:#fff;background-color: #00d3d4}
    .pagination-self>ul>li>a.active{color:#fff;background-color: #00d3d4}
    .content-title{margin-top: 20px;}
</style>
</head>
<body>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="content-title">
                <span>全部课程</span>
            </div>
        </div>
        <div class="row">
            <div class="content-label">
                <span class="content-label-span">方向：</span>
                <ul>
                    <li>
                        <a  href="<?php echo url('Video/all'); ?>">全部</a>
                    </li>

                    <?php if(is_array($cate) || $cate instanceof \think\Collection): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>


                        <a href="<?php echo url('Video/index',['id' => $vo['id'],'pid' => $vo['pid']]); ?>"><?php echo $vo['name']; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="content-label" >
                <span class="content-label-span">分类：</span>
                <ul>
                    <li>
                        <a href="#">全部</a>
                    </li>
                    <?php if(is_array($cate_min) || $cate_min instanceof \think\Collection): $i = 0; $__LIST__ = $cate_min;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                    <a href="<?php echo url('Video/lst',['id' => $vo['id'],'pid' => $vo['pid']]); ?>" ><?php echo $vo['name']; ?></a>

                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </div>


        <div class="row">
            <div class="content-divider">
                <a href="#" class="active">最新</a>
                <a href="#">最热</a>
            </div>
        </div>
        <div class="row">
        <?php if(is_array($video) || $video instanceof \think\Collection): $k = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="<?php echo url('Details/index',['id' => $vo['id']]); ?>">
                    <img width="270" height="180" src="__IMG__/<?php echo $vo['picname']; ?>">
                    <div class="caption">
                        <h6><?php echo $vo['videoname']; ?></h6>
                        <h6   class="subhead"><?php echo $vo['descr']; ?></h6>
                        <span class="subhead-titie"><?php echo $vo['favonum']; ?> 人赞
                        </span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content"><?php echo $vo['clicknum']; ?>人学习</span>
                        </div>
                    </div>
                </a>
            </div>
            <?php if($k%4 == 0): ?>
            <div class="clearfix"></div>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>



        <div class="row">
            <div class="pagination-self">
                <ul>
                    <?php echo $page; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="__PUBLIC__/js/vendor/jquery.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/flat-ui.min.js"></script>



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

