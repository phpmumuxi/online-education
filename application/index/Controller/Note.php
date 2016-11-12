<?php
/**
 * Created by Sublime.
 * User: 马珍
 * Date: 2016-11-05
 * Time: 11:58
 * 笔记管理
 */
namespace app\index\controller;

use think\Loader;
use \app\index\model\Note as NoteModel;

class Note extends Base
{
    //用户笔记
    public function user()
    {
        $id = session('id');
        $ask = new NoteModel();
        $result = $ask->where('uid', $id)->paginate(5);
        //dump($result);die;
        $this->assign('result', $result);
        return $this->fetch();
    }
    /**
     * 加载视图 视频id
     */
    public function add($id)
    {
        $this->assign('vid', $id);

        return $this->fetch();
    }

    /**
     * 添加笔记检查
     */
    public function check()
    {
        $validate = Loader::validate('Note');
        if (!$validate->check(input('post.'))) {
            $this->error($validate->getError());
        }

        //实例话的时候传入数据
        $note = new NoteModel([
            'vid' => input('id'),
            'uid' => session('id'),
            'title' => input('title'),
            'content' => input('content'),
        ]);
        // 过滤post数组中的非数据表字段数据
        $result = $note->save();
        if ($result) {
            //增加积分
            db('user')->where('id', session('id'))->setInc('point');
            $this->redirect('Details/index', ['id' => input('id')]);
        } else {
            $this->error('发表手记失败');
        }
    }
}
