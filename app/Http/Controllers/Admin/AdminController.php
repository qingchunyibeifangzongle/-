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

            $login_time = $request->session()->get('login_time');
            $nowtime = time();
            $timediff = $nowtime-$login_time;
            //计算小时数
            $remain = $timediff%86400;
            //计算分钟数
            $remain = $remain%3600;
            $mins = intval($remain/60);
            return view('admin.index',['mins'=>$mins]);
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