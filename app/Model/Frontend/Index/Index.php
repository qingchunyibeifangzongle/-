<?php
namespace App\Model\Frontend\Index;
use Illuminate\Database\Eloquent\Model;
use DB;
class Index extends Model
{
    public function getSchoolName($schoolId)
    {
        $sql = DB::table('school')->where('school_name',$schoolId)->lists('school_name');
        return $sql;
    }

    /**
     * 获取商品信息
     * @param $cityId
     * @param $schoolId
     * @return mixed
     */
    public function getGoodsList($regionId = '',$schoolId = '')
    {
        if($schoolId != ''){
            $sql = DB::table('goods')->where(['goods.is_show' => 0 ,'goods_status' => 0 ,'goods.school_id' => $schoolId]) ->join('school', 'goods.school_id', '=', 'school.school_id')->get();
        }else{
            $sql = DB::table('goods')->where(['goods.is_show' => 0 ,'goods_status' => 0 , 'region_id' => $regionId]) ->join('school', 'goods.school_id', '=', 'school.school_id')->get();
        }
        return $sql;
    }
}