<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-07
 * Time: 10:16
 * 评论
 */
namespace app\index\model;

use \think\Model;

class Vcomment extends Model
{
    //开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    //关联用户表 方法名跟关联地表名一致
    public function user()
    {
        return $this->belongsTo('user', 'uid');
    }
}

