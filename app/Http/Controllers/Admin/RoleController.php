<?php
namespace App\Http\Controllers\Admin;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询

use App\Model\Admin\Role;

class RoleController extends Controller
{
    public  function ajaxReturn($data,$info,$status)
    {
        $res['data'] = $data;
        $res['info'] = $info;
        $res['status'] = $status;
        exit(json_encode($res));
    }
	/**
	 * 角色展示
	 */
    public function roleSelect(Request $request)
    {
        $rule_name = empty($request->input('rule_name'))?'':$request->input('rule_name');
    	$arr = Role::roleSelect($rule_name);
        return view('admin.roleSelect',['arr'=>$arr,'rule_name'=>$rule_name]);
    }
    /**
     * 角色添加
     */
    public function roleAdd()
    {
    	return view("admin.roleAdd");
    }
    /**
     * 角色添加
     */
    public function roleAddPost(Request $request)
    {
    	$arr = $request->all();
    	$res = Role::roleAddPost($arr);
		if($res){
			return redirect('admin/roleSelect');
		}else{
			return redirect('admin/roleSelect');
		}
    }
	 /**
     * 删除
     */
    public function roleDel(Request $request)
    {
        $rule_id = $request->input("id");
        $res = Role::roleDel($rule_id);
        if($res){
            $this->ajaxReturn(null,"删除成功",1);
        }else{
            $this->ajaxReturn(null,"删除失败",0);
        }

    }
    /**
     * @param $rule_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @param role 和  rolePower的展示
     */
    public function rolePowerSelect($rule_id)
    {
        $res = Role::powerSelect();
        $arr = Role::rolePowerSelect($rule_id);
        if($arr == Array()){
            $y = "";
            //return view("admin.userRoleSelect",['res'=>$res]);
        }else{
            foreach ($res as $key => $value) {
            $re[$key] = $value['node_name'];
            }
            foreach ($arr as $key => $value) {
                $ar[$key] = $value['node_name'];
            }
            //交集
            $y['1']=array_intersect($re,$ar);
            //差集
            $y['0']=array_diff($re,$ar);
        } 
        // print_r($y);die; 
        return view("admin.rolePowerSelect",['y'=>$y,'res'=>$res,'rule_id'=>$rule_id]);
    }
    /**
     * 修改用户的角色
     */
    public function addRolePowerSelect(request $request)
    {
        $node_name = $request->input('param');
        $rule_id = $request->input('id');
        $res = Role::addRolePowerSelect($node_name,$rule_id);
        if($res){
            $this->ajaxReturn(null,"保存成功",1);
        }else{
            $this->ajaxReturn(null,"保存失败",0);
        }
    }
}