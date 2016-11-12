<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp64\www\web\Edu\public/../application/admin\view\index\info.html";i:1478092225;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>
    <link rel="stylesheet" href="__PUBLIC__/css/pintuer.css">
    <link rel="stylesheet" href="__PUBLIC__/css/admin.css">
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('check'); ?>" enctype="multipart/form-data"  >
      <div class="form-group">
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" value="<?php echo $list[0]['title']; ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站LOGO：</label>
        </div>
        <div class="field">

          <input type="file" id="url1" name="logo" class="input tips" value="<?php echo $list[0]['logo']; ?>" style="width:25%; float:left;"  data-toggle="hover" data-place="right" data-image="__IMG__<?php echo $list[0]['logo']; ?>"  />

        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站域名：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="domain" value="<?php echo $list[0]['domain']; ?>" />
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>备案号：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="number" value="<?php echo $list[0]['number']; ?>" />
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <textarea class="input" name="keywords" style="height:80px"><?php echo $list[0]['keywords']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="descr"><?php echo $list[0]['descr']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>联系人：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="person" value="<?php echo $list[0]['person']; ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>手机：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="phone" value="<?php echo $list[0]['phone']; ?>" />
          <div class="tips"></div>
        </div>
      </div>



      <div class="form-group">
        <div class="label">
          <label>传真：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="fax" value="<?php echo $list[0]['fax']; ?>" />

          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="qq" value="<?php echo $list[0]['qq']; ?>" />
          <div class="tips"></div>
        </div>
      </div>


      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="email" value="<?php echo $list[0]['email']; ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="address" value="<?php echo $list[0]['address']; ?>" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>底部信息：</label>
        </div>
        <div class="field">
          <textarea name="footer" class="input" style="height:120px;"><?php echo $list[0]['footer']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
        <input type="hidden" class="input" name="id" value="<?php echo $list[0]['id']; ?>" />
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>