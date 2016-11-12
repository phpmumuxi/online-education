<?php
namespace app\admin\controller;

use app\admin\model\Reply as ReplyModel;

/**
 * 视频问题回复
 * @Author   mazhen
 * @Datetime 2016-11-8
 * @param    [type]  $value [description]
 */

class Reply extends Base
{

    //展示视频回复列表
    public function index()
    {
        //分页
        $list = ReplyModel::paginate(10);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch();
    }

    //编辑视频回复
    public function edit($id)
    {
        $list = ReplyModel::get($id);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function update()
    {
        $vcomment = ReplyModel::get(input('post.id'));
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
        $result = ReplyModel::destroy($id);
        if ($result) {
            $this->success('删除成功', 'index');
        } else {
            $this->error('删除失败');
        }
    }

}
