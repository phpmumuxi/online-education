<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\edu\public/../application/index\view\index\index.html";i:1478856426;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>蓝翔IT</title>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/muke.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link href="__PUBLIC__/css/zzsc.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/gonggao.css" />
<script src="__PUBLIC__/js/jquery183.js?v=1.83.min" type="text/javascript"></script>
<script src="__PUBLIC__/js/zzsc.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/drag.js"></script>

<style>
    #catename {color: #FFFFFF;}
    #navname li a:hover{color: red;}
    #navname li a  {color: black;}
</style>
</head>

<body class="backg_huibai">


<!-- 顶部 -->
<div class="width100 float_l height490 img_backg1">
    <div class="width100 float_l height80 line_hei80">
        <!-- 顶部左边 -->
        <div class="float_l">
            <div class="float_l margin_l20">
                <img width="160" height="60" src="__IMGL__<?php echo $info[0]['logo']; ?>">
            </div>
            <div class="float_l"  >
                <ul class="ul_li fon_siz16" id = "navname">
                    <li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
					<li><a href="<?php echo url('Ask/index'); ?>">问答</a></li>
                  <li><a href="<?php echo url('Exam/index'); ?>" target="_blank">考试系统</a></li>
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
                    <a href="<?php echo url('course/index'); ?>"><img width="32px" height="32px" src="<?php if($user['picture']=='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $user['picture']; endif; ?>"></a>
                </div>
                 <a href="<?php echo url('login/logout'); ?>" class="btn btn-danger" role="button">退出</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- 轮播图 -->
