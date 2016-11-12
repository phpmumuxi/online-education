<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-05
 * Time: 20:35
 * 主页
 */
namespace app\index\controller;

use app\index\model\Cat as CatModel;
use app\index\model\Flink as FlinkModel;
use app\index\model\Info as InfoModel;
use app\index\model\Notice as NoticeModel;
use app\index\model\User as UserModel;
use app\index\model\Video as VideoModel;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        //查询网站信息
        $web = new InfoModel();
        $this->assign('info', $web->select());
        //查询公告信息
        $n = new NoticeModel();
        $this->assign('notice', $n->select());
        //循环遍历大小板块
        $cat = new CatModel();
        $video = new VideoModel();
        //大板块信息
        $data = $cat->where('pid = 0')->where('status', 2)->select();
        foreach ($data as $key => $value) {
            //小板块
            $min = $cat->where('pid', '=', $value['id'])->where('status', 2)->select();
            //dump($min);die;
            $data[$key]['min'] = $min;
            $id = [];
            foreach ($min as $value) {
                $id[] .= $value['id'];
            }
            $id = implode(',', $id); //小版块所有ID数组
            //推荐课程
            $vi = $cat->video()
                ->where('tid', 'in', $id)
                ->where('status', 2)
                ->where('good', 1)
                ->limit(5)
                ->select();
            $data[$key]['vi'] = $vi;

        }

        //推荐课程
        $this->assign('good', $video->where('good', 1)->where('status', 2)->limit(5)->select());
        //精品课程
        $this->assign('nice', $video->where('nice', 1)->where('status', 2)->limit(5)->select());
        //大板块信息
        $this->assign('data', $data);

        //前端课程
        $cat = new CatModel();
        $id = [];
        $result = $cat->where('pid', 1)->where('status', 2)->select();
        foreach ($result as $key => $value) {
            $id[] .= $value['id'];
        }
        $id = implode(',', $id);

        $wdata = db('video')->where('tid', 'in', $id)->where('status', 2)->select();

        $this->assign('wdata', $wdata);

        //后端课程
        $hid = [];
        $hresult = $cat->where('pid', 2)->where('status', 2)->select();

        foreach ($hresult as $key => $value) {
            $hid[] .= $value['id'];
        }
        $hid = implode(',', $hid);

        $hdata = db('video')->where('tid', 'in', $hid)->where('status', 2)->select();

        $this->assign('hdata', $hdata);

        //移动开发课程
        $yid = [];
        $yresult = $cat->where('pid', 3)->where('status', 2)->select();
        foreach ($yresult as $key => $value) {
            $yid[] .= $value['id'];
        }
        $yid = implode(',', $yid);

        $ydata = db('video')->where('status', 2)->where('tid', 'in', $yid)->select();

        $this->assign('ydata', $ydata);
        //数据库
        $did = [];
        $dresult = $cat->where('pid', 4)->where('status', 2)->select();
        foreach ($dresult as $key => $value) {
            $did[] .= $value['id'];
        }
        $did = implode(',', $did);

        $ddata = db('video')->where('tid', 'in', $did)->where('status', 2)->select();

        $this->assign('ddata', $ddata);
        //云计算
        $jid = [];
        $jresult = $cat->where('pid', 5)->where('status', 2)->select();
        foreach ($jresult as $key => $value) {
            $jid[] .= $value['id'];
        }
        $jid = implode(',', $jid);

        $jdata = db('video')->where('status', 2)->where('tid', 'in', $jid)->select();

        $this->assign('jdata', $jdata);
        //运维
        $ywid = [];
        $ywresult = $cat->where('pid', 6)->where('status', 2)->select();
        foreach ($ywresult as $key => $value) {
            $ywid[] .= $value['id'];
        }
        $ywid = implode(',', $ywid);
        $ywdata = db('video')->where('status', 2)->where('tid', 'in', $ywid)->select();

        $this->assign('ywdata', $ywdata);
        //设计
        $sid = [];

        $sresult = $cat->where('pid', 7)->where('status', 2)->select();
        foreach ($sresult as $key => $value) {
            $sid[] .= $value['id'];
        }
        $sid = implode(',', $sid);

        $sdata = db('video')->where('tid', 'in', $sid)->where('status', 2)->select();

        $this->assign('sdata', $sdata);

        //友情链接
        $flink = new FlinkModel();
        $this->assign('flink', $flink->where('')->select());

        //用户头像
        $user = new UserModel();
        $id = session('id');
        $user = $user->where('id', $id)->find();
        $this->assign('user', $user);
        //dump($user);die;
        return $this->fetch();
    }

}
