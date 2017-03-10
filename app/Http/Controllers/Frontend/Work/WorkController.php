<?php

namespace App\Http\Controllers\Frontend\Work;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB;
use Illuminate\Support\Facades\Input;
use App\Model\Frontend\Work;
use Redirect;

class WorkController extends Controller
{

    // public function header()
    // {
    //     $nav = DB::table('nav')->get();
    //     return view('frontend.common.workHeader',['nav'=>$nav]);
    // }
    /**
     * 招聘首页
     */
    public function work(Request $request)
    {
        $school_id = $request->input('school_id');
        $nav = DB::table('nav')->get();
        $school = DB::table('school')->select('school_name','school_id')->get();
        $arr = Work::work($school_id);
        return view("frontend.work.work",['arr'=>$arr,'nav'=>$nav,'school'=>$school,'school_id'=>$school_id]);
    }

    /**
     * 发布招聘
     */
    public function information()
    {
        $nav = DB::table('nav')->get();
        $schools = DB::table('school')->select('school_name','school_id')->get();
        $school = DB::table('school')->get();
        return view("frontend.work.information",['school'=>$school,'schools'=>$schools,'nav'=>$nav]);
    }
    /**
     * 发布招聘
     */
    public function postInformation(Request $request)
    {
        $arr = $request->all();
        $arr['user_id'] = $request->session()->get("user_id");
        $res = Work::postInformation($arr);
        if($res == 1){
            echo "<script>alert('用户没有登录，请前去登录');location.href='{{URL('Login/login')}}'</script>";
        }else if($res == 2){
            echo "<script>alert('发布成功');location.href='work'</script>";
        }else if($res == 3){
            echo "<script>alert('发布失败');location.href='information'</script>";
        }
    }

    /**
     * 报名
     */
    public function sign($job_id ,Request $request)
    {   
        $school = DB::table('school')->select('school_name','school_id')->get();
        $nav = DB::table('nav')->get();
        $user_id = $request->session()->get("user_id");
        $res = Work::selectSign($user_id,$job_id);
        if($res == 1){
            return view("frontend.work.sign",['job_id'=>$job_id,'nav'=>$nav,'school'=>$school]);
        }else{
            return view("frontend.work.500",['error'=>'已报名，禁止重复','url'=>"../work",'color'=>'red']);
        }

    }

    /**
     * 报名
     */
    public function postSign(Request $request)
    {
        $arr = $request->all();
        $arr['user_id'] = $request->session()->get("user_id");
        $res = Work::postSign($arr);
        if($res){
            return view("frontend.work.500",['error'=>'报名成功','url'=>'work','color'=>'green']);

        }else{
            return view("frontend.work.500",['error'=>'报名失败','url'=>"work",'color'=>'red']);
        }
    }

    /**
     * 发布管理
     */
    public function guanli(Request $request)
    {
        $school = DB::table('school')->select('school_name','school_id')->get();
        $nav = DB::table('nav')->get();
        $nav = DB::table('nav')->get();
        $user_id = $request->session()->get("user_id");
        $res = Work::guanli($user_id);
        return view("frontend.work.guanli",['res'=>$res,'nav'=>$nav,'school'=>$school]);
    }

    /**
     * 删除发布信息
     */
    public function delGuanli(Request $request)
    {
        $job_id = $request->input("id");
        $res = DB::table('job')->where('job_id',$job_id)->delete();
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }
    /**
     * 查看回复的信息
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function selectInformation(Request $request)
    {
        $nav = DB::table('nav')->get();
        $user_id = $request->session()->get('user_id');
        $school = DB::table('school')->select('school_name','school_id')->get();
        $arr = Work::selectInformation($user_id);
        return view('frontend.work.selectInformation',['arr'=>$arr,'school'=>$school,'nav'=>$nav]);     
    }
}