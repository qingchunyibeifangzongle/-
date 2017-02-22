<?php
namespace App\Http\Controllers\Admin;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询

use App\Model\Login;   

class HloginController extends Controller
{

        /**
         *登录
         *
         * @author  JINLONG
         * @param 
         * @return 
        */    
        public function Login(Request $request)
        {

               if($request->isMethod('POST'))
               { 
                        // $isEmail = filter_var($admin_name, FILTER_VALIDATE_EMAIL);  这个函数shi php自带的可以验证规则
                        // 验证用户名,laravel,orm层自带的过滤防sql注入,  
                     
                        $req          = $request->input();  
                        $login        = new login();  
                        $admin_name   = $req['admin_name'];
                        $admin_name   = isset($admin_name)       ? $admin_name      : 0 ;
                        $password     = isset($req['password'] ) ? $req['password'] : 0 ; 
                        
                        if (!empty($admin_name) && $password==0)
                        {
                                $admin_name = $login->GetOne($req);  
                                $admin_name = empty($admin_name)? 0:  1;
                                echo $admin_name;
                        }
                         
                        //验证密码, 
                        if (!empty($admin_name) && !empty($password))
                        {    
                                $password = $login->GetOne($req,0); 
                                $password = empty($password)? 0:  1;  
                                echo $password;
                                
                                if ($password)
                                {
                                        //存入seesion
                                        $password = $login->GetOne($req,0);
                                        $request->session()->put('admin_user', $password['admin_name']);
                                        $request->session()->put('last_time',  $password['last_time']);
                                        $request->session()->put('admin_id',   $password['id']);

                                        //更改数据库的最后登录时间
                                        date_default_timezone_set('PRC');
                                        $now_time = date("Y-m-d- H:i:s");
                                        $where    = array('last_time' => $password['last_time'],'now_time' => $now_time,'id' =>$password['id']);
                                        $login->Upd($where);
                                }

                        }
               }
               else
               {
                        return view('admin.login.login');
               }
        }


        /**
         *admin首页和登录页公用控制器
         * @author  JINLONG
         * @param 
         * @return 
        */
        

        //admim 首页
        public function Index(Request $request)
        {
                if ($request->session()->has('admin_user'))
                {
                        $admin_user = $request->session()->get('admin_user');
                        $last_time  = $request->session()->get('last_time');
                        return view('admin.index',['admin_user' => $admin_user,'last_time' => $last_time]);
                }
                else
                {
                        return view('admin.redirct',['message'=>'您还没有登录,请先登录','url'=>'hlogin','wait'=>2]);
                }
        } 


        //退出   
        public function Out(Request $request)
        {
                $request->session()->forget('admin_user');
                return view('admin.redirct',['message'=>'退出成功','url'=>'hlogin','wait'=>3]);
        }   


  }