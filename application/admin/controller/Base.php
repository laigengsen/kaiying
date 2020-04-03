<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\Admin;
use app\common\model\Role;
use think\Db;
use app\common\model\Systemlist;
class Base extends Controller
{
    //初始化控制器
    public function initialize(){
        //验证登陆
        $admininfo=$this->getAdminInfo();
        if (!$admininfo){
            return $this->redirect('login/index');
        }else{
        $authid=$admininfo['authid'];
        $authinfo=$this->getAdminRole($authid);
        $auth=$authinfo['auth'];
        if (!empty($auth)){
            $auths=explode(',',$auth);
        }else{
            $auths='';
        }
        $this->assign('auths',$auths);
        $this->assign('admininfo',$admininfo);

        $showlist=model('Systemlist')->getlist();
        $this->assign('showlist',$showlist);
              }
    }

    //获取用户信息
    public function getAdminInfo(){
               //S要大写 是session的助手函数
        $adminid=Session('aid');
        $admin=new Admin;
        $admininfo=$admin->info($adminid);
        if ($admininfo){
            return $admininfo;
        }else{
            return false;
        }
    }

    //获取管理员权限
    public function getAdminRole($authid){
        $role=new Role;
        $roleinfo=$role->getroleinfo($authid);
        if ($roleinfo){
            return $roleinfo;
        }else{
            return false;
        }
    }



}
