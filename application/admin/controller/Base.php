<?php
namespace app\admin\Controller;

use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
        if (!session('username')) {
            $this->error('请先登录系统！', 'Login/index');

        } else {
            $result = db('user')->where('id', session('id'))->select();
            //dump($result);die;
            if ($result[0]['admin'] == 0) {

                $this->error('您不管理员！！！', 'Login/index');

            }
        }

    }
}
