<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\common\model\Admin as AdminModel;
use app\common\model\Tuwenlist as TuwenlistModel;
use app\common\model\Newsyouhua as NewsyouhuaModel;
use app\common\model\Newscate as NewscateModel;
use think\Session;
use think\Request;

class News extends Controller
{
    //新闻列表
    public function newsmenage()
    {
        $newsyouhua=new NewsyouhuaModel;
        $newsyouhuas=$newsyouhua->getlist();
        $this->assign('news',$newsyouhuas);
        return $this->fetch();
    }
    //新闻修改页面展示
    public function newsedit($id,$cateid)
    {
        $newsyouhua=new NewsyouhuaModel;
        $newscate=new NewscateModel;
        $newsyouhuas=$newsyouhua->where('id',$id)->find();
        $this->assign('newsedit',$newsyouhuas);
        $newscates=$newscate->select();
        $this->assign('newseditcate',$newscates);
        $newscates2=$newscate->where('id',$cateid)->find();
        $this->assign('newseditcatename',$newscates2);
        return $this->fetch();
    }
    //新闻修改的信息保存
    public function newseditsave(Request$request)
    {
        $data=$request->post();
        $result=db('newsyouhua')->where('id',$data['id'])
            ->update(['producttitle'=>$data['title'],
                    'productkeycode'=>$data['keycode'],
                    'productdescrib'=>$data['describ'],
                    'cateid'=>$data['cateid'],]
        );
        if ($result){
            $this->success('修改成功','news/newsmenage');
        }else{
            $this->success('修改失败');
        }
    }
    //新闻的添加
    public function newsmenageadd()
    {
        $newscate=new NewscateModel;
        $newscates=$newscate->select();
        $this->assign('newseditcate',$newscates);
        return $this->fetch();
    }
    //新闻的添加保存
    public function newsaddsave()
    {
        $newsyouhua=new NewsyouhuaModel;
        $data=$this->request->param();
        $datas=[
            "cateid" => $data['cateid'],
            "producttitle" => $data['producttitle'],
            "productkeycode" => $data['productkeycode'],
            "productdescrib" => $data['productdescrib'],
        ];
        $result=$newsyouhua->savelist($datas);
        if($result){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
        return $this->fetch();
    }
}