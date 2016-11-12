<?php
namespace app\admin\validate;

use \think\Db;
use \think\Validate;

class Flink extends Validate
{
	protected $rule = [
		'descr' => 'length:0,60',
		'email' => 'email',
		'url' => 'url|mySelf:abc',
	];

	protected $message = [
		'descr.length' => '连接描述在20字以内',
		'url' => '请输入正确的url地址',
		'email' => '请输入正确的邮箱格式',
	];

	protected $scene = [
		'update' => ['descr','email','url'=>'url'],
	];

	protected function mySelf($data,$value)
	{
		$result = Db::name('flink')->where('url',input('post.url'))->find();
		//dump($result);die;
		if($result){
			return 'URL地址已存在';
		}else{
			return true;
		}
	}

}