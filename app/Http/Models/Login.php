<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;
use DB;

class Login extends Model
{
	protected  $table='user';               //表名

	/**
	 * 登录
	 * $data=需要验证的数据
	 */
	public function login($data)
	{
		$email = $data['login_email'];
		$password = $data['login_password'];
		$res = DB::table($this->table)
					->select('user_id')
					->where("user_email","=",$email)
					->where("password","=",$password)
					->first();
		if (empty($res)) {
			$msg['code']=0;
			$msg['msg']="用户名密码错误";
		}else{
			//登录成功,存储用户ID
			session(['user_id'=>$res['user_id']]);
			$msg['code']=1;
			$msg['msg']="登录成功";
		}
		return $msg;
	}

	/**
	 *查询改QQ是否绑定账号
	 *接受参数openid
	 */
	public function qqLogin($openid)
	{
		//查询该openid是否存在
		$user = DB::table($this->table)
						->where("qq","=",$openid)
						->first();
		//不存在，添加openid,返回1，跳转绑定网站账号页
		if(empty($user)) {
			$qq = DB::table($this->table)
						 ->insert(['qq'=>$openid]);
			$code = 1;
		}else{
			//存在，判断是否绑定网站账号
			if (empty($user['user_email']) || empty($user['password'])) {
				$code = 1;
			}else{
				//已绑定账号,在session里存储用户ID
				
				$code = 2;
			}
		}
		return $code;
	}
}