<?php
namespace App\Http\Controllers\Frontend\Login;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use Illuminate\Support\Facades\DB;                       // 引用DB类;  可以进行查询
use App\Http\Models\Login;


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
			$all=$request->all();
			//实例化登录M层
			$login=new Login();
			//登录验证
			$user=$login->login($all);
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

	
}
?>