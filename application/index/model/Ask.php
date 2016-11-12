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

class Ask extends Model
{
	//关联用户表（问题属于用户）
	public function user()
	{
		return $this->belongsTo('User','uid');
	}

	//关联分类表（通过关键字关联）
	public function video()
	{
		return $this->belongsTo('video','vid');
	}

	//关联回复表（回复属于一个问题）
	public function reply()
	{
		return $this->hasMany('reply','id','qid');
	}

}