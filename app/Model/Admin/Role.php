<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Role extends Model
{
	/**
	 * 角色查询
	 */
	public static function roleSelect($rule_name)
	{
		return DB::table("ad_rule")
                    ->where("rule_name",'like','%'.$rule_name.'%')
                    ->paginate(1);
	}

    /**
     * @return 权限查询
     */
	public static function powerSelect()
    {
        return DB::table('ad_node')->get();
    }
	/**
	 * 角色添加
	 */
	public static function roleAddPost($arr)
	{
		unset($arr['_token']);
		return DB::table("ad_rule")->insert($arr);
	}
	/**
     * @param $rule_id
     * @return 删除
     */
    public static function roleDel($rule_id)
    {
       return DB::table("ad_rule")->where('rule_id',$rule_id)->delete();
    }
     /**
     * 角色表，权限表，角色和权限的派生表联查
     */
    public static function rolePowerSelect($rule_id)
    {
        return DB::table('ad_rule')
                    ->join('ad_ruleNode', 'ad_rule.rule_id', '=', 'ad_ruleNode.rule_id')
                    ->join('ad_node', 'ad_ruleNode.node_id', '=', 'ad_node.node_id')
                    ->where('ad_rule.rule_id',$rule_id)
                    ->select('node_name')
                    ->get();
    }
    /**
     *  用户角色的修改
     */
    public static function addRolePowerSelect($node_name,$rule_id)
    {
        $count = count($node_name);
        $rule = [];
        for($i = 0;$i < $count;$i ++){
            $arr = DB::table('ad_node')->where('node_name',$node_name[$i])->first();
            $rule[$i] = $arr['node_id'];
        }
        // print_r($rule);die;
        $re = DB::table("ad_ruleNode")->where('rule_id',$rule_id)->get();
        if($re == Array()){
            for($i=0;$i<$count;$i++) {
                $ar = DB::select("insert into `school_ad_ruleNode` (rule_id,node_id) values ('$rule_id','$rule[$i]')");
            }
           if($ar){
                return 1;
           }else{
                return 0;
           }
        }else{
            $arr = DB::table("ad_ruleNode")->where('rule_id',$rule_id)->delete();
            if($arr){
                for($i=0;$i<$count;$i++){
                    $ar = DB::insert("insert into `school_ad_ruleNode` (rule_id,node_id) values ('$rule_id','$rule[$i]')");
                }
                if($ar){
                    return 1;
                }else{
                    return 0;
                }
            }else{
                return 0;
            }
        }
    }
}