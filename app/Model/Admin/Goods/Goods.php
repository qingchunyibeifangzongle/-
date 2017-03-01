<?php
namespace App\Model\Admin\Goods;
use Illuminate\Database\Eloquent\Model;
use DB;
class Goods extends Model
{
    protected  $table='goods';

    /**
     * 获取商品列表
     * @return mixed
     */
    public function getGoodsList()
    {
        return DB::table($this->table)->leftJoin('type', 'goods.type_id', '=', 'type.type_id')->where(['goods.is_show' => 0])->get();
    }

    /**
     * 商品添加
     * @param $data
     * @return mixed
     */
    public function goodsAdd($data)
    {
        $sql = DB::table($this->table)->insert($data);
        return $sql;
    }

    /**
     * 商品删除
     * @param $goodsId
     * @param $data
     * @return mixed
     */
    public  function goodsDel($goodsId)
    {
        $sql = DB::table($this->table)->where(['goods_id' => $goodsId])->update(['is_show' => 1]);
        return $sql;
    }

    /**
     * 获取分类信息
     * @return mixed
     */
    public function getTypeTree()
    {
        $sql = "select `type_id`, `type_name`, `path`, CONCAT(path,'-',type_id) AS depath from `school_type` GROUP BY depath ASC";
        $res = DB::select($sql);
        return $res;
    }

    /**
     * 获取单条商品
     * @param $goodsId
     * @return mixed
     */
    public function getOneList($goodsId)
    {
        return DB::table($this->table)->leftJoin('type', 'goods.type_id', '=', 'type.type_id')->where(['goods.is_show' => 0,'goods_id' => $goodsId])->get();
    }



}
