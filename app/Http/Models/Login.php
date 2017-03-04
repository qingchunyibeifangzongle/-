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
		$password = md5($data['login_password']);
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
			//修改登录时间，登录IP
			$this->loginMessage($res['user_id']);
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
			$code = 1;
		}else{
			//存在，判断是否绑定网站账号
			if (empty($user['user_email']) || empty($user['password'])) {
				$code = 1;
			}else{
				//已绑定账号,在session里存储用户ID
				session(["user_id"=>$user['user_id']]);
				$this->loginMessage($user['user_id']);
				$code = 2;
			}
		}
		return $code;
	}

	/**
	 * 绑定网站号
	 */
	public function bindAccount($email,$password,$openid)
	{
		//查询该邮箱是否已经绑定,没有就绑定，有，就返回提示信息
		$user_email = DB::table($this->table)
								->where("user_email","=",$email)
								->first();
		if ($user_email) {
			//如果邮箱正确并且密码也正确;
			if ($user_email['password']==md5($password)) {
				if ($user_email['qq']) {
					//该邮箱已经绑定了QQ
					return 2;
				}else{
					$binding = DB::table($this->table)
									->where("user_id","=",$user_email['user_id'])
									->update(['qq'=>$openid]);
					//绑定成功,存储sessionID
					session(['user_id'=>$user_email['user_id']]);
					$this->loginMessage($user_email['user_id']);
					return 0;
				}
			}else{
				//邮箱正确，但是密码不正确
				return 10;
			}
			
		}else{
			//该邮箱不存在
			return 1;
		}
	}

	/**
	 * QQ绑定注册用户+注册用户
	 */
	public function qqAdd($data)
	{
		//注册
		$user = DB::table("user")->insertGetId($data);
		if ($user) {
			//注册绑定成功
			session(['user_id'=>$user]);
			//修改注册信息
			$this->createMessage($user);
			return 1;
		}else{
			//绑定失败
			return 2;
		}
	}

	/**
	 * 验证邮箱是否唯一
	 */
	public function onlyEmail($email)
	{
		$user_email = DB::table("user")->where("user_email","=",$email)->first();
		if ($user_email) {
			//存在
			return 1;
		}else{
			//不存在
			return 2;
		   
		}
	}


	/**
	 * 修改登录信息
	 * 需要接受用户ID
	 */
	public function loginMessage($user_id)
	{
		//需要修改登录时间,登录IP;
		//当前时间
		$now_time = time();
		//当前IP
		$now_ip = $_SERVER["REMOTE_ADDR"];
		$date = [
				  'last_login_time'=>$now_time,
				  'last_login_ip'=>$now_ip
				];
		$save = DB::table($this->table)
							->where("user_id","=",$user_id)
							->update($date);
	}

	/**
	 * 注册用户添加注册时间和注册IP
	 * 接受用户ID
	 */
	public function createMessage($user_id)
	{
		//当前时间
		$now_time = time();
		//当前IP
		$now_ip = $_SERVER["REMOTE_ADDR"];
		$date = [
				  'create_time'=>$now_time,
				  'register_ip'=>$now_ip,
				  'last_login_time'=>$now_time,
				  'last_login_ip'=>$now_ip
				];
		$save = DB::table($this->table)
							->where("user_id","=",$user_id)
							->update($date);
	}
}