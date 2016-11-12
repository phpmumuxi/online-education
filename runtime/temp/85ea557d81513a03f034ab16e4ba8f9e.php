<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\wamp64\www\web\Edu\public/../application/admin\view\user\add.html";i:1478496857;}*/ ?>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('check'); ?>" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>用户名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="username" data-validate="required:请输入用户名" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>密码</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" value="" name="password"  data-validate="required:请输入密码" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>确认密码</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" value="" name="repassword" data-validate="required:请再次输入密码"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>姓名</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>邮箱</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="email"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>选择头像</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="picture" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="__PUBLIC__/images/1.jpg" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>

      <if condition="$iscid eq 1">
        <!-- <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50">
              <option value="">请选择分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
            </select>
            <div class="tips"></div>
          </div>
        </div> -->
        <div class="form-group">
          <div class="label">
            <label>性别：</label>
          </div>
          <div class="field" style="padding-top:8px;">
            男 <input id="ishome"  type="checkbox" name="sex" value="1"/>
            女 <input id="isvouch"  type="checkbox" name="sex" value="2"/>
            保密 <input id="isvouch"  type="checkbox" name="sex" value="0"/>
          </div>
        </div>
      </if>
      <div class="form-group">
        <div class="label">
          <label>年龄</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="age" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>介绍</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="introduce"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>积分</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="point"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>等级</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="level" />
          <div class="tips"></div>
        </div>
      </div>
      <!-- <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="note" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="content" class="input" style="height:450px; border:1px solid #ddd;"></textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>关键字标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_title" value="" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_keywords" value=""/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关键字描述：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="s_desc" style="height:80px;"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="0"  data-validate="number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field">
          <script src="js/laydate/laydate.js"></script>
          <input type="text" class="laydate-icon input w50" name="datetime" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="authour" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>点击次数：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="views" value="" data-validate="member:只能为数字"  />
          <div class="tips"></div>
        </div>
      </div> -->
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