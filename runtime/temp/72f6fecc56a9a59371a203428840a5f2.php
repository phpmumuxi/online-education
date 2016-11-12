<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\wamp64\www\edu\public/../application/admin\view\ask\index.html";i:1478755376;}*/ ?>
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
<form method="post" action="<?php echo url('delete'); ?>" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 视频问题列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">

        <li>搜索：</li>

        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
       <tr>
	        <th  width="100" style="text-align:left; padding-left:20px;">ID</th>
	        <th width="10%">提问的用户</th>
	        <th width="15%">提问的视频</th>
	        <th>提问标题</th>
	        <th width="15%">提问时间</th>
	        <th width="310">操作</th>
	   </tr>

		<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo $data['id']; ?>" />
           <?php echo $data['id']; ?></td>
          <td><?php echo $data['user']['username']; ?></td>
          <td><a href="<?php echo url('Index/Details/index',['id' => $data['video']['id'] ]); ?>" target="_blank"><?php echo $data['video']['videoname']; ?></a></td>
          <td><a href="<?php echo url('Index/Ask/detail',['id' => $data['id'] ]); ?>" target="_blank"><?php echo $data['content']; ?></a></td>
          <td><?php echo date( 'Y-m-d H:i:s',$data['create_time']); ?></td>
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