<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\common\model\Admin as AdminModel;
use think\Session;

class Login extends Controller
{
    public function index()
    {
    return $this->fetch();
    }

    //后台登陆前端页面
    public function login(){
        return $this->fetch();
    }

    //管理员登陆
    public function doLogin($name,$password,$code){
        if(!captcha_check($code)){
            $this->error('验证码错误');
        };
        //记住密码
        $keep=input('param.keep');
        //实例化相比助手函数需要再use处引入 且不能和控制器重名
        $admin=new AdminModel;
        $adminid=$admin->login($name,$password);
        if ($adminid==0){
            $this->error('密码错误');
        }elseif ($adminid==-1){
            $this->error('用户不存在或被禁用');
        }else{
            session('aid',$adminid);
//            $aid=session('aid');
//            dump($aid);exit;
            if (isset($keep)){
                cookie('name',$name,3600);
                cookie('password',$password,3600);
            }else{
                cookie('name',null);
                cookie('password',null);
            }
            $this->redirect('index/index');
        }
    }


    //退出登陆
    public function loginout(){
        session(null);
        $this->success('成功退出登陆','login/index');
    }
}
