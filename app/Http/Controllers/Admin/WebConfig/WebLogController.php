<?php
    namespace App\Http\Controllers\Admin\WebConfig;           //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use App\Model\Admin\WebConfig\Nav;
    use DB;
    use Log;

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
            $monolog = \Log::getMonolog();
            $data = \Log::emergency();
            var_dump($data);
        }  

    }