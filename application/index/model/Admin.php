<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-10-29
 * Time: 15:29
 */
namespace app\index\model;

use think\Db;
use \app\index\model\User as UserModel;
use \think\Model;

class Admin extends Model
{
    public function login($data)
    {
        //验证码验证
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($data['code'])) {
            return 4;
        }
        //查询数据库验证用户名以及密码
        $user = Db::name('user')->where('username', $data['username'])->find();
        //dump($user);die;
        if (!empty($user)) {

            if ($user['admin'] == 1) {

                if ($user['password'] == md5($data['password'])) {
                    //登陆信息加入sesion
                    session('username', $user['username']);
                    session('id', $user['id']);
                    //更新登陆时间和登陆次数
                    Db::name('user')
                        ->where('id', $user['id'])
                        ->setInc('loginnum');
                    UserModel::update(['id' => $user['id'], 'logintime' => time()]);
                    return 2; //ok
                } else {
                    return 1; //用户名或者密码错误
                }

            }

        }

    }

}
