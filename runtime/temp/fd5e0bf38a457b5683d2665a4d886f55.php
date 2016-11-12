<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\wamp64\www\web\Edu\public/../application/index\view\ask\detail.html";i:1478527424;s:64:"D:\wamp64\www\web\Edu\public/../application/index\view\base.html";i:1478482414;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/muke.css">
<script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js"></script>
</head>

<body class="backg_huibai">

<!-- 顶部 -->
<div class="width100 height80 ">
	<div class="width100 float_l height80 line_hei80">
        <!-- 顶部左边 -->
        <div class="float_l">
            <div class="float_l margin_l20">
                <img src="__PUBLIC__/img/uiz1.png">
            </div>
            <div class="float_l">
                <ul class="ul_li fon_siz16">
                    <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                    <li><a>实战</a></li>
                    <li><a>路径</a></li>
                    <li><a>猿问</a></li>
                    <li><a>手记</a></li>
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
                    <a href="<?php echo url('course/index'); ?>"><img width="32px" height="32px" src="<?php if($user['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>"></a>
                </div>
                 <a href="<?php echo url('login/logout'); ?>" class="btn btn-danger" role="button">退出</a>
            <?php endif; ?>
        </div>
	</div>
</div>


<!DOCTYPE html>
<!-- saved from url=(0040)http://www.imooc.com/wenda/detail/334712 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>标题里面是代码，代码里面汉字是符号。..._慕课猿问</title>

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
                            <h1 class="js-qa-wenda-title detail-wenda-title l">标题里面是代码，代码里面汉字是符号。</h1>
                            <!-- 编辑 -->

                                                    </div>

                        <div id="js-qa-wenda" class="detail-wenda imgPreview rich-text">代码应该没有写错，但是就是没有实现，主体空白，标题成代码</div>
                    </div>

                                        <div class="qa-header detail-user-tips">

                        <div class="qa-header-right r">
                            <!-- credit -->
                            <div class="share-rl-tips share-posi js-share-statue" style="display: block;">
                                <span>分享即可 +</span><strong>1积分</strong>
                                <span class="rule-arrow"></span>
                            </div>
                            <!-- share -->
                            <div class="small-share l wd-share">
                                <ul class="share-wrap">
                                    <li class="weichat-posi js-top-share">
                                        <div class="bdsharebuttonbox weichat-style bdshare-button-style0-16" data-tag="share_1" data-quesid="334712" data-bd-bind="1478518797646">
                                            <a href="http://www.imooc.com/wenda/detail/334712#" class="bds_weixin icon-nav icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                            <a href="http://www.imooc.com/wenda/detail/334712#" class="bds_qzone icon-nav icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                            <a href="http://www.imooc.com/wenda/detail/334712#" class="bds_tsina icon-nav icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <em class="split l"></em>
                            <!-- follow -->
                                                            <a href="javascript:void(0)" data-id="334712" title="关注" class="l wenda-add-collection js-collection-btn">
                                    <i class="icon-heart"></i>
                                    <span class="detail-hearts js-detail-follow">0</span>
                                </a>
                                                    </div>
                        <!-- 个人信息 -->
                        <div class="detail-user">
                            <span class="detail-provider">提问者</span>
                            <a href="http://www.imooc.com/u/4111545/bbs" target="_blank" class="qa-author">学无止境4111545</a>
                                                                                                            </div>

                    </div>
                </div>

                        </div>

            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">
                <div id="add-answer" class="detail-ci-avator">
                    <h3 class="answer-add-tip">添加回答</h3>
                    <button id="answer-frame" class="answer-btn"></button>
                </div>

                <div id="avator-wrap" class="detail-ci-avator answer-hidden">
                                        <img src="__PUBLIC__/img/57ea04030001fa0201000100-80-80.jpg" alt="">
                    <div class="detail-r clearfix">
                        <span class="detail-name">mazhen4074002</span>
                        <p class="detail-signal"></p>
                    </div>
                </div>
                <div id="js-reply-wrap" class="answer-hidden">

                    <div id="js-qa-ci-footer" class="qa-ci-footer clearfix">
                        <span class="qa-tips l"></span>
                        <div class="qa-ci-footright">
                            <button id="js-wenda-ci-submit" class="btn btn-red detail-ans " data-qid="334712">回答</button>
                        </div>
                    </div>
                </div>


            </div>
            <!-- 回答数 -->
            <div class="ans_num">2回答</div>
             <!-- 回答回复 start -->
            <div class="ques-answer">
                    <div class="answer-con first" id="id_209128">
                        <div class="user-pic l">
                            <a href="http://www.imooc.com/u/2902662/bbs" target="_blank">
                                <img src="__PUBLIC__/img/533e4d2600013fe202000200-100-100.jpg" width="40" height="40" alt="?">
                            </a>
                        </div><!--.user end-->
                        <div class="detail-r">
                            <span class="time">55分钟前</span>
                                <a class="detail-name" href="http://www.imooc.com/u/2902662/bbs" target="_blank">kofzx</a>
                             <p class="detail-signal">Start dash!</p>
                        </div>


                        <div class="answer-content rich-text imgPreview"><p>检查一下标签是否都闭合。</p><p>改一下编码：charset="utf-o"。<br></p></div>
                                                <div class="ctrl-bar js-msg-context clearfix js-reply-tool hide">
                            <div class="detail-editor-btns r">
                                <span class="qa-tips"></span>
                                <button class="btn btn-normal js-reply-cancel">取消</button>
                                <button class="btn btn-red js-reply-submit" data-id="209128">保存</button>
                            </div>
                        </div>

                        <div class="ctrl-bar clearfix js-wenda-tool">

                            <span class="agree-with " data-ques-id="334712" data-answer-id="209128" data-hasop=""><b>赞同</b></span>

                            <span class="oppose " data-ques-id="334712" data-answer-id="209128" data-hasop="">反对</span>

                            <span class="reply" data-replynum="1" data-reply-id="209128" data-ques-uid="4111545"><em>1</em>个回复</span>

                        </div><!--.ctrl-bar end-->

                    </div><!--.answer-con end-->



                </div>





            <div class="qa-comment-page"></div>

    </div>

        <div class="wenda-slider r">
            <div class="quiz"><a href="javascript:;" class="js-quiz">我要提问</a></div>
            <!-- 相关问题 -->
              <div class="panel about-ques">
                <div class="panel-heading">
                  <h2 class="panel-title">相关问题</h2>
                </div>
                <div class="panel-body clearfix">
                         <div class="mkhotlist padtop">
                            <a class="relwenda" href="http://www.imooc.com/wenda/detail/334689" target="_blank">w3school怎么样？结合这个网站和慕课，学前端够了吗？</a><i class="answer-num">2 回答</i>
                        </div>

                </div>
              </div>
                        <!-- 广告 -->
                 <div class="advertisement">
                    <a href="http://www.imooc.com/wenda/detail/323379" data-ast="yuanwendetailright_1_192" target="_blank">
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
            <span>© 2016 imoroc.com  京ICP备13042132号</span>
        </div>
    </div>
</div>

</body>
</html>

