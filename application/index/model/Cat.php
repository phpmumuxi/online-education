<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-03
 * Time: 20:49
 * 视频 model
 */
namespace app\index\model;

use think\Model;

class Cat extends Model
{
	//关联视频表（视频属于板块）
	public function video()
	{
		return $this->hasMany('video','tid');
	}

}
