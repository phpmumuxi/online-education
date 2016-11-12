<?php
/**
 * Created by Sublime.
 * User: 马珍
 * Date: 2016-11-04
 * Time: 11:58
 * 问题管理
 */
namespace app\index\controller;

use app\index\model\Course as CourseModel;
use app\index\model\Notice as NoticeModel;
use app\index\model\Reply as ReplyModel;
use app\index\model\Video as VideoModel;
use \app\index\model\Ask as AskModel;
use \think\Loader;

class Ask extends Base
{

    //提问的主页(所有的问题展示页)(推荐)
    public function index()
    {
        //最近公告
        $notice = new NoticeModel();
        $result = $notice->order('id desc')->limit(2)->select();
        $this->assign('result', $result);

        //查询问题以及回复
        $aske = new AskModel();
        $ask = $aske->order('clicknum desc')->paginate(8);
        //dump($ask);die;
        foreach ($ask as $key => $val) {
            $reply = new ReplyModel();
            $reply = $aske->reply()->where('qid', $val['id'])->order('id desc')->limit(1)->find();
            //dump($reply);die;
            $ask[$key]['reply'] = $reply;
            $count = $aske->reply()->where('qid', $val['id'])->count(); //查询回复数
            $ask[$key]['count'] = $count; //回复数
        }
        $this->assign('ask', $ask);

        //查询热门问题
        $hot = $aske->order('clicknum desc')->limit(5)->select();
        foreach ($hot as $key => $val) {
            $count2 = $aske->reply()->where('qid', $val['id'])->count();
            //dump($count2);die;
            $hot[$key]['count2'] = $count2;
            //$this->assign('count2',$count2);
        }
        $this->assign('hot', $hot);

        //推荐课程查询
        $video = new VideoModel();
        $gvideo = $video->where('good', 1)->order('clicknum desc')->limit(5)->select();
        $this->assign('gvideo', $gvideo);

        return $this->fetch();
    }

    //提问的主页(所有的问题展示页)(最新)
    public function recommend()
    {
        //最近公告
        $notice = new NoticeModel();
        $result = $notice->order('id desc')->limit(2)->select();
        $this->assign('result', $result);

        //查询问题以及回复
        $aske = new AskModel();
        $ask = $aske->order('id desc')->paginate(8);
        //dump($ask);die;
        foreach ($ask as $key => $val) {
            $reply = new ReplyModel();
            $reply = $aske->reply()->where('qid', $val['id'])->order('id desc')->limit(1)->find();
            //dump($reply);die;
            $ask[$key]['reply'] = $reply;
            $count = $aske->reply()->where('qid', $val['id'])->count(); //查询回复数
            $ask[$key]['count'] = $count; //回复数
        }
        $this->assign('ask', $ask);

        //查询热门问题
        $hot = $aske->order('clicknum desc')->limit(5)->select();
        foreach ($hot as $key => $val) {
            $count2 = $aske->reply()->where('qid', $val['id'])->count();
            //dump($count2);die;
            $hot[$key]['count2'] = $count2;
            //$this->assign('count2',$count2);
        }
        $this->assign('hot', $hot);

        //推荐课程查询
        $video = new VideoModel();
        $gvideo = $video->where('good', 1)->order('clicknum desc')->limit(5)->select();
        $this->assign('gvideo', $gvideo);

        return $this->fetch();
    }

    //提问的主页(所有的问题展示页)(等待回答)
    public function toreply()
    {
        //最近公告
        $notice = new NoticeModel();
        $result = $notice->order('id desc')->limit(2)->select();
        $this->assign('result', $result);

        //查询问题以及回复
        $reply = new ReplyModel();
        $qid = $reply->column('qid'); //查询所有问题的qid
        $aske = new AskModel();
        $ask = $aske->order('id desc')->where('id', 'not in', $qid)->paginate(8);
        $this->assign('ask', $ask);

        //查询热门问题
        $hot = $aske->order('clicknum desc')->limit(5)->select();
        foreach ($hot as $key => $val) {
            $count2 = $aske->reply()->where('qid', $val['id'])->count();
            //dump($count2);die;
            $hot[$key]['count2'] = $count2;
            //$this->assign('count2',$count2);
        }
        $this->assign('hot', $hot);

        //推荐课程查询
        $video = new VideoModel();
        $gvideo = $video->where('good', 1)->order('clicknum desc')->limit(5)->select();
        $this->assign('gvideo', $gvideo);

        return $this->fetch();
    }

