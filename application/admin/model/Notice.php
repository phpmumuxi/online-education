<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-11-01
 * Time: 13:45
 * Descr:公告的model
 */
namespace app\admin\model;
use \think\Model;
use traits\model\SoftDelete;

class Notice extends Model
{
    use SoftDelete;
    protected static $deleteTime = 'delete_time';
    //局部自动写入时间戳
    protected $autoWriteTimestamp = true;
    
    
    
}



