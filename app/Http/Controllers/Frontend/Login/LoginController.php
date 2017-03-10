<?php
namespace App\Http\Controllers\Frontend\Login;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use Illuminate\Support\Facades\DB;                       // 引用DB类;  可以进行查询
use App\Http\Models\Login;								//引入MODEL


class LoginController extends Controller
{

		/**
		*前台登录页面
		*
		* @author  JINLONG
		* @param 
		* @return 
		*/    
         public function index(Request $request)
        {

            return view('frontend.login.login');   
        }

		/**
		*
		*前台登录
		*用户名密码登录
		*
		*/
		public function loginDO(Request $request)
		{
			//接受用户名密码信息
			$all = $request->all();
			//实例化登录M层
			$login = new Login();
			//登录验证
			$user = $login->login($all);
			//返回前台json数据
			return json_encode($user);
		}

        /**
        *前台QQ登录
        *
        * @author  ZHANGTAO
        * @param 
        * @return 
        */  
		public function qqLogin()
		{  

			//引入QQ类文件
			require_once app_path().'/class/Connect2.1/API/qqConnectAPI.php';
			$oauth = new \Oauth();
			//调用QQ登录页面
        	$oauth->qq_login();
		}


		/**
        *前台QQ绑定注册
        *
        * @author  ZHANGTAO
        * @param 
        * @return 
        */ 
		public function regist()
		{  
			return view('frontend.login.register');   
		}

		/**
        *QQ绑定+注册账号
        *
        * @author  ZHANGTAO
        * @param 
        * @return 
        */ 
		public function qqAdd(Request $request)
		{  
			$all = $request->all();
			$all['all']['password'] = md5($all['all']['password']);
			$add = new Login();
			$user = $add->qqAdd($all['all']);
			return $user;
		}

		/**
        *验证邮箱是否唯一
        *
        * @author  ZHANGTAO
        * @param 
        * @return 
        */ 
		public function onlyEmail(Request $request)
		{  
			$email = $request->input("email");	
			$email = new Login();
			$user_email = $email->onlyEmail($email);	
			return $user_email;
		}

		/**
        *绑定已有账号
        *
        * @author  ZHANGTAO
        * @param 
        * @return 
        */ 
		public function bindAccount(Request $request)
		{  
			$email = $request->input("email");	
			$password = $request->input("password");
			$openid = $request->input("qq");
			$login = new Login();	
			$binding = $login->bindAccount($email,$password,$openid);	
			return $binding;

        }


}
?>