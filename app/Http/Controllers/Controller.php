<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        DB::enableQueryLog();
    }

    /**
     *-----------------------------------------------
     * 将用户操作写入表中
     *-----------------------------------------------
     * @param
     * @return
     */
    public function __destruct()
    {      
        $this->getLog();
    }

    /**
     *-----------------------------------------------
     * 获取用户操作信息并且添加
     *-----------------------------------------------
     * @param
     * @return
     */
    public function getLog()
    {
        $data = DB::getQueryLog();
        if(empty($data)){
           return ;
        }
        $sql = $data[0]['query'];
        $params =  $data[0]['bindings'];

        $sql = str_replace("?", "'%s'", $sql);
        array_unshift($params, $sql);

        $sql = call_user_func_array('sprintf', $params);  //获取当前的sql 语句
        $log['sql'] = $sql ;
        $log['time'] = time() ;
        $log['uid'] = 1 ;
        $log['ip'] = $_SERVER['REMOTE_ADDR'];

        DB::table('log')->insert($log);
    }
}