    //视频底下用户的提问(全部)
    public function alluser($id)
    {

        $video = new VideoModel();
        //查询视频相关信息
        $result = $video->where('id', $id)->select();
        // dump($result);die;
        //更新视频浏览量
        $video->where('id', $id)->setInc('clicknum');

        //更新课程学习记录
        $course = new CourseModel();
        $data = $course->where('uid', session('id'))
            ->where('vid', $id)
            ->find();
        if (!$data) {
            $course->data([
                'uid' => session('id'),
                'vid' => $id,
            ]);
            $course->save();
        }

        //分配点赞
        $this->assign('data', $data);
        //替换字符串： 解决视频播放问题
        $picname = str_replace('\\', '/', $result[0]['picname']);
        $name = str_replace('\\', '/', $result[0]['name']);

        //查询问题以及回复
        $aske = new AskModel();
        $ask = $aske->where('vid', $id)->order('id desc')->paginate(3);
        foreach ($ask as $key => $val) {

            $reply = new ReplyModel();
            $reply = $aske->reply()->where('qid', $val['id'])->order('id desc')->limit(1)->find();
            //dump($reply);die;
            $ask[$key]['reply'] = $reply;
            $count = $aske->reply()->where('qid', $val['id'])->count(); //查询回复数
            $ask[$key]['count'] = $count; //回复数

        }
        //dump($ask);die;
        $this->assign('ask', $ask);

        //推荐课程
        $gvideo = $video->where('good', 1)->limit(3)->select();
        $this->assign('gvideo', $gvideo);
        //分配缩略图
        $this->assign('picname', $picname);
        //分配视频
        $this->assign('name', $name);
        $this->assign('result', $result);
        return $this->fetch();
    }

    //视频底下用户的提问(精华)
    public function jinghua($id)
    {

        $video = new VideoModel();
        //查询视频相关信息
        $result = $video->where('id', $id)->select();
        //dump($result);die;
        //更新视频浏览量
        $video->where('id', $id)->setInc('clicknum');

        //更新课程学习记录
        $course = new CourseModel();
        $data = $course->where('uid', session('id'))
            ->where('vid', $id)
            ->find();
        if (!$data) {
            $course->data([
                'uid' => session('id'),
                'vid' => $id,
            ]);
            $course->save();
        }

        //分配点赞
        $this->assign('data', $data);
        //替换字符串： 解决视频播放问题
        $picname = str_replace('\\', '/', $result[0]['picname']);
        $name = str_replace('\\', '/', $result[0]['name']);

        //查询问题以及回复
        $aske = new AskModel();
        $ask = $aske->where('vid', $id)->order('clicknum desc')->limit(7)->paginate(3);
        foreach ($ask as $key => $val) {

            $reply = new ReplyModel();
            $reply = $aske->reply()->where('qid', $val['id'])->order('id desc')->limit(1)->find();
            //dump($reply);die;
            $ask[$key]['reply'] = $reply;
            $count = $aske->reply()->where('qid', $val['id'])->count(); //查询回复数
            $ask[$key]['count'] = $count; //回复数

        }
        //dump($ask);die;
        $this->assign('ask', $ask);

        //推荐课程
        $gvideo = $video->where('good', 1)->limit(3)->select();
        $this->assign('gvideo', $gvideo);
        //分配缩略图
        $this->assign('picname', $picname);
        //分配视频
        $this->assign('name', $name);
        $this->assign('result', $result);
        return $this->fetch();
    }

    //用户问题
    public function user()
    {
        $id = session('id');
        $ask = new AskModel();
        $result = $ask->where('uid', $id)->paginate(5);
        foreach ($result as $key => $value) {
            $count = $ask->reply()->where('qid', $value['id'])->count();
            $result[$key]['count'] = $count;
        }
        $this->assign('result', $result);
        return $this->fetch();
    }

    //添加提问
    public function add($id)
    {
        $this->assign('id', $id);
        return $this->fetch();
    }

    //添加问题检查
    public function check()
    {
        $validate = Loader::validate('Ask');
        if (!$validate->check(input('post.'))) {
            $this->error($validate->getError());
        }

        //实例话的时候传入数据
        $ask = new AskModel([
            'vid' => input('vid'),
            'uid' => session('id'),
            'title' => input('title'),
            'content' => input('content'),
        ]);

        // 过滤post数组中的非数据表字段数据
        $result = $ask->allowField(true)->save();
        if ($result) {
            //增加积分
            db('user')->where('id', session('id'))->setInc('point');
            // dump(input('vid'));die;
            $this->redirect('Ask/alluser', ['id' => input('vid')]);
        } else {
            $this->error('提问失败');
        }

    }

    //每个问题的展示
    public function detail($id)
    {
        //查询问题详情
        $ask = new AskModel();
        $clicknum = $ask->where('id', $id)->setInc('clicknum'); //点击量加1
        $result = $ask->where('id', $id)->find();

        //查询热门问题
        $hot = $ask->order('clicknum desc')->limit(5)->select();
        foreach ($hot as $key => $val) {
            $count2 = $ask->reply()->where('qid', $val['id'])->count();
            //dump($count2);die;
            $hot[$key]['count2'] = $count2;
            //$this->assign('count2',$count2);
        }

        //根据qid查对应的回复
        $reply = new ReplyModel();
        $count = $reply->where('qid', $id)->count(); //问题回复数
        $list = $reply->where('qid', $id)->order('id desc')->paginate(3);
        //dump($list);die;

        $this->assign('count', $count);
        $this->assign('result', $result);
        $this->assign('list', $list);
        $this->assign('hot', $hot);

        //查询问题的回复
        return $this->fetch();
    }

}