<div class="width100 float_l margin_t-405 margin_b40">
    <div class="width_1200 margin_auto">
        <div class="width100 float_l height460 posi_relative">
            <div class="width100 float_l">
                <div class="focusBox">
                    <ul class="pic">
                        <li><a href="<?php echo url('Video/all'); ?>" ><img src="__PUBLIC__/img/uiz21.jpg" /></a></li>
                        <li><a href="<?php echo url('Video/all'); ?>" ><img src="__PUBLIC__/img/uiz20.jpg" /></a></li>
                    </ul>
                    <a class="prev" href="javascript:void(0)"></a>
                    <a class="next" href="javascript:void(0)"></a>
                    <ul class="hd">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>

            <div class="width_224 float_l height460 posi_absolute backg_jqian padding_t5 bianshou">

                <?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="width100 float_l tab_qiehuan ">
                    <div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>
                            <a id = "catename" href="<?php echo url('Video/index',['id' => $vo['id'],'pid' => $vo['pid']]); ?>"><?php echo $vo['name']; ?></a>
                            </span>
                            <span class="float_r"></span>
                        </div>
                    </div>

                    <div class="width_700 float_l lunbofenlei dis_none img_backg15">
                        <div class="width100 float_l padding40">
                            <div class="width100 float_l margin_b40">
                                <span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                 <!--小版块-->
                                 <?php if(is_array($vo['min']) || $vo['min'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['min'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                 <li><a href="<?php echo url('Video/index',['pid' => $list['pid'],'id' => $vo['id']]); ?>"><?php echo $list['name']; ?></a></li>
                                  <li>/</li>
                                 <?php endforeach; endif; else: echo "" ;endif; ?>

                                </ul>
                            </div>
                            <div class="width100 float_l margin_b40">
                                <span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                    <?php if(is_array($vo['vi']) || $vo['vi'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['vi'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?>
                                    <li class="width100 float_l margin_b15">
                                        <a href="<?php echo url('Details/index',['id' => $video['id']]); ?>">
                                            课程 | <?php echo $video['videoname']; ?></a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>

        </div>
    </div>
</div>
<script>
    $('.tab_qiehuan').hover(function(){
         $(this).children(".bianhuabeijing").css("background-color","#8a8f93").next().css("display","block")
    },function(){
         $(this).children(".bianhuabeijing").css("background-color","#a9aaae").next().css("display","none")
    });
</script>

<script type="text/javascript">
    jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:500});
</script>

<!-- 热门推荐 -->
<div class="width100 float_l margin_b40">
    <div class="width_1200 margin_auto">

        <div class="width100 float_l margin_b20">
            <div class="float_l">
                <span class="fon_siz16">热门推荐</span>
            </div>
            <div class="float_r bianshou">
                <span><a href="<?php echo url('Video/all'); ?>">更多</a></span>
            </div>
        </div>

        <div class="width100 float_l">
<?php if(is_array($good) || $good instanceof \think\Collection): $i = 0; $__LIST__ = $good;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo url('Details/index',['id' => $vo['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $vo['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $vo['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $vo['descr']; ?></span>
                </div> </a>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
               <span class="float_l color_red"><?php echo $vo['favonum']; ?>人赞</span>
                    <span class="float_r color_gray"><span><?php echo $vo['clicknum']; ?></span>人在学</span>
                </div>
            </div>

<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>
</div>

<!-- 免费好课 -->
<div class="width100 float_l margin_b40">
    <div class="width_1200 margin_auto">

        <div class="width100 float_l margin_b20">
            <div class="float_l">
                <span class="fon_siz16">精品课程</span>
            </div>
            <div class="float_r bianshou">
                <span><a href="<?php echo url('Video/all'); ?>">更多</a></span>
            </div>
        </div>

        <div class="width100 float_l">
        <?php if(is_array($nice) || $nice instanceof \think\Collection): $i = 0; $__LIST__ = $nice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo url('Details/index',['id' => $vo['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $vo['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $vo['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $vo['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $vo['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $vo['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>
</div>

<!-- web 前端工程师 -->

<div class="width100 float_l padding_tb45 backg_qiangray">


	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg3 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>前端<br>开发课程</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">

            </div>

			<div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">

                <a href="<?php echo url('Details/index',['id' => $wdata[0]['id']]); ?>"><?php echo $wdata[0]['videoname']; ?></a>
                <a href="<?php echo url('Details/index',['id' => $wdata[1]['id']]); ?>"><?php echo $wdata[1]['videoname']; ?></a>
                <a href="<?php echo url('Details/index',['id' => $wdata[2]['id']]); ?>"><?php echo $wdata[2]['videoname']; ?></a>

            </div>
        </div>
        <div class="width_468 float_l margin_r20">
        <a href="<?php echo url('Details/index',['id' => $wdata[3]['id']]); ?>">
            <div class=" width100 float_l height172 kaishimeiyou img_backg4 text-center line_hei172 margin_b20">
                <span class="fon_siz20 color_white b_weight700"><?php echo $wdata[3]['videoname']; ?></span>
            </div></a><a href="<?php echo url('Details/index',['id' => $wdata[4]['id']]); ?>">
            <div class=" width100 float_l height172 kaishimeiyou img_backg9 text-center line_hei172 ">
                <span class="fon_siz20 color_white b_weight700"></span>
            </div></a>
        </div>
        <div class="width_224 float_l margin_r20">
        <a href="<?php echo url('Details/index',['id' => $wdata[4]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $wdata[4]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $wdata[4]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $wdata[4]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $wdata[4]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $wdata[4]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
</a> <a href="<?php echo url('Details/index',['id' => $wdata[5]['id']]); ?>">
             <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                   <img src="__IMG__/<?php echo $wdata[5]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $wdata[5]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $wdata[5]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $wdata[5]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $wdata[5]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
</a>





        </div>
        <div class="width_224 height364 float_l backg_white border_shadow">
         <a href="<?php echo url('Details/index',['id' => $wdata[6]['id']]); ?>">
             <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                   <img src="__IMG__/<?php echo $wdata[6]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $wdata[6]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $wdata[6]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $wdata[6]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $wdata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>



            <div class="width100 float_l padding_lr20 dadiv">
                <div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a href="<?php echo url('Details/index',['id' => $wdata[7]['id']]); ?>"><span class="diandian">.</span><?php echo $wdata[7]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $wdata[8]['id']]); ?>"><span class="diandian">.</span><?php echo $wdata[8]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $wdata[9]['id']]); ?>"><span class="diandian">.</span><?php echo $wdata[9]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $wdata[10]['id']]); ?>"><span class="diandian">.</span><?php echo $wdata[10]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $wdata[11]['id']]); ?>"><span class="diandian">.</span><?php echo $wdata[11]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $wdata[12]['id']]); ?>"><span class="diandian">.</span><?php echo $wdata[12]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $wdata[13]['id']]); ?>"><span class="diandian">.</span><?php echo $wdata[13]['videoname']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 后端 工程师 -->
<div class="width100 float_l backg_qiangray padding_b45">


	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg11 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>后端<br>开发课程</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
                <span><span class="margin_l5 wobianhua"></span></span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">
                <a href="<?php echo url('Details/index',['id' => $hdata[0]['id']]); ?>">
                 <?php echo $hdata[0]['videoname']; ?> </a>
                <a href="<?php echo url('Details/index',['id' => $hdata[1]['id']]); ?>">
                <?php echo $hdata[1]['videoname']; ?> </a>
                <a href="<?php echo url('Details/index',['id' => $hdata[2]['id']]); ?>">
               <?php echo $hdata[2]['videoname']; ?> </a>

            </div>
        </div>
        <div class="width_712 float_l margin_r20">
        <a href="<?php echo url('Details/index',['id' => $hdata[3]['id']]); ?>">
            <div class=" width100 float_l height172 kaishimeiyou img_backg10 text-center line_hei172 margin_b20">
                <span class="fon_siz20 color_white b_weight700"> <?php echo $hdata[3]['videoname']; ?></span>
            </div>
            </a>
        <a href="<?php echo url('Details/index',['id' => $hdata[4]['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $hdata[4]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $hdata[4]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $hdata[4]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $hdata[4]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $hdata[4]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <a href="<?php echo url('Details/index',['id' => $hdata[5]['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $hdata[5]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $hdata[5]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $hdata[5]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $hdata[5]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $hdata[5]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <a href="<?php echo url('Details/index',['id' => $hdata[6]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $hdata[6]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $hdata[6]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $hdata[6]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $hdata[6]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $hdata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
        </div>
</a>

        <div class="width_224 height364 float_l backg_white border_shadow">
        <a href="<?php echo url('Details/index',['id' => $hdata[7]['id']]); ?>">
            <div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $hdata[7]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $hdata[7]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $hdata[7]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $hdata[7]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $hdata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>

</a>
            <div class="width100 float_l padding_lr20 dadiv">
                <div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a href="<?php echo url('Details/index',['id' => $hdata[7]['id']]); ?>"><span class="diandian">.</span><?php echo $hdata[7]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $hdata[8]['id']]); ?>"><span class="diandian">.</span><?php echo $hdata[8]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $hdata[9]['id']]); ?>"><span class="diandian">.</span><?php echo $hdata[9]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $hdata[10]['id']]); ?>"><span class="diandian">.</span><?php echo $hdata[10]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $hdata[11]['id']]); ?>"><span class="diandian">.</span><?php echo $hdata[11]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $hdata[12]['id']]); ?>"><span class="diandian">.</span><?php echo $hdata[12]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $hdata[13]['id']]); ?>"><span class="diandian">.</span><?php echo $hdata[13]['videoname']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 移动开发 -->
<div class="width100 float_l padding_b45 backg_qiangray">
    <div class="width_1200 margin_auto">
        <div class=" width_224 height364 float_l img_backg13 margin_r20">
            <div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
                <span>移动<br>开发课程</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
                <span><span class="margin_l5 wobianhua"></span></span>
            </div>
            <div class="width100 float_l padding_lr20 fon_siz12 bianshou line_hei26 color_zise wobeijingguoas margin_t120">
                <a href="<?php echo url('Details/index',['id' => $ydata[0]['id']]); ?>">
                 <?php echo $ydata[0]['videoname']; ?> </a>
                 <a href="<?php echo url('Details/index',['id' => $ydata[0]['id']]); ?>">
                 <?php echo $ydata[1]['videoname']; ?> </a>

            </div>
        </div>
        <a href="<?php echo url('Details/index',['id' => $ydata[2]['id']]); ?>">
        <div class="width_468 float_l margin_r20">
            <div class=" width100 float_l height364 kaishimeiyou img_backg12 text_c line_hei364">
                <span class="fon_siz20 color_white b_weight700"> <?php echo $ydata[2]['videoname']; ?></span>
            </div>
        </div>
        </a>
        <div class="width_224 float_l margin_r20">
 <a href="<?php echo url('Details/index',['id' => $ydata[3]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ydata[3]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "> <?php echo $ydata[3]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ydata[3]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ydata[3]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ydata[3]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
             <a href="<?php echo url('Details/index',['id' => $ydata[4]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ydata[4]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "> <?php echo $ydata[4]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ydata[4]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ydata[4]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ydata[4]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>


        </div>
        <div class="width_224 height364 float_l backg_white border_shadow">
             <a href="<?php echo url('Details/index',['id' => $ydata[5]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ydata[5]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "> <?php echo $ydata[5]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ydata[5]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ydata[5]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ydata[5]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <div class="width100 float_l padding_lr20 dadiv">
                <div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                      <li><a href="<?php echo url('Details/index',['id' => $ydata[6]['id']]); ?>"><span class="diandian">.</span><?php echo $ydata[6]['videoname']; ?></a></li>
                      <li><a href="<?php echo url('Details/index',['id' => $ydata[7]['id']]); ?>"><span class="diandian">.</span><?php echo $ydata[7]['videoname']; ?></a></li>
                      <li><a href="<?php echo url('Details/index',['id' => $ydata[8]['id']]); ?>"><span class="diandian">.</span><?php echo $ydata[8]['videoname']; ?></a></li>
                      <li><a href="<?php echo url('Details/index',['id' => $ydata[9]['id']]); ?>"><span class="diandian">.</span><?php echo $ydata[9]['videoname']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 数据库 -->
<div class="width100 float_l backg_qiangray padding_b45">
    <div class="width_1200 margin_auto">
        <div class=" width_224 height364 float_l img_backg11 margin_r20">
            <div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
                <span>数据库<br>相关课程</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
                <span><span class="margin_l5 wobianhua"></span></span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">
                <a href="<?php echo url('Details/index',['id' => $ddata[0]['id']]); ?>">
                 <?php echo $ddata[0]['videoname']; ?> </a>
                <a href="<?php echo url('Details/index',['id' => $ddata[1]['id']]); ?>">
                <?php echo $ddata[1]['videoname']; ?> </a>
                <a href="<?php echo url('Details/index',['id' => $ddata[2]['id']]); ?>">
               <?php echo $ddata[2]['videoname']; ?> </a>

            </div>
        </div>
        <div class="width_712 float_l margin_r20">
        <a href="<?php echo url('Details/index',['id' => $ddata[3]['id']]); ?>">
            <div class=" width100 float_l height172 kaishimeiyou img_backg10 text-center line_hei172 margin_b20">
                <span class="fon_siz20 color_white b_weight700"> <?php echo $ddata[3]['videoname']; ?></span>
            </div>
            </a>
        <a href="<?php echo url('Details/index',['id' => $ddata[4]['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ddata[4]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $ddata[4]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ddata[4]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ddata[4]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ddata[4]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <a href="<?php echo url('Details/index',['id' => $ddata[5]['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ddata[5]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $ddata[5]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ddata[5]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ddata[5]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ddata[5]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <a href="<?php echo url('Details/index',['id' => $ddata[6]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ddata[6]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $ddata[6]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ddata[6]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ddata[6]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ddata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
        </div>
</a>

        <div class="width_224 height364 float_l backg_white border_shadow">
        <a href="<?php echo url('Details/index',['id' => $ddata[7]['id']]); ?>">
            <div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ddata[7]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $ddata[7]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ddata[7]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ddata[7]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ddata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>

</a>
            <div class="width100 float_l padding_lr20 dadiv">
                <div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a href="<?php echo url('Details/index',['id' => $ddata[7]['id']]); ?>"><span class="diandian">.</span><?php echo $ddata[7]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $ddata[8]['id']]); ?>"><span class="diandian">.</span><?php echo $ddata[8]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $ddata[9]['id']]); ?>"><span class="diandian">.</span><?php echo $ddata[9]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $ddata[10]['id']]); ?>"><span class="diandian">.</span><?php echo $ddata[10]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $ddata[10]['id']]); ?>"><span class="diandian">.</span><?php echo $ddata[11]['videoname']; ?></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 云计算-->

<div class="width100 float_l padding_tb45 backg_qiangray">
    <div class="width_1200 margin_auto">
        <div class=" width_224 height364 float_l img_backg3 margin_r20">
            <div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
                <span>云计算<br>开发课程</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">

            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">

                <a href="<?php echo url('Details/index',['id' => $jdata[0]['id']]); ?>"><?php echo $jdata[0]['videoname']; ?></a>
                <a href="<?php echo url('Details/index',['id' => $jdata[1]['id']]); ?>"><?php echo $jdata[1]['videoname']; ?></a>
                <a href="<?php echo url('Details/index',['id' => $jdata[2]['id']]); ?>"><?php echo $jdata[2]['videoname']; ?></a>

            </div>
        </div>
        <div class="width_468 float_l margin_r20">
        <a href="<?php echo url('Details/index',['id' => $jdata[3]['id']]); ?>">
            <div class=" width100 float_l height172 kaishimeiyou img_backg4 text-center line_hei172 margin_b20">
                <span class="fon_siz20 color_white b_weight700"><?php echo $jdata[3]['videoname']; ?></span>
            </div></a><a href="<?php echo url('Details/index',['id' => $jdata[4]['id']]); ?>">
            <div class=" width100 float_l height172 kaishimeiyou img_backg9 text-center line_hei172 ">
                <span class="fon_siz20 color_white b_weight700"></span>
            </div></a>
        </div>
        <div class="width_224 float_l margin_r20">
        <a href="<?php echo url('Details/index',['id' => $jdata[4]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $jdata[4]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $jdata[4]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $jdata[4]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $jdata[4]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $jdata[4]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
</a> <a href="<?php echo url('Details/index',['id' => $jdata[5]['id']]); ?>">
             <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                   <img src="__IMG__/<?php echo $jdata[5]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $jdata[5]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $jdata[5]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $jdata[5]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $jdata[5]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
</a>





        </div>
        <div class="width_224 height364 float_l backg_white border_shadow">
         <a href="<?php echo url('Details/index',['id' => $jdata[6]['id']]); ?>">
             <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                   <img src="__IMG__/<?php echo $jdata[6]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $jdata[6]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $jdata[6]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $jdata[6]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $jdata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>



            <div class="width100 float_l padding_lr20 dadiv">
                <div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a href="<?php echo url('Details/index',['id' => $jdata[7]['id']]); ?>"><span class="diandian">.</span><?php echo $jdata[7]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $jdata[8]['id']]); ?>"><span class="diandian">.</span><?php echo $jdata[8]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $jdata[9]['id']]); ?>"><span class="diandian">.</span><?php echo $jdata[9]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $jdata[10]['id']]); ?>"><span class="diandian">.</span><?php echo $jdata[10]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $jdata[11]['id']]); ?>"><span class="diandian">.</span><?php echo $jdata[11]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $jdata[12]['id']]); ?>"><span class="diandian">.</span><?php echo $jdata[12]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $jdata[13]['id']]); ?>"><span class="diandian">.</span><?php echo $jdata[13]['videoname']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 运维测试 -->
<div class="width100 float_l padding_b45 backg_qiangray">
    <div class="width_1200 margin_auto">
        <div class=" width_224 height364 float_l img_backg13 margin_r20">
            <div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
                <span>运维<br>相关课程</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
                <span><span class="margin_l5 wobianhua"></span></span>
            </div>
            <div class="width100 float_l padding_lr20 fon_siz12 bianshou line_hei26 color_zise wobeijingguoas margin_t120">
                <a href="<?php echo url('Details/index',['id' => $ywdata[0]['id']]); ?>">
                 <?php echo $ywdata[0]['videoname']; ?> </a>
                 <a href="<?php echo url('Details/index',['id' => $ywdata[0]['id']]); ?>">
                 <?php echo $ywdata[1]['videoname']; ?> </a>

            </div>
        </div>
        <a href="<?php echo url('Details/index',['id' => $ywdata[2]['id']]); ?>">
        <div class="width_468 float_l margin_r20">
            <div class=" width100 float_l height364 kaishimeiyou img_backg12 text_c line_hei364">
                <span class="fon_siz20 color_white b_weight700"> <?php echo $ywdata[2]['videoname']; ?></span>
            </div>
        </div>
        </a>
        <div class="width_224 float_l margin_r20">
 <a href="<?php echo url('Details/index',['id' => $ywdata[3]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ywdata[3]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "> <?php echo $ywdata[3]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ywdata[3]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ywdata[3]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ywdata[3]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
             <a href="<?php echo url('Details/index',['id' => $ywdata[4]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ywdata[4]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "> <?php echo $ywdata[4]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ywdata[4]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ywdata[4]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ywdata[4]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>


        </div>
        <div class="width_224 height364 float_l backg_white border_shadow">
             <a href="<?php echo url('Details/index',['id' => $ywdata[5]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $ywdata[5]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "> <?php echo $ywdata[5]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $ywdata[5]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $ywdata[5]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $ywdata[5]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <div class="width100 float_l padding_lr20 dadiv">
                <div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                      <li><a href="<?php echo url('Details/index',['id' => $ywdata[6]['id']]); ?>"><span class="diandian">.</span><?php echo $ywdata[6]['videoname']; ?></a></li>
                      <li><a href="<?php echo url('Details/index',['id' => $ywdata[7]['id']]); ?>"><span class="diandian">.</span><?php echo $ywdata[7]['videoname']; ?></a></li>
                      <li><a href="<?php echo url('Details/index',['id' => $ywdata[8]['id']]); ?>"><span class="diandian">.</span><?php echo $ywdata[8]['videoname']; ?></a></li>
                      <li><a href="<?php echo url('Details/index',['id' => $ywdata[9]['id']]); ?>"><span class="diandian">.</span><?php echo $ywdata[9]['videoname']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 视觉设计 -->
