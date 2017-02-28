<?php
namespace App\Http\Controllers\Frontend;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询

use App\Model\Login;   

class IndexController extends Controller
{

/**
*前台首页
*
* @author  JINLONG
* @param 
* @return 
*/    
         public function index(Request $request)
        {

                return view('frontend.index');
        }
}



?>