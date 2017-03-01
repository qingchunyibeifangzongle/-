<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Login extends Model
{
	/**
	 * 登录验证
	 */
	public static function login($username,$password,$request)
	{
		$arr = DB::table("ad_admin")->where("username",$username)->first();
		if($arr == ""){
			return 0;
		}else{
			if($arr['password'] == $password){
			    if($arr['is_lock'] == 0){
                    $data['login_ip'] = $_SERVER['REMOTE_ADDR'];
                    $data['login_time'] = time();
                    DB::table("ad_admin")->where('username',$username)->update($data);
                    $a = DB::table("ad_admin")->where('username',$username)->get();
                    $request->session()->put('username',$username);
                    $request->session()->put('admin_id',$arr['admin_id']);
                    $request->session()->put('login_time',$a[0]['login_time']);
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