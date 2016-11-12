<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\wamp64\www\edu\public/../application/index\view\course\user.html";i:1478617776;s:59:"D:\wamp64\www\edu\public/../application/index\view\nav.html";i:1478760534;}*/ ?>
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
			#navname li a  {color: black;}
		#navname li a:hover{color: red;}
		</style>

	</head>

	<body>

		<!-- 顶部 -->
		<div class="width100 height80 ">
			<div class="width100 float_l height80 line_hei80">
		        <!-- 顶部左边 -->
		        <div class="float_l">
		            <div class="float_l margin_l20">
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
					<span class="u-info-learn">
                        学习时长 <em>200小时24分</em>
                    </span>
					<span class="u-info-credit">
                       <a href="#">积分<em><?php echo $user['point']; ?></em></a>
       			    </span>
					<span class="u-info-mp">
                       <a href="#">等级<em><?php echo $user['level']; ?></em></a>
                    </span>
				</p>
				<p class="user-desc"><?php echo $user['introduce']; ?></p>

				<div class="study-info clearfix">
					<div class="item follows">
						<a href="#"><em>6</em></a>
						<span>关注</span>
					</div>
					<div class="item followers">
						<a href="#"><em>2</em></a>
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
					<span class="glyphicon glyphicon-th"><div class="user-pic-bg"></div></span>
					<!--user-pic-big end-->
					<a href="<?php echo url('user/info'); ?>" target="blank_"><img class="img" src="<?php if($user['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>" alt=""></a>
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
						<a href="<?php echo url('user/info'); ?>" class="a" target="_blank">
							<span class="glyphicon glyphicon-cog"></span><span>&nbsp&nbsp&nbsp&nbsp设置&nbsp&nbsp&nbsp&nbsp</span><span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>

				</ul>
			</div>
			<!-- .slider end -->

			

<!DOCTYPE html>
<!-- saved from url=(0038)http://www.imooc.com/u/4074002/courses -->
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $user['username']; ?>的课程</title>
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
		</style>

	</head>


			<div class="u-container">
				<div class="c-tab clearfix">
					<div class="tool-left l">

						<a href="<?php echo url('course/user'); ?>" class="sort-item active">最近学习</a>
						<a href="<?php echo url('course/collection'); ?>" class="sort-item ">我的收藏</a>

					</div>
					<div class="tool-right r">
						<div class="tool-all">
							<span class="glyphicon glyphicon-th-list"></span> 全部课程
						</div>
					</div>
				</div>

				<div class="js-course-list my-space-course study-tl">
				<?php if($result): if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
					<div class="clearfix tl-item  tl-item-first">
						<span class="time">
                		<b><?php echo date("Y",$data['create_time']); ?></b>
               			<em><?php echo date("m月d日",$data['create_time']); ?></em>
           				</span>
						<div class="course-list course-list-m">
							<ul class="clearfix">
								<li class="course-one" data-courseid="115" data-uid="4074002">
									<div class="course-list-img l">
										<a href="<?php echo url('details/index',['id'=>$data['vid']]); ?>" target="_blank">
											<img width="200" height="113" alt="PHP实现验证码制作" src="__IMG__/<?php echo $data['video']['picname']; ?>">
										</a>
									</div>
									<div class="course-list-cont">
										<h3 class="study-hd">
			                           		 <a href="<?php echo url('details/index',['id'=>$data['vid']]); ?>" target="_blank"><?php echo $data['video']['videoname']; ?></a>
		                        			<span class="i-new">更新完毕</span>

							        	 </h3>
										<div class="study-points">
											<span class="i-left span-common">已学10%</span>
											<span class="i-mid span-common">用时 0分</span>
											<span class="i-right span-common">学习至<?php echo $data['video']['videoname']; ?></span>
										</div>
										<div class="catog-points">
											<span class="i-left span-common"><a href="http://www.imooc.com/u/4074002/course/115/notes">笔记 <i><?php echo $data['count1']; ?></i></a></span>
											<span class="i-mid span-common"><a href="http://www.imooc.com/u/4074002/course/115/codes">代码 <i><?php echo $data['count1']; ?></i></a></span>
											<span class="i-right span-common"><a href="http://www.imooc.com/u/4074002/course/115/questions">问答 <i><?php echo $data['count2']; ?></i></a></span>

											<a href="<?php echo url('details/index',['id'=>$data['vid']]); ?>" target="_blank" class="btn-red continute-btn">继续学习</a>

										</div>
									</div>

								</li>
							</ul>
						</div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; else: ?>
			        <div class="nodata">
			            你还没有课程记录，可以先 <a href="<?php echo url('video/index'); ?>">去找找课程</a>
			        </div>

			    <?php endif; ?>

				<!-- 分页 -->
				<div class="fenye">
					<?php echo $result->render(); ?>
				</div>

			</div>

		<!-- .container end -->
		</div>

		

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
		            <span>© 2016 chensenlin.cn 渝ICP备16010775号-1</span>
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

	</script>

	</body>

</html>