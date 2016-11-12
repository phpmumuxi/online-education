<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\wamp64\www\web\edu\public/../application/index\view\details\index.html";i:1478668854;s:64:"D:\wamp64\www\web\edu\public/../application/index\view\base.html";i:1478760512;}*/ ?>
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $result[0]['videoname']; ?></title>
<link rel="stylesheet" href="__PUBLIC__/css/savede_resource.css" type="text/css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/ajax.js"></script>
<style type="text/css">
<style type="text/css">
body,td,th {
	font-size: 14px;
	line-height: 26px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	padding:10px;


}
p {
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-left: 10px;
}
#a1{

	width:90%;
	height:480px;
	float:left;
	margin-left:70px;
	margin-top: 10px;
}
</style>

<script type="text/javascript" src="http://localhost/ckplayer/js/offlights.js"></script>
</head>

<body>

<div id="a1" ></div>
<!--
上面一行是播放器所在的容器名称，如果只调用flash播放器，可以只用<div id="a1"></div>
-->
<div align="center">
<script type="text/javascript" src="http://localhost/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
	//如果你不需要某项设置，可以直接删除，注意var flashvars的最后一个值后面不能有逗号
/*	function loadedHandler(){
		if(CKobject.getObjectById('ckplayer_a1').getType()){
			alert('播放器已加载，调用的是HTML5播放模块');
		}else{
			alert('播放器已加载，调用的是Flash播放模块');
		}
	}*/
	var _nn=0;
	function ckplayer_status(str){
		_nn+=1;
		if(_nn>100){
			_nn=0;
			document.getElementById('statusvalue').value='';
		}
		document.getElementById('statusvalue').value=str+'\n'+document.getElementById('statusvalue').value;
	}

	var flashvars={
		f:'http://www.tp5.com/static/uploads/video/<?php echo $name; ?>',//视频地址
		a:'',//调用时的参数，只有当s>0的时候有效
		s:'0',//调用方式，0=普通方法（f=视频地址），1=网址形式,2=xml形式，3=swf形式(s>0时f=网址，配合a来完成对地址的组装)
		c:'0',//是否读取文本配置,0不是，1是
		x:'',//调用配置文件路径，只有在c=1时使用。默认为空调用的是ckplayer.xml
		i:'http://www.tp5.com/static/uploads/img/<?php echo $picname; ?>',//初始图片地址
		d:'http://www.tp5.com/static/uploads/img/<?php echo $picname; ?>',//暂停时播放的广告，swf/图片,多个用竖线隔开，图片要加链接地址，没有的时候留空就行
		u:'',//暂停时如果是图片的话，加个链接地址
		l:'http://www.ckplayer.com/down/adv6.1_1.swf|http://www.ckplayer.com/down/adv6.1_2.swf',//前置广告，swf/图片/视频，多个用竖线隔开，图片和视频要加链接地址
		r:'',//前置广告的链接地址，多个用竖线隔开，没有的留空
		t:'10|10',//视频开始前播放swf/图片时的时间，多个用竖线隔开
		y:'',//这里是使用网址形式调用广告地址时使用，前提是要设置l的值为空
		z:'http://www.tp5.com/static/uploads/img/<?php echo $picname; ?>',//缓冲广告，只能放一个，swf格式
		e:'5',//视频结束后的动作，0是调用js函数，1是循环播放，2是暂停播放并且不调用广告，3是调用视频推荐列表的插件，4是清除视频流并调用js功能和1差不多，5是暂停播放并且调用暂停广告
		v:'80',//默认音量，0-100之间
		p:'0',//视频默认0是暂停，1是播放，2是不加载视频
		h:'0',//播放http视频流时采用何种拖动方法，=0不使用任意拖动，=1是使用按关键帧，=2是按时间点，=3是自动判断按什么(如果视频格式是.mp4就按关键帧，.flv就按关键时间)，=4也是自动判断(只要包含字符mp4就按mp4来，只要包含字符flv就按flv来)
		q:'',//视频流拖动时参考函数，默认是start
		m:'',//让该参数为一个链接地址时，单击播放器将跳转到该地址
		o:'',//当p=2时，可以设置视频的时间，单位，秒
		w:'',//当p=2时，可以设置视频的总字节数
		g:'',//视频直接g秒开始播放
		j:'',//跳过片尾功能，j>0则从播放多少时间后跳到结束，<0则总总时间-该值的绝对值时跳到结束
		k:'32|63',//提示点时间，如 30|60鼠标经过进度栏30秒，60秒会提示n指定的相应的文字
		n:'这是提示点的功能，如果不需要删除k和n的值|提示点测试60秒',//提示点文字，跟k配合使用，如 提示点1|提示点2
		wh:'',//宽高比，可以自己定义视频的宽高或宽高比如：wh:'4:3',或wh:'1080:720'
		lv:'0',//是否是直播流，=1则锁定进度栏
		loaded:'loadedHandler',//当播放器加载完成后发送该js函数loaded
		//调用播放器的所有参数列表结束
		//以下为自定义的播放器参数用来在插件里引用的
		my_title:'<?php echo $result[0]['videoname']; ?>',
		my_url:encodeURIComponent(window.location.href)//本页面地址
		//调用自定义播放器参数结束
		};
	var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always'};//这里定义播放器的其它参数如背景色（跟flashvars中的b不同），是否支持全屏，是否支持交互
	var video=['http://www.tp5.com/static/uploads/video/<?php echo $name; ?>->video/mp4'];
	CKobject.embed('http://localhost/ckplayer/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',false,flashvars,video,params);
	/*
		以上代码演示的兼容flash和html5环境的。如果只调用flash播放器或只调用html5请看其它示例
	*/
	function videoLoadJs(s){
		alert("执行了播放");
	}
	function playerstop(){
		//只有当调用视频播放器时设置e=0或4时会有效果
		alert('播放完成');
	}
	var _nn=0;//用来计算实时监听的条数的，超过100条记录就要删除，不然会消耗内存

	function getstart(){
		var a=CKobject.getObjectById('ckplayer_a1').getStatus();
		var ss='';
		for (var k in a){
			ss+=k+":"+a[k]+'\n';
		}
		alert(ss);
	}
	function ckadjump(){
		alert('这里演示了点击跳过广告按钮后的执行的动作，如果注册会员可以做成直接跳过的效果。');
	}
	//开关灯
	var box = new LightBox();
	function closelights()
	function openlights()
	function changePrompt(){
		CKobject.getObjectById('ckplayer_a1').promptUnload();//卸载掉目前的
		CKobject.getObjectById('ckplayer_a1').changeFlashvars('{k->10|20|30}{n->重设提示点一|重设提示点二|重设提示点三}');
		CKobject.getObjectById('ckplayer_a1').promptLoad();//重新加载
	}
	function addflash(){
		if(CKobject.Flash()['f']){
			CKobject._K_('a1').innerHTML='';
			CKobject.embedSWF('http://localhost/ckplayer/ckplayer/ckplayer.swf','a1','ckplayer_a1','600','400',flashvars,params);
		}
		else{
			alert('该环境中没有安装flash插件，无法切换');
		}
	}
	function addhtml5(){
		if(CKobject.isHTML5()){
			support=['all'];
			CKobject._K_('a1').innerHTML='';
			CKobject.embedHTML5('a1','ckplayer_a1',600,400,video,flashvars,support);
		}
		else{
			alert('该环境不支持html5，无法切换');
		}
	}



