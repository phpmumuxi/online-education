<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\wamp64\www\web\Edu\public/../application/index\view\ask\user.html";i:1478516879;s:63:"D:\wamp64\www\web\Edu\public/../application/index\view\nav.html";i:1478504413;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0038)http://www.imooc.com/u/4074002/courses -->
<html>

	<head>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.3.js"></script>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/muke.css">
		<script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js"></script>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="__PUBLIC__/css/moco.min.css" type="text/css">
		<link rel="stylesheet" href="__PUBLIC__/css/layer.css">
		<link rel="stylesheet" href="__PUBLIC__/css/saved_resource.css" type="text/css">
		<link rel="stylesheet" href="__PUBLIC__/css/share_style0_16.css">
		<style type="text/css">
			.warn-info {
				font-size: 16px;
				line-height: 28px;
			}

			.warn-tip {
				color: #999;
				margin-top: 30px;
			}

			.warn-tip a {
				color: #08c !important;
			}
			#tuichu{
				margin-right:20px;
				color:#fff;
			}

			a:hover, a:active {
			    color: #ec1500;
			}
		</style>

	</head>

	<body>

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
		            <div class="float_l margin_l20">
		                <img src="__PUBLIC__/img/uiz5.png">
		            </div>
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

		        </div>
			</div>
		</div>

		<!-- 头部信息展示 -->
		<div class="bg-other user-head-info">
			<div class="user-info">
			<h3 class="user-name clearfix">
            <span><?php echo $user['username']; ?></span>
       		 </h3>
				<!--25-->
				<p class="about-info">

					<span class="gender girl" title="女"></span>
					<span class="u-info-learn">
                            学习时长 <em>20小时24分</em>
                    </span>
					<span class="u-info-credit">

                            <a href="http://www.imooc.com/u/4074002/credit">积分<em><?php echo $user['point']; ?></em></a>

       			 </span>
						<span class="u-info-mp">

                                <a href="http://www.imooc.com/u/4074002/experience">等级<em><?php echo $user['level']; ?></em></a>
                        </span>

				</p>
				<p class="user-desc">这位同学很懒，木有签名的说～</p>

				<div class="study-info clearfix">
					<div class="item follows">
						<a href="http://www.imooc.com/u/4074002/follows"><em>1</em></a>

						<span>关注</span>
					</div>
					<div class="item followers">
						<a href="http://www.imooc.com/u/4074002/fans"><em>0</em></a>
						<span>粉丝</span>
					</div>

				</div>
				<!--.study-info end-->
			</div>
			<!-- .user-info end -->
		</div>
		<!-- .big-pic end -->

		<!-- 下半部分 -->
		<div class="wrap">
			<!-- 左侧导航 -->
			<div class="slider" style="position: absolute; left: 0px; top: 0px;">
				<div class="user-pic" data-is-fans="" data-is-follows="">
					<div class="user-pic-bg"></div>
					<!--user-pic-big end-->
					<a href="<?php echo url('user/info'); ?>"><img class="img" src="<?php if($user['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>" alt=""></a>
					<div class="set-btn">
						<a href="http://www.imooc.com/user/setprofile"><i class="icon-set"></i></a>
					</div>
				</div>

				<ul>

					<li>
						<a href="<?php echo url('course/index'); ?>" class="a" >
							<span class="glyphicon glyphicon-home"></span><span>&nbsp&nbsp&nbsp&nbsp主页&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('course/user'); ?>" class="a">
							<span class="glyphicon glyphicon-tags"></span><span>&nbsp&nbsp&nbsp&nbsp课程&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('ask/user'); ?>" class="a" >
							<span class="glyphicon glyphicon-question-sign"></span><span>&nbsp&nbsp&nbsp&nbsp提问&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('note/user'); ?>" class="a" >
							<span class="glyphicon glyphicon-edit"></span><span>&nbsp&nbsp&nbsp&nbsp笔记&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('paper/user'); ?>" class="a" >
							<span class="glyphicon glyphicon-book"></span><span>&nbsp&nbsp&nbsp&nbsp试题&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

				</ul>
			</div>
			<!-- .slider end -->

			

<!DOCTYPE html>
<!-- saved from url=(0034)http://www.imooc.com/u/2125817/bbs -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>提问</title>


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

<link rel="stylesheet" href="__PUBLIC__/css/saveda_resource.css" type="text/css">

</head>
<body>


  <div class="u-container">
    <!--用户空间提问，回答，关注通用导航-->
    <div class="nav">
        <a href="http://www.imooc.com/u/2125817/bbs" class="active">我的提问</a>
        <a href="http://www.imooc.com/u/2125817/bbs?sort=reply">我的回答</a>
        <a href="http://www.imooc.com/u/2125817/bbs?sort=follow">我的关注</a>
    </div>
    <!-- .nav end-->
    <?php if($result): if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
        <div class="ques-list">
            <div class="ques-answer">
                <div class="tag-img">
                    <a href="http://www.imooc.com/wenda/20" target="_blank">
                        <img src="<?php if($data['user']['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $data['user']['picture']; endif; ?>" alt="Linux" title="Linux">
                    </a>
                </div><!--.tag-img end-->
                <div class="from-tag">
                    来自<a href="http://www.imooc.com/wenda/20" target="_blank"><?php echo $data['cat']['name']; ?></a>
                </div><!--.from-tag end-->
                <div class="ques-con">
                    <a href="http://www.imooc.com/wenda/detail/321568" class="ques-con-content" target="_blank"><?php echo $data['title']; ?></a>
                </div><!-- .ques-con end-->
                <div class="about-info">
                    <span class="time"><?php echo date("Y-m-d H:i:s",$data['create_time']); ?></span>
                    <a href="http://www.imooc.com/wenda/detail/321568" target="_blank" class="reply-num"><?php echo $count; ?>个回答</a>
                </div><!-- .about-info end -->
            </div><!-- .ques-answer end -->

        </div><!-- .ques-list end -->
        <?php endforeach; endif; else: echo "" ;endif; else: ?>
        <div class="nodata">
            你还没有提问过问题，可以先 <a href="">去看看学习中遇到的问题</a>
        </div>

    <?php endif; ?>
  </div><!-- .container end -->





		<!-- .wrap end-->
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

	<script>

		window.onload = function(){
			var	oA = document.getElementsByClassName('a');
			for(var i = 0; i < oA.length; i++){
				oA[i].index = i;
				oA[i].onclick = function(){
					for(var j = 0; j < oA.length; j++){
						oA.className = '';
					};
					oA[this.index].className = 'active';
				}
			};
		}

		/*$(function () {
			$('.a').each(function() {
				$(this).click(function() {

					$('.a').each(function() {
						$(this).removeClass('active');
						console.log(1111);
					})
					$(this).addClass('active');

				})
			})
		});*/

	</script>

	</body>

</html>