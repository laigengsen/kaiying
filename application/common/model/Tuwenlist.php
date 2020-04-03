<?php
namespace app\common\model;
use think\db\Where;
use think\Model;
class Tuwenlist extends Model
{
    protected function base()
    {
        
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
