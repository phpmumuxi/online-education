<?php

namespace app\admin\model;

use traits\model\SoftDelete;
use \think\Model;

class Reply extends Model
{
    //关联user表
    public function user()
    {
        //第二个外键为当前vcomment表里面的字段
        return $this->belongsTo('user', 'uid');
    }

    //关联视频表
    public function video()
    {
        return $this->belongsTo('video', 'vid');
    }

    //关联问题表
    public function ask()
    {
        return $this->belongsTo('ask', 'qid');
    }

    //时间自动完成
    protected $autoWriteTimestamp = true;

    //软删除
    use SoftDelete;
    protected static $deleteTime = 'delete_time';

}
