<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-10-31
 * Time: 20:25
 * 视频管理
 */

namespace app\admin\controller;

use app\admin\model\Cat as CatModel;
use app\admin\model\Video as VideoModel;

class Video extends Base
{
    /**
     * 列出视频
     * @return [type] [description]
     */
    public function index()
    {

        $video = VideoModel::order('id desc')->paginate(10);
        $this->assign('result', $video);
        $this->assign('page', $video->render());
        return $this->fetch();
    }

    /**
     * 加载添加视图
     */
    public function add()
    {
        //问题：无限级联动分类
        $cate = new CatModel();
        $result = $cate->where('pid', '=', 0)
            ->where('status', 2)
            ->select();
        //dump($result);die;
        $this->assign('result', $result);
        return $this->fetch();

    }

    /**
     * 添加视频的处理
     * 图片上传和视频上传处理，将保存的路径存入数据库
     */
    public function check()
    {
        $result = [];
        //缩略图处理
        if (request()->file('picname')) {
            // 获取缩略图的上传信息
            $pic = request()->file('picname');
            // 移动到框架应用根目录/public/uploads/ 目录下
            $pic = $pic->move(ROOT_PATH . 'public' . DS . 'static/uploads/img');
            //获取缩略图保存的文件名(上传时间不同所在文件不同)
            $data['picname'] = $pic->getSaveName();
        }
        // dump($_FILES);
        //视频处理
        //dump((ROOT_PATH . 'public' . DS . 'static/uploads/video'));
        if ($_FILES['name']) {
            //获取视频的上传信息
            $video = request()->file('name');
            //移动上传视频到目录下
            $video = $video->move(ROOT_PATH . 'public' . DS . 'static/uploads/video');
            //获取视频保存的文件名?
            //问题？缩略图getSaveName()是字符串  视频getSaveName()是对象？
            //解决办法：$video在全局是数组。在这里是对象！！！
            $data['name'] = $video->getSaveName();
            $data['type'] = $_FILES['name']['type'];
            $data['size'] = $_FILES['name']['size'];
            // dump($data);
        }
        $data['uid'] = session('id');
        $data['tid'] = input('post.id');
        $data['videoname'] = input('post.videoname');
        $data['descr'] = input('post.descr');
        // dump($data);die;
        $result = new VideoModel($data);
        $re = $result->save();
        if ($re) {
            return $this->success('添加视频成功!', 'index');
        } else {
            return $this->error('添加视频失败!', 'add');
        }

    }
    //加载编辑视图
    public function edit()
    {
        $result = VideoModel::where('id', '=', input('id'))->find();
        $this->assign('result', $result);
        return $this->fetch();
    }
    /**
     * 更新操作
     */
    public function update()
    {

        $video = VideoModel::where('id', '=', input('post.id'))->find();
        $result = [];
        //缩略图处理
        if (request()->file('picname')) {
            // 获取缩略图的上传信息
            $pic = request()->file('picname');
            // 移动到框架应用根目录/public/uploads/ 目录下
            $pic = $pic->move(ROOT_PATH . 'public' . DS . 'static/uploads/img');
            //获取缩略图保存的文件名(上传时间不同所在文件不同)
            $data['picname'] = $pic->getSaveName();
        }
        //视频处理
        if (request()->file('name')) {
            //获取视频的上传信息
            $video = request()->file('name');
            //移动上传视频到目录下
            $video = $video->move(ROOT_PATH . 'public' . DS . 'static/uploads/video');
            //获取视频保存的文件名?
            //问题？缩略图getSaveName()是字符串  视频getSaveName()是对象？
            //解决办法：$video在全局是数组。在这里是对象！！！
            $data['name'] = $video->getSaveName();
            $data['type'] = $_FILES['name']['type'];
            $data['size'] = $_FILES['name']['size'];

        }
        // $data['tid'] = input('post.id');
        $data['uid'] = session('id');
        $data['descr'] = input('post.descr');
        $data['videoname'] = input('post.videoname');
        //  dump($data);die;
        $result = VideoModel::get(input('post.id'));
        $re = $result->save($data);
        if ($re) {
            return $this->redirect('index');
        } else {
            return $this->error('修改视频失败!', 'index');
        }

    }
    /**
     * 视频搜索
     */
    public function search($keywords)
    {
        //关键字处理
        $keywords = isset($keywords) ? trim($keywords) : ' ';
        //根据关键字查询
        $video = VideoModel::order('id desc')
            ->where('videoname|descr|name', 'like', "%$keywords%")
            ->paginate(10);
        $this->assign('page', $video->render());
        $this->assign('result', $video);
        return $this->fetch('Video/index');

    }
    /**
     * 视频上下线
     * @return [type] [description]
     */
    public function delete($id)
    {
        $id = input('id');
        // dump(input());die;
        $video = new VideoModel();
        $result = $video->where('id', $id)->select();
        //dump($result);die;

        if ($result[0]['status'] == 2) {

            $re = $video->where('id', $id)->update(['status' => 1]);
        } else {
            $re = $video->where('id', $id)->update(['status' => 2]);
        }

        if ($re) {
            $this->redirect('index');
        } else {
            $this->error('修改失败', 'index');
        }
    }
    /**
     * 设置精品
     * @return [type] [description]
     */
    public function nice($id)
    {
        $id = input('id');
        $video = new VideoModel();
        $result = $video->where('id', $id)->select();
        //dump($result);die;
        //精品课程
        if ($result[0]['nice'] == 1) {

            $re = $video->where('id', $id)->update(['nice' => 0]);
            if ($re) {
                $this->redirect('index');
            } else {
                $this->error('取消精品课程成功失败', 'index');
            }
        } else {

            $re = $video->where('id', $id)->update(['nice' => 1]);

            if ($re) {
                $this->redirect('index');
            } else {
                $this->error('设置精品课程成功失败', 'index');
            }
        }
    }
    /**
     * 设置推荐
     * @return [type] [description]
     */
    public function good($id)
    {
        $id = input('id');
        $video = new VideoModel();
        $result = $video->where('id', $id)->select();
        //dump($result);die;
        //推荐课程
        if ($result[0]['good'] == 1) {
            $re = $video->where('id', $id)->update(['good' => 0]);
            if ($re) {
                $this->redirect('index');
            } else {
                $this->error('取消推荐课程成功失败', 'index');
            }
        } else {
            $re = $video->where('id', $id)->update(['good' => 1]);
            if ($re) {
                $this->redirect('index');
            } else {
                $this->error('设置推荐课程成功失败', 'index');
            }
        }

    }
}
