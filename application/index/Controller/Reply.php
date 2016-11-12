<?php
/**
 * Created by Sublime.
 * User: 马珍
 * Date: 2016-11-05
 * Time: 14:58
 * 问题回复
 */
namespace app\index\controller;

use \app\index\model\Reply as ReplyModel;
use \think\Loader;

class Reply extends Base
{
    //用户回答
    public function user()
    {
        $id = session('id');
        $reply = new ReplyModel();
        $result = $reply->where('uid', $id)->paginate(5);
        foreach ($result as $key => $value) {
            $count = $reply->where('qid', $value['qid'])->count();
            $result[$key]['count'] = $count;
        }
        $this->assign('result', $result);
        return $this->fetch();

    }
    //检查用户提交过来的回复
    public function check()
    {
        $validate = Loader::validate('reply');
        //validate判断规则
        if (!$validate->check(input('post.'))) {
            $this->error($validate->getError());
        }

        $reply = new ReplyModel();
        $result = $reply->allowField(true)->save(input('post.'));
        //dump($result);die;
        if ($result) {
            //增加积分
            db('user')->where('id', session('id'))->setInc('point');
            $this->redirect('Ask/detail', ['id' => input('post.qid')]);
        } else {
            $this->error();
        }

    }

    //赞同
    public function love($id, $qid)
    {
        $reply = new ReplyModel();
        $love = $reply->where('id', $id)->setInc('love'); //赞同数加1
        //dump($love);die;
        //$this->redirect('Ask/detail',['id' => $qid]);
        $this->success('点赞成功');
    }

    //反对
    public function dislike($id, $qid)
    {
        $reply = new ReplyModel();
        $love = $reply->where('id', $id)->setInc('dislike'); //反对数加1
        //$this->redirect('Ask/detail',['id' => $qid]);
        $this->success('反对成功');
    }
}
