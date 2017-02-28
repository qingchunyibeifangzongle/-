<?php
namespace App\Http\Controllers\Admin;                     //使用命名空间申明是本类
use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询
use App\Model\Admin\User;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    public  function ajaxReturn($data,$info,$status)
    {
        $res['data'] = $data;
        $res['info'] = $info;
        $res['status'] = $status;
        exit(json_encode($res));
    }
    //admim 首页
    public function userSelect(request $request)
    {
        $username = empty($request->input('username'))?'':$request->input('username');
        $arr = User::userSelect($username);
        return view('admin.userSelect',["arr"=>$arr,'username'=>$username]);
    }

    /**
     * 添加
     */
    public function userAdd()
    {
        return view("admin.userAdd");
    }
    /**
     * 添加
     */
    public function userAddPost(request $request)
    {
        $data = $request->all();
        $res = User::userAddPost($data);
        if($res){
            return redirect('admin/userSelect')->with('status', 'Update Success! 成功！ :)');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
    /**
     * 删除
     */
    public function userDel(request $request)
    {
        $admin_id = $request->input("id");
        $res = User::userDel($admin_id);
        if($res){
            $this->ajaxReturn(null,"删除成功",1);
        }else{
            $this->ajaxReturn(null,"删除失败",0);
        }

    }

    /**
     * @param $admin_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @param user 和  userRole的展示
     */
    public function userRoleSelect($admin_id)
    {
        $res = User::roleSelect();
        $arr = User::userRoleSelect($admin_id);
        if($arr == Array()){
            $y = "";
            //return view("admin.userRoleSelect",['res'=>$res]);
        }else{
            foreach ($res as $key => $value) {
            $re[$key] = $value['rule_name'];
            }
            foreach ($arr as $key => $value) {
                $ar[$key] = $value['rule_name'];
            }
            //交集
            $y['1']=array_intersect($re,$ar);
            //差集
            $y['0']=array_diff($re,$ar);
        } 
        // print_r($y);die; 
        return view("admin.userRoleSelect",['y'=>$y,'res'=>$res,'admin_id'=>$admin_id]);
    }
    /**
     * 修改用户的角色
     */
    public function addUserRoleSelect(request $request)
    {
        $rule_name = $request->input('param');
        $admin_id = $request->input('id');
        $res = User::addUserRoleSelect($rule_name,$admin_id);
        if($res){
            $this->ajaxReturn(null,"保存成功",1);
        }else{
            $this->ajaxReturn(null,"保存失败",0);
        }
    }

    /**
     * @param $admin_id
     * @return 修改
     */
    public function userUpdate($admin_id)
    {
        $arr = User::userUpdate($admin_id);
        return view("admin.userUpdate",['arr'=>$arr]);
    }

    /**
     * @param Request $request 修改
     */
    public function userUpdatePost(request $request)
    {
        $res = $request->all();
        $arr = User::userUpdatePost($res);
        if($arr){
            return Redirect::to('admin/userSelect');
        }else{
            return Redirect::to('admin/userSelect');
        }
    }
}

