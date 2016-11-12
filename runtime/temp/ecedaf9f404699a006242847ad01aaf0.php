<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp64\www\web\edu\public/../application/admin\view\user\index.html";i:1478616036;}*/ ?>
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
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/pintuer.js"></script>
</head>
<body>

  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="<?php echo url('add'); ?>"> 添加内容</a> </li>
        <li>搜索：</li>
        <li>
         <form method="post" action="<?php echo url('User/search'); ?>" id="listform">
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <input  type="submit" class="btn btn-info" value="搜索">
          </form>
      </ul>
    </div>
    <form method="post" action="<?php echo url('delete'); ?>" id="listform">
    <table class="table table-hover text-center">
      <tr>
        <th  width="80" style="text-align:left; padding-left:20px;">ID</th>
        <th >头像</th>
        <th>用户名</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
        <th width="10%">邮箱</th>
        <th width="10%">介绍</th>
        <th width="10%">添加时间</th>
        <th width="310">操作</th>
      </tr>
		<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo $data['id']; ?>" />
           <?php echo $data['id']; ?></td>
          <td height='70'><img height='50' width='50' src="<?php if($data['picture'] =='1.jpg'): ?>__PUBLIC__/images/1.jpg<?php else: ?>__IMGL__/<?php echo $data['picture']; endif; ?>"></td>
          <td><?php echo $data['username']; ?></td>
          <td><?php echo $data['name']; ?></td>
          <td>
            <?php if($data['sex']==1): ?>男
            <?php elseif($data['sex']==2): ?>女
            <?php else: ?>保密
            <?php endif; ?>
          </td>
          <td><?php echo $data['age']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><?php echo $data['introduce']; ?></td>
          <td><?php echo $data['create_time']; ?></td>
          <td><div class="button-group"> <a class="button border-main" href="<?php echo url('edit',['id'=>$data['id']]); ?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="<?php echo url('delete',['id'=>$data['id']]); ?>" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>

		<?php endforeach; endif; else: echo "" ;endif; ?>
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="9" style="text-align:left;padding-left:20px;"><input type="submit"  value=" 删除 " class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"/>
        </td>
      </tr>
      <tr>

        <td colspan="8"><div class="pagelist"><?php echo $page; ?></div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

//搜索
function changesearch(){

}

//单个删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){

	}
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