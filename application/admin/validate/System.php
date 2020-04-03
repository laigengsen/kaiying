<?php
namespace app\admin\validate;

use think\Validate;

class System extends Validate{
    protected $rule=[
        'name'=>'require|max:25',
        'order'=>'require',
    ];
    protected $message  =   [
        'name.require' => '名称必须',
        'order.require'=>'排序不能为空',
        'name.max'     => '名称最多不能超过25个字符',
        'age.number'   => '年龄必须是数字',
        'age.between'  => '年龄只能在1-120之间',
        'email'        => '邮箱格式错误',
    ];
    protected $scene = [
        'edit'  =>  ['name','order'],
        'add'  =>  ['name','order'],
        'savecategoryattribute'  =>  ['name'],
        'infoedit'  =>  ['name'],
    ];
}