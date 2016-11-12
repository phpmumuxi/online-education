<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\edu\public/../application/admin\view\index\index.html";i:1478755942;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="__PUBLIC__/css/pintuer.css">
    <link rel="stylesheet" href="__PUBLIC__/css/admin.css">
    <script src="__PUBLIC__/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="__IMG__<?php echo $list[0]['logo']; ?>" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="<?php echo url('Index/Index/index'); ?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo url('logout'); ?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('index/info'); ?>" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="<?php echo url('user/pass',['id' => session('id')]); ?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>用户管理</h2>
  <ul>
    <li><a href="<?php echo url('user/index'); ?>" target="right"><span class="icon-caret-right"></span>浏览用户</a></li>
    <li><a href="<?php echo url('user/add'); ?>" target="right"><span class="icon-caret-right"></span>添加用户</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>视频分类管理</h2>
  <ul>
    <li><a href="<?php echo url('cat/index'); ?>" target="right"><span class="icon-caret-right"></span>分类列表</a></li>
    <li><a href="<?php echo url('cat/add'); ?>" target="right"><span class="icon-caret-right"></span>添加分类</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>视频管理</h2>
  <ul>
    <li><a href="<?php echo url('Video/index'); ?>" target="right"><span class="icon-caret-right"></span>视频列表</a></li>
    <li><a href="<?php echo url('Video/add'); ?>" target="right"><span class="icon-caret-right"></span>添加视频</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>视频评论管理</h2>
  <ul>
    <li><a href="<?php echo url('Vcomment/index'); ?>" target="right"><span class="icon-caret-right"></span>评论列表</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>视频问题管理</h2>
  <ul>
    <li><a href="<?php echo url('Ask/index'); ?>" target="right"><span class="icon-caret-right"></span>问题列表</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>问题回复管理</h2>
  <ul>
    <li><a href="<?php echo url('Reply/index'); ?>" target="right"><span class="icon-caret-right"></span>回复列表</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>视频笔记管理</h2>
  <ul>
    <li><a href="<?php echo url('Note/index'); ?>" target="right"><span class="icon-caret-right"></span>笔记列表</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>公告管理</h2>
  <ul>
    <li><a href="<?php echo url('Notice/index'); ?>" target="right"><span class="icon-caret-right"></span>公告列表</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>友情链接</h2>
  <ul>
    <li><a href="<?php echo url('flink/index'); ?>" target="right"><span class="icon-caret-right"></span>友情链接列表</a></li>
    <li><a href="<?php echo url('flink/add'); ?>" target="right"><span class="icon-caret-right"></span>添加友情链接</a></li>
  </ul>
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);
	  $(this).toggleClass("on");
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo url('user/index'); ?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="<?php echo url(); ?>" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo url('info'); ?>" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>

</div>
</body>
</html>