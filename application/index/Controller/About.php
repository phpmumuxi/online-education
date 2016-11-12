<?php
/**
 * Created by Sublime.
 * User: Chen
 * Date: 2016-11-07
 * Time: 20:35
 *
 */
namespace app\index\controller;

use think\Controller;

class About extends controller
{
    public function index()
    {
        return $this->fetch();
    }
}
