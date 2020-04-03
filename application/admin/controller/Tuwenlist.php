<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\common\model\Admin as AdminModel;
use app\common\model\Tuwenlist as TuwenlistModel;
use app\common\model\Tuwenedit as TuweneditModel;
use think\Request;
use think\Session;

class Tuwenlist extends Controller
{
    //输出频道信息列表
    public function tuwenlist()
    {
        $tuwen=new TuwenlistModel;
        $tuwenlist=$tuwen->getlist();
        $this->assign('tuwenlist',$tuwenlist);
        return $this->fetch();
    }

    //修改频道信息展示
    public function tuwenedit($id)
    {
        $tuwenedit=new TuwenlistModel;
        $tuwenedits=$tuwenedit->where('id',$id)->find();
        $this->assign('tuwenedit',$tuwenedits);
        return $this->fetch();
    }

    //修改频道信息 前端页面通过表单进行传值
    public function tuweneditsave(Request$request)
    {
        $data=$request->post();
        $result=db('tuwenlist')->where('id',$data['id'])->update(['content'=>$data['content']]);
        if ($result){
            $this->success('修改成功','Tuwenlist/tuwenlist');
        }else{
            $this->success('修改失败');
        }
    }

}