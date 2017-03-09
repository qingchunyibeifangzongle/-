<?php
namespace App\Model\Frontend\Index;
use Illuminate\Database\Eloquent\Model;
use DB;
class Index extends Model
{
    public function getGoodsList()
    {
        $sql = DB::table('goods')->where(['goods.is_show' => 0 ,'goods_status' => 0])->join('school', 'goods.school_id', '=', 'school.school_id')->get();
        return $sql;
    }
}