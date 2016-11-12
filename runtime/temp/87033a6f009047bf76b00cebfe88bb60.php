<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\edu\public/../application/admin\view\notice\edit.html";i:1478762622;}*/ ?>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改公告</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('Notice/update'); ?>">
        <input type="hidden" value="<?php echo $result[0]['id']; ?>" name="id"/>
      <div class="form-group">
      <div class="label">
        <label>公告标题：</label>
      </div>
      <div class="field">
        <input type="text" class="input w50" value="<?php echo $result[0]['title']; ?>" name="title" data-validate="required:请输入标题" />
        <div class="tips"></div>
      </div>
    </div>
        <div class="form-group">
            <div class="label">
                <label>公告内容：</label>
            </div>
            <div class="field">
                <textarea class="input" value="<?php echo $result[0]['content']; ?>" name="content" data-validate="required:请输入内容" style=" height:90px;"><?php echo $result[0]['content']; ?></textarea>
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