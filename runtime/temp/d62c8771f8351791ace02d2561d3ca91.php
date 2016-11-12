<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\wamp64\www\web\Edu\public/../application/admin\view\video\index.html";i:1478490538;}*/ ?>
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
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">视频列表</strong> </div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="<?php echo url('add'); ?>"> 添加视频</a> </li>
        <li>搜索：</li>
        <if condition="$iscid eq 1">
          <li>
            <select name="cid" class="input" style="width:200px; line-height:17px;" onchange="changesearch()">
              <option value="">请选择分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
            </select>
          </li>
        </if>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="<?php echo url('search'); ?>" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center" >
      <tr>
        <th ></th>
        <th width="3%" style="text-align:left; padding-left:20px;">ID</th>
        <th width="4%">分类</th>
        <th width="4%">用户</th>
        <th width="10%">名称</th>
        <th width="6%">缩略图</th>
        <th width="6%">描述</th>
        <th width="4%">大小</th>
        <th width="4%">点赞数</th>
        <th width="4%">浏览数</th>
        <th width="7%">添加时间</th>
        <th width="5%">精品</th>
        <th width="5%">推荐</th>
        <th width="6%">状态</th>
        <th width="290">操作</th>
      </tr>
      <?php if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
          <td><?php echo $vo['id']; ?></td>
          <td><?php echo $vo['cat']['name']; ?></td>
          <td><?php echo $vo['user']['username']; ?></td>
          <td><?php echo $vo['videoname']; ?></td>

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
          <?php endif; ?></td>

          <td> <?php if($vo['good'] == 1): ?> <a href="<?php echo url('good',['id'=>$vo['id']]); ?>">是</a>
          <?php else: ?> <a href="<?php echo url('good',['id'=>$vo['id']]); ?>">否</a>
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
</form>
<script type="text/javascript">

//搜索
function changesearch(){

}



//全选
$("#checkall").click(function(){
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;
		$("#listform").submit();
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){

		$("#listform").submit();
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){

		$("#listform").submit();
	}
	else{
		alert("请选择要操作的内容!");

		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){


		$("#listform").submit();
	}
	else{
		alert("请选择要操作的内容!");

		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){

		$("#listform").submit();
	}
	else{
		alert("请选择要操作的内容!");

		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){

		$("#listform").submit();
	}
	else{
		alert("请选择要操作的内容!");

		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}
	    });
		if(i>1){
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{

			$("#listform").submit();
		}
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

</script>
</body>
</html>