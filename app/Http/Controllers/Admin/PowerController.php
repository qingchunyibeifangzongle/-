<?php
namespace App\Http\Controllers\Admin;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;                                                   // 引用DB类;  可以进行查询
use App\Model\Admin\Power;

class PowerController extends Controller
{

	/**
	 * 权限展示
	 */
    public function powerSelect(Request $request)
    {
        $node_name = empty($request->input('node_name'))?'':$request->input('node_name');
    	$arr = Power::powerSelect($node_name);
        return view('admin.powerSelect',['arr'=>$arr,'node_name'=>$node_name]);
    }
    public  function ajaxReturn($data,$info,$status)
    {
        $res['data'] = $data;
        $res['info'] = $info;
        $res['status'] = $status;
        exit(json_encode($res));
    }
	
    /**
     * 权限添加
     */
    public function powerAdd()
    {
    	return view("admin.powerAdd");
    }
    /**
     * 权限添加
     */
    public function powerAddPost(Request $request)
    {
    	$arr = $request->all();
    	$res = Power::powerAddPost($arr);
		if($res){
			return redirect('admin/powerSelect');
		}else{
			return redirect('admin/powerSelect');
		}
    }
	 /**
     * 删除
     */
    public function powerDel(Request $request)
    {
        $node_id = $request->input("id");
        $res = Power::powerDel($node_id);
        if($res){
            $this->ajaxReturn(null,"删除成功",1);
        }else{
            $this->ajaxReturn(null,"删除失败",0);
        }

    }
  }