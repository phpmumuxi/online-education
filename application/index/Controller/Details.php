<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-04
 * Time: 09:26
 * 视频播放
 */
namespace app\index\controller;

use app\index\model\Course as CourseModel;
use app\index\model\Vcomment as VcommentModel;
use app\index\model\Video as VideoModel;
use think\Controller;

class Details extends Base
{
    /**
     * 加载视频
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function index($id)
    {

        $video = new VideoModel();
        //查询视频相关信息
        $result = $video->where('id', $id)->where('status', 2)->select();
        //dump($result);die;
        if ($result) {
            $this->assign('result', $result);
        } else {
            $this->error('视频已经下架，请学习其他课程');
        }
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

        //查找评论
        $com = new VcommentModel();
        $vcom = $com->where('vid', $id)->order('id desc')->select();
        $this->assign('vcom', $vcom);

        //推荐课程
        $gvideo = $video->where('good', 1)->limit(3)->select();
        $this->assign('gvideo', $gvideo);
        //分配缩略图
        $this->assign('picname', $picname);
        //分配视频
        $this->assign('name', $name);

        return $this->fetch();
    }
    /**
     * 点赞
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function love($id)
    {
        //dump($id);die;
        $zan = new CourseModel();
        $result = $zan->where('uid', session('id'))
            ->where('vid', $id)
            ->where('zan', 0)
            ->find();
        // dump($result);die;
        if ($result) {
            $re = $zan->where('uid', session('id'))
                ->where('vid', $id)
                ->where('zan', 0)
                ->update(['zan' => '1']);
            $resu = new VideoModel();
            $resul = $resu->where('id', $id)->setInc('favonum');
            $this->redirect('Details/index', ['id' => $id]);
        }

    }
    /**
     * 收藏
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function collection($id)
    {

        $collection = new CourseModel();
        $result = $collection->where('uid', session('id'))
            ->where('vid', $id)
            ->where('collection', 0)
            ->find();
        // dump($result);die;
        if ($result) {
            $re = $collection->where('uid', session('id'))
                ->where('vid', $id)
                ->where('collection', 0)
                ->update(['collection' => 1]);
            $resu = new VideoModel();
            $resul = $resu->where('id', $id)->setInc('collnum');
            $this->redirect('Details/index', ['id' => $id]);
        }

    }
    /**
     * 取消收藏
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function uncollection($id)
    {

        $collection = new CourseModel();
        $result = $collection->where('uid', session('id'))
            ->where('vid', $id)
            ->where('collection', 1)
            ->find();
        if ($result) {
            $re = $collection->where('uid', session('id'))
                ->where('vid', $id)
                ->where('collection', 1)
                ->update(['collection' => 0]);
            $resu = new VideoModel();
            $resul = $resu->where('id', $id)->setInc('collnum');
            $this->redirect('Details/index', ['id' => $id]);
        }

    }
    /**
     * 视频评论
     * @return [type] [description]
     */
    public function comment()
    {
        //dump(input('id'));die;
        $vc = new VcommentModel();
        $vc->data([
            'uid' => session('id'),
            'vid' => input('vid'),
            'content' => input('content'),
        ]);
        $result = $vc->save();
        if ($result) {
            //增加积分
            db('user')->where('id', session('id'))->setInc('point');
            $this->redirect('Details/index', ['id' => input('vid')]);
        } else {
            $this->error('评论失败');
        }
    }
}
