<?php
namespace App\Model\Front\Goods;

use Illuminate\Database\Eloquent\Model;
use DB;
class Goods extends Model
{
    public function getAllGoodsList()
    {
        $sql = DB::table('goods')->where(['is_show' => 0,'goods_status' => 0])->get();
        return $sql;
    }
}