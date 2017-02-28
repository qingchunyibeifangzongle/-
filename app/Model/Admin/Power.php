<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Power extends Model
{
	/**
	 * 角色查询
	 */
	public static function powerSelect($node_name)
	{
        return DB::table("ad_node")
                    ->where("node_name",'like','%'.$node_name.'%')
                    ->paginate(3);
	}
	/**
	 * 角色添加
	 */
	public static function powerAddPost($arr)
	{
		unset($arr['_token']);
		return DB::table("ad_node")->insert($arr);
	}
	/**
     * @param $node_id
     * @return 删除
     */
    public static function powerDel($node_id)
    {
       return DB::table("ad_node")->where('node_id',$node_id)->delete();
    }
}