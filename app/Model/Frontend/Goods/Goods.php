<?php
namespace App\Model\Frontend\Goods;

use Illuminate\Database\Eloquent\Model;
use DB;
class Goods extends Model
{
    public function getAllGoodsList($userId,$goodsId)
    {
        $sql = DB::table('goods')->where(['goods.is_show' => 0,'goods_status' => 0 ,'goods.user_id' => $userId ,'goods_id' => $goodsId])->join('school', 'goods.school_id', '=', 'school.school_id')->join('user', 'goods.user_id', '=', 'user.user_id')->get();
        return $sql;
    }

    /**
     * 获取顶级分类
     * @return mixed
     */
    public function getParentType()
    {
        $sql = DB::table('type')->where('p_id',0)->get(['type_name','type_id']);
        return $sql;
    }

    /**
     * 获取分类名
     * @return mixed
     */
    public function getType($typeId)
    {
        $sql = DB::table('type')->where('p_id',$typeId)->get(['type_id','type_name']);
        return $sql;
    }

    /**
     * 获取学校名字
     * @return mixed
     */
    public function getSchool()
    {
        $sql = DB::table('school')->where(['is_show' => 0 , 'school_status' => 0])->get(['school_id','school_name']);
        return $sql;
    }

    /**
     * 商品添加
     * @param array $data
     * @return mixed
     */
    public function goodsAdd($data = array())
    {
        $sql = DB::table('goods')->insert($data);
        return $sql;
    }

    public function getGoodsInfo()
    {
        $sql = DB::table('goods')->where(['goods.is_show' => 0 ,'goods_status' => 0])->join('school', 'goods.school_id', '=', 'school.school_id')->orderBy('create_time', 'desc')->limit(4)->get();
        return $sql;
    }

}