<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\wamp64\www\edu\public/../application/index\view\ask\recommend.html";i:1478753114;s:60:"D:\wamp64\www\edu\public/../application/index\view\base.html";i:1478760512;}*/ ?>
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
<!-- saved from url=(0026)http://www.imooc.com/wenda -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>问题展示</title>

    <link rel="stylesheet" href="__PUBLIC__/css/savedf_resource.css" type="text/css">

    <style type="text/css">
        .fenye{
        margin-left: 300px;
        margin-top:30px;
    }

    </style>

</head>
<body>




<div class="wenda clearfix">


    <div class="l wenda-main">
      <div class="wd-top-slogan">
        <span>程序员自己的问答社区</span>
        <a class="js-quiz" href="<?php echo url('Ask/user'); ?>" target="_blank">我的问答社区</a>
      </div>
      <div class="nav">
        <a href="<?php echo url('Ask/index'); ?>" >推荐</a>
        <a href="<?php echo url('Ask/recommend'); ?>" class="active">最新</a>
        <a href="<?php echo url('Ask/toreply'); ?>">等待回答</a>
      </div><!--.nav end-->

      <!--公告位-->
      <ul class="recommend">
        <?php if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$not): $mod = ($i % 2 );++$i;?>
        <li><i class="icon-flag2"></i><a href=""title="<?php echo $not['title']; ?>"><?php echo $not['title']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul><!--recommend end-->
      <!--左侧列表内容-->
     <div class="wenda-list">
        <?php if(is_array($ask) || $ask instanceof \think\Collection): $i = 0; $__LIST__ = $ask;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
        <div class="ques-answer">
            <div class="tag-img">
                  <a href="">
                        <img src="__IMG__/<?php echo $data['user']['picture']; ?>" title="Html5">
                    </a>
             </div><!--.tag-img end-->
            <div class="from-tag">        来自
                <a href="" target="_blank"><?php echo $data['video']['videoname']; ?></a>
            </div><!--.from-tag end-->
            <div class="ques-con">
            <a href="<?php echo url('Ask/detail',['id'=>$data['id']]); ?>" class="ques-con-content" target="_blank" ><?php echo $data['title']; ?></a>

            </div>
            <?php if($data['reply']): ?>
            <div class="answer-con first" data-answer-id="208995" id="answer-con">
                <div class="user">

                    <a href="" target="_blank"><?php echo $data['reply']['user']['username']; ?></a><span class="signature">回答：</span>
                </div>
                <div class="answer-content"><?php echo $data['reply']['content']; ?></div>

                <div class="ctrl-bar clearfix">
                    <span class="glyphicon glyphicon-ok"><a href="<?php echo url('Reply/love',['id'=>$data['reply']['id'],'qid'=>$data['id']]); ?>"> 赞同(<?php echo $data['reply']['love']; ?>)</a></span>
                    <span class="glyphicon glyphicon-remove"><a href="<?php echo url('Reply/dislike',['id'=>$data['reply']['id'],'qid'=>$data['id']]); ?>">反对(<?php echo $data['reply']['dislike']; ?>)</a></span>
                </div><!--.ctrl-bar end-->
            </div><!--.answer-con end-->
            <?php else: ?>
                <br/>
                <div class="none_ans">暂无任何回答</div>

            <?php endif; ?>

        </div><!--.ques-answer end-->
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <!-- 分页 -->
        <div class="fenye">
        <?php echo $ask->render(); ?>
        </div>

     </div>
   </div>

  <div class="r wenda-slider">
    <div class="user-about">
        <div class="user-info">
            <div class="user-pic">
                <a href="<?php echo url('Course/index'); ?>" target="_blank">
                    <img src="__IMG__/<?php echo $user['picture']; ?>" >
                </a>
            </div>
            <div class="user-name">
                <a href="<?php echo url('Course/index'); ?>"><?php echo $user['username']; ?></a>
                                    </div>
            <div class="integral-info clearifx">
                <a href="<?php echo url('Course/index'); ?>t" class="integral">积分：<?php echo $user['point']; ?></a>
                <a href="<?php echo url('Course/index'); ?>" class="integral-mall">等级：<?php echo $user['level']; ?></a>
            </div>
        </div><!--.user-info end-->
        <div class="user-action">
            <span class="ques"><a href="<?php echo url('Ask/user'); ?>" target="_blank">提问</a></span>
            <span class="reply"><a href="<?php echo url('Reply/user'); ?>" target="_blank">回答</a></span>
        </div><!--.user-action end-->
    </div><!--.user-about end-->

    <div class="recommend-class">
        <div class="title clearfix">
            <h3>推荐课程</h3>
            <span class="all-cls">全部分类</span>
        </div><!--title end-->
        <ul class="cls-list">
        <?php if(is_array($gvideo) || $gvideo instanceof \think\Collection): $i = 0; $__LIST__ = $gvideo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gvo): $mod = ($i % 2 );++$i;?>
            <li>
                <div class="class-info">
                    <div class="class-icon">
                        <a href="<?php echo url('Details/index',['id'=>$gvo['id']]); ?>" target="_blank">
                            <img src="__IMG__/<?php echo $gvo['picname']; ?>" >
                        </a>
                    </div><!--.class-icon end-->
                    <h4><a href="<?php echo url('Details/index',['id'=>$gvo['id']]); ?>" target="_blank"><?php echo $gvo['videoname']; ?></a></h4>
                    <p class="follow-person"><?php echo $gvo['clicknum']; ?>人浏览</p>
                    <a href="<?php echo url('Details/index',['id'=>$gvo['id']]); ?>" data-tag-id="11" class="follow">查看</a>
                 </div><!--.class-info end-->
                <div class="desc"><?php echo $gvo['descr']; ?></div>
            </li><!--li end-->
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul><!--.cls-list end-->
    </div><!--.recommend-class end-->

    <div class="advertisement">
            <a href="" data-ast="yuanwenindexright_1_189" >
            <img src="__PUBLIC__/img/57dfa24c0001b40d02800100.jpg" alt="linux问答">
        </a>
    </div><!--.advertisement end-->
    <div class="hot-ques">
        <h3 class="title">热门问题</h3>
        <ul>
        <?php if(is_array($hot) || $hot instanceof \think\Collection): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <p class="content"><a target="_blank" href="<?php echo url('Ask/detail',['id'=>$data['id']]); ?>"><?php echo $vo['title']; ?></a></p>
                <div class="info-bar clearfix">
                    <a target="_blank" href="<?php echo url('Ask/detail',['id'=>$data['id']]); ?>" class="answer-num"><?php echo $vo['count2']; ?> 回答</a>
                    <a target="_blank" href="<?php echo url('Ask/detail',['id'=>$data['id']]); ?>" class="answer-num"><?php echo $vo['clicknum']; ?> 浏览量</a>
                    <a target="_blank" href="<?php echo url('Ask/alluser',['id'=>$data['video']['id']]); ?>" class="from">来自 <?php echo $vo['video']['videoname']; ?></a>
                </div>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul><!--ul end-->
    </div><!--.hot-ques end-->

    </div>
</div>







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

