<?php
    namespace App\Http\Controllers\Admin\WebConfig;           //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use DB;

    class WebLogController extends Controller
    {

        /**
         *-----------------------------------------------
         * 展示网站操作日志
         *-----------------------------------------------
         * @param
         * @return
         */
        public function  index()
        {   
            var_dump($_SERVER);die;
            $params = [111,22]; 
            $sql = "select * from `school_nav` where (`name` = ? and `age`= ?) order by `sort` desc";
            $sql = str_replace("?", "'%s'", $sql);
            array_unshift($params, $sql);
            // var_dump($params);die;
            $sql = call_user_func_array('sprintf', $params);
            echo $sql ;die;


            $number = 2;
            $str = "Shanghai";
            $txt = sprintf("There are %u million cars in %s.",$number,$str);
            echo $txt;

        }  

    }