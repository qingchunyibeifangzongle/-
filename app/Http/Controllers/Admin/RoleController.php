<?php
namespace App\Http\Controllers\Admin;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询

use App\Model\Login;   

class RoleController extends Controller
{

        //admim 首页
        public function roleSelect()
        {
            echo 1;
            die;
//            print_r($request->path());die;
            return view('admin.index');
        }
  }