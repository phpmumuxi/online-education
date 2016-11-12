<?php
/**
 * Created by Sublime.
 * User: mazhen
 * Date: 2016-11-05
 * Time: 11:30
 * 笔记管理
 */
namespace app\index\model;

use think\Model;

class Note extends Model
{
    //关联用户表（笔记属于某个用户）
    public function user()
    {
        return $this->belongsTo('User', 'uid');
    }

	//开启自动写入时间戳
    protected $autoWriteTimestamp = true;

}

