<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\common\model\Admin as AdminModel;
use app\common\model\Tuwenlist as TuwenlistModel;
use app\common\model\Newsyouhua as NewsyouhuaModel;
use app\common\model\Newscate as NewscateModel;
use app\common\model\Friendship as FriendshipModel;
use think\Session;
use think\Request;

class Friendship extends Controller
{
    //友情链接列表
    public function friendship()
    {
        $friendship=new FriendshipModel;
        $friendships=$friendship->getlist();
        $this->assign('friendship',$friendships);
        return $this->fetch();
    }
    //友情链接的添加
    public function friendshipadd()
    {
        return $this->fetch();
    }
    //友情链接的添加保存
    public function friendshipaddsave()
    {
        $friendship=new FriendshipModel;
        $data=$this->request->param();
        $datas=[
            "name" => $data['name'],
            "link" => $data['link'],
            "order" => $data['order'],
        ];
        $result=$friendship->savelist($datas);
        if($result){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
        return $this->fetch();
    }
//    //新闻修改页面展示
//    public function newsedit($id,$cateid)
//    {
//        $newsyouhua=new NewsyouhuaModel;
//        $newscate=new NewscateModel;
//        $newsyouhuas=$newsyouhua->where('id',$id)->find();
//        $this->assign('newsedit',$newsyouhuas);
//        $newscates=$newscate->select();
//        $this->assign('newseditcate',$newscates);
//        $newscates2=$newscate->where('id',$cateid)->find();
//        $this->assign('newseditcatename',$newscates2);
//        return $this->fetch();
//    }
//    //新闻修改的信息保存
//    public function newseditsave(Request$request)
//    {
//        $data=$request->post();
//        $result=db('newsyouhua')->where('id',$data['id'])
//            ->update(['producttitle'=>$data['title'],
//                    'productkeycode'=>$data['keycode'],
//                    'productdescrib'=>$data['describ'],
//                    'cateid'=>$data['cateid'],]
//        );
//        if ($result){
//            $this->success('修改成功','news/newsmenage');
//        }else{
//            $this->success('修改失败');
//        }
//    }
}