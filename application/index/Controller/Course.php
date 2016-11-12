<?php
/**
 * Created by Sublime.
 * User: 马珍
 * Date: 2016-11-04
 * Time: 11:58
 * 课程管理
 */
namespace app\index\Controller;

use \app\index\model\Course as CourseModel;

class Course extends Base {
	//用户课程主页
	public function index() {
		$id = session('id');
		$course = new CourseModel;
		$result = $course->where('uid', $id)->order('create_time desc')->paginate(5);
		$this->assign('result', $result);
		return $this->fetch();
	}

	//用户课程
	public function user() {
		$id = session('id');
		$course = new CourseModel;
		$result = $course->where('uid', $id)->order('create_time desc')->paginate(5);

		foreach ($result as $key => $value) {
			$count1 = $course->note()->where('uid', $id)->where('vid', $value['vid'])->count();
			$count2 = $course->ask()->where('uid', $id)->where('vid', $value['vid'])->count();
			$result[$key]['count1'] = $count1;
			$result[$key]['count2'] = $count2;
		}

		$this->assign('result', $result);
		return $this->fetch();
	}

	//用户课程收藏
	public function collection() {
		$id = session('id');
		$course = new CourseModel();
		$result = $course->where('uid', $id)->where('collection', '1')->order('create_time desc')->paginate(5);

		foreach ($result as $key => $value) {
			$count1 = $course->note()->where('uid', $id)->where('vid', $value['vid'])->count();
			$count2 = $course->ask()->where('uid', $id)->where('vid', $value['vid'])->count();
			$result[$key]['count1'] = $count1;
			$result[$key]['count2'] = $count2;

		}

		$this->assign('result', $result);
		return $this->fetch();

	}

}
