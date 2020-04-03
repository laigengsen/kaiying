<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\common\model\Admin as AdminModel;
use app\common\model\Tuwenlist as TuwenlistModel;
use think\Session;

class Admin extends Controller
{
    public function tuwenlist()
    {
        return $this->fetch();
    }

}