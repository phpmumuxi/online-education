<?php
namespace app\admin\controller;

use app\admin\model\User as UserModel;
use \think\Loader;
use \think\Request;

class User extends Base
{
    //展示用户列表
    public function index()
    {

        $user = new UserModel();
        //分页
        $list = $user->paginate(10);
        $page = $list->render();

        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch();
    }

    //添加用户
    public function add()
    {
        return view();
    }

    public function check()
    {

        $validate = Loader::validate('user');

        //validate判断规则
        if (!$validate->check(input('post.'))) {
            $this->error($validate->getError());
        }

        //如果文件上传成功
        if ($_FILES) {
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
        //dump($_POST);die;
        $user = new UserModel();
        $result = $user->allowField(true)->save($_POST);

        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('添加失败');
        }

        //return $this->fetch();

    }
    //编辑用户
    public function edit($id)
    {
        $list = UserModel::get($id);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function update()
    {
        $validate = Loader::validate('user');

        //validate判断规则
        if (!$validate->scene('update')->check(input('post.'))) {
            $this->error($validate->getError());
        }

        //如果文件上传成功
        //dump($_FILES);die;
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

        $user = UserModel::get(input('post.id'));
        $result = $user->allowField(true)->save($_POST);

        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('修改失败');
        }

    }

    public function delete($id)
    {

        //判断是否为批量删除
        if (!empty($_POST)) {
            $id = $_POST['id'];
        }

        $result = UserModel::destroy($id);
        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('删除失败');
        }

    }

    //管理员修改密码
    public function pass()
    {
        $id = session('id');
        $list = UserModel::get($id);
        $this->assign('list', $list);
        return $this->fetch();
    }

    //管理员密码更新检查
    public function updatePwd()
    {
        $id = session('id');
        $validate = Loader::validate('user');

        //validate判断规则
        if (!$validate->scene('updatePwd')->check(input('post.'))) {
            $this->error($validate->getError());die;
        }
        if (!empty($_POST['password'])) {
            // dump($_POST['password']);
            $_POST['password'] = md5($_POST['password']);

            $result = db('user')->where('id', $id)->update(['password' => $_POST['password']]);

            if ($result) {
                $this->success('修改成功,您可以选择退出,使用新密码登录');
            } else {
                $this->error('修改失败');
            }
        } else {

            $this->error('修改失败');
        }
    }

    /**
     * 搜索用户
     * @param  [type] $keywords [description]
     * @return [type]           [description]
     */
    public function search($keywords)
    {
        //关键字处理
        $keywords = isset($keywords) ? trim($keywords) : ' ';
        //根据关键字查询
        $list = UserModel::order('id desc')
            ->where('username|introduce', 'like', "%$keywords%")
            ->paginate(10);
        $this->assign('page', $list->render());
        $this->assign('list', $list);
        return $this->fetch('User/index');
    }

}
