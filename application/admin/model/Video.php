<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-10-31
 * Time: 20:25
 * 视频model
 */
namespace app\admin\model;

use think\Model;

class Video extends Model
{

    /**
     * Video的关联
     * @return \think\model\Relation
     */
    public function cat()
    {
        //关联的表和外键名【默认会是cate_id,我们可以自定义cateid】
        return $this->belongsTo('cat', 'tid');

    }

    /**
     * USER
     * 关联关系
     * @return \think\model\Relation
     */
    public function user()
    {
        //关联的表和外键名【默认会是cate_id,我们可以自定义cateid】
        return $this->belongsTo('User', 'uid');

    }

    //自动写入时间
    protected $createTime = 'create_time';
    protected $autoWriteTimestamp = true;

}
