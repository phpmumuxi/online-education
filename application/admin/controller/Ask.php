<?php
namespace app\admin\controller;

use app\admin\model\Ask as AskModel;

/**
 * 视频提问
 * @Author   mazhen
 * @Datetime 2016-11-8
 * @param    [type]  $value [description]
 */

class Ask extends Base
{

    //展示视频问题列表
    public function index()
    {
        //分页
        $list = AskModel::paginate(10);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch();
    }

    //添加视频问题
    public function edit($id)
    {
        $list = AskModel::get($id);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function update()
    {
        $vcomment = AskModel::get(input('post.id'));
        //dump(input('post.');die;
        $result = $vcomment->allowField(true)->save(input('post.'));

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
        $result = AskModel::destroy($id);
        if ($result) {
            $this->success('删除成功', 'index');
        } else {
            $this->error('删除失败');
        }
    }

}
