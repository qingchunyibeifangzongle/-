<?php
namespace App\Model\Front\School;
use Illuminate\Database\Eloquent\Model;
use DB;
class School extends Model
{
    /**
     * 获取省
     * @return mixed
     */
    public function getProvince()
    {
        $sql = DB::table('region')->where('region_type','1')->get(['region_name','region_id']);
        return $sql;
    }

    /**
     * 获得地区名字
     * @param $regionType
     * @return mixed
     */
    public function getRegionName($regionType)
    {
        $sql = DB::table('region')->where('parent_id',$regionType)->get(['region_name','region_id']);
        return $sql;
    }

    /**
     * 添加学校
     * @param array $data
     * @return mixed
     */
    public function addSchool($data=array())
    {
        $sql = DB::table('school')->insert($data);
        return $sql;
    }

    public function getSchoolName($schoolName)
    {
        $sql = DB::table('school')->where('school_name',$schoolName)->get();
        return $sql;
    }

}