</script>
</div>

<div class="course-subcontainer clearfix">
  <div class="course-left">
      <ul class="course-menu course-video-menu clearfix js-course-menu" data-ower="all" data-sort="last" style="position: absolute; left: 0px;">

        <!--点赞图标-->
      <?php if($data['zan'] == 0): ?>
       <li class="course-menu-item" >
    	<a id = "zan" href="<?php echo url('Details/love',['id' => $result[0]['id']]); ?>" rel="<?php echo $result[0]['id']; ?>">
    	<span class="glyphicon glyphicon-thumbs-up"></span>
    	</a>
    </li>
    <?php endif; ?>


<!-- 收藏图标 -->
<?php if($data['collection'] == 0): ?>
	 <li class="course-menu-item" >
    	<a id = "collection" href="<?php echo url('Details/collection',['id' => $result[0]['id']]); ?>">
    	<span class="glyphicon glyphicon-star-empty"></span>
    	</a>
    </li>
    <?php else: ?>
     <li class="course-menu-item" >
    	<a id = "collection" href="<?php echo url('Details/uncollection',['id' => $result[0]['id']]); ?>">
    	<span class="glyphicon glyphicon-star"></span>
    	</a>
    </li>
    <?php endif; ?>

    <li class="course-menu-item"><a href="<?php echo url('Details/index',['id' => $result[0]['id']]); ?>" id="plMenu">评论</a></li>

     <li class="course-menu-item"><a href="<?php echo url('Ask/alluser',['id' => $result[0]['id']]); ?>" id="noteMenu">提问</a></li>

    <li class="course-menu-item"><a href="<?php echo url('Note/add',['id' => $result[0]['id']]); ?>" id="noteMenu">手记</a></li>



        </ul>
