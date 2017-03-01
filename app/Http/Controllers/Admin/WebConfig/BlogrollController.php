<?php
    namespace App\Http\Controllers\Admin\WebConfig;           //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use DB;   
    use App\Model\Admin\WebConfig\Blogroll;
    use App\Libs\Page;

     class BlogrollController extends Controller
     {
        public $page_size = 2;  //每页显示多少
        public $num       = 2;  //默认当前页前后显示多少个数字页

        /**
         *-----------------------------------------------
         *  友情链接添加页面
         *-----------------------------------------------
         * @param
         * @return
         */
        public function index(Request $request)
        {   
            if($request->isMethod('get')){
                return view('admin.webconfig.blogroll');
            }else{
                $msg = ["status"=>1,"msg"=>""]; 

                $data = $request -> input();
                // 请求数据验证
                $this->validate($request, [
                    'name' => 'required',
                    'url' => 'required|url',
                    'sort' => 'required|numeric',
                ]);

                //数据入库

                $data = $request->input();
                unset($data['_token']);
                $obj = new Blogroll;
                if ( $id = $obj ->insertGetId($data) ){
                    $msg["msg"] = $data;
                }
                echo json_encode($msg);
            }
        }//添加友情链接结束

 
        /**
         *-----------------------------------------------
         *  展示新闻
         *-----------------------------------------------
         * @param
         * @return
         */
        public function Show(Request $request)
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
            $count = Blogroll::count();  //获取数据总条数

            //配置数据分页信息
            $config["count"]     = $count ;           //总共有多少条数据
            $config["page_size"] = $this->page_size;  //每页显示多少条
            $config["now_page"]  = $page; //当前页
            $config["num"]       = 1;     //数字也显示
            $config["url"]       = "../admin/blogrollShow?";   //跳转链接地址
            $page = new Page($config);
            $page = $page ->create_page();

            //计算偏移量
            $offest = ($page-1) * $this->page_size; 
            //拼接查询条件
            $data = Blogroll::skip($offest)
                        ->take($this->page_size)
                        ->get();
                        
            if($request->ajax())
            {   
                $arr["data"] = $data; 
                $arr["page"] = $page; 
                echo json_encode($arr);
            }else
            { 
                return view('admin.webconfig.blogrollshow',compact("page","data"));
            } 
        }//展示新闻列表结束

        /**
         *-----------------------------------------------
         *  几点即改修改
         *-----------------------------------------------
         * @param
         * @return
         */
        public function update(Request $request)
        {
            $data = $request->input();
            $id = $data['id'];
            unset($data['id']);

            //修改表数据
            $res = Blogroll::where('id',$id)->update($data);
            if($res){
                $msg['status'] = 1; 
            }else{
                $msg['status'] = 0;
            }
            echo json_encode($msg);
        }



        /**
         *-----------------------------------------------
         * 删除
         *-----------------------------------------------
         * @param
         * @return
         */
        public function delete(Request $request)
        {
            $id = $request->input('id');
            if(Blogroll::destroy($id)){
                echo 1;
            }else{
                echo 0 ; 
            }
        }


     }//类结束符

