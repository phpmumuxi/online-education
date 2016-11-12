<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\wamp64\www\edu\public/../application/index\view\ask\add.html";i:1478692208;s:60:"D:\wamp64\www\edu\public/../application/index\view\base.html";i:1478760512;}*/ ?>
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
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>发表问题</title>
        <link rel="stylesheet" href="__PUBLIC__/editor/examples/css/style.css" />
        <link rel="stylesheet" href="__PUBLIC__/editor/css/editormd.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css">
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />

    </head>
    <body>
    <form action="<?php echo url('Ask/check'); ?>" method="post">
        <div id="layout">

            <header>
                <h3>标题</h3>
            </header>

           <div class="form-group">

                <div class="col-md-7 col-md-offset-1"  >
                  <input type="text" class="form-control" name="title" placeholder="请输入问题的标题">
                </div>
            </div>
            <header>
                <h3>内容</h3>
            </header>
            <div id="test-editormd">
                <textarea style = "display:none;" name = "content"></textarea>
            </div>
        </div>
        <div align="left" style="margin-left:130px;">
            <input type="hidden" name="vid" value="<?php echo $id; ?>">
            <input type="submit" class="btn btn-primary" value="发表">
        </div>

    </form>


        <script src="__PUBLIC__/editor/examples/js/jquery.min.js"></script>
        <script src="__PUBLIC__/editor/editormd.min.js"></script>
        <script type="text/javascript">
			var testEditor;
            $(function() {
                testEditor = editormd("test-editormd", {
                    width   : "80%",
                    height  : 500,
                    syncScrolling : "single",
                    path    : "__PUBLIC__/editor/lib/"
                });
            });
        </script>

        

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

