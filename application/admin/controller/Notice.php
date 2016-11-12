<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-11-01
 * Time: 13:19
 * Descr:公告管理
 */
namespace app\admin\controller;

use app\admin\model\Notice as NoticeModel;

class Notice extends Base
{
    /**
     * 加载主页信息
     * @return mixed
     */
    public function index()
    {
        //查询公告信息
        $this->assign('result', db('notice')->select());

        return $this->fetch();
    }

    /**
     * 加载添加的视图
     * @return mixed
     */
    public function add()
    {
        return $this->fetch('add');
    }

    /**
     * 处理添加信息插入数据
     */
    public function check()
    {
        $notice = new NoticeModel([
            'title' => input('title'),
            'content' => input('content'),
            'author' => session('username'),
        ]);
        $result = $notice->save();
        if ($result) {
            return $this->success('公告发表成功!', 'index');
        } else {
            return $this->error('公告发表失败.', 'index');
        }
    }

    /**
     * 加载修改视图
     * @return mixed
     */
    public function edit()
    {
        //查询数据

        //  $result = NoticeModel::get(input('id'));
        $this->assign('result', db('notice')->select());
        return $this->fetch();
    }

    /**
     * 处理修改操作
     * @return boolean
     */
    public function update()
    {
        //更新数据
        /* $notice = new NoticeModel();
        //dump(input());die;
        // save方法第一个参数为修改的数据，第二个参数为更新条件
        $result = $notice->save([
        'title' => input('title'),
        'content' => input('content'),
        ], ['id' => input('id')]
        );*/
        $result = db('notice')->where('id', input('id'))
            ->update([
                'title' => input('title'),
                'content' => input('content'),
            ]);

        if ($result) {
            return $this->redirect('index');
        } else {
            return $this->error('更改失败！', 'index');
        }
    }

    /**
     * 删除数据
     */
    public function delete($id)
    {

        //问题？$_POST的id能够删除成功，为什么input('id')为报错？
        //同时dump(input())能够打印出数据并且正确。

        if (empty($_POST['id'])) {
            $id = $_POST['id'];
        }
        $result = NoticeModel::destroy($id);
        if ($result) {
            return $this->redirect('index');
        } else {
            return $this->error('删除失败!', 'index');
        }

    }
}
