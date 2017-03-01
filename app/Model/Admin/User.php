<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    /**
     * @return 展示
     */
    public  static  function userSelect($username)
    {
        return DB::table("ad_admin")
            ->where("username",'like','%'.$username.'%')
            ->paginate(5);
    }

    /**
     * @param $data
     * @return 用户添加
     */
    public static function userAddPost($data)
    {
        unset($data['_token']);
        $data['login_time'] = time();
        $data['password'] = md5($data['password']);
        $data['create_time'] = strtotime($data['create_time']);
        $data['login_ip'] = $_SERVER['REMOTE_ADDR'];
        return DB::table("ad_admin")->insert($data);
    }

    /**
     * 角色查询
     */
    public static function  roleSelect()
    {
        return DB::table('ad_rule')->get();
    }

    /**
     * @param $admin_id
     * @return 删除
     */
    public static function userDel($admin_id)
    {
       return DB::table("ad_admin")->where('admin_id',$admin_id)->delete();
    }
    /**
     * 用户表，角色表，用户和角色的派生表联查
     */
    public static function userRoleSelect($admin_id)
    {
        return DB::table('ad_admin')
                    ->join('ad_adminRule', 'ad_admin.admin_id', '=', 'ad_adminRule.admin_id')
                    ->join('ad_rule', 'ad_adminRule.rule_id', '=', 'ad_rule.rule_id')
                    ->where('ad_adminRule.admin_id',$admin_id)
                    ->select('rule_name')
                    ->get();
    }
    /**
     *  用户角色的修改
     */
    public static function addUserRoleSelect($rule_name,$admin_id)
    {
        $count = count($rule_name);
        $rule = [];
        for($i = 0;$i < $count;$i ++){
            $arr = DB::table('ad_rule')->where('rule_name',$rule_name[$i])->first();
            $rule[$i] = $arr['rule_id'];
        }
        $re = DB::table("ad_adminRule")->where('admin_id',$admin_id)->get();
        if($re == Array()){
            for($i=0;$i<$count;$i++) {
                $ar = DB::select("insert into `school_ad_adminRule` (admin_id,rule_id) values ('$admin_id','$rule[$i]')");
            }
           if($ar){
                return 1;
           }else{
                return 0;
           }
        }else{
            $arr = DB::table("ad_adminRule")->where('admin_id',$admin_id)->delete();
            if($arr){
                for($i=0;$i<$count;$i++){
                    $ar = DB::insert("insert into `school_ad_adminRule` (admin_id,rule_id) values ('$admin_id','$rule[$i]')");
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
    public static  function  userUpdate($admin_id)
    {
        return DB::table("ad_admin")->where('admin_id',$admin_id)->first();
    }
    public static function userUpdatePost($res)
    {
        unset($res['_token']);
        $res['create_time'] = strtotime($res['create_time']);
        return DB::table("ad_admin")->where('admin_id',$res['admin_id'])->update($res);
    }
}
