<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\wamp64\www\web\Edu\public/../application/index\view\ask\index.html";i:1478527611;s:64:"D:\wamp64\www\web\Edu\public/../application/index\view\base.html";i:1478482414;}*/ ?>
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
<!-- saved from url=(0026)http://www.imooc.com/wenda -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>问题展示</title>

    <link rel="stylesheet" href="__PUBLIC__/css/savedf_resource.css" type="text/css">
</head>
<body>




<div class="wenda clearfix">

  <div class="js-layout-change">
    <div class="l wenda-main">
      <div class="wd-top-slogan">
        <span>程序员自己的问答社区</span>
        <a class="js-quiz" href="<?php echo url('add'); ?>">我要提问</a>
      </div>
      <div class="nav">
        <a href="http://www.imooc.com/wenda" class="active">推荐</a>
        <a href="http://www.imooc.com/wenda/new">最新</a>
        <a href="http://www.imooc.com/wenda/waitreply">等待回答</a>
                <div class="switch-box">
          <div class="switch js-switch">
              <div class="fill">
                <div class="outer"></div>
              </div>
              <div class="inner"></div>
          </div>
          <span>只显示关注内容</span>
                          </div>

            </div><!--.nav end-->

      <!--推荐位-->
                  <ul class="recommend">
                <li><i class="icon-flag2"></i><a href="http://www.imooc.com/wenda/detail/332610" data-ast="yuanwenindex_1_639" target="_blank" title="【积分换门票】免费送2016苹果开发者大会门票">【积分换门票】免费送2016苹果开发者大会门票</a></li>
                <li><i class="icon-flag2"></i><a href="http://www.imooc.com/wenda/detail/329082" data-ast="yuanwenindex_1_401" target="_blank" title="实力派-linux大棚来了，更有linux图书免费送">实力派-linux大棚来了，更有linux图书免费送</a></li>
              </ul><!--recommend end-->
                  <!--左侧列表内容-->
      <div class="wenda-list">

<div class="ques-answer">
    <div class="tag-img">
          <a href="http://www.imooc.com/wenda/14" target="_blank">
                <img src="__PUBLIC__/img/563aff620001ec7600900090.jpg" title="Html5">
            </a>
     </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/14" target="_blank">Html5</a>
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="<?php echo url('detail'); ?>" class="ques-con-content" target="_blank" >网页写好之后怎么把它放到网上</a>

    </div>
        <div class="answer-con first" data-answer-id="208995" id="answer-con">
        <div class="user">

                        <a href="http://www.imooc.com/u/3151674/bbs" target="_blank">i杜克</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">放到网上，那一定要服务器，对于你可能要困难一些，一时半会肯定说不明白，阿里云ecs最低配置一个月61.5块。总之肯定要花钱买服务器或者虚拟机。</div>
        <div class="answer-content-all rich-text imgPreview"><p>放到网上，那一定要服务器，对于你可能要困难一些，一时半会肯定说不明白，阿里云ecs最低配置一个月61.5块。</p><p>总之肯定要花钱买服务器或者虚拟机。</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="334647" data-answer-id="208995" data-hasop=""><b>赞同</b><em>4</em></span>
            <span class="oppose " data-ques-id="334647" data-answer-id="208995" data-hasop="">反对</span>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">

        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="__PUBLIC__/img/57ea04030001fa0201000100-100-100.jpg" alt="mazhen4074002">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">mazhen4074002</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="208995" data-ques-uid="3041325">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->


<div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/2">2</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/3">3</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/4">4</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/5">5</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/6">6</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/7">7</a><a href="http://www.imooc.com/wenda/recommend/2">下一页</a><a href="http://www.imooc.com/wenda/recommend/1103">尾页</a></div>


      </div>
    </div>
    <div class="r wenda-slider">


<div class="user-about">
    <div class="user-info">
        <div class="user-pic">
            <a href="http://www.imooc.com/u/4074002/bbs">
                <img src="__PUBLIC__/img/57ea04030001fa0201000100-100-100.jpg" alt="mazhen4074002">
            </a>
        </div>
        <div class="user-name">
            <a href="http://www.imooc.com/u/4074002/bbs">mazhen4074002</a>
                                </div>
        <div class="integral-info clearifx">
            <a href="http://www.imooc.com/u/4074002/credit" class="integral">积分：1</a>
            <a href="http://www.imooc.com/mall/index" class="integral-mall">积分商城</a>
        </div>
    </div><!--.user-info end-->
    <div class="user-action">
        <span class="ques"><a href="http://www.imooc.com/u/4074002/bbs">提问</a><!-- <i></i>--></span>
        <span class="reply"><a href="http://www.imooc.com/u/4074002/bbs?sort=reply">回答</a></span>
        <span class="follow"><a href="http://www.imooc.com/u/4074002/bbs?sort=follow">关注</a></span>
    </div><!--.user-action end-->
</div><!--.user-about end-->

<div class="recommend-class">
    <div class="title clearfix">
        <h3>推荐分类</h3>
        <span class="all-cls">全部分类</span>
    </div><!--title end-->
    <ul class="cls-list">
        <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="http://www.imooc.com/wenda/11" target="_blank">
                        <img src="__PUBLIC__/img/563aff910001771f00900090.jpg" alt="Mysql">
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="http://www.imooc.com/wenda/11" target="_blank">Mysql</a></h4>
                <p class="follow-person">13172人关注</p>
                                <a href="javascript:void(0)" data-tag-id="11" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">Mysql是最流行的关系型数据库管理系统，在WEB应用方面MySQL...</div>
        </li><!--li end-->

    </ul><!--.cls-list end-->
</div><!--.recommend-class end-->

<div class="advertisement">
        <a href="http://www.imooc.com/wenda/detail/329082" data-ast="yuanwenindexright_1_189" target="_blank">
        <img src="__PUBLIC__/img/57dfa24c0001b40d02800100.jpg" alt="linux问答">
    </a>
</div><!--.advertisement end-->
<div class="hot-ques">
    <h3 class="title">热门问题</h3>
    <ul>
        <li>
            <p class="content"><a target="_blank" href="http://www.imooc.com/wenda/detail/320982">刷分零容忍！发布用户id1949284的处罚公告</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="http://www.imooc.com/wenda/detail/320982" class="answer-num">170 回答</a>
                <a target="_blank" href="http://www.imooc.com/wenda/detail/320982" class="follow-num">23 关注</a>
                <a target="_blank" href="http://www.imooc.com/wenda/12" class="from">来自 Android</a>
            </div>
        </li>
    </ul><!--ul end-->
</div><!--.hot-ques end-->

<div class="leifeng-sort">
    <h3 class="title clearfix">
        <span>回答雷锋榜</span>
        <span class="leifeng-tab js-leifeng-tab" data-type="week">一周</span>
        <span class="leifeng-tab js-leifeng-tab active" data-type="day">今日</span>
    </h3>

    <div class="leifeng-tab-box leifeng-day js-leifeng-tab-box" data-type="day">
        <ul class="leifeng-tab-box-min">
            <li>
                <div class="ranking first">1</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/2764967/bbs">
                        <img src="__PUBLIC__/img/5683aa1a0001239c01000100-100-100.jpg" title="qq_new_9">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/2764967/bbs">qq_new_9</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">35回答</span>
                </div><!--.user-info end-->
            </li>


         </ul>

    </div>
 </div><!--.leifeng-sort end-->

    </div>
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

