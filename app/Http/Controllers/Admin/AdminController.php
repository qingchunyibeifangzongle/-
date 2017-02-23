<?php
namespace App\Http\Controllers\Admin;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询

use App\Model\Login;   

class AdminController extends Controller
{

        //admim 首页
        public function index(Request $request)
        {
               return view('admin.index');
        }
        public function indexV1()
        {
               return view('admin.indexV1');
        } 


        //退出
        public function Out(Request $request)
        {
                $request->session()->forget('admin_user');
                return view('admin.redirct',['message'=>'退出成功','url'=>'hlogin','wait'=>3]);
        }   


  }