<?php
namespace app\admin\controller;

use app\admin\model\Cat as CatModel;
use \think\Loader;

 	/**
     * 视频版块分类
     * @Author   mazhen
     * @Datetime 2016-11-1
     * @param    [type]  $value [description]
     */

class Cat extends Base
{
	public function index()
	{
		$cat = new CatModel();
        //分页
        $list = $cat->where('pid',0)->order('status desc')->paginate(10);
        $page = $list->render();

        $this->assign('list', $list);
        $this->assign('page', $page);

        return $this->fetch();
	}

	//子版块列表
	public function children($id)
	{
		$cat = new CatModel();
        //分页
        $list = $cat->where('pid',$id)->paginate(10);
        $page = $list->render();

        $this->assign('list', $list);
        $this->assign('page', $page);

        return $this->fetch();
	}

	//添加版块
	public function add()
	{
		$cat = new CatModel();
		$list = $cat->order('pid')->where('pid',0)->select();
		$this->assign('list', $list);
		return $this->fetch();
	}

	public function check()
	{
		$validate = Loader::validate('cat');

        //validate判断规则
        if (!$validate->check(input('post.'))) {
            dump($validate->getError());die;
        }
        //dump(input('post.'));die;
        //判断是父版块还是子版块
        if($_POST['father_id'] == 0){
        	$_POST['pid'] = $_POST['father_id'];
        	$_POST['path'] = $_POST['father_id'].',';
        }else{
	        $_POST['pid'] = $_POST['father_id'];
	        $_POST['path'] = '0'.','.$_POST['father_id'].',';
	 	}
	 	//保存
        $cat = new CatModel();
        $result = $cat->allowField(true)->save($_POST);
        if ($result) {
           $this->redirect('index');
        } else {
            $this->error('添加失败');
        }

	}

	public function edit($id)
	{
		$list = CatModel::get($id);
		$this->assign('list',$list);
		return $this->fetch();
	}

	public function update()
	{
		$validate = Loader::validate('cat');

        //validate判断规则
        if (!$validate->check(input('post.'))) {
            dump($validate->getError());die;
        }
        //执行更新
        $cat = CatModel::get(input('post.id'));
        $result = $cat->allowField(true)->save(input('post.'));
        if ($result) {
            $this->redirect('index');
        } else {
            $this->error('修改失败');
        }

	}

	public function delete($id)
	{
		//dump($_POST);die;
		//批量删除没做完
		if(!empty($_POST['id'])){
			$id = $_POST['id'];
		}

		$cat = new CatModel($id);
		$status = $cat->where('id','=',$id)->select();
		//判断在线还是隐藏
		if($status[0]['status'] == 2){
			$result = $cat->where('id',$id)->update(['status' => 1]);
		}else{
			$result = $cat->where('id',$id)->update(['status' => 2]);
		}

		if ($result) {
            $this->redirect('index');
        } else {
            $this->error('修改失败');
        }

	}


}