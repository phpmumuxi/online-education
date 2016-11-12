<?php
namespace app\admin\controller;

use app\admin\model\Flink as FlinkModel;
use \think\Loader;

/**
 * 友情链接
 * @Author   mazhen
 * @Datetime 2016-11-1
 * @param    [type]  $value [description]
 */

class Flink extends Base
{
    //展示连接列表
    public function index()
    {
        //分页
        $list = FlinkModel::paginate(5);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch();

    }

    public function add()
    {
        return $this->fetch();
    }
    public function check()
    {
        //通过loader加载validate
        $validate = Loader::validate('flink');

        //validate判断规则
        if (!$validate->check(input('post.'))) {
            dump($validate->getError());die;
        }
        //保存提交过来的数据
        $flink = new FlinkModel(input('post.'));
        $result = $flink->allowField(true)->save();
        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('添加失败');
        }

    }

    public function edit($id)
    {
        $data = FlinkModel::get($id);
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function update()
    {
        //通过loader加载validate
        $validate = Loader::validate('flink');

        //dump($flink['url']);die;
        //validate判断规则
        if (!$validate->scene('update')->check(input('post.'))) {
            dump($validate->getError());die;
        }
        //保存提交过来的数据

        $flink = FlinkModel::get(input('post.id'));
        $result = $flink->save(input('post.'));

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

        $result = FlinkModel::destroy($id);
        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('删除失败');
        }

    }

}
