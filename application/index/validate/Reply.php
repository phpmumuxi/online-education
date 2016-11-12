<?php
/**
 * Created by Sublime.
 * User: 马珍
 * Date: 2016-11-08
 * Time: 19:58
 * 用户回复检测
 */
namespace app\index\validate;

use \think\Db;
use \think\Validate;

class Reply extends Validate
{
    protected $rule = [
        'content' => 'require',
    ];

    protected $message = [
        'content.require' => '提交内容不能为空',
    ];

}
