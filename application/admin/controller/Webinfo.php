<?php
namespace app\admin\controller;
use app\common\model\Productcategory;
use think\Controller;
use think\Db;
use app\common\model\Youhua as YouhuaModel;
use app\common\model\About as AboutModel;
use app\common\model\Mainabout as MainaboutModel;
use app\common\model\Productyouhua as ProductyouhuaModel;
use app\common\model\Productcategory as ProductcategoryModel;
use app\common\model\Aboutyouhua as AboutyouhuaModel;
use think\Request;
use think\Session;

class Webinfo extends Controller
{
    //输出联系方式的信息
    public function youhua()
    {
        $youhua=new YouhuaModel;
        $youhuas=$youhua->where('id',1)->find();
        $this->assign('youhua',$youhuas);
        return $this->fetch();
    }

    //保存联系的信息
    public function youhuasave(Request$request)
    {
        $data=$request->post();
        $result=db('youhua')->where('id',1)->update(['companyname'=>$data['companyname'],
                                                      'address'=>$data['address'],
                                                      'email'=>$data['email'],
                                                      'person'=>$data['person'],
                                                      'phone'=>$data['phone']]
                                                      );
        if ($result){
            $this->success('修改成功','Webinfo/youhua');
        }else{
            $this->success('修改失败');
        }
    }

    //产品首页优化
    public function about()
    {
        $about=new AboutModel;
        $abouts=$about->where('id',1)->find();
        $this->assign('about',$abouts);
        return $this->fetch();
    }

    //产品首页优化的信息保存
    public function aboutsave(Request$request)
    {
        $data=$request->post();
        $result=db('about')->where('id',1)->update(['title'=>$data['title'],
                'keycode'=>$data['keycode'],
                'describ'=>$data['describ']]
        );
        if ($result){
            $this->success('修改成功','Webinfo/about');
        }else{
            $this->success('修改失败');
        }
    }


    //首页关于我们内容显示
    public function mainabout()
    {
        $mainabout=new MainaboutModel;
        $mainabouts=$mainabout->where('id',1)->find();
        $this->assign('mainabout',$mainabouts);
        return $this->fetch();
    }

    //修改频道信息 前端页面通过表单进行传值
    public function mainaboutsave(Request$request)
    {
        $data=$request->post();
        $result=db('mainabout')->where('id',$data['id'])->update(['content'=>$data['content']]);
        if ($result){
            $this->success('修改成功','Webinfo/mainabout');
        }else{
            $this->success('修改失败');
        }
    }


    //产品类别的显示
    public function productyouhua()
    {
        $where=[
            'status'=>1,
        ];
        $data=db('productcategory')->where($where)->select();
        $this->assign('productcategory',$data);
        return $this->fetch();
    }
    //向模板返回json数据
    public function productyouhuajson()
    {
        if(\request()->isPost()){
           $id=input('param.sel');
           $res=db('productyouhua')->where('parentid',$id)->find();
           return json($res);
        }
    }
    //修改产品类别信息 前端页面通过表单进行传值
    public function productyouhuasave(Request$request)
    {

        $data=$request->post();
//        $id=input("id");

        $result=db('productyouhua')->where('parentid',$data['id'])->update(['producttitle'=>$data['title'],
            'productkeycode'=>$data['keycode'],
            'productdescrib'=>$data['describ'],]);
        if ($result){
            $this->success('修改成功','Webinfo/productyouhua');
        }else{
            $this->success('修改失败');
        }
    }



    //新闻类别的显示
    public function newsyouhua()
    {
        $data=db('newsyouhua')->select();
        $this->assign('newsyouhua',$data);
        $data2=db('newsyouhua')->find();
        $this->assign('newsyouhua2',$data2);
        return $this->fetch();
    }
    //向模板返回json数据
    public function newsyouhuajson()
    {
        if(\request()->isPost()){
            $id=input('param.sel');
            $res=db('newsyouhua')->where('id',$id)->find();
            return json($res);
        }
    }
    //修改新闻类别信息 前端页面通过表单进行传值
    public function newsyouhuasave(Request$request)
    {

        $data=$request->post();
//        $id=input("id");
        $result=db('newsyouhua')->where('id',$data['id'])->update(['producttitle'=>$data['title'],
            'productkeycode'=>$data['keycode'],
            'productdescrib'=>$data['describ'],]);
        if ($result){
            $this->success('修改成功','Webinfo/newsyouhua');
        }else{
            $this->success('修改失败');
        }
    }



    //首页关于我们优化
    public function aboutyouhua()
    {
        $aboutyouhua=new  AboutyouhuaModel;
        $aboutyouhuas=$aboutyouhua->where('id',1)->find();
        $this->assign('aboutyouhua',$aboutyouhuas);
        return $this->fetch();
    }

    //首页关于我们优化的信息保存
    public function aboutyouhuasave(Request$request)
    {
        $data=$request->post();
        $result=db('aboutyouhua')->where('id',1)->update(['title'=>$data['title'],
                'keycode'=>$data['keycode'],
                'describ'=>$data['describ']]
        );
        if ($result){
            $this->success('修改成功','Webinfo/aboutyouhua');
        }else{
            $this->success('修改失败');
        }
    }



}