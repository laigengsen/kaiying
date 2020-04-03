<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\common\model\Role;
use app\common\model\Admin as AdminModel;
use think\Session;

class Sys extends Base
{
    //显示修改管理员密码的页面
    public function repwd()
    {
        $admin=new AdminModel;
        $admins=$admin->where('id',session('aid'))->find();
        $this->assign('admins',$admins);
        return $this->fetch();
    }


    //修改管理员密码
    public function adminpasswordsave($id,$code,$newpassword)
    {
        $admin=new AdminModel;
        $password=md5($newpassword.$code);
        $admins=$admin->update(['password'=>$password],['id'=>$id]);
        if ($admins){
            $this->success('修改成功');
        }else{
            $this->success('修改失败');
        }
    }


    //管理员登录名显示
    public function adminname()
    {
        $admin=new AdminModel;
        $info=$admin->where('id',session('aid'))->find();
        $this->assign('info',$info);
        return $this->fetch();
    }




}
