<?php
namespace App\Model\Admin\Goods;
use Illuminate\Database\Eloquent\Model;
use DB;
class GoodsType extends Model
{
    protected  $table='type';

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
     * 展示分类列表
     * @return mixed
     */
    public function getTypeList()
    {
        $sql = DB::table($this->table)->where(['is_show' => 0])->get(['type_id','type_name','type_sort','is_show','type_intro','create_time']);
        return $sql;
    }

    /**
     * 删除分类（修改字段）
     * @param $typeId
     * @return mixed
     */
    public function delType($typeId)
    {
        $sql = DB::table($this->table)->where(['type_id' => $typeId])->update(['is_show' => 1]);
        return $sql;
    }

    public function getUpList($typeId)
    {
        $sql = "select `type_id`, `type_name`, `p_id`, `is_show`, `type_intro`, `create_time`, `type_sort`,`path`, CONCAT(path,'-',type_id) AS depath from `school_type` WHERE `type_id`=$typeId GROUP BY depath ASC";
        $res = DB::select($sql);
        return $res;
    }

    /**
     * 修改分类
     * @param $typeId
     * @param array $data
     * @return mixed
     */
    public function upType($typeId,$data=array())
    {
        $sql = DB::table($this->table)->where(['type_id' => $typeId])->update($data);
        return $sql;
    }

    public function addType($data = array())
    {
        $sql = DB::table($this->table)->insert($data);
        return $sql;
    }

}
