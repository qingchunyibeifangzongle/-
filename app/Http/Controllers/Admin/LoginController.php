<?php
namespace App\Http\Controllers\Admin;                     //使用命名空间申明是本类

use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询

use App\Model\Admin\Role;
use App\Model\Admin\Login;
use Redirect;

class LoginController extends Controller
{	
	/**
	 * 登录首页
	 */
	public function login()
	{
		return view("admin.login");
	}

    /**
     * @param Request $request登录
     */
	public function postLogin(request $request)
	{
		$username = $request->input("username");
		$password = md5($request->input("password"));
		$arr = Login::login($username,$password,$request);
		if($arr == 0){
		    echo '<script>alert("账号或者密码错误");location.href="login"</script>';
		}else if($arr == 1){
            return Redirect::to('admin/index');
		}
	}

    /**
     * 退出
     */
	public function loginout(request $request)
    {
        $request->session()->flush();
        return Redirect::to('admin/login');
    }
}