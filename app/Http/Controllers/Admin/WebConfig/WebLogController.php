<?php
    namespace App\Http\Controllers\Admin\WebConfig;           //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use DB;

    use Log;
    use App\User;
    use App\Http\Controllers\Controller;

    class WebLogController extends Controller
    {

        /**
         *-----------------------------------------------
         * 展示网站操作日志
         *-----------------------------------------------
         * @param
         * @return
         */
        public function  index($id=1)
        { 
            Log::info('Showing user profile for user: '.$id);
            return view('user.profile', ['user' => User::findOrFail($id)]);
        }  

    }