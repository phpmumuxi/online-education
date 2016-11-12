<?php
namespace app\index\model;

use think\Model;
use \traits\model\SoftDelete;

class User extends Model
{
    use SoftDelete;
    protected $insert = ['password'];
    protected $update = [];

    /**
     * 密码自动加密
     * @Author   Chen
     * @param    [type]        $value [description]
     */
    public function setPasswordAttr($value)
    {
        return md5($value);
    }


}

