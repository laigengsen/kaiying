<?php
namespace app\common\model;
use think\db\Where;
use think\Model;
class Admin extends Model
{
    protected function base()
    {
        
    }


    //管理员登陆
    public function login($name,$password){
        $where['name']=$name;
        $where['status']=1;
        //查询唯一的记录find()
        $admin=$this->where($where)->find();
        if ($admin){
            if (md5($password.$admin->code)!=$admin->password){
                $this->error='密码错误';
                return 0;
            }else{
                return $admin->id;
            }
        }else{
            $this->error='用户名不存在或者被禁用';
            return -1;
        }
    }

    //获取用户的信息  $adminid为管理员的主=主键
    public function info($adminid){
        $admin=$this->where('id',$adminid)->field('id,name,email,mobile,status,authid')->find();
        if ($admin && 1==$admin->status){
            //返回用户数据 为数组的形式
            return $admin->toArray();
        }else{
            return false;
        }
    }

//获取列表
    public function getlist()
    {
        $order=[
            'order'=>'asc',
            'id'=>'desc',
        ];
        return $this->order($order)
            ->select();
    }


}
