<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request; 
use App\Http\Requests; 
use DB;    
class IllegalLogin
{
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @param  string|null  $guard
         * @return mixed
         */
        public function handle($request, Closure $next)
        {

            if ($request->session()->has('admin_user')==false)
            {    
                    return view('admin.redirct',['message'=>'亲!您还没有登录','url'=>'hlogin','wait'=>3]);
            }
            else
            {
                    $admin_id         = $request->session()->get('admin_id');
                    $admin_role_id    = DB::table('admin')->where('id','=', $admin_id)->where('admin_role_is_del','=',0)->value('admin_role_id');
                    $admin_role_node  = DB::table('admin_role')->select('admin_role_node')->whereIn('role_id', explode(',',$admin_role_id))->where('is_del','=',0)->get();
               
                    
                    //查询角色
                    $node_id = '';
                    foreach ($admin_role_node as  $value)
                    {
                            $node_id.=$value->admin_role_node.',';
                    }
                    $node_controller  = DB::table('admin_role_power')->select('node_controller')->whereIn('node_id', explode(',',$node_id))->get();

                    
                    //查询角色权限
                    $arr=[];
                    foreach ($node_controller as  $val)
                    {
                            $arr[] = $val->node_controller;
                    }
                  

                    //判断权限
                    $urlcontroller = $request->path();
                    if (in_array($urlcontroller,$arr))
                    {
                            //接着往下执行
                            return $next($request);
                    }
                    else
                    {       return $next($request);
                            return view('admin.redirct',['message'=>'您没有权限,请联系管理员','url'=>'index','wait'=>3]);
                    }
            }
                  
        }
}
