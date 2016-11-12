<?php
namespace app\admin\controller;

use app\admin\model\Vcomment as VcommentModel;

/**
 * 视频评论
 * @Author   mazhen
 * @Datetime 2016-11-1
 * @param    [type]  $value [description]
 */

class Vcomment extends Base
{

    //展示视频评论列表
    public function index()
    {
        //分页
        $list = VcommentModel::paginate(10);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch();
    }

    //添加视频评论
    public function edit($id)
    {
        $list = VcommentModel::get($id);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function update()
    {
        $vcomment = VcommentModel::get(input('post.id'));
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
        $result = VcommentModel::destroy($id);
        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('删除失败');
        }
    }

}
