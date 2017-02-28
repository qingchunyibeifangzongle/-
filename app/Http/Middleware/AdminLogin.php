<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Route;
use DB;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        return $next($request);
        header("content-type:text/html;charset=utf-8");
        if (!$request->session()->has('username')) {
            $admin_id = $request->session()->get('admin_id');
            if (!isset($admin_id)) {
                echo "<script>alert('请先登录！');location.href='login'</script>";die;
            }
        }else{
            $route = $request->path();
            $count = substr_count($route,'/');
            if($count > 1){
                $route = substr($route,0,strrpos($route,'/'));
            }
            $admin_id = $request->session()->get('admin_id');
            $arr = DB::table('ad_admin')
                ->leftJoin('ad_adminRule', 'ad_admin.admin_id', '=', 'ad_adminRule.admin_id')
                ->leftJoin('ad_rule', 'ad_rule.rule_id', '=', 'ad_adminRule.rule_id')
                ->leftJoin('ad_ruleNode', 'ad_ruleNode.rule_id', '=', 'ad_adminRule.rule_id')
                ->leftJoin('ad_node', 'ad_node.node_id', '=', 'ad_ruleNode.node_id')
                ->select('ad_node.node_id','node_name','node_route')
                ->where('ad_admin.admin_id',$admin_id)
                ->get();
            $ar = [];
            foreach($arr as $k=>$v){
                $ar[]=$v['node_route'];
            }
//            print_r($ar);die;
//            print_r($route);die;
            if(!in_array($route,$ar)){
                echo "<script>alert('对不起没有权限 ，请联系管理员');history.go(-1)</script>";
            }
                return $next($request);
        }
    }

}
