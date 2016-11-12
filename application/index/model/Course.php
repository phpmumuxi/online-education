<?php
/**
 * Created by Sublime.
 * User: mazhen
 * Date: 2016-11-04
 * Time: 11:30
 * 用户信息
 */
namespace app\index\model;

use think\Model;

class Course extends Model
{

	//关联用户表（课程属于用户）
	public function user()
	{
		return $this->belongsTo('User','uid');
	}
	//关联视频表（课程属于视频）
	public function video()
	{
		return $this->belongsTo('video','vid');
	}
	//关联笔记表（笔记属于用户和视频）
	public function note()
	{
		return $this->belongsTo('note','vid','vid');
	}
	//关联问答表（问答属于用户和视频）
	public function ask()
	{
		return $this->belongsTo('ask','vid','vid');
	}


    //开启自动写入时间戳
    protected $autoWriteTimestamp = true;

}
