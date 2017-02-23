<?php
namespace App\Http\Controllers\Frontend\Login;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询


class LoginController extends Controller
{

/**
*前台登录
*
* @author  JINLONG
* @param 
* @return 
*/    
         public function index(Request $request)
        {

                return view('frontend.login.login');
        }
}



?>