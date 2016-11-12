<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\wamp64\www\edu\public/../application/admin\view\cat\add.html";i:1478616036;}*/ ?>
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
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加板块</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('check'); ?>" enctype="multipart/form-data">


         <div class="form-group">
          <div class="label">
            <label>父类名：</label>
          </div>
          <div class="field">

            <select name="father_id" class="input w50">
              <option value="0">/</option>
              <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>

      <div class="form-group">
        <div class="label">
          <label>子类名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入子版块标题" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>