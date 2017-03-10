<?php
    namespace App\Http\Controllers\Admin\WebConfig;           //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use App\Model\Admin\WebConfig\Log;
    use App\Libs\Page;
    class WebLogController extends Controller
    {
        public $page_size = 2;  //每页显示多少
        public $num       = 2;  //默认当前页前后显示多少个数字页
        /**
         *-----------------------------------------------
         * 展示网站操作日志
         *-----------------------------------------------
         * @param
         * @return
         */
        public function  index(Request $request)
        {    

            //获取每页显示的条数
            $page_size = $request->input("page_size");

            if(!empty($page_size))
            {
                $this->page_size=$request->input("page_size");
            } 

            //获取当前页数据
            $page = !empty($request->input("page")) ? $request->input("page") : 1 ;

            //查询表中所有的新闻
            $count = Log::count();  //获取数据总条数

            //配置数据分页信息
            $config["count"]     = $count ;           //总共有多少条数据
            $config["page_size"] = $this->page_size;  //每页显示多少条
            $config["now_page"]  = $page; //当前页
            $config["num"]       = 1;     //数字也显示
            $config["url"]       = "../admin/WebLog?";   //跳转链接地址
            $page = new Page($config);
            $page = $page ->create_page();

            //计算偏移量
            $offest = ($page-1) * $this->page_size; 
            //拼接查询条件
            $data = Log::skip($offest)
                        ->take($this->page_size)
                        ->get();
                        
            
            return view("admin.webconfig.log",compact("page","data"));
        }


    }//类结束符
