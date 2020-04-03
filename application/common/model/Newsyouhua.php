<?php
namespace app\common\model;
use think\db\Where;
use think\Model;
class Newsyouhua extends Model
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
        return $this->order($order)
            ->select();
    }
    //添加主页导航的信息
    public function savelist($data=[])
    {
        $result=$this->allowField(true)->save($data);
        if($result){
            return $this->getData('id');
        }else{
            return false;
        }
    }

}
