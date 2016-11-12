<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-10-29
 * Time: 15:25
 */
namespace app\admin\controller;

use app\admin\model\Admin as AdminModel;
use think\Controller;

class Login extends Controller
{
    //加载登陆页
    public function index()
    {
        return $this->fetch();
    }
    //处理登陆信息
    public function check()
    {
        if (request()->isPost()) {
            $admin = new AdminModel();
            $num = $admin->login(input('post.'));
            if ($num == 2) {
                $this->redirect('index/index');
            } elseif ($num == 0) {
                $this->error('您不是管理员');
            } elseif ($num == 4) {
                $this->error('验证码错误');
            } else {
                $this->error('用户名或者密码错误');
            }
        }

    }

}
