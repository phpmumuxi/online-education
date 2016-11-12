<?php
/**
 * 后台主页
 */
namespace app\admin\controller;

use think\Request;
use \app\admin\model\Info as InfoModel;

class Index extends Base
{
    /**
     * 加载主页
     * @return [type] [description]
     */
    public function index()
    {
        $web = new InfoModel();
        $this->assign('list', $web->select());
        return $this->info();
        return $this->fetch();
    }

    /**
     * 加载网站信息
     * @return [type] [description]
     */
    public function info()
    {
        //查询网站信息
        $web = new InfoModel();
        $list = $web->select();
        //dump($list[0]['title']);die;
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 更新网站信息
     * 上传文件
     * @return [type] [description]
     */
    public function check(Request $request)
    {
        if (request()->isPost()) {
            $_POST['keywords'] = str_replace(',', ',', input('keywords'));
            /**
             * 文件上传处理
             */
            if ($_FILES['logo']['tmp_name']) {
                $file = request()->file('logo');
                //移动目录
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                // dump($info);
                $_POST['logo'] = '/uploads/' . $info->getSaveName();
                //  dump($_POST['logo']);die;
            }
            //  $validate = Loader::Validate('info');
            //验证文件格式
            /*  if (!$validate->check($data)) {
            $this->error($validate->getError());die;
            }*/
            $info = new InfoModel($_POST['id']);
            // dump($_POST);die;
            //更新操作  单独写$_POST不可以更新
            $result = $info->update(['id' => $_POST['id'],
                'title' => $_POST['title'],
                'descr' => $_POST['descr'],
                'keywords' => $_POST['keywords'],
                'logo' => $_POST['logo'],
                'number' => $_POST['number'],
                'phone' => $_POST['phone'],
                'person' => $_POST['person'],
                'qq' => $_POST['qq'],
                'fax' => $_POST['fax'],
                'email' => $_POST['email'],
                'footer' => $_POST['footer'],
                'domain' => $_POST['domain'],

            ]);
            // $result = $info->allowField(true)->save($_POST, ['id' => 1]);
            if ($result) {
                return $this->success('更新网站信息成功！');
            } else {
                return $this->error('更新网站信息失败！');
            }
            return;
        }

    }

    /**
     * 退出登陆
     * @return [type] [description]
     */
    public function logout()
    {
        session(null); //清除session
        $this->redirect('Login/index');
    }

}
