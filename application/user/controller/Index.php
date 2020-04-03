<?php
namespace app\user\controller;
use app\common\model\Newscate;
use think\Controller;
use think\console\Input;
use think\Db;
use think\Image;
use think\Request;
use think\Session;
use app\common\model\Youhua as YouhuaModel;
use app\common\model\About as AboutModel;
use app\common\model\Mainabout as MainaboutModel;
use app\common\model\Productyouhua as ProductyouhuaModel;
use app\common\model\Product as ProductModel;
use app\common\model\Productcategory as ProductcategoryModel;
use app\common\model\Aboutyouhua as AboutyouhuaModel;
use app\common\model\Newsyouhua as NewsyouhuaModel;
use app\common\model\Newscate as NewscateModel;


class Index extends Controller
{
    public function kaiying()
    {
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->getlist();
        $this->assign('productcategory',$productcategorys);

        $about=new AboutModel;
        $abouts=$about->where(['id'=>1])->find();
        $this->assign('about',$abouts);

        $newsyouhua=new NewsyouhuaModel;
        $newsyouhuas=$newsyouhua->where(['cateid'=>2])->select();
        $this->assign('newsyouhua',$newsyouhuas);


        $newsyouhua2=new NewsyouhuaModel;
        $newsyouhuas2=$newsyouhua2->where(['cateid'=>1])->select();
        $this->assign('newsyouhua2',$newsyouhuas2);

        $youhua=new YouhuaModel();
        $youhuas=$youhua->where(['id'=>1])->find();
        $this->assign('youhua',$youhuas);

        $mainabout=new MainaboutModel;
        $mainabouts=$mainabout->where('id',1)->find();
        $this->assign('mainabout',$mainabouts);


        $product=new ProductModel;
        $products=$product->order('id','desc')->limit(8)->select();
        $this->assign('product',$products);


//        $product=new ProductModel;
//        $products=$product->where('id',338)->find();
//        $this->assign('product1',$products);
//
//        $product2=new ProductModel;
//        $products2=$product2->where('id',339)->find();
//        $this->assign('product2',$products2);
//
//        $product2=new ProductModel;
//        $products2=$product2->where('id',342)->find();
//        $this->assign('product3',$products2);
//
//        $product2=new ProductModel;
//        $products2=$product2->where('id',343)->find();
//        $this->assign('product4',$products2);


        return $this->fetch();
    }


    public function aboutkaiying(){
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->getlist();
        $this->assign('productcategory',$productcategorys);


        $aboutyouhua=new AboutyouhuaModel;
        $aboutyouhuas=$aboutyouhua->where(['id'=>1])->find();
        $this->assign('aboutyouhua',$aboutyouhuas);


        $youhua=new YouhuaModel();
        $youhuas=$youhua->where(['id'=>1])->find();
        $this->assign('youhua',$youhuas);

        return $this->fetch();
    }




    public function product(){
        $product=new ProductModel;
        $products=$product->order('id','desc')->limit(4)->select();
//        halt($products);
        $this->assign('product',$products);

        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->getlist();
        $this->assign('productcategory',$productcategorys);

        $about=new AboutModel;
        $abouts=$about->where(['id'=>1])->find();
        $this->assign('about',$abouts);

        $newsyouhua=new NewsyouhuaModel;
        $newsyouhuas=$newsyouhua->where(['cateid'=>2])->select();
        $this->assign('newsyouhua',$newsyouhuas);


        $newsyouhua2=new NewsyouhuaModel;
        $newsyouhuas2=$newsyouhua2->where(['cateid'=>1])->select();
        $this->assign('newsyouhua2',$newsyouhuas2);

        $youhua=new YouhuaModel();
        $youhuas=$youhua->where(['id'=>1])->find();
        $this->assign('youhua',$youhuas);



        return $this->fetch();
    }




    public function productdescrib($id,$cateid){
//        halt($cateid);
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->where(['id'=>$cateid])->find();
        $this->assign('productcategory',$productcategorys);

        $product=new ProductModel;
        $products=$product->where(['id'=>$id])->find();
        $this->assign('product',$products);

        $about=new AboutModel;
        $abouts=$about->where(['id'=>1])->find();
        $this->assign('about',$abouts);

        $newsyouhua=new NewsyouhuaModel;
        $newsyouhuas=$newsyouhua->where(['cateid'=>2])->select();
        $this->assign('newsyouhua',$newsyouhuas);


        $newsyouhua2=new NewsyouhuaModel;
        $newsyouhuas2=$newsyouhua2->where(['cateid'=>1])->select();
        $this->assign('newsyouhua2',$newsyouhuas2);

        $youhua=new YouhuaModel();
        $youhuas=$youhua->where(['id'=>1])->find();
        $this->assign('youhua',$youhuas);



        return $this->fetch();
    }




    public function newskaiying(){
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->getlist();
        $this->assign('productcategory',$productcategorys);

        $about=new AboutModel;
        $abouts=$about->where(['id'=>1])->find();
        $this->assign('about',$abouts);

        $newsyouhua=new NewscateModel;
        $newsyouhuas=$newsyouhua->select();
        $this->assign('newsyouhuatitle',$newsyouhuas);

        $newsyouhua=new NewsyouhuaModel;
        $newsyouhuas=$newsyouhua->select();
        $this->assign('newsyouhuabody',$newsyouhuas);

        $newsyouhua=new NewsyouhuaModel;
        $newsyouhuas=$newsyouhua->where(['cateid'=>2])->select();
        $this->assign('newsyouhua',$newsyouhuas);


        $newsyouhua2=new NewsyouhuaModel;
        $newsyouhuas2=$newsyouhua2->where(['cateid'=>1])->select();
        $this->assign('newsyouhua2',$newsyouhuas2);

        $youhua=new YouhuaModel();
        $youhuas=$youhua->where(['id'=>1])->find();
        $this->assign('youhua',$youhuas);



        return $this->fetch();
    }



    public function contactkaiying(){
        $productcategory=new ProductcategoryModel;
        $productcategorys=$productcategory->getlist();
        $this->assign('productcategory',$productcategorys);


        $aboutyouhua=new AboutyouhuaModel;
        $aboutyouhuas=$aboutyouhua->where(['id'=>1])->find();
        $this->assign('aboutyouhua',$aboutyouhuas);


        $youhua=new YouhuaModel();
        $youhuas=$youhua->where(['id'=>1])->find();
        $this->assign('youhua',$youhuas);

        return $this->fetch();
    }
}