<div id="disArea" class="lists-container list-wrap">
    <div id="pl-content" class="list-tab-con">
        <div class="publish clearfix" id="discus-publish">
            <div class="publish-wrap publish-wrap-pl">
                <div class="pl-input-wrap clearfix">

                    <form method="post" action="<?php echo url('Details/comment'); ?>">
                    <div id="js-pl-input-fake" class="pl-input-inner l">
                       <textarea id="js-pl-textarea" name = content class="js-placeholder" placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！"></textarea>
                       <span class="num-limit"><span id="js-pl-limit">0</span>/300</span>
                    </div>
                    <div class="pl-input-btm input-btm clearfix">
                        <div class="verify-code l"></div>
                        <input type="hidden" name="vid" value="<?php echo $result[0]['id']; ?>">
                        <input type="submit" id="js-pl-submit" class="r course-btn" value="发表评论">
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <div id="plLoadListData">
        <div class="pl-container">
        <ul>
        <?php if($vcom): if(is_array($vcom) || $vcom instanceof \think\Collection): $i = 0; $__LIST__ = $vcom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
         	<li class="pl-list clearfix">
	         	<div class="pl-list-avator">
		       	  <a href="#" target="_blank">
		         <img width="40" height="40" src="<?php if($vo['user']['picture'] == '1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMG__/<?php echo $vo['user']['picture']; endif; ?>" title="心的幻想"></a> </div> <div class="pl-list-main">
		         <div class="pl-list-nick">
		         <a href="#" target="_blank"><?php echo $vo['user']['username']; ?></a>
		          </div>
		           <div class="pl-list-content"><?php echo $vo['content']; ?></div>
		           <div class="pl-list-btm clearfix">
		            <span class="pl-list-time l">时间: <?php echo date( 'Y-m-d',$vo['create_time']); ?></span>
	            	</div>
	            </div>

	            </li>
	            <?php endforeach; endif; else: echo "" ;endif; else: ?>
	            	<li class="pl-list clearfix">
	         	<div class="pl-list-avator">
		       	 暂无评论
	            </div>

	            </li>

		<?php endif; ?>

             </ul>
            </div>
            <div class="page pl-list-page"></div>
            </div>
    </div>
    <div id="qa-content" class="list-tab-con" style="display:none">
        <div id="qaLoadListData"><div class="sortlist"> 			<div class="ordertab clearfix"> 				<a href="javascript:void(0)" hidefocus="true" data-order="1" class="quealltab onactive">全部</a>				<a href="javascript:void(0)" hidefocus="true" data-order="2" class="quealltab ">精华</a>			</div>		</div><div class="answertabcon"></div><div class="page discuss-list-page"></div></div>
    </div>
    <div id="note-content" class="list-tab-con" style="display:none">
        <div id="noteLoadListData">
        <div class="course-tool-bar clearfix js-select-state">			<div class="tool-left l js-all-state">		        <a href="javascript:;" class="sort-item active" data-sort="last">最新</a>		        <a href="javascript:;" class="sort-item" data-sort="sugg">点赞</a>	        </div>	        <div class="tool-right r">		        <div class="switch js-ower" data-sort="last">		    		<div class="switch-line"></div>		    		<div class="round js-lookme-round"></div>		  		</div>		        <span class="tool-item">只看我的</span>		    </div>		</div><div id="course_note" class="course_note"></div><div class="page note-list-page"></div></div>
    </div>
    <div id="wiki-content" class="list-tab-con" style="display:none;">
        <div id="wikiLoadListData">
        <div id="course_wiki" class="course_wiki"></div><div class="page wiki-list-page"></div></div>
    </div>
    <div id="mate-content" class="list-tab-con" style="display:none;">
        <div id="mateLoadListData">
        <div class="othterscode-container"></div><div class="page othterscode-list-page"></div></div>
    </div>

</div>
  </div>
  <div class="course-right clearfix">

  <div class="js-recom-box"><div class="box  mb40">                        <h4>课程描述</h4>                        <ul class="js-planrecom other-list">
  							 <li>
  							 <span class="name autowrap"><?php echo $result[0]['descr']; ?></span>
  							 </li></ul>
  							 </div>
  					</div>

<div class="js-recom-box"><div class="box  mb40">
<h4>推荐课程</h4>
<ul class="js-planrecom other-list">
<?php if(is_array($gvideo) || $gvideo instanceof \think\Collection): $i = 0; $__LIST__ = $gvideo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gvideo): $mod = ($i % 2 );++$i;?>
		<a href="<?php echo url('Details/index',['id' => $gvideo['id']]); ?>"> <li><span class="name autowrap"><?php echo $gvideo['videoname']; ?></span></li></a>

<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
	 </div>
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
            <span>© 2016 chensenlin.cn 渝ICP备16010775号-1</span>
        </div>
    </div>
</div>

</body>
</html>

