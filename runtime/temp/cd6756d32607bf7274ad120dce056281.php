<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\edu\public/../application/admin\view\Video\index.html";i:1478789304;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="__PUBLIC__/css/pintuer.css">
<link rel="stylesheet" href="__PUBLIC__/css/admin.css">
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/pintuer.js"></script>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

</head>
<body>
<form method="post" action="<?php echo url('Video/search'); ?>" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">视频列表</strong> </div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="<?php echo url('add'); ?>"> 添加视频</a> </li>
        <li>搜索：</li>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <input  type="submit" class="btn btn-info" value="搜索">



          </li>
      </ul>
      </form>
    </div>
    <table class="table table-hover text-center" >
      <tr>
        <th ></th>
        <th width="2%" style="text-align:left; padding-left:20px;">ID</th>
        <th width="3%">分类</th>
        <th width="4%">用户</th>
        <th width="10%">名称</th>
        <th width="6%">缩略图</th>
        <th width="10%">描述</th>
        <th width="4%">大小</th>
        <th width="4%">点赞数</th>
        <th width="4%">浏览数</th>
        <th width="7%">添加时间</th>
        <th width="4%">精品</th>
        <th width="4%">推荐</th>
        <th width="5%">状态</th>
        <th width="280">操作</th>
      </tr>
      <?php if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td> </td>
          <td><?php echo $vo['id']; ?></td>
          <td><?php echo $vo['cat']['name']; ?></td>
          <td><?php echo $vo['user']['username']; ?></td>
          <td><a href="<?php echo url('Index/Details/index',['id' => $vo['id']]); ?>" target="_blank"><?php echo $vo['videoname']; ?></a></td>

           <td align="center">
             <?php if($vo['picname'] != ''): ?>
                <img src="__IMGL__/<?php echo $vo['picname']; ?>" height="50">
                      <?php else: ?>
                       暂无缩略图
                 <?php endif; ?>
             </td>
          <td><?php echo $vo['descr']; ?></td>
          <td><?php echo $vo['size']; ?></td>
          <td><?php echo $vo['favonum']; ?></td>
          <td><?php echo $vo['clicknum']; ?></td>
          <td><?php echo date( 'Y-m-d',$vo['create_time']); ?></td>

          <td> <?php if($vo['nice'] == 1): ?> <a class="btn btn-default" role="button" href="<?php echo url('nice',['id'=>$vo['id']]); ?>">是</a>
          <?php else: ?> <a class="btn btn-default" role="button" href="<?php echo url('nice',['id'=>$vo['id']]); ?>">否</a>
          <?php endif; ?>
          </td>

          <td> <?php if($vo['good'] == 1): ?> <a href="<?php echo url('good',['id'=>$vo['id']]); ?>" class="btn btn-default" role="button">是</a>
          <?php else: ?> <a href="<?php echo url('good',['id'=>$vo['id']]); ?>" class="btn btn-default" role="button">否</a>
          <?php endif; ?></td>

          <td>

          <?php if($vo['status'] == 2): ?> 上线
          <?php else: ?> 下线
          <?php endif; ?>

          </td>

          <td><div class="button-group"> <a class="button border-main" href="<?php echo url('edit',['id'=>$vo['id']]); ?>"><span class="icon-edit"></span> 修改</a>
<?php if(($vo['status'] == 2)): ?>
 			<a class="button border-red" href="<?php echo url('delete',['id'=>$vo['id']]); ?>" >
          <span class="icon-trash-o"></span>下线</a>
<?php else: ?>
			<a class="button border-red" href="<?php echo url('delete',['id'=>$vo['id']]); ?>" >
			<span class="icon-trash-o"></span>上线</a>
	  <?php endif; ?>


          </a> </div></td>
        </tr>
<?php endforeach; endif; else: echo "" ;endif; ?>

 </td>


      </tr>
      <tr>
        <td colspan="22"><div class="pagelist"><?php echo $page; ?> </div></td>
      </tr>
    </table>
  </div>

</body>
</html>