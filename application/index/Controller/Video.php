<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-03
 * Time: 20:35
 * 视频model
 */
namespace app\index\controller;

use app\index\model\Cat as CatModel;
use app\index\model\Flink as FlinkModel;
use app\index\model\User as UserModel;
use app\index\model\Video as VideoModel;
use think\Controller;

class Video extends Controller
{
    /**
     * 查询大板块
     * @return [type] 分配大板块至标签
     */
    public function index($id, $pid)
    {

        //用户头像
        $user = new UserModel();
        $uid = session('id');
        $user = $user->where('id', $uid)->find();
        $this->assign('user', $user);

        $vide = new VideoModel();
        $cat = new CatModel();
        //大板块信息
        $cate_max = $cat->where('id', $id)->where('status', 2)->select();

        //所有大类的信息
        $cate = $cat->where('pid', 0)->where('status', 2)->select();
        // dump($cate);die;
        //找到二级所有的信息
        $cate_min = $cat->where('pid', $cate_max[0]['id'])->where('status', 2)->select();
        $v = [];
        foreach ($cate_min as $key => $value) {
            $v[] .= $value['id'];
        }
        //通过二级的id找到视频
        $video = $vide->where('tid', 'in', $v)->where('status', 2)->paginate(12);
        //分页信息
        $page = $video->render();
        //友情链接
        $flink = new FlinkModel();
        $this->assign('flink', $flink->select());
        //加载模板
        return view('', compact('cate_max', 'video', 'page', 'cate_min', 'cate'));

    }

    /**
     * 模糊查询
     * @param  [type] $keywords [description]
     * @return [type]           [description]
     */
    public function search($keywords)
    {
        //用户头像
        $user = new UserModel();
        $id = session('id');
        $user = $user->where('id', $id)->find();
        $this->assign('user', $user);
        //关键字处理
        $keywords = isset($keywords) ? trim($keywords) : ' ';
        //关键字查询
        $result = db('video')
            ->where('videoname|descr', 'like', "%$keywords%")
            ->paginate(20);
        //查询查询数
        $count = db('video')
            ->where('videoname|descr', 'like', "%$keywords%")
            ->order('id desc')
            ->count('id');
        //根据查询数查找热门课程
        $hotvideo = new VideoModel();
        $this->assign('hotvideo', $hotvideo->order('clicknum desc')->limit(15)->select());
        $this->assign('result', $result);
        $this->assign('keywords', $keywords);
        $this->assign('videocount', $count);
        //友情链接
        $flink = new FlinkModel();
        $this->assign('flink', $flink->select());
        //加载模板
        return $this->fetch();
    }
    /**
     * 从当前页查询返回的数据
     * @param  [type] $id  [description]
     * @param  [type] $pid [description]
     * @return [type]      [description]
     */
    public function lst($id, $pid)
    {

        //用户头像
        $user = new UserModel();
        $uid = session('id');
        $user = $user->where('id', $uid)->find();
        $this->assign('user', $user);

        $vide = new VideoModel();
        $cat = new CatModel();
        //大板块信息
        $cate_max = $cat->where('id', $id)->where('status', 2)->select();
        //所有大类的信息
        $cate = $cat->where('pid', 0)->where('status', 2)->select();
        //找到二级板块所有的信息
        $cate_min = $cat->where('pid', $cate[0]['id'])->where('status', 2)->select();
        //通过传过来的的id找到视频
        $video = $vide->where('tid', $id)->where('status', 2)->paginate(12);
        //分页信息
        $page = $video->render();
        //友情链接
        $flink = new FlinkModel();
        $this->assign('flink', $flink->select());
        //加载模板
        return view('index', compact('cate_max', 'video', 'page', 'cate_min', 'cate'));

    }
    /**
     * 查询全部的大板块
     * @return [type] [description]
     */
    public function all()
    {
        //用户头像
        $user = new UserModel();
        $uid = session('id');
        $user = $user->where('id', $uid)->find();
        $this->assign('user', $user);
        $vide = new VideoModel();
        $cat = new CatModel();
        //大板块信息
        $cate_max = $cat->where('status', 2)->select();
        //所有大类的信息
        $cate = $cat->where('pid', 0)->where('status', 2)->select();
        //找到二级板块所有的信息
        $cate_min = $cat->where('status', 2)->where('pid', 'neq', 0)->select();
        //通过传过来的的id找到视频
        $video = $vide->where('status', 2)->paginate(12);
        //分页信息
        $page = $video->render();
        //友情链接
        $flink = new FlinkModel();
        $this->assign('flink', $flink->select());
        //加载模板
        return view('index', compact('cate_max', 'video', 'page', 'cate_min', 'cate'));

    }

}
