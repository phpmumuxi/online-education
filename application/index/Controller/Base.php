<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-04
 * Time: 13:22
 * 前台基类
 */
namespace app\index\Controller;

use app\index\model\Flink as FlinkModel;
use app\index\model\User as UserModel;
use think\Controller;


class Base extends Controller
{
    public function _initialize()
    {
        if (!session('username')) {

            $this->error('您还未登陆....', 'Login/index');

        } else {

            //用户头像
            $user = new UserModel();
            $id = session('id');
            $user = $user->where('id', $id)->find();
            $this->assign('user', $user);
            //dump($user);die;


        }
        //友情链接
        $flink = new FlinkModel();
        $this->assign('flink', $flink->select());

    }


}