<div class="width100 float_l backg_qiangray padding_b45">
    <div class="width_1200 margin_auto">
        <div class=" width_224 height364 float_l img_backg11 margin_r20">
            <div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
                <span>设计<br>相关课程</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
                <span><span class="margin_l5 wobianhua"></span></span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">
                <a href="<?php echo url('Details/index',['id' => $sdata[0]['id']]); ?>">
                 <?php echo $sdata[0]['videoname']; ?> </a>
                <a href="<?php echo url('Details/index',['id' => $sdata[1]['id']]); ?>">
                <?php echo $sdata[1]['videoname']; ?> </a>
                <a href="<?php echo url('Details/index',['id' => $sdata[2]['id']]); ?>">
               <?php echo $sdata[2]['videoname']; ?> </a>

            </div>
        </div>
        <div class="width_712 float_l margin_r20">
        <a href="<?php echo url('Details/index',['id' => $sdata[3]['id']]); ?>">
            <div class=" width100 float_l height172 kaishimeiyou img_backg10 text-center line_hei172 margin_b20">
                <span class="fon_siz20 color_white b_weight700"> <?php echo $sdata[3]['videoname']; ?></span>
            </div>
            </a>
        <a href="<?php echo url('Details/index',['id' => $sdata[4]['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $sdata[4]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $sdata[4]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $sdata[4]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $sdata[4]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $sdata[4]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <a href="<?php echo url('Details/index',['id' => $sdata[5]['id']]); ?>">
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $sdata[5]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $sdata[5]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $sdata[5]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $sdata[5]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $sdata[5]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
            </a>
            <a href="<?php echo url('Details/index',['id' => $sdata[6]['id']]); ?>">
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $sdata[6]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $sdata[6]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $sdata[6]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $sdata[6]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $sdata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>
        </div>
