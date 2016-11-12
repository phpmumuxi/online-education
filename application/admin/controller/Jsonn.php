<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-11-01
 * Time: 19:57
 * Descr:联动查询
 */
namespace app\admin\controller;

use think\console\command\make\Controller;

class jsonn extends Controller
{
    /**
     * Ajax
     * 返回联动查询的数据
     */
    public function add()
    {
        $result = array();
        $cat = $_POST['type'];
        $result = db('cat')->where(array('pid' => $cat))->field('id,name')->select();
        // $this->ajaxReturn($result,"JSON");
        echo json_encode($result);

    }
}
