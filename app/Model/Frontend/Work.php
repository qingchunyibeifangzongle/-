<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Http\Requests\Request;

class Work extends Model
{
    public static function work($school_id)
    {
        if(isset($school_id)){
            return DB::table('job')
                    ->leftJoin('user', 'user.user_id', '=', 'job.user_id')
                    ->leftJoin('school', 'school.school_id', '=', 'job.school_id')
                    ->orderBy("job_id","desc")
                    ->where('school.school_id',$school_id)
                    ->paginate(5);
        }else{
            return DB::table('job')
                    ->leftJoin('user', 'user.user_id', '=', 'job.user_id')
                    ->leftJoin('school', 'school.school_id', '=', 'job.school_id')
                    ->orderBy("job_id","desc")
                    ->paginate(5);  
        }
    }
    /**
     * @param $arr 发布招聘
     */
    public static function postInformation($arr)
    {
        if($arr['user_id'] == ""){
            return 1;
        }
        $n_file = $arr['myfile'];
        if($n_file->isValid()){
            $entension = $n_file -> getClientOriginalExtension();
            $newName = rand(10000000,999999999).'.'.$entension;
            $path = $n_file -> move('./frontend/uploads',$newName);
            $path = str_replace('\\','/',$path);
            $arr['job_img'] = './uploads/'.$newName;
            //print_r($arr);die;
        }
        $arr['job_time'] = time();
        $arr['user_id'] =1;
        unset($arr['_token']);
        unset($arr['myfile']);
        $res = DB::table('job')->insert($arr);
        if($res){
            return 2;
        }else{
            return 3;
        }
    }

    /**
     * 判断是否报名
     */
    public static  function selectSign($user_id,$job_id){
        $jobs = DB::table('sign')->where(['user_id'=>$user_id,'job_id'=>$job_id])->first();
        if($jobs == ""){
            return '1';
        }else{
            return '已报名，禁止重复';
        }
    }
    /**
     * 报名添加
     */
    public static function postSign($arr)
    {
        unset($arr['_token']);
        return DB::table('sign')->insert($arr);
    }
    /**
     * 管理页面
     */
    public static function guanli($user_id)
    {
         return DB::table('job')->where('user_id',$user_id)->paginate(15);
    }
    public static function selectInformation($user_id)
    {
        $res = DB::table('job')
                    ->leftJoin('user', 'user.user_id', '=', 'job.user_id')
                    //->leftJoin('sign', 'job.job_id', '=', 'sign.job_id')
                    ->select('job.job_id','job_name','job_time','job_describe','job_salary','number')
                    ->where('job.user_id',$user_id)
                    ->get();
                    $count = count($res);
                    for($i=0;$i<$count;$i++) {
                        $res[$i]['sign'] = DB::table('sign')
                                                ->where('job_id',$res[$i]['job_id'])
                                                ->select('sign_tel','sign_name')
                                                ->get();
                    }
        return $res;

    }
}