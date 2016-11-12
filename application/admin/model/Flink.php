<?php
namespace app\admin\model;

use \think\Model;
use traits\model\SoftDelete;

/**
*
*/
class Flink extends Model
{
	//添加时间自动生成
	protected $createTime = 'addtime';
	protected $autoWriteTimestamp = true;

	//软删除
	use SoftDelete;
    protected static $deleteTime = 'delete_time';

}