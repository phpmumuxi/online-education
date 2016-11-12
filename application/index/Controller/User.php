<?php

/**
 * Created by Sublime.
 * User: 马珍
 * Date: 2016-11-04
 * Time: 11:58
 * 用户信息
 */
namespace app\index\controller;

use \app\index\model\User as UserModel;
use \think\Loader;
use \think\Request;
use \think\Db;


class User extends Base
{

	//用户信息设置
	public function info()
	{
        $id = session('id');
        $user = UserModel::get($id);
        $result = $user->where('id',$id)->select();
        $this->assign('result',$result);
		return $this->fetch();
	}

	//用户信息检测
	public function update()
	{
		$validate = Loader::validate('user');

		//validate判断规则
        if (!$validate->scene('update')->check(input('post.'))) {
             $this->error( $validate->getError());
        }
        //dump($_POST);die;
        //如果文件上传成功
        if ($_FILES['picture']['name']) {
            $files = request()->file('picture');
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $files->move(ROOT_PATH . 'public' . DS . 'static/uploads/img');
            if ($info) {
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                $_POST['picture'] = $info->getSaveName();

            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }

        $user = UserModel::get(session('id'));
        $result = $user->allowField(true)->save($_POST);

        if ($result) {
            $this->redirect('info');
        } else {
            $this->error('修改失败');
        }

	}

    //用户修改密码
    public function password()
    {
        $id = session('id');
        $user = UserModel::get($id);
        $result = $user->where('id',$id)->select();
        $this->assign('result',$result);
        return $this->fetch();
    }

    public function updatePwd()
    {
        $id = session('id');
        $validate = Loader::validate('user');
        //dump($_POST);die;
        //validate判断规则
        if (!$validate->scene('updatePwd')->check(input('post.'))) {
            $this->error( $validate->getError());die;
        }
        if(!empty($_POST['password'])){
           // dump($_POST['password']);
            $_POST['password'] = md5($_POST['password']);

            $result = db('user')->where('id',$id)->update(['password'=>$_POST['password']]);

            if ($result) {
                $this->success('修改成功,请使用新密码登录','login/logout');
            } else {
                $this->error('修改失败');
            }
        }else{

            $this->error('修改失败');
        }


    }


}