</a>

        <div class="width_224 height364 float_l backg_white border_shadow">
        <a href="<?php echo url('Details/index',['id' => $sdata[7]['id']]); ?>">
            <div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
                <div class="width100 float_l img_100 z_inx_1">
                    <img src="__IMG__/<?php echo $sdata[7]['picname']; ?>">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l "><?php echo $sdata[7]['videoname']; ?></span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative "><?php echo $sdata[7]['descr']; ?></span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red"><?php echo $sdata[7]['favonum']; ?> 人赞</span>
                    <span class="float_r color_gray"><span><?php echo $sdata[6]['clicknum']; ?></span>人在学</span>
                </div>
            </div>

</a>
            <div class="width100 float_l padding_lr20 dadiv">
                <div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a href="<?php echo url('Details/index',['id' => $sdata[7]['id']]); ?>"><span class="diandian">.</span><?php echo $sdata[7]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $sdata[8]['id']]); ?>"><span class="diandian">.</span><?php echo $sdata[8]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $sdata[9]['id']]); ?>"><span class="diandian">.</span><?php echo $sdata[9]['videoname']; ?></a></li>
                        <li><a href="<?php echo url('Details/index',['id' => $sdata[10]['id']]); ?>"><span class="diandian">.</span><?php echo $sdata[10]['videoname']; ?></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--回到顶部-->
<div style="display: none;" id="rocket-to-top">
<div style="opacity:0;display: block;" class="level-2"></div>
<div class="level-3"></div>
</div>

<!-- 公告管理 -->

 <div class='box box-3' id = "gonggao">
        <dl>
            <dd>公告内容<b id="small_button" class="up"></b></dd>
            <p><h3 color="red" align="center"><?php echo $notice[0]['title']; ?></h3></p>
            <p><h4 align="center"><?php echo $notice[0]['content']; ?></h4></p>
        </dl>
</div>


    <script>
        $(function(){
            $('.box-3 dl').each(function(){
                $(this).dragging({
                    move : 'both',
                    randomPosition : false
                });
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
            <span>© 2016 <?php echo $info[0]['domain']; ?>  <?php echo $info[0]['number']; ?></span>
        </div>
    </div>
</div>
</body>
</html>
