<?php
namespace app\admin\controller;
use app\common\model\Productcategory;
use think\console\Input;
use think\Controller;
use think\Db;
use think\Image;
use app\common\model\Youhua as YouhuaModel;
use app\common\model\About as AboutModel;
use app\common\model\Mainabout as MainaboutModel;
use app\common\model\Productyouhua as ProductyouhuaModel;
use app\common\model\Productcategory as ProductcategoryModel;
use app\common\model\Aboutyouhua as AboutyouhuaModel;
use app\common\model\Product as ProductModel;
use think\Request;
use think\Session;

class Menage extends Controller
{
    //输出分类信息列表
    public function menagecategory()
    {
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->getlist();
        $this->assign('productcategory',$productcategorys);
        return $this->fetch();
    }

    //添加分类
    public function addcategory(Request$request)
    {
        return $this->fetch();
    }
    //添加分类的保存
    public function addcategorysave(Request$request)
    {
        $productcategory=new ProductcategoryModel;
        $data=$request->post();
        $result=$productcategory->savelist($data);
        if($result){
            $this->success('添加成功','Menage/menagecategory');
        }else{
            $this->error('添加失败');
        }
    }
    //删除分类
    public function deletecategory($id)
    {
        $productcategory=new ProductcategoryModel;
            $res=$productcategory->update(['status'=>-1],['id'=>$id]);
            if($res){
                $this->success('删除成功','Menage/menagecategory');
            }else{
                $this->error('删除失败');

        }
    }
    //显示编辑分类的页面
    public function editcategory($id)
    {
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->where('id',$id)->find();
        $this->assign('productcategory',$productcategorys);
        return $this->fetch();
    }
    //分类的编辑
    public function editcategorysave(Request$request)
    {
        $id=input('id');
        $name=input('name');
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->where('id',$id)->find();

        $result=$productcategorys->update(['name'=>$name],['id'=>$id]);
        if($result){
            $this->success('修改成功','Menage/menagecategory');
        }else{
            $this->error('修改失败');
        }
    }


















    //产品类别的显示
    public function product()
    {
        $id=0||input('param.sel');
        $where=[
            'status'=>1,
        ];
        $data=db('productcategory')->where($where)->select();
        $this->assign('productcategory',$data);
        $data2=db('product')->where(['parentid'=>$id])->select();
        $this->assign('product',$data2);
        return $this->fetch();
    }
    //向模板返回json数据
    public function productjson()
    {
        if(\request()->isPost()){
            $id=input('param.sel');
            $res=db('product')->where('parentid',$id)->select();
            $this->assign('product',$res);
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
    public function productdelete()
    {
        $id=input('param.sel');
        return $this->fetch();
    }
















    //添加产品
    public function productadd(){
        $data=db('productcategory')->select();
        $this->assign('productcategory',$data);
        return $this->fetch();
    }
    //异步上传图片
    public function picture(Request $request)
    {
        // 获取表单上传文件
        $file = $request->file('image');

            // 读取图片
            $image = Image::open($file);
            //生成缩略图
            $image->thumb(150, 150, Image::THUMB_CENTER);
            // 保存图片（以当前时间戳）
            $saveName = $request->time() . '.png';
            $image->save('uploads/' . $saveName);
            //返回前端图片地址
            return json([
                'src'=>'/uploads/' . $saveName,
            ]);


    }
    //产品信息的添加保存
    public function productaddsave()
    {
        $product= new ProductModel();
        //接收数据
        $data=$this->request->param();
        // dump($data);exit;
        $datas=[
            "producttitle" => $data['name'],
            "parentid" => $data['id'],

            "productpicture" => $data['picture'],
        ];
        $result=$product->savelist($datas);
        if($result){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }




}