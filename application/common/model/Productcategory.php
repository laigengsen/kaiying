<?php
namespace app\common\model;
use think\db\Where;
use think\Model;
class Productcategory extends Model
{
    protected function base()
    {
        
    }



//获取列表
    public function getlist()
    {
        $order=[
            'id'=>'desc',
        ];
        $where=[
          'status'=>1,
        ];
        return $this->order($order)
            ->select();
    }

    //添加产品的分类
    public function savelist($data=[])
    {                 //allowField(为过滤数据
        $result=$this->allowField(true)->save($data);
        if($result){
            return $this->getData('id');
        }else{
            return false;
        }
    }

}
