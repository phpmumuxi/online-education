<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-03
 * Time: 13:24
 * 登陆
 */
namespace app\index\controller;

use app\admin\model\Admin as AdminModel;
use app\admin\model\User as UserModel;
use think\Controller;
use \think\Loader;

class login extends controller
{
    /**
     * 加载登陆
     * @return [type] [description]
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 验证登陆
     * @return [type] [description]
     */
    public function check()
    {
        if (request()->isPost()) {
            $admin = new AdminModel();
            $num = $admin->login(input('post.'));
            //dump(session('username'));die;
            if ($num == 2) {
                $this->redirect('index/index');
            } elseif ($num == 4) {
                $this->error('验证码错误');
            } else {
                $this->error('用户名或者密码错误');
            }
        }

    }

    public function register()
    {
        $validate = Loader::validate('user');

        if (!$validate->scene('register')->check(input('post.'))) {
            $this->error($validate->getError());
        }
        $_POST['password'] = md5($_POST['password']);
        //dump(session('username'));die;
        $user = new UserModel($_POST);

        $result = $user->allowField(true)->save();

        if ($result) {
            $this->redirect('login/index');
        } else {
            $this->error('注册失败');
        }
    }

    public function logout()
    {
        session(null);
        $this->redirect('index/index');
    }

}
