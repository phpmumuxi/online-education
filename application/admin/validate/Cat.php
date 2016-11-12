<?php
namespace app\admin\validate;

use \think\Db;
use \think\Validate;

class Cat extends Validate
{
	protected $rule = [
		'name' => 'require|mySelf:abc',
	];

	protected $message = [
		'name.require' => '请输入子版块名称',
	];

	protected $scene = [
		'update' => ['name'=>'require'],
	];

	protected function mySelf($data,$value)
	{
		//dump(input('post.name'));die;
		$result = Db::name('cat')->where('name',input('post.name'))->find();
		if($result){
			return '版块名称已存在';
		}else{
			return true;
		}
	}

}