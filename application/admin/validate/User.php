<?php
namespace app\admin\validate;

use \think\Db;
use \think\Validate;

class User extends Validate
{
    protected $rule = [
        'username' => 'require|length:5,20|mySlef:abc',
        'password' => 'require|length:5,25|confirm:repassword',
        'email' => 'require|email',
        'org_password'=> 'myPwd:123',

    ];

    protected $message = [
        'username.require' => '请输入用户名',
        'username.length' => '用户名长度为5~20位',
        'password.require' => '请输入密码',
        'password.length' => '密码长度为5~25位',
        'password.confirm' => '两次密码不一致',
        'email' => '邮箱格式错误',
    ];

    protected $scene = [
        'update'=>['username'=>'require|length:5,20','email'],
        'updatePwd'=>['org_password'],
    ];

    protected function mySlef($data, $rule)
    {
        $result = Db::name('user')->where('username', input('post.username'))->find();
        if ($result) {
            return '用户名已被注册';
        } else {
            return true;
        }
    }

    protected function myPwd($data, $rule)
    {
        $result = Db::name('user')->where('id', session('id'))->find();

        if ($result['password'] == md5($_POST['org_password'])) {
            return true;
        } else {
            return '原密码不正确';
        }
    }

}
