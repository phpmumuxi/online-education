<?php
/**
 * Created by Sublime.
 * User: mazhen
 * Date: 2016-11-05
 * Time: 14:30
 * 用户信息
 */
namespace app\index\model;

use think\Model;

class Reply extends Model
{
	//关联用户表（回复属于用户）
	public function user()
	{
		return $this->belongsTo('User','uid');
	}
	//关联问题表（回复属于某个问题）
	public function ask()
	{
		return $this->belongsTo('ask','qid');
	}

}