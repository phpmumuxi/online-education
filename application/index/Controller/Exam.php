<?php

/**
 * Created by Sublime.
 * User: chen
 * Date: 2016-11-08
 * Time: 17:50
 * 在线考试
 */
namespace app\index\controller;

class Exam extends Base
{
    public function index()
    {
        return $this->fetch();
    }

}
