<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\wamp64\www\edu\public/../application/admin\view\note\edit.html";i:1478585616;}*/ ?>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改笔记</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('update'); ?>">

      <input type="hidden" name="id" value="<?php echo $list['id']; ?>" />
      <div class="form-group">
      <div class="label">
        <label>视频标题：</label>
      </div>
      <div class="field">
        <input type="text" class="input w50" value="<?php echo $list['video']['videoname']; ?>" readonly="readonly" />
        <div class="tips"></div>
      </div>
      </div>
      <div class="form-group">
      <div class="label">
        <label>笔记标题：</label>
      </div>
      <div class="field">
        <input type="text" class="input w50" value="<?php echo $list['title']; ?>" name="title" data-validate="required:请输入标题"/>
        <div class="tips"></div>
      </div>
      </div>
        <div class="form-group">
            <div class="label">
                <label>笔记内容：</label>
            </div>
            <div class="field">
                <textarea class="input" name="content" data-validate="required:请输入内容" style=" height:90px;"><?php echo $list['content']; ?></textarea>
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
</body>
</html>