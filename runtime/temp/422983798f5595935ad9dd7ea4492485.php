<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\wamp64\www\edu\public/../application/index\view\ask\detail.html";i:1478826249;s:60:"D:\wamp64\www\edu\public/../application/index\view\base.html";i:1478760512;}*/ ?>
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
<!-- saved from url=(0040)http://www.imooc.com/wenda/detail/334712 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>问题详情</title>

<style type="text/css">
    .warn-info{
        font-size: 16px;
        line-height: 28px;
    }
    .warn-tip{
        color: #999;
        margin-top: 30px;
    }
    .warn-tip a{
        color: #08c !important;
    }
    .fenye{
        margin-left: 300px;
        margin-top:30px;
    }
    </style>

<link rel="stylesheet" href="__PUBLIC__/css/savedh_resource.css" type="text/css">

</head>
<body>


<div class="wenda clearfix">
    <div class="l wenda-main">

            <div class="qa-content" data-qid="334712">
                <div class="qa-content-inner ">
                    <div id="js-content-main">
                        <div class="detail-q-title clearfix">
                            <h1 class="js-qa-wenda-title detail-wenda-title l"><?php echo $result['title']; ?></h1>
                            <!-- 编辑 -->
                        </div>

                        <div id="js-qa-wenda" class="detail-wenda imgPreview rich-text"><?php echo $result['content']; ?></div>
                    </div>

                    <div class="qa-header detail-user-tips">

                        <!-- 个人信息 -->
                        <div class="detail-user">
                            <span class="glyphicon glyphicon-user"></span>
                            <a target="_blank" class="qa-author"><?php echo $result['user']['username']; ?></a>
                        </div>
                        <div class="detail-r">
                        <span class="time"><?php echo date("Y-m-d H:i:s",$result['create_time']); ?></span>
                        </div>
                    </div>
                </div>

            </div>

        <?php if($list): ?>
            <!-- 回答数 -->
            <div class="ans_num"><?php echo $count; ?>个回答</div>
             <!-- 回答回复 start -->
             <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
            <div class="ques-answer">
                    <div class="answer-con first" id="id_209128">
                        <div class="user-pic l">
                            <a href="" target="_blank">
                                <img src="<?php if($data['user']['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $data['user']['picture']; endif; ?>" width="40" height="40" />
                            </a>
                        </div><!--.user end-->
                        <div class="detail-r">
                            <span class="time"><?php echo date("Y-m-d H:i:s",$data['create_time']); ?></span>
                                <a class="detail-name" href="" target="_blank"><?php echo $data['user']['username']; ?></a>
                             <p class="detail-signal"><?php echo $data['user']['introduce']; ?></p>
                        </div>


                        <div class="answer-content rich-text imgPreview"><?php echo $data['content']; ?></div>


                        <div class="ctrl-bar clearfix js-wenda-tool">

                            <span class="glyphicon glyphicon-ok"><a href="<?php echo url('Reply/love',['id'=>$data['id'],'qid'=>$data['qid']]); ?>"> 赞同(<?php echo $data['love']; ?>)</a></span>

                            <span class="glyphicon glyphicon-remove"><a href="<?php echo url('Reply/dislike',['id'=>$data['id'],'qid'=>$data['qid']]); ?>">反对(<?php echo $data['dislike']; ?>)</a></span>

                        </div><!--.ctrl-bar end-->

                    </div><!--.answer-con end-->

            </div>
            <?php endforeach; endif; else: echo "" ;endif; else: ?>

            <div class="none_ans">暂无任何回答</div>

        <?php endif; ?>

            <br />
            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">
            <form  method="post" action="<?php echo url('Reply/check'); ?>">

                <input type="hidden" name="uid" value="<?php echo $user['id']; ?>"/>
                <input type="hidden" name="qid" value="<?php echo $result['id']; ?>"/>
                <input type="hidden" name="vid" value="<?php echo $result['vid']; ?>"/>

                <div id="add-answer" class="detail-ci-avator">
                    <h3 class="answer-add-tip">添加回答</h3>
                     <textarea cols="108" name="content"></textarea>
                </div>

                <div id="avator-wrap" class="detail-ci-avator">
                <br>
                    <img src="<?php if($user['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>" alt="">
                    <div class="detail-r clearfix">
                        <span class="detail-name"><?php echo $user['username']; ?></span>
                        <p class="detail-signal"></p>
                    </div>
                </div>
                <div id="js-reply-wrap" class="">

                    <div id="js-qa-ci-footer" class="qa-ci-footer clearfix">

                        <div class="qa-ci-footright">
                            <input type="submit" value="回 答" class="btn btn-danger"/>
                        </div>
                    </div>
                </div>
            </form>
            </div>

           <!-- 分页 -->
            <div class="fenye">
            <?php echo $list->render(); ?>
            </div>

    </div>

        <div class="wenda-slider r">
            <div class="quiz"><a href="<?php echo url('Ask/add',['id'=>$result['vid']]); ?>" class="js-quiz">我要提问</a></div>
            <!-- 相关问题 -->
              <div class="panel about-ques">
                <div class="panel-heading">
                  <h2 class="panel-title">热门问题</h2>
                </div>
                <?php if(is_array($hot) || $hot instanceof \think\Collection): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="panel-body clearfix">
                        <div class="mkhotlist padtop">
                            <a class="relwenda" href="http://www.imooc.com/wenda/detail/334689" target="_blank"><?php echo $vo['title']; ?></a><i class="answer-num"> <?php echo $vo['count2']; ?> 回答</i>
                        </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
                        <!-- 广告 -->
                <div class="advertisement">
                    <a href="" data-ast="yuanwendetailright_1_192" target="_blank">
                        <img src="__PUBLIC__/img/5791b42900016c5402800100.jpg" title=" 私密有料之后端开发，面试被问过哪些技">
                    </a>
                </div><!--.advertisement end-->


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

