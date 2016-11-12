<?php
namespace app\admin\controller;

use app\admin\model\Note as NoteModel;

/**
 * 视频评论
 * @Author   mazhen
 * @Datetime 2016-11-1
 * @param    [type]  $value [description]
 */

class Note extends Base
{

    //展示视频评论列表
    public function index()
    {
        //分页
        $list = NoteModel::paginate(10);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch();
    }

    //添加视频评论
    public function edit($id)
    {
        $list = NoteModel::get($id);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function update()
    {
        $vcomment = NoteModel::get(input('post.id'));
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
        $result = NoteModel::destroy($id);
        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('删除失败');
        }

    }

    public function good($id)
    {
        $note = NoteModel::get($id);
        //判断推荐还是不推荐
        if ($note['good'] == 0) {
            $result = $note->where('id', $id)->update(['good' => 1]);
        } else {
            $result = $note->where('id', $id)->update(['good' => 0]);
        }
        $this->redirect('index');
    }

}
