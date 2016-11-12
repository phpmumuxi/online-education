<?php
/**
 * Created by Sublime.
 * User: 马珍
 * Date: 2016-11-09
 * Time: 19:58
 * 用户问题检测
 */
namespace app\index\validate;

use \think\Db;
use \think\Validate;

class Ask extends Validate
{
    protected $rule = [
        'title' => 'require',
        'content' => 'require',
    ];

    protected $message = [
        'title.require' => '标题不能为空',
        'content.require' => '提交内容不能为空',
    ];

}